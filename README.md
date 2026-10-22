# Jewelry by Syeda - Phase 1 WordPress Project

## Project Overview
Local WordPress development environment for Jewelry by Syeda brand using Local by Flywheel.

## Environment Details
- WordPress: 6.6.2
- PHP: 8.1.23
- Web Server: nginx
- Database: MySQL 8.0 (local)
- Domain: jewelry-by-syeda.local

## Theme Setup
- Parent Theme: Astra v4.8.0
- Child Theme: astra-child
- Custom Styles: body #fffaf0, h1 #b76e79 (rose gold jewelry theme)

## Plugins (5 Essential)
1. Elementor - Page Builder
2. WPForms - Contact Forms
3. Yoast SEO - SEO Optimization
4. UpdraftPlus - Backup & Restore
5. Wordfence - Security

## Custom Code - functions.php
- 5 Action Hooks: wp_enqueue_scripts, after_setup_theme, init, wp_head, wp_footer, admin_notices
- 3 Filter Hooks: excerpt_length (30), the_content, login_headerurl
- Custom User Role: content_manager (edit_posts, publish_posts, upload_files)

## Repository Structure
/astra-child/
/screenshots/
/technical-setup-guide.pdf

## Demo Video: 4-6 min covering Local setup, theme, plugins, hooks, role# jewelry-wordpress-phase1
Phase 1 - Jewelry by Syeda WordPress setup with Local by Flywheel, Astra Child theme, 5 essential plugins, custom hooks &amp; content manager role
