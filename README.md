# Themespace Interiors - Website Replica

A complete replica of the Themespace Interiors website built with HTML, CSS, JavaScript, and PHP.

## Features

- Responsive design that works on all devices
- Modern UI with smooth animations
- Multiple pages: Home, About, Services (Interior, CCTV, Electrical), Contact
- Quote request form
- Contact form with validation
- Database integration for form submissions
- Mobile-friendly navigation with hamburger menu

## File Structure

```
themespace-replica/
├── index.php                 # Homepage
├── about.php                 # About Us page
├── contact.php               # Contact page
├── interior.php              # Interior Design service page
├── secure.php                # Security Systems service page
├── electrical.php            # Electrical & Networking service page
├── thank_you.php             # Thank you page after form submission
├── submit_quote.php          # PHP handler for quote requests
├── submit_contact.php        # PHP handler for contact form
├── database.sql              # Database setup script
├── css/
│   └── style.css            # Main stylesheet
├── js/
│   └── script.js            # JavaScript for interactivity
└── img/                     # Image directory
    ├── main-logo.png        # Logo (placeholder needed)
    ├── pic1.png             # Feature icons (placeholders needed)
    ├── pic2.png
    ├── pic3.png
    ├── pic5.png
    ├── days.jpg
    └── about-image.jpg
```

## Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx) or use PHP built-in server
- Web browser

### Step 1: Database Setup

1. Create a MySQL database:
```sql
CREATE DATABASE themespace_db;
```

2. Import the database schema:
```bash
mysql -u root -p themespace_db < database.sql
```

Or run the SQL file through phpMyAdmin.

3. Update database credentials in:
   - `submit_quote.php` (lines 4-7)
   - `submit_contact.php` (lines 4-7)

```php
$host = 'localhost';
$dbname = 'themespace_db';
$username = 'your_username';
$password = 'your_password';
```

### Step 2: Add Images

Place the following images in the `img/` directory:
- `main-logo.png` - Company logo (recommended size: 200x60px)
- `pic1.png` - 300+ Home Delivered icon
- `pic2.png` - Flat 10 Years warranty icon
- `pic3.png` - 50+ Inbuilt Designers icon
- `pic5.png` - No Hidden Costs icon
- `days.jpg` - 45 days icon
- `about-image.jpg` - About page image

### Step 3: Start the Server

#### Option 1: PHP Built-in Server (for development)
```bash
cd themespace-replica
php -S localhost:8000
```

Then open http://localhost:8000 in your browser.

#### Option 2: Apache/Nginx
- Copy the project folder to your web server's document root
- For Apache: `/var/www/html/` or `C:/xampp/htdocs/`
- For Nginx: `/usr/share/nginx/html/`
- Access via http://localhost/themespace-replica/

### Step 4: Configure Email (Optional)

To receive email notifications for form submissions, configure PHP's mail settings:

**For XAMPP/Local Development:**
You may need to configure SMTP settings in `php.ini` or use a mail library like PHPMailer.

**For Production:**
Use proper SMTP configuration or a service like SendGrid, Mailgun, etc.

## Features Breakdown

### Homepage (index.php)
- Hero section with call-to-action
- Quote request form
- "Why Choose Us" feature showcase

### About Page (about.php)
- Company information
- Values and mission
- Team showcase

### Services Pages
- Interior Design (interior.php)
- Security Systems & CCTV (secure.php)
- Electrical & Networking (electrical.php)

### Contact Page (contact.php)
- Contact form
- Company information
- Location details

### Forms
- **Quote Request Form**: Name, Email, Phone, Package selection
- **Contact Form**: Name, Email, Phone, Subject, Message
- Both forms include validation and database storage

## Technologies Used

- **HTML5**: Semantic markup
- **CSS3**: Modern styling with Flexbox and Grid
- **JavaScript**: Interactive elements and form validation
- **PHP**: Server-side form processing
- **MySQL**: Database storage
- **Font Awesome**: Icons
- **Google Fonts**: Typography (loaded via CSS)

## Customization

### Colors
Main colors used in the design (in `css/style.css`):
- Primary: `#667eea`
- Accent: `#ff6b35`
- Dark: `#2c3e50`
- Background: `#f8f9fa`

### Navigation
To add/remove menu items, edit the navigation in each PHP file's header section.

### Forms
Form fields can be modified in the HTML and corresponding PHP handler files.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Security Notes

For production use:
1. Use prepared statements (already implemented)
2. Implement CSRF protection
3. Add rate limiting for form submissions
4. Use HTTPS
5. Sanitize all user inputs
6. Keep PHP and MySQL updated
7. Store database credentials in environment variables
8. Add proper error logging

## Troubleshooting

### Forms not submitting
- Check database connection credentials
- Ensure database tables exist
- Check PHP error logs

### Images not loading
- Verify image files exist in `img/` directory
- Check file permissions
- Verify image paths in HTML

### Styling issues
- Clear browser cache
- Check CSS file path
- Verify Font Awesome CDN is accessible

## License

This is a replica project for educational/portfolio purposes.

## Credits

Original Design: Themespace Interiors (https://www.themespaceinteriors.com/)
Replica Created: 2024

## Contact

For questions or support, please contact the development team.
