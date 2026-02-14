# Setup Guide

## Server Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- SSL Certificate (recommended)
- Email service for form handling

## Installation Steps

### 1. Upload Files
Upload all project files to your web server's public directory.

### 2. Configure Forms
Update email addresses in form handlers:
- `/forms/contact-form.php`
- `/forms/volunteer-form.php`
- `/forms/donation-confirm.php`

### 3. Set Permissions
Ensure proper file permissions:
```bash
chmod 644 *.html
chmod 644 assets/css/*.css
chmod 644 assets/js/*.js
chmod 755 forms/*.php