import os
import re
from PIL import Image

workspace_dir = r"c:\laragon\www\gasfiter-certificado"
images_dir = os.path.join(workspace_dir, "assets", "images")
css_dir = os.path.join(workspace_dir, "assets", "css")

def optimize_image_from_source(webp_name, source_name=None, max_width=None, max_height=None, quality=65):
    target_path = os.path.join(images_dir, webp_name)
    
    # Check source file first for cleanest downscaling
    source_path = None
    if source_name:
        candidate = os.path.join(images_dir, source_name)
        if os.path.exists(candidate):
            source_path = candidate
            
    if not source_path:
        stem = os.path.splitext(webp_name)[0]
        for ext in ['.png', '.jpg', '.jpeg']:
            cand = os.path.join(images_dir, stem + ext)
            if os.path.exists(cand):
                source_path = cand
                break
                
    if not source_path:
        source_path = target_path

    if not os.path.exists(source_path):
        print(f"Skipping {webp_name} (source not found)")
        return

    orig_size = os.path.getsize(target_path) if os.path.exists(target_path) else os.path.getsize(source_path)
    
    with Image.open(source_path) as img:
        img = img.convert('RGB')
        w, h = img.size
        
        # Resize if max dimensions provided
        if max_width or max_height:
            target_w = max_width or w
            target_h = max_height or h
            img.thumbnail((target_w, target_h), Image.Resampling.LANCZOS)
        
        # Save optimized webp
        img.save(target_path, "WEBP", quality=quality, method=6)
    
    new_size = os.path.getsize(target_path)
    print(f"Optimized {webp_name}: {orig_size/1024:.1f} KiB -> {new_size/1024:.1f} KiB ({img.size[0]}x{img.size[1]})")

print("Starting Advanced WebP Image Optimization...")

# 1. Logo (Exact 2x retina for 48x48 display)
optimize_image_from_source("logo.webp", source_name="logo.jpg", max_width=96, max_height=96, quality=75)
optimize_image_from_source("logotipo-2.webp", source_name="logo.jpg", max_width=96, max_height=96, quality=75)
optimize_image_from_source("logotipo-gasfiter-certificado.webp", source_name="logo.jpg", max_width=96, max_height=96, quality=75)

# 2. Service Cards (Target ~7-10 KiB each at crystal clear quality 65)
optimize_image_from_source("fuga-gas.webp", source_name="fuga-gas.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("fuga_gas_detection_1786655758341.webp", source_name="fuga-gas.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("prodoral.webp", source_name="prodoral.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("prodoral_technology_1786655847004.webp", source_name="prodoral.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("calefont.webp", source_name="calefont.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("calefont_service_1786655948959.webp", source_name="calefont.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("hero-sec.webp", source_name="hero-sec.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("hero-destapes.webp", source_name="hero-destapes.png", max_width=480, max_height=270, quality=65)
optimize_image_from_source("hero-gasfiter.webp", source_name="hero-gasfiter.png", max_width=480, max_height=270, quality=65)

# 3. Dedicated Landing Hero Backgrounds
optimize_image_from_source("hero-home-main.webp", source_name="hero-home-main.png", max_width=960, max_height=640, quality=68)
optimize_image_from_source("cta-banner-bg.webp", source_name="cta-banner-bg.png", max_width=960, max_height=500, quality=68)
optimize_image_from_source("hero-fuga-gas.webp", source_name="hero-fuga-gas.png", max_width=960, max_height=600, quality=68)
optimize_image_from_source("hero-calefont.webp", source_name="hero-calefont.png", max_width=960, max_height=600, quality=68)
optimize_image_from_source("hero-prodoral.webp", source_name="hero-prodoral.png", max_width=960, max_height=600, quality=68)

# 4. Social & Profile Elements
optimize_image_from_source("domingo-isain-caamano-gasfiter-sec.webp", source_name="domingo-isain-caamano-gasfiter-sec.jpg", max_width=240, max_height=240, quality=72)
optimize_image_from_source("qr-sec.webp", source_name="qr-sec.png", max_width=240, max_height=240, quality=75)
optimize_image_from_source("media__1786655332292.webp", source_name="media__1786655332292.png", max_width=480, max_height=360, quality=68)

print("Images Optimized!")

# 5. CSS Minification
def minify_css(input_file, output_file):
    with open(input_file, 'r', encoding='utf-8') as f:
        css = f.read()
    
    # Remove comments
    css = re.sub(r'/\*[\s\S]*?\*/', '', css)
    # Remove whitespace around delimiters
    css = re.sub(r'\s*([\{\}\:\;\,])\s*', r'\1', css)
    # Remove redundant semicolons
    css = re.sub(r';\}', '}', css)
    # Collapse multiple spaces
    css = re.sub(r'\s+', ' ', css)
    
    with open(output_file, 'w', encoding='utf-8') as f:
        f.write(css.strip())
        
    orig_kb = os.path.getsize(input_file) / 1024
    min_kb = os.path.getsize(output_file) / 1024
    print(f"Minified CSS: {orig_kb:.1f} KB -> {min_kb:.1f} KB ({((orig_kb-min_kb)/orig_kb)*100:.1f}% reduction)")

main_css = os.path.join(css_dir, "main.css")
main_min_css = os.path.join(css_dir, "main.min.css")
minify_css(main_css, main_min_css)
