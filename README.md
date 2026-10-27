# Kinetix Athletics &mdash; High-Performance Fitness E-Commerce Theme

> High-performance WordPress theme for athletic apparel and strength equipment brands, featuring native dual-platform Shopify Buy Button and Storefront API checkout integration. Conforms strictly to ISO 9241 dialogue and ergonomic interface standards.

[![WordPress Version](https://img.shields.io/badge/WordPress-6.4%2B-blue.svg?style=flat-square&logo=wordpress)](https://wordpress.org)
[![PHP Version](https://img.shields.io/badge/PHP-8.0%20--%208.3%2B-777BB4.svg?style=flat-square&logo=php)](https://php.net)
[![Shopify Compatibility](https://img.shields.io/badge/Shopify-Storefront%20API%20%2F%20OS%202.0-96bf48.svg?style=flat-square&logo=shopify)](https://shopify.dev)
[![ISO 9241 Compliant](https://img.shields.io/badge/Design-ISO%209241%20Ergonomics-0ea5e9.svg?style=flat-square)](https://www.iso.org)
[![License: GPL-2.0](https://img.shields.io/badge/License-GPLv2-yellow.svg?style=flat-square)](https://www.gnu.org/licenses/gpl-2.0.html)

---

## Overview

**Kinetix Athletics** is a bespoke, agency-tier WordPress theme designed for high-end fitness, activewear, and powerlifting gear brands. Unlike generic multipurpose e-commerce templates cluttered with robotic marketing clichés, glowing AI badge capsules, and rigid single-page layouts, Kinetix is built around an authentic editorial aesthetic inspired by industry benchmarks such as **ASRV**, **Ten Thousand**, **Castore**, and **Gymshark Onyx**.

It delivers a dual-engine architecture: WordPress drives lightning-fast editorial storytelling, SEO architecture, custom catalog taxonomies, and lookbook staging, while Shopify powers secure, 1-click tokenized checkout via Shop Pay and Apple Pay.

---

## Architectural Highlights

### 1. Dual-Platform Architecture (WordPress + Shopify)
- **WordPress Native:** Full custom post type suite (`fitness_product`), custom taxonomies (`product_cat`, `training_discipline`), metadata panels (GSM weight, compression level, materials, Shopify Product ID/Handle), and dynamic archive queries.
- **Shopify Sync Ready:** Slide-out slide drawer powered by Shopify Storefront API JS and Buy Button tokenization. Supports direct Shop Pay 1-click instant checkout and PCI Level-1 transaction security.

### 2. De-Slopped, Authentic Athletic Editorial
- **No AI Capsule Slop:** Replaced generic pulsating neon pills and AI badge templates with clean, razor-sharp monospace typographic kickers and editorial eyebrows.
- **Authentic Copywriting:** Zero robotic buzzwords. Technical copy grounded in genuine athletic benchmarks (GSM weights, circular-knit fabrications, 10mm steerhide lever belts, graduated compression mmHg).
- **Strict Zero-Emoji Policy:** 100% SVG vector iconography throughout for a tactile, luxury finish.

### 3. ISO 9241 Ergonomic & Visual Design System
- **Midnight Obsidian & Titanium Palette:** Deep navy atmospheric canvas (`#060c18`, `#0a1424`, `#0e1c31`) paired with Chiseled Titanium Platinum text (`#f8fafc`) and Ice Cyan precision accents (`#38bdf8`), exceeding WCAG AAA 16:1+ contrast ratios.
- **Double-Bezel Hardware Layout (Doppelrand):** Dual-layer frosted glass hardware cards with CAD crosshair markers, specular light sweep, and spring scale hover physics.
- **Ergonomic Touch Architecture:** Minimum 44&times;44px tactile tap targets, accessible contrast states, skip-to-content links, and full keyboard navigation.

### 4. Interactive Slide-Out Cart Drawer
- Floating shopping bag trigger with real-time badge count.
- Dynamic free shipping progress meter (e.g. *"Spend $22.00 more to unlock free express dispatch"*).
- Instant size selector chips, quantity controllers, and direct tokenized Shop Pay checkout bridge.

---

## Multi-Page Flagship Templates

| Template | File | Purpose |
|---|---|---|
| **Front Page** | [`front-page.php`](front-page.php) | 60/40 Asymmetrical Editorial Hero, 1-tap category pills, Featured Drop interactive card, Category Bento Grid, CAD Blueprint visual, Lookbook preview, and Multi-page directory. |
| **Shop Catalog** | [`page-shop.php`](page-shop.php) | Full Gear Roster with live category filters (`All`, `Men's`, `Women's`, `Belts & Gear`, `Recovery`), live count badge, and 4:5 aspect ratio photo product cards. |
| **Materials Science** | [`page-technology.php`](page-technology.php) | Textile innovation deep-dive, CAD vector breakdown (HydroShield, DuraKnit, AeroVent), specs pill chips, and laboratory friction testing matrix. |
| **Athlete Lookbook** | [`page-lookbook.php`](page-lookbook.php) | Editorial seasonal campaign drops, athlete photography stages, interactive radar pulse pins, and 1-click kit bundle triggers. |
| **Size & Fit Guide** | [`page-sizing.php`](page-sizing.php) | Fit archetype comparison (Compression vs Athletic Movement), Men's and Women's responsive tables with highlighted standard benchmarks, and 10mm Lever Belt navel circumference calibration protocol. |
| **Heritage & Mission** | [`page-about.php`](page-about.php) | Brand origin story (Salt Lake City & Northern Italy knitting), quote callout, laboratory testing benchmarks, athlete testing floor showcase, and 4 Core Engineering Tenets. |
| **Athlete Support** | [`page-contact.php`](page-contact.php) | Live Shopify order lookup tracking form, 30-day fit exchange protocol, global logistics hubs status (Salt Lake City, Frankfurt, Tokyo), and direct inquiry desk. |
| **Single Product (PDP)** | [`single-fitness_product.php`](single-fitness_product.php) | Product detail page with swatch selectors, accordion specifications, and direct add-to-bag triggers. |

---

## File Structure

```text
kinetix-fitness/
├── assets/
│   ├── css/
│   │   ├── cart-drawer.css          # Slide-out shopping bag & shipping meter
│   │   └── theme.css                # Core design tokens, layout & responsive engine
│   ├── js/
│   │   ├── cart-drawer.js           # Cart state, local persistence & Shop Pay bridge
│   │   └── theme.js                 # Scroll reveal, interactive lookbook & UI triggers
│   └── images/
│       ├── hero-athlete.jpg         # Full-bleed athlete hero backdrop
│       ├── product-velocity-tee.jpg # VELOCITY Compression Tee photography
│       ├── product-aura-leggings.jpg# AURA Ribbed Leggings photography
│       ├── product-titan-belt.jpg   # 10mm Steerhide Lever Belt photography
│       ├── product-apex-hoodie.jpg  # 480 GSM French Terry Hoodie
│       ├── product-vanguard-shorts.jpg # 2-in-1 shorts with phone liner
│       ├── product-hydrate-shaker.jpg # Double-wall vacuum shaker bottle
│       ├── product-pulse-whey.jpg   # Pure isolate supplement container
│       ├── product-kinetic-gun.jpg  # Percussion therapy massage gun
│       └── cat-*.jpg                # Category bento tiles
├── inc/
│   ├── custom-post-types.php        # fitness_product CPT & taxonomies
│   ├── customizer.php               # Live WordPress Customizer settings
│   └── sample-data.php              # Automated athletic catalog population
├── 404.php                          # Custom 404 error page
├── archive-fitness_product.php      # Catalog archive template
├── footer.php                       # Athlete trust proposition bar & footer
├── front-page.php                   # Editorial masthead homepage
├── functions.php                    # Theme setup, assets enqueue & CPT loader
├── header.php                       # Announcement ticker & island navbar
├── index.php                        # Fallback blog loop template
├── page.php                         # Default page container
├── page-about.php                   # Brand heritage & mission
├── page-contact.php                 # Customer support & order tracking
├── page-lookbook.php                # Athlete lookbook & campaigns
├── page-shop.php                    # Shop catalog & gear roster
├── page-sizing.php                  # Anthropometric fit guide & belt protocol
├── page-technology.php              # Fabric science & materials lab
├── screenshot.png                   # 1200x900 theme preview
├── single.php                       # Default post template
├── single-fitness_product.php       # Product detail page (PDP)
└── style.css                        # Theme metadata header
```

---

## Installation

### Method A: WordPress Admin Upload (Recommended)
1. Download [`kinetix-fitness.zip`](kinetix-fitness.zip).
2. Log in to your WordPress Admin dashboard (`/wp-admin`).
3. Navigate to **Appearance &rarr; Themes &rarr; Add New Theme**.
4. Click **Upload Theme**, select `kinetix-fitness.zip`, and click **Install Now**.
5. Click **Activate**.

### Method B: Git Clone
1. Open terminal and navigate to your WordPress themes directory:
   ```bash
   cd wp-content/themes/
   ```
2. Clone this repository:
   ```bash
   git clone https://github.com/<your-username>/kinetix-athletics-theme.git kinetix-fitness
   ```
3. Activate the theme in **WordPress Admin &rarr; Appearance &rarr; Themes**.

---

## Shopify Buy Button & Storefront Setup

To link your Shopify catalog with Kinetix:

1. In your **Shopify Admin**, install the **Buy Button** sales channel (or use a private **Custom App** under *Settings &rarr; Apps and sales channels &rarr; Develop apps*).
2. Generate your **Storefront API Access Token** with read access to products and checkouts.
3. In your **WordPress Admin**, go to **Appearance &rarr; Customize &rarr; Kinetix Athletics &rarr; Shopify Integration**:
   - **Shopify Store Domain:** Enter your `your-store.myshopify.com` domain.
   - **Storefront Access Token:** Paste your public Storefront API access token.
   - **Free Shipping Threshold ($):** Set your qualification target (default: `$75.00`).
4. In **Fitness Products &rarr; Edit Product**, enter the matching **Shopify Product ID** or **Shopify Product Handle** to enable instant 1-click Shop Pay checkout directly from product cards.

---

## WordPress Customizer Settings

Navigate to **Appearance &rarr; Customize &rarr; Kinetix Athletics Options**:

- **Dispatch Announcement Bar:**
  - Toggle announcement ticker visibility.
  - Custom announcement copy and dispatch codes.
- **Hero Editorial Section:**
  - Category routing pills link configuration.
  - Featured Drop product assignment and pricing.
- **Athlete Trust Bar:**
  - Configure value propositions (Express Global Dispatch, 30-Day Fit Guarantee, Shopify Encrypted Checkout).
- **Navigation & Socials:**
  - Instagram, YouTube, X (Twitter), and Strava community links.

---

## Contributing & Code Standards

- Follow [WordPress Coding Standards (WPCS)](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/) for PHP.
- Ensure all styling strictly adheres to the CSS Custom Properties design system defined in `assets/css/theme.css`.
- Maintain ISO 9241 ergonomic compliance (touch targets &ge; 44px, contrast ratio &ge; 7:1).
- Strictly adhere to the zero-emoji and zero-AI-slop guidelines.

---

## License

This project is licensed under the **GNU General Public License v2.0 or later** &mdash; see the [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html) file for details.
