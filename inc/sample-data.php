<?php
/**
 * Sample Fitness E-Commerce Products for Kinetix Athletics
 * Populates authentic gym apparel, equipment, and supplements upon activation.
 *
 * @package Kinetix_Fitness
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function kinetix_populate_sample_fitness_products() {
    $existing = get_posts( array(
        'post_type'      => 'fitness_product',
        'posts_per_page' => 1,
        'post_status'    => 'any',
    ) );

    if ( ! empty( $existing ) ) {
        return;
    }

    $fitness_catalog = array(
        array(
            'title'       => 'VELOCITY Seamless Compression Tee',
            'slug'        => 'velocity-seamless-compression-tee',
            'subtitle'    => 'Grade-2 Athletic Compression with HydroShield Moisture Management',
            'price'       => '68.00',
            'sale_price'  => '52.00',
            'cat'         => array( "Men's Training", "Compression" ),
            'collection'  => array( "Velocity Series", "Pro Elite" ),
            'badge'       => array( "BESTSELLER" ),
            'icon_type'   => 'shirt',
            'rating'      => '4.9',
            'reviews'     => '184',
            'sizes'       => 'S, M, L, XL, XXL',
            'colors'      => 'Onyx Black:#111113, Volt Lime:#ccff00, Slate Grey:#4b5563',
            'shopify_id'  => 'gid://shopify/Product/velocity-tee',
            'variant_id'  => 'velocity-tee-black-m',
            'content'     => "Engineered for high-intensity training, lifting sessions, and sprinting drills. The VELOCITY Seamless Compression Tee features targeted gradient compression that promotes oxygenation to core muscle groups while eliminating chafing. Woven from our proprietary HydroShield fabric that wicks perspiration 3x faster than standard athletic polyester.",
            'specs'       => "Material: 82% Recycled Polyamide, 18% Elastane\nWeight: 180 GSM Featherlight\nTechnology: HydroShield Micro-Knit\nSeams: Zero-friction flatlock stitching\nCompression Grade: 15-20 mmHg (Athletic)",
            'benefits'    => "Targeted thoracic & deltoid compression support\n360-degree mechanical four-way stretch\nAnti-odor silver ion antimicrobial treatment\nSub-second moisture transport and evaporative cooling\n3M reflective logos for night running visibility",
        ),
        array(
            'title'       => 'AURA High-Rise Ribbed Leggings',
            'slug'        => 'aura-high-rise-ribbed-leggings',
            'subtitle'    => 'Squat-proof seamless knit with compressive ribbed waistband support',
            'price'       => '78.00',
            'sale_price'  => '',
            'cat'         => array( "Women's Activewear", "Compression" ),
            'collection'  => array( "Core Basics", "Pro Elite" ),
            'badge'       => array( "ATHLETE PICK" ),
            'icon_type'   => 'short',
            'rating'      => '5.0',
            'reviews'     => '248',
            'sizes'       => 'XS, S, M, L, XL',
            'colors'      => 'Slate Blue:#2b3a4a, Onyx Black:#111113, Forest Olive:#3a4437',
            'shopify_id'  => 'gid://shopify/Product/aura-leggings',
            'variant_id'  => 'aura-leggings-black-s',
            'content'     => "The benchmark in luxury athletic wear. The AURA High-Rise Ribbed Leggings are crafted with a custom micro-ribbed compression waistband that stays anchored throughout deep squats, deadlifts, and HIIT sessions. 100% opaque, squat-tested under harsh gym spotlights.",
            'specs'       => "Material: 75% Micro-Nylon, 25% Spandex\nOpacity: 100% Squat-Proof Certified\nWaistband: 4.5-inch ribbed anatomical high-rise\nInseam: 26-inch 7/8 ankle cut\nCare: Cold wash, hang dry",
            'benefits'    => "Zero roll-down contoured high waistband\nReinforced gusset for unrestricted hip mobility\nHidden rear key/card pocket\nButtery-soft brushed tactile feel\nFade-resistant Italian dyes",
        ),
        array(
            'title'       => 'APEX Thermal Heavyweight Training Hoodie',
            'slug'        => 'apex-heavyweight-training-hoodie',
            'subtitle'    => '480 GSM French Terry with double-lined thermal hood and hidden zip pockets',
            'price'       => '94.00',
            'sale_price'  => '79.00',
            'cat'         => array( "Men's Training" ),
            'collection'  => array( "Thermal Winter Lab", "Pro Elite" ),
            'badge'       => array( "NEW DROP" ),
            'icon_type'   => 'hoodie',
            'rating'      => '4.8',
            'reviews'     => '96',
            'sizes'       => 'S, M, L, XL, XXL',
            'colors'      => 'Carbon Black:#141416, Heather Ash:#52525b, Desert Sand:#d7c4b7',
            'shopify_id'  => 'gid://shopify/Product/apex-hoodie',
            'variant_id'  => 'apex-hoodie-black-l',
            'content'     => "Constructed for cold morning workouts, outdoor conditioning, and post-session recovery. The APEX Heavyweight Hoodie utilizes 480 GSM organic cotton French Terry with dropped shoulder ergonomics for optimal mobility during pump covers.",
            'specs'       => "Fabric: 480 GSM 100% Organic Ring-spun Cotton\nLining: Thermal fleece-lined interior\nHood: Structured three-panel crossover hood\nPockets: Dual hidden YKK zipper welt pockets\nHardware: Matte metal aglets and drawstrings",
            'benefits'    => "Heavyweight drape that retains silhouette after wash\nErgonomic dropped shoulder for wide deltoid clearance\nConcealed zip phone security sleeve\nDouble-ribbed cuffs and hem that prevent draft penetration",
        ),
        array(
            'title'       => 'VANGUARD 2-in-1 Performance Shorts',
            'slug'        => 'vanguard-2in1-performance-shorts',
            'subtitle'    => 'Ultralight perforated outer shell with phone-pocket compression liner',
            'price'       => '58.00',
            'sale_price'  => '',
            'cat'         => array( "Men's Training", "Compression" ),
            'collection'  => array( "Velocity Series" ),
            'badge'       => array( "BESTSELLER" ),
            'icon_type'   => 'short',
            'rating'      => '4.9',
            'reviews'     => '142',
            'sizes'       => 'S, M, L, XL',
            'colors'      => 'Onyx Black:#111113, Camo Olive:#3f4238, Arctic Silver:#94a3b8',
            'shopify_id'  => 'gid://shopify/Product/vanguard-shorts',
            'variant_id'  => 'vanguard-shorts-black-m',
            'content'     => "The ultimate gym short designed from athlete feedback. Featuring a 5-inch outseam with a laser-perforated shell and a supportive 6-inch compression liner equipped with a bounce-free phone sleeve.",
            'specs'       => "Outseam: 5-inch athletic cut\nLiner: 6-inch compression inner brief\nMaterial: 88% Recycled Poly, 12% Spandex\nPockets: 2 side hand pockets + 1 liner phone slot + 1 rear towel loop",
            'benefits'    => "Zero inner-thigh chafing on long runs and heavy leg days\nBuilt-in rear shirt/towel loop for gym workouts\nLaser-cut micro-ventilation ports along outer thighs\nInternal drawstring with siliconized grip waistband",
        ),
        array(
            'title'       => 'TITAN Competition 10mm Lever Belt',
            'slug'        => 'titan-competition-10mm-lever-belt',
            'subtitle'    => 'IPF-spec genuine top-grain cowhide with zinc-alloy quick release lever',
            'price'       => '129.00',
            'sale_price'  => '',
            'cat'         => array( "Gym Gear & Equipment" ),
            'collection'  => array( "Pro Elite" ),
            'badge'       => array( "PRO SERIES" ),
            'icon_type'   => 'gear',
            'rating'      => '5.0',
            'reviews'     => '312',
            'sizes'       => 'S (28-32), M (32-36), L (36-40), XL (40-44)',
            'colors'      => 'Matte Stealth Black:#111113, Crimson Red:#991b1b',
            'shopify_id'  => 'gid://shopify/Product/titan-belt',
            'variant_id'  => 'titan-belt-black-m',
            'content'     => "Built to withstand maximum squat and deadlift loads. The TITAN 10mm Lever Belt is crafted from vegetable-tanned full-grain leather with uniform density and double heavy-duty stitching throughout.",
            'specs'       => "Thickness: Exact 10mm tournament thickness\nWidth: 4-inch uniform IPF standard width\nLeather: 100% Genuine vegetable-tanned steer hide\nBuckle: Industrial magnesium-zinc alloy lever mechanism",
            'benefits'    => "Instant one-flick locking and unlocking between heavy sets\nSuperior intra-abdominal pressure stabilization\nNo break-in period required: supple, suede-lined inner face\nBacked by our Lifetime Mechanical Buckle Warranty",
        ),
        array(
            'title'       => 'HYDRATE-X Stainless Steel Athlete Shaker',
            'slug'        => 'hydrate-x-steel-athlete-shaker',
            'subtitle'    => 'Double-wall vacuum insulated bottle (28oz) that stays cold for 24+ hours',
            'price'       => '34.00',
            'sale_price'  => '',
            'cat'         => array( "Gym Gear & Equipment", "Recovery & Supplements" ),
            'collection'  => array( "Core Basics" ),
            'badge'       => array( "STAFF PICK" ),
            'icon_type'   => 'recovery',
            'rating'      => '4.8',
            'reviews'     => '188',
            'sizes'       => '850ml (28 oz)',
            'colors'      => 'Matte Obsidian:#18181b, Brushed Steel:#cbd5e1',
            'shopify_id'  => 'gid://shopify/Product/hydrate-x-shaker',
            'variant_id'  => 'hydrate-x-obsidian',
            'content'     => "Say goodbye to foul-smelling plastic shakers. The HYDRATE-X is forged from surgical kitchen-grade 18/8 stainless steel that resists bacteria, protein odors, and dings.",
            'specs'       => "Capacity: 850ml (28 oz) with laser-etched internal volume markers\nInsulation: TempLock Double-Wall Vacuum Barrier\nSteel: 18/8 Pro-Grade Stainless Steel\nCap: 100% Leak-Proof Tritan Twist Lock",
            'benefits'    => "Never absorbs protein odors or residue\nKeeps pre-workout and BCAAs iced for up to 30 hours\nSilent convex silicone mixing grate (no loud metal shaker balls)\nErgonomic silicone loop carry handle",
        ),
        array(
            'title'       => 'PULSE Pure Whey Isolate Protein (2.2 lbs)',
            'slug'        => 'pulse-pure-whey-isolate',
            'subtitle'    => '100% micro-filtered whey with 27g protein, 0g sugar, and digestive enzymes',
            'price'       => '54.00',
            'sale_price'  => '',
            'cat'         => array( "Recovery & Supplements" ),
            'collection'  => array( "Pro Elite" ),
            'badge'       => array( "BESTSELLER" ),
            'icon_type'   => 'recovery',
            'rating'      => '4.9',
            'reviews'     => '420',
            'sizes'       => '30 Servings (2.2 lbs)',
            'colors'      => 'Double Chocolate:#3e2723, Gourmet Vanilla:#efebe9, Cold Brew:#271810',
            'shopify_id'  => 'gid://shopify/Product/pulse-whey',
            'variant_id'  => 'pulse-whey-chocolate',
            'content'     => "Cold cross-flow micro-filtered whey protein isolate with zero fillers, gums, or artificial colorings. Yields 27 grams of rapidly absorbing protein with 6.2g BCAAs per scoop to accelerate muscle protein synthesis.",
            'specs'       => "Serving Size: 32g (30 Servings)\nProtein Per Scoop: 27g Pure Isolate\nSugar: 0g\nCarbs: < 1g\nEnzymes: DigeZyme Multi-Enzyme Complex included",
            'benefits'    => "Rapid gastric transit for immediate post-workout amino delivery\nZero bloating, gas, or lactose intolerance symptoms\nInstant clean dissolution with water or milk without clumps\nThird-party tested for banned substances (Informed-Sport)",
        ),
        array(
            'title'       => 'KINETIC Percussion Massage Gun Pro',
            'slug'        => 'kinetic-percussion-massage-gun-pro',
            'subtitle'    => 'High-torque brushless motor delivering 16mm deep tissue amplitude',
            'price'       => '169.00',
            'sale_price'  => '139.00',
            'cat'         => array( "Recovery & Supplements", "Gym Gear & Equipment" ),
            'collection'  => array( "Pro Elite" ),
            'badge'       => array( "PRO SERIES" ),
            'icon_type'   => 'gear',
            'rating'      => '4.9',
            'reviews'     => '155',
            'sizes'       => 'Standard Kit',
            'colors'      => 'Midnight Stealth:#111113, Space Titanium:#475569',
            'shopify_id'  => 'gid://shopify/Product/kinetic-gun',
            'variant_id'  => 'kinetic-gun-black',
            'content'     => "Used by professional athletes and physical therapists to relieve delayed onset muscle soreness (DOMS), break down fascial adhesions, and enhance local blood circulation prior to competition.",
            'specs'       => "Amplitude: 16mm Deep Tissue Penetration\nMotor: 65W High-Torque Brushless Motor with QuietGlide Tech\nBattery: 2600mAh LG Lithium-ion (6+ Hours Runtime)\nAttachments: 6 Swappable Medical-Grade Heads (including heated head)\nSpeed Levels: 5 Speed Ranges (1400 - 3200 RPM)",
            'benefits'    => "Reaches deep into glutes, quads, and lats where standard massage guns stall\nSub-45dB ultra-quiet operation\nDigital OLED battery and force sensor display\nHard-shell ballistic nylon travel case included",
        ),
    );

    foreach ( $fitness_catalog as $item ) {
        $post_id = wp_insert_post( array(
            'post_title'   => $item['title'],
            'post_name'    => $item['slug'],
            'post_content' => $item['content'],
            'post_excerpt' => $item['subtitle'],
            'post_status'  => 'publish',
            'post_type'    => 'fitness_product',
        ) );

        if ( ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_kinetix_price', $item['price'] );
            if ( ! empty( $item['sale_price'] ) ) {
                update_post_meta( $post_id, '_kinetix_sale_price', $item['sale_price'] );
            }
            update_post_meta( $post_id, '_kinetix_subtitle', $item['subtitle'] );
            update_post_meta( $post_id, '_kinetix_icon_type', $item['icon_type'] );
            update_post_meta( $post_id, '_kinetix_rating', $item['rating'] );
            update_post_meta( $post_id, '_kinetix_review_count', $item['reviews'] );
            update_post_meta( $post_id, '_kinetix_sizes', $item['sizes'] );
            update_post_meta( $post_id, '_kinetix_colors', $item['colors'] );
            update_post_meta( $post_id, '_kinetix_shopify_product_id', $item['shopify_id'] );
            update_post_meta( $post_id, '_kinetix_shopify_variant_id', $item['variant_id'] );
            update_post_meta( $post_id, '_kinetix_fabric_specs', $item['specs'] );
            update_post_meta( $post_id, '_kinetix_benefits', $item['benefits'] );

            // Assign terms
            if ( ! empty( $item['cat'] ) ) {
                wp_set_object_terms( $post_id, $item['cat'], 'product_cat' );
            }
            if ( ! empty( $item['collection'] ) ) {
                wp_set_object_terms( $post_id, $item['collection'], 'product_collection' );
            }
            if ( ! empty( $item['badge'] ) ) {
                wp_set_object_terms( $post_id, $item['badge'], 'product_badge' );
            }
        }
    }
}
add_action( 'after_switch_theme', 'kinetix_populate_sample_fitness_products' );
add_action( 'init', function() {
    if ( ! is_admin() && is_user_logged_in() ) {
        kinetix_populate_sample_fitness_products();
    }
} );

/**
 * Automatically provision default bespoke pages on theme activation
 */
