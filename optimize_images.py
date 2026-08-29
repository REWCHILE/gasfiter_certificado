import os
from PIL import Image

images_dir = r"c:\laragon\www\gasfiter-certificado\assets\images"

def optimize_image_from_source(webp_name, source_name=None, max_width=None, max_height=None, quality=78):
    target_path = os.path.join(images_dir, webp_name)
    
    # Check source file first for cleanest downscaling
    source_path = None
    if source_name:
        candidate = os.path.join(images_dir, source_name)
        if os.path.exists(candidate):
            source_path = candidate
            
    if not source_path:
        # Check if a png or jpg exists with the same stem
        stem = os.path.splitext(webp_name)[0]
        for ext in ['.png', '.jpg', '.jpeg']:
            cand = os.path.join(images_dir, stem + ext)
            if os.path.exists(cand):
                source_path = cand
                break
                
    # Fallback to existing webp
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

print("Starting High-Fidelity WebP Image Optimization...")

# 1. Logo (displayed at max 48x48 -> 120x120 is crisp 2.5x retina)
optimize_image_from_source("logo.webp", source_name="logo.jpg", max_width=120, max_height=120, quality=80)
optimize_image_from_source("logotipo-2.webp", source_name="logo.jpg", max_width=120, max_height=120, quality=80)
optimize_image_from_source("logotipo-gasfiter-certificado.webp", source_name="logo.jpg", max_width=120, max_height=120, quality=80)

# 2. Service Cards (displayed at 380x214 -> 640x360 is perfect 16:9 retina)
optimize_image_from_source("fuga-gas.webp", source_name="fuga-gas.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("fuga_gas_detection_1786655758341.webp", source_name="fuga-gas.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("prodoral.webp", source_name="prodoral.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("prodoral_technology_1786655847004.webp", source_name="prodoral.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("calefont.webp", source_name="calefont.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("calefont_service_1786655948959.webp", source_name="calefont.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("hero-sec.webp", source_name="hero-sec.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("hero-destapes.webp", source_name="hero-destapes.png", max_width=640, max_height=360, quality=75)
optimize_image_from_source("hero-gasfiter.webp", source_name="hero-gasfiter.png", max_width=640, max_height=360, quality=75)

# 3. Dedicated Landing Hero Backgrounds (Max 1200px @ quality 72-75)
optimize_image_from_source("hero-home-main.webp", source_name="hero-home-main.png", max_width=1200, max_height=800, quality=72)
optimize_image_from_source("cta-banner-bg.webp", source_name="cta-banner-bg.png", max_width=1200, max_height=600, quality=72)
optimize_image_from_source("hero-fuga-gas.webp", source_name="hero-fuga-gas.png", max_width=1200, max_height=700, quality=74)
optimize_image_from_source("hero-calefont.webp", source_name="hero-calefont.png", max_width=1200, max_height=700, quality=74)
optimize_image_from_source("hero-prodoral.webp", source_name="hero-prodoral.png", max_width=1200, max_height=700, quality=74)

# 4. Social & Profile Elements
optimize_image_from_source("domingo-isain-caamano-gasfiter-sec.webp", source_name="domingo-isain-caamano-gasfiter-sec.jpg", max_width=300, max_height=300, quality=78)
optimize_image_from_source("qr-sec.webp", source_name="qr-sec.png", max_width=280, max_height=280, quality=80)
optimize_image_from_source("media__1786655332292.webp", source_name="media__1786655332292.png", max_width=600, max_height=450, quality=75)

print("Image Optimization Completed Successfully!")
