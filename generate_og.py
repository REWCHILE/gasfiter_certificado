import os
from PIL import Image, ImageDraw, ImageFont

def draw_pulse_dot(draw, cx, cy, radius=6, color=(34, 197, 94, 255), ring_color=(34, 197, 94, 120)):
    draw.ellipse([cx - radius - 4, cy - radius - 4, cx + radius + 4, cy + radius + 4], fill=ring_color)
    draw.ellipse([cx - radius, cy - radius, cx + radius, cy + radius], fill=color)

def draw_check_badge(draw, x, y, size=20, bg_color=(16, 185, 129, 255), check_color=(255, 255, 255, 255)):
    r = size // 2
    cx, cy = x + r, y + r
    draw.ellipse([x, y, x + size, y + size], fill=bg_color)
    points = [
        (cx - 5, cy),
        (cx - 1, cy + 4),
        (cx + 6, cy - 4)
    ]
    draw.line(points[:2], fill=check_color, width=3)
    draw.line(points[1:], fill=check_color, width=3)

def fit_font_size(text, font_path, max_width, initial_size, min_size=12, bold=True):
    size = initial_size
    while size >= min_size:
        font = ImageFont.truetype(font_path, size)
        # calculate width
        bbox = font.getbbox(text)
        text_w = bbox[2] - bbox[0]
        if text_w <= max_width:
            return font, size
        size -= 1
    return ImageFont.truetype(font_path, min_size), min_size

