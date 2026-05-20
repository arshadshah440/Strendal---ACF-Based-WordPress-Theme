# Strendal — ACF-Based WordPress Theme

A luxury real-estate WordPress theme built for property showcasing and narrative storytelling. Designed around the **4007 Strendal Drive** property in Cary, NC, the theme is architected to be reusable for other luxury properties via ACF-powered content overrides.

---

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Project Structure](#project-structure)
- [Page Templates](#page-templates)
- [ACF Field Groups](#acf-field-groups)
- [Theme Options](#theme-options)
- [Design System](#design-system)
- [JavaScript](#javascript)
- [Asset Loading Strategy](#asset-loading-strategy)
- [Navigation & Menus](#navigation--menus)
- [Development Notes](#development-notes)

---

## Requirements

- WordPress 6.0+
- [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/) (ACF Pro) — required for the Options Page and Repeater fields
- PHP 7.4+
- No build tools required — CSS and JS are hand-written, no npm or Composer dependencies

---

## Installation

1. Copy the `/strendal/` directory into `wp-content/themes/`
2. Activate **Strendal** in **Appearance → Themes**
3. Ensure ACF Pro is installed and activated
4. Go to **Theme Options** (added to the WordPress admin sidebar by ACF) and configure global settings
5. Create pages and assign the appropriate page templates (see [Page Templates](#page-templates))
6. Assign a menu to the **Primary Navigation** location under **Appearance → Menus**

---

## Project Structure

```
strendal/
├── assets/
│   ├── css/
│   │   ├── homepage.css          # Homepage-specific styles
│   │   ├── light-orientation.css # Light & Orientation page styles
│   │   └── bedrooms.css          # Bedrooms page styles
│   └── images/
│       ├── slide-0.jpg … slide-3.jpg  # Hero carousel images
│       ├── grid-0.jpg … grid-2.jpg    # Photo grid images
│       ├── bedrooms/                   # Bedroom section photos
│       └── lo/                         # Light & Orientation section images
├── inc/
│   ├── theme-options.php         # ACF Options Page + Theme Options field group
│   └── scf-fields.php            # All page-template ACF field groups
├── page-templates/
│   ├── homepage.php              # Homepage template
│   ├── light-orientation.php     # Light & Orientation standalone page
│   └── bedrooms.php              # Bedrooms showcase page
├── functions.php                 # Theme setup, asset enqueuing, nav scroll handler
├── header.php                    # Fixed navigation bar
├── footer.php                    # Footer with contact info
├── index.php                     # Default blog/archive template
├── page.php                      # Default single page template
└── style.css                     # Main stylesheet + theme header
```

---

## Page Templates

### Homepage (`page-templates/homepage.php`)

Assign to a page via **Page Attributes → Template: Homepage**.

| Section | Description |
|---|---|
| Hero Carousel | Auto-rotating slideshow (5 s intervals) with eyebrow, title (`<em>` for italics), subtitle, badge pills, and dual CTAs |
| Facts Strip | Horizontal bar of key statistics (number + label pairs) |
| Intro / Story | Eyebrow, headline, and body paragraph |
| Photo Grid | One large image left, two stacked images right — each with an optional caption |
| Highlights Bar | Icon + title + body feature cards |
| CTA Section | Full-width call-to-action block with two buttons |

### Light & Orientation (`page-templates/light-orientation.php`)

Fully self-contained page (no site header/footer rendered). Assign via **Page Attributes → Template: Light & Orientation**.

| Section | Description |
|---|---|
| Hero | Full-screen image with gradient overlay |
| Intro / Orientation | Two-column layout with inline SVG compass diagram and orientation facts |
| Facts Strip | Pill-styled statistics bar |
| Airflow | Tab-based image switcher with benefits cards |
| Quiet & Privacy | Checklist, paragraphs, and animated noise-level bars (IntersectionObserver) |
| Sunset Close | Full-screen image with blockquote overlay |
| CTA Strip | Single call-to-action with a button |

### Bedrooms (`page-templates/bedrooms.php`)

Detailed room-by-room showcase. Assign via **Page Attributes → Template: Bedrooms**.

| Section | Description |
|---|---|
| Hero | Gradient-based hero with eyebrow, title, and subtitle |
| Floor Overview Strip | Ground-floor and upper-floor room lists |
| Bedroom 2 | Two-column (text + photo), plus a two-photo side-by-side row |
| Jack & Jill Bathroom | Two-column (photo + text, reversed) with a highlighted callout box |
| Dark Divider | Dark-background quote, attribution, and feature cards |
| Bedroom 3 | Two-column layout with photo |
| Laundry Room | Two-column layout with photo |
| Home Summary | Full room-by-room card grid (ground + upper floor) |
| CTA Strip | Final call-to-action |

Elements with the `.br-reveal` class animate in on scroll via IntersectionObserver.

---

## ACF Field Groups

All field groups are registered in PHP (`inc/scf-fields.php`) — no JSON export files.

Every section in each field group includes a **`use_default` toggle**. When enabled, the section falls back to the built-in Strendal property content, making it easy to deploy the theme on a new property without filling in every field immediately.

### Homepage Content

Located on pages using the **Homepage** template.

| Tab | Key Fields |
|---|---|
| Hero | `hero_slides` (repeater: image + caption), `hero_eyebrow`, `hero_title`, `hero_subtitle`, `hero_badges` (repeater), primary and secondary CTA text + URL |
| Facts Strip | `facts` (repeater: `fact_number`, `fact_label`) |
| Intro | `intro_eyebrow`, `intro_title`, `intro_content` |
| Photo Grid | `grid_left_image`, `grid_right_top_image`, `grid_right_bottom_image` + captions |
| Highlights | `highlights` (repeater: `highlight_icon`, `highlight_title`, `highlight_body`) |
| CTA | `cta_title`, `cta_content`, two button text + URL pairs |

### Light & Orientation Content

Located on pages using the **Light & Orientation** template.

| Section | Key Fields |
|---|---|
| Hero | image, eyebrow, title, subtitle |
| Intro | label, title, paragraphs, orientation facts (repeater: icon, label, value) |
| Facts | repeater of number + label pairs |
| Airflow | label, title, lead text, tabs (repeater: image + caption), benefits (repeater: icon, title, body) |
| Quiet | label, title, paragraphs, checklist items, noise rows (repeater: label, note, percentage, type) |
| Sunset | image, quote, attribution |
| CTA | title, body, button text + URL |

### Bedrooms Content

Located on pages using the **Bedrooms** template.

Sections: Hero, Floor Overview, Bedroom 2 (photos + chips), Jack & Jill Bathroom, Dark Divider, Bedroom 3, Laundry Room, Home Summary, CTA Strip.

---

## Theme Options

Registered as an ACF Options Page (**Theme Options** in the WordPress admin sidebar). Fields apply globally across all templates.

| Field | Key | Description |
|---|---|---|
| Logo | `site_logo` | Image displayed in the navigation bar |
| Site Name | `site_name_text` | Text fallback when no logo is set |
| Nav CTA Text | `nav_cta_text` | Navigation button label (default: "Schedule a Tour") |
| Nav CTA URL | `nav_cta_url` | Navigation button link |
| Footer Address | `footer_address` | Left-aligned address text in footer |
| Footer Email | `footer_email` | Clickable email link in footer |
| Footer Phone | `footer_phone` | Clickable phone number in footer |
| Copyright | `footer_copyright` | Copyright line in footer |

---

## Design System

### Color Tokens (`style.css`)

```css
--cream:        #f7faf5
--white:        #ffffff
--ink:          #1e3d14
--ink-soft:     #3a4a36
--ink-light:    #6a7e64
--border:       #ccdfc0
--border-soft:  #e2eedd
--green:        #6a9e52
--green-dark:   #4a7a38
--green-light:  #e4f0da
--gold:         #c8952a
--gold-light:   #e8b84a
```

### Typography

| Role | Font | Weights |
|---|---|---|
| Headings / Display | Cormorant Garamond (serif) | 300, 400, 500, 600 + italics |
| Body / UI | Jost (sans-serif) | 300, 400, 500, 600 |

Font sizes use `clamp()` for fluid, viewport-responsive scaling.

### Layout

- CSS Grid and Flexbox for all layouts
- Single responsive breakpoint at **768px**
- Keyframe animations: `fadeUp`, `scrollPulse`
- Scroll-triggered reveals via IntersectionObserver

---

## JavaScript

No external JS libraries (no jQuery, no Bootstrap). All JavaScript is inline within templates or hooked via `wp_footer`.

| Location | Behaviour |
|---|---|
| `functions.php` → `wp_footer` | Adds `.scrolled` to `#site-nav` after 40 px scroll, triggering CSS transitions |
| `homepage.php` (inline) | Auto-rotating hero carousel with dot indicators and 5 s interval |
| `light-orientation.php` (inline) | Tab switching for airflow images; IntersectionObserver animates noise-level bars on scroll |
| `bedrooms.php` (inline) | IntersectionObserver adds `.visible` to `.br-reveal` elements as they enter the viewport |

---

## Asset Loading Strategy

Page-template CSS files are enqueued conditionally — only loaded on the relevant template — keeping page weight minimal.

```php
// Example from functions.php
if ( is_page_template( 'page-templates/homepage.php' ) ) {
    wp_enqueue_style( 'strendal-homepage', ... );
}
```

Images use `loading="lazy"` except for above-the-fold hero images.

---

## Navigation & Menus

One menu location is registered:

| Location slug | Label |
|---|---|
| `primary` | Primary Navigation |

Assign a menu under **Appearance → Menus → Menu Locations**. Rendered at depth 1 (no sub-menus). The nav bar is fixed-position and gains a blurred background + darkened text after 40 px of scroll.

---

## Development Notes

- **No build tools** — edit CSS and PHP files directly; changes are live immediately
- **No widget areas** — sidebars are replaced by ACF field groups
- **No custom post types** — all content lives on standard WordPress Pages
- **No WooCommerce** — this is a presentation/marketing theme only
- **No REST API customisations**
- **Escaping** — all output uses `esc_html()`, `esc_url()`, `wp_kses_post()`, and `esc_attr()` as appropriate
- **i18n** — all strings are wrapped in `__()` or `esc_html__()` with the `strendal` text domain
- **Screenshot** — not included; WordPress recommends a 1200 × 900 px `screenshot.png` in the theme root
