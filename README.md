# Jewelry by Syeda - WordPress Phase 1
**Student:** Umama Zainab
**Local Site:** jewelry-by-syeda.local
**GitHub:** https://github.com/umamazainab33-maker/jewelry-wordpress-phase1

### 1. Local Setup
- Tool: LocalWP by Flywheel
- PHP 8.1, MySQL 8.0, WordPress 6.5+
- Site Path: Local Sites > jewelry-by-syeda > app > public
- wp-config.php DB_NAME: local

### 2. Theme - Astra Child
- Location: wp-content/themes/astra-child/
- Files: style.css, functions.php
- Brand Colors: #fffaf0 (background) + #b76e79 (buttons)
- Active: Appearance > Themes

### 3. Plugins (5)
1. Elementor
2. WPForms Lite
3. Yoast SEO
4. UpdraftPlus
5. Wordfence Security

### 4. Custom Hooks (in functions.php)
**5 Actions:**
- wp_enqueue_scripts
- after_setup_theme
- init (Content Manager Role)
- wp_head (Custom Colors)
- admin_notices

**3 Filters:**
- excerpt_length = 25
- the_content (disclaimer)
- login_headerurl

### 5. Custom Role
- Role: content_manager
- Capabilities: read, edit_posts, publish_posts, upload_files

### 6. Proof
- Screenshots: /screenshots/ (7 files)
- Tech Guide: /technical-setup-guide.pdf
- Local URL: jewelry-by-syeda.local (requires LocalWP Running)

### References
- LocalWP: https://localwp.com/
- Astra Docs: https://wpastra.com/docs/child-theme/
- WP Hooks: https://developer.wordpress.org/reference/hooks/