def generate_banner(
    filename_base,
    photo_path,
    pill1_text,
    pill2_text,
    title_text,
    subtitle_text,
    bullets,
    photo_badge_text="INSTALADOR AUTORIZADO SEC CLASE 1",
    photo_offset_ratio=0.28
):
    width = 1200
    height = 630
    font_dir = "C:/Windows/Fonts"
    bold_font_path = os.path.join(font_dir, "segoeuib.ttf")
    reg_font_path = os.path.join(font_dir, "segoeui.ttf")
    
    # 1. Base navy gradient
    base = Image.new('RGBA', (width, height), (7, 21, 48, 255))
    draw = ImageDraw.Draw(base)
    
    for y in range(height):
        factor = y / height
        r = int(7 + 10 * factor)
        g = int(21 + 22 * factor)
        b = int(48 + 46 * factor)
        draw.line([(0, y), (width, y)], fill=(r, g, b, 255))
        
    # Top & Bottom accent lines
    draw.rectangle([0, 0, width, 5], fill=(220, 38, 38, 255))
    draw.rectangle([0, height - 6, width, height], fill=(245, 158, 11, 255))
    
    # 2. Right panel - Photo
    photo_img = Image.open(photo_path).convert('RGBA')
    box_w, box_h = 490, 540
    box_x, box_y = 665, 45
    
    tw, th = photo_img.size
    target_aspect = box_w / box_h
    current_aspect = tw / th
    
    if current_aspect > target_aspect:
        new_w = int(th * target_aspect)
        offset_x = (tw - new_w) // 2
        crop_box = (offset_x, 0, offset_x + new_w, th)
    else:
        new_h = int(tw / target_aspect)
        offset_y = int((th - new_h) * photo_offset_ratio)
        crop_box = (0, offset_y, tw, offset_y + new_h)
        
    photo_cropped = photo_img.crop(crop_box).resize((box_w, box_h), Image.Resampling.LANCZOS)
    
    # Rounded photo mask
    mask = Image.new('L', (box_w, box_h), 0)
    mask_draw = ImageDraw.Draw(mask)
    mask_draw.rounded_rectangle([0, 0, box_w, box_h], radius=22, fill=255)
    
    # Frame border
    frame = Image.new('RGBA', (box_w + 12, box_h + 12), (0, 0, 0, 0))
    fdraw = ImageDraw.Draw(frame)
    fdraw.rounded_rectangle([0, 0, box_w + 10, box_h + 10], radius=26, outline=(245, 158, 11, 220), width=4)
    base.alpha_composite(frame, (box_x - 5, box_y - 5))
    
    # Paste photo
    base.paste(photo_cropped, (box_x, box_y), mask)
    
    # Photo Badge at bottom of photo
    badge_w, badge_h = 450, 48
    badge_x = box_x + (box_w - badge_w) // 2
    badge_y = box_y + box_h - 60
    
    badge_img = Image.new('RGBA', (badge_w, badge_h), (0, 0, 0, 0))
    bdraw = ImageDraw.Draw(badge_img)
    bdraw.rounded_rectangle([0, 0, badge_w, badge_h], radius=14, fill=(11, 25, 55, 235), outline=(245, 158, 11, 240), width=2)
    base.alpha_composite(badge_img, (badge_x, badge_y))
    
    font_sec_badge, _ = fit_font_size(photo_badge_text, bold_font_path, badge_w - 70, 18, min_size=13)
    draw_pulse_dot(draw, badge_x + 28, badge_y + 24, radius=6, color=(34, 197, 94, 255), ring_color=(34, 197, 94, 120))
    draw.text((badge_x + 48, badge_y + 13), photo_badge_text, font=font_sec_badge, fill=(255, 255, 255, 255))
    
    # 3. Left Content:
    # Logo
    logo_path = 'assets/images/logo.webp'
    logo_img = Image.open(logo_path).convert('RGBA').resize((102, 105), Image.Resampling.LANCZOS)
    
    logo_bg = Image.new('RGBA', (112, 112), (0, 0, 0, 0))
    ldraw = ImageDraw.Draw(logo_bg)
    ldraw.ellipse([0, 0, 111, 111], fill=(255, 255, 255, 255), outline=(245, 158, 11, 255), width=3)
    base.alpha_composite(logo_bg, (45, 40))
    base.alpha_composite(logo_img, (50, 43))
    
    # Available width for left content: from x=45 to x=635 (width = 590)
    max_left_w = 590
    
    # Top Badges next to logo (from x=175 to x=635 -> width=460)
    p_w = 460
    p1_x, p1_y, p1_h = 175, 44, 42
    p1_img = Image.new('RGBA', (p_w, p1_h), (0, 0, 0, 0))
    p1_draw = ImageDraw.Draw(p1_img)
    p1_draw.rounded_rectangle([0, 0, p_w, p1_h], radius=21, fill=(13, 148, 136, 240), outline=(45, 212, 191, 255), width=2)
    base.alpha_composite(p1_img, (p1_x, p1_y))
    
    font_pill1, _ = fit_font_size(pill1_text, bold_font_path, p_w - 55, 17, min_size=12)
    draw_pulse_dot(draw, p1_x + 22, p1_y + 21, radius=5, color=(255, 255, 255, 255), ring_color=(204, 251, 241, 150))
    draw.text((p1_x + 38, p1_y + 11), pill1_text, font=font_pill1, fill=(255, 255, 255, 255))
    
    p2_x, p2_y, p2_h = 175, 96, 38
    p2_img = Image.new('RGBA', (p_w, p2_h), (0, 0, 0, 0))
    p2_draw = ImageDraw.Draw(p2_img)
    p2_draw.rounded_rectangle([0, 0, p_w, p2_h], radius=19, fill=(30, 58, 138, 220), outline=(96, 165, 250, 200), width=1)
    base.alpha_composite(p2_img, (p2_x, p2_y))
    font_pill2, _ = fit_font_size(pill2_text, bold_font_path, p_w - 30, 16, min_size=12)
    draw.text((p2_x + p_w // 2, p2_y + 8), pill2_text, font=font_pill2, fill=(219, 234, 254, 255), anchor="mt")

    # Main Headline
    font_main_title, _ = fit_font_size(title_text, bold_font_path, max_left_w, 39, min_size=28)
    draw.text((45, 158), title_text, font=font_main_title, fill=(255, 255, 255, 255))
    
    # Subtitle
    font_sub_title, _ = fit_font_size(subtitle_text, bold_font_path, max_left_w, 20, min_size=14)
    draw.text((45, 212), subtitle_text, font=font_sub_title, fill=(245, 158, 11, 255))
    
    # Bullet points
    start_y = 264
    for idx, (b_text, icon_color) in enumerate(bullets):
        row_y = start_y + idx * 46
        row_bg = Image.new('RGBA', (max_left_w, 38), (0, 0, 0, 0))
        rdraw = ImageDraw.Draw(row_bg)
        rdraw.rounded_rectangle([0, 0, max_left_w, 38], radius=9, fill=(15, 35, 75, 180), outline=(37, 99, 235, 80), width=1)
        base.alpha_composite(row_bg, (45, row_y))
        
        draw_check_badge(draw, 55, row_y + 9, size=20, bg_color=icon_color, check_color=(255, 255, 255, 255))
        font_b, _ = fit_font_size(b_text, reg_font_path, max_left_w - 45, 20, min_size=13)
        draw.text((86, row_y + 8), b_text, font=font_b, fill=(248, 250, 252, 255))
        
    # Big Red CTA button
    cta_x, cta_y, cta_w, cta_h = 45, 472, max_left_w, 108
    cta_img = Image.new('RGBA', (cta_w, cta_h), (0, 0, 0, 0))
    cdraw = ImageDraw.Draw(cta_img)
    cdraw.rounded_rectangle([0, 0, cta_w, cta_h], radius=18, fill=(217, 56, 30, 255), outline=(254, 202, 202, 220), width=3)
    base.alpha_composite(cta_img, (cta_x, cta_y))
    
    font_cta_num = ImageFont.truetype(bold_font_path, 34)
    font_cta_sub = ImageFont.truetype(bold_font_path, 18)
    draw.text((cta_x + cta_w // 2, cta_y + 15), "LLAMA AHORA: 9 3223 7072", font=font_cta_num, fill=(255, 255, 255, 255), anchor="mt")
    draw.text((cta_x + cta_w // 2, cta_y + 65), "gasfiter-certificado.cl  •  Atención Inmediata 24/7", font=font_cta_sub, fill=(254, 226, 226, 255), anchor="mt")

    # Output
    final_rgb = base.convert('RGB')
    final_rgb.save(f'assets/images/{filename_base}.jpg', 'JPEG', quality=95)
    base.save(f'assets/images/{filename_base}.webp', 'WEBP', quality=95)
    print(f"Generated {filename_base}.jpg and .webp successfully!")

def main():
    # 1. Main / Home / Cobertura / General
    generate_banner(
        filename_base="og-share-gasfiter",
        photo_path="assets/images/hero-home-main.png",
        pill1_text="EMERGENCIAS 24/7  •  LLEGADA 30 A 45 MIN",
        pill2_text="COBERTURA TOTAL EN TODAS LAS COMUNAS RM",
        title_text="GÁSFITER CERTIFICADO SEC",
        subtitle_text="FUGAS DE GAS • SELLO VERDE • CALEFONT • PRODORAL",
        bullets=[
            ("Detección de Fugas de Gas con Ultrasonido & Sonda", (220, 38, 38, 255)),
            ("Sellado Prodoral R6-1 Certificado sin Romper Muros", (14, 165, 233, 255)),
            ("Normalización Sello Verde SEC, Sello Rojo e Inspección TC6", (16, 185, 129, 255)),
            ("Mantención y Reparación de Calefont & Destape Cañerías", (245, 158, 11, 255)),
        ],
        photo_badge_text="INSTALADOR AUTORIZADO SEC CLASE 1",
        photo_offset_ratio=0.28
    )

    # 2. Fuga de Gas
    generate_banner(
        filename_base="og-share-fuga-gas",
        photo_path="assets/images/fuga-gas.png",
        pill1_text="URGENCIA GAS 24/7  •  RESPUESTA INMEDIATA",
        pill2_text="DETECCIÓN EXACTA SIN ROMPER MUROS NI PISOS",
        title_text="DETECCIÓN DE FUGAS DE GAS",
        subtitle_text="EQUIPOS ULTRASÓNICOS • GAS TRAZADOR • SEC CHILE",
        bullets=[
            ("Localización Milimétrica de Fuga de Gas Natural y GLP", (220, 38, 38, 255)),
            ("Sellado Inmediato de Cañerías y Pruebas de Hermeticidad", (14, 165, 233, 255)),
            ("Solución Definitiva para Cortes de Metrogas / Lipigas", (16, 185, 129, 255)),
            ("Informe Técnico Oficial y Certificación de Hermeticidad", (245, 158, 11, 255)),
        ],
        photo_badge_text="DETECCIÓN DIGITAL DE FUGAS SEC",
        photo_offset_ratio=0.1
    )

    # 3. Gásfiter SEC / Sello Verde
    generate_banner(
        filename_base="og-share-sec",
        photo_path="assets/images/hero-sec.png",
        pill1_text="AUTORIZADO SEC  •  SUPERINTENDENCIA ELECTRICIDAD Y COMBUSTIBLES",
        pill2_text="TRAMITACIÓN OFICIAL SELLO VERDE & PROYECTOS TC6",
        title_text="GÁSFITER AUTORIZADO SEC",
        subtitle_text="SELLO VERDE • LEVANTAMIENTO SELLO ROJO • DECLARACIONES",
        bullets=[
            ("Instalador Certificado SEC con Registro Vigente", (16, 185, 129, 255)),
            ("Normalización de Instalaciones para Obtener Sello Verde", (220, 38, 38, 255)),
            ("Levantamiento de Sellos Rojos y Amarillos SEC", (245, 158, 11, 255)),
            ("Declaraciones TC6, Modificaciones de Redes y Planos SEC", (14, 165, 233, 255)),
        ],
        photo_badge_text="ACREDITACIÓN OFICIAL SEC CHILE",
        photo_offset_ratio=0.05
    )

    # 4. Prodoral R6-1
    generate_banner(
        filename_base="og-share-prodoral",
        photo_path="assets/images/prodoral.png",
        pill1_text="TECNOLOGÍA ALEMANA  •  100% SIN PICAR MUROS",
        pill2_text="POLÍMERO SELLANTE AVALADO POR NORMA DIN EN 13090",
        title_text="SELLADO CON PRODORAL R6-1",
        subtitle_text="REPARA FUGAS DE GAS SIN ROMPER MUROS NI PISOS",
        bullets=[
            ("Inyección de Polímero Autoinflable que Sella Microporos", (14, 165, 233, 255)),
            ("Ahorro de hasta 70% comparado con Cambiar Cañerías", (16, 185, 129, 255)),
            ("Trabajo Limpio y Listo en Menos de 24 Horas", (245, 158, 11, 255)),
            ("Garantía Extendida y Aprobado para Sello Verde SEC", (220, 38, 38, 255)),
        ],
        photo_badge_text="SISTEMA PRODORAL R6-1 CERTIFICADO",
        photo_offset_ratio=0.1
    )

    # 5. Calefont
    generate_banner(
        filename_base="og-share-calefont",
        photo_path="assets/images/calefont.png",
        pill1_text="SERVICIO TÉCNICO MULTIMARCA  •  GARANTÍA TOTAL",
        pill2_text="JUNKERS • SPLENDID • RHINNAI • MADEMSA • TROTER",
        title_text="REPARACIÓN DE CALEFONT",
        subtitle_text="MANTENCIÓN • INSTALACIÓN • DETECCIÓN DE FALLAS",
        bullets=[
            ("Reparación y Mantención de Calefont Ionizados y Tiro Forzado", (245, 158, 11, 255)),
            ("Instalación según Norma SEC de Ventilación y Evacuación", (16, 185, 129, 255)),
            ("Cambio de Membranas, Serpentines, Válvulas y Sensores", (14, 165, 233, 255)),
            ("Atención de Urgencia el Mismo Día en Todo Santiago", (220, 38, 38, 255)),
        ],
        photo_badge_text="TÉCNICO ESPECIALISTA EN CALEFONT SEC",
        photo_offset_ratio=0.1
    )

    # 6. Destapes de Alcantarillado
    generate_banner(
        filename_base="og-share-destapes",
        photo_path="assets/images/hero-destapes.png",
        pill1_text="MAQUINARIA ELÉCTRICA RIDGID  •  SERVICIO 24/7",
        pill2_text="ALCANTARILLADOS • BAÑOS • COCINAS • VERTICALES",
        title_text="DESTAPE DE ALCANTARILLADO",
        subtitle_text="SONDAS ELÉCTRICAS • CÁMARAS DE INSPECCIÓN • URGENCIA",
        bullets=[
            ("Destape Rápido de WC, Lavaplatos, Tinas y Shafts", (14, 165, 233, 255)),
            ("Maquinaria Ridgid de Alto Rendimiento sin Romper", (245, 158, 11, 255)),
            ("Limpieza y Desobstrucción de Cámaras de Inspección", (16, 185, 129, 255)),
            ("Servicio Inmediato para Casas, Departamentos y Empresas", (220, 38, 38, 255)),
        ],
        photo_badge_text="EQUIPAMIENTO RIDGID INDUSTRIAL",
        photo_offset_ratio=0.1
    )

if __name__ == "__main__":
    main()