function kinetix_populate_default_pages() {
    $pages = array(
        array(
            'title'    => 'Shop Catalog & Gear Roster',
            'slug'     => 'shop',
            'template' => 'page-shop.php',
            'content'  => '<!-- Dedicated Shop Catalog Template -->',
        ),
        array(
            'title'    => 'Fabric & Gear Technology',
            'slug'     => 'technology',
            'template' => 'page-technology.php',
            'content'  => '<!-- Dedicated Materials Science & Testing Standards Template -->',
        ),
        array(
            'title'    => 'Athlete Lookbook & Drops',
            'slug'     => 'lookbook',
            'template' => 'page-lookbook.php',
            'content'  => '<!-- Dedicated Athlete Campaigns & Seasonal Drops Template -->',
        ),
        array(
            'title'    => 'Size Guide & Fit Matrix',
            'slug'     => 'sizing',
            'template' => 'page-sizing.php',
            'content'  => '<!-- Dedicated Size Matrix & Measurement Guide Template -->',
        ),
        array(
            'title'    => 'Brand Heritage & Philosophy',
            'slug'     => 'about',
            'template' => 'page-about.php',
            'content'  => '<!-- Dedicated Brand Heritage & Mission Template -->',
        ),
        array(
            'title'    => 'Athlete Support & Exchanges',
            'slug'     => 'contact',
            'template' => 'page-contact.php',
            'content'  => '<!-- Dedicated Support, Shopify Order Tracking & Exchanges Template -->',
        ),
    );

    foreach ( $pages as $p ) {
        $existing = get_page_by_path( $p['slug'] );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $p['title'],
                'post_name'    => $p['slug'],
                'post_content' => $p['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ) );

            if ( ! is_wp_error( $page_id ) && $page_id ) {
                update_post_meta( $page_id, '_wp_page_template', $p['template'] );
            }
        } else {
            $current_tpl = get_post_meta( $existing->ID, '_wp_page_template', true );
            if ( empty( $current_tpl ) || 'default' === $current_tpl ) {
                update_post_meta( $existing->ID, '_wp_page_template', $p['template'] );
            }
        }
    }
}
add_action( 'after_switch_theme', 'kinetix_populate_default_pages' );
add_action( 'init', function() {
    if ( ! is_admin() && is_user_logged_in() ) {
        kinetix_populate_default_pages();
    }
} );
