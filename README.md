# Salman Ahmed - Personal Portfolio

A fully dynamic personal portfolio website built with **Laravel 12** and **TailwindCSS**, featuring a modern dark glassmorphic design, comprehensive admin panel, messaging system, and dynamic CV/PDF generation.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat-square&logo=laravel)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?style=flat-square&logo=tailwind-css)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)
![AlpineJS](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=flat-square&logo=alpine.js)

## ✨ Features

### 🎨 Modern Dark Glassmorphic Design
- **Glassmorphic UI** - Translucent cards with backdrop blur effects
- **Animated Backgrounds** - Subtle floating gradient elements
- **Gradient Text** - Eye-catching headings with vibrant color gradients
- **Premium Typography** - Space Grotesk & Inter fonts from Google Fonts
- **Smooth Animations** - Hover effects, lift animations, and micro-interactions
- **Fully Responsive** - Optimized for desktop, tablet, and mobile devices

### 📊 Comprehensive Admin Panel
- **Modern Sidebar Navigation** - Fixed sidebar with all content management sections
- **Dashboard Overview** - Quick statistics about portfolio content
- **Full CRUD Operations** - Create, Read, Update, Delete for all sections
- **Image Upload Management** - File handling for projects, logos, and profile photos
- **Message Management** - View, reply, and mark messages as read
- **Dark Theme Consistency** - Matches the portfolio's aesthetic
- **Mobile Responsive** - Collapsible sidebar for smaller screens

### 📝 Dynamic Portfolio Sections

| Section | Description |
|---------|-------------|
| **Personal Info** | Name, title, bio, photo, email, phone, and social profiles |
| **Skills** | Technical skills organized by categories with custom icons |
| **Programming Languages** | Coding languages with proficiency levels |
| **Projects** | Portfolio projects with images, descriptions, technologies, and links |
| **Education** | Academic qualifications with institution, degree, CGPA, and dates |
| **Experience** | Work experience, leadership roles, and volunteering activities |
| **Achievements** | Awards, competitions, recognitions categorized by type |
| **Research** | Publications, papers, and ongoing research with links |
| **Certifications** | Training programs, courses, and certificates |
| **Languages** | Spoken languages with proficiency levels |
| **Partnerships** | Organization logos with optional links (displayed on homepage) |
| **Social Links** | Custom social media links with icons |

### 💌 Contact & Messaging System
- **Contact Form** - Visitors can send messages directly from the portfolio
- **Admin Message Center** - View all received messages with read/unread status
- **Email Reply System** - Reply to messages directly from admin panel via SMTP
- **Unread Badge Counter** - Visual notification for new messages
- **Message Status Toggle** - Mark messages as read/unread

### 📄 Dynamic CV/Resume System
- **Real-time PDF Generation** - CV always reflects latest data from database
- **ATS-Friendly Format** - Clean, professional layout optimized for applicant tracking systems
- **One-Click Download** - Generate and download PDF instantly
- **Customizable Template** - Edit CV layout via Blade template

### 🔗 Partnership & Collaboration Showcase
- **Logo Grid Display** - Showcase partner organizations with logos
- **Hover Effects** - Interactive grayscale-to-color transitions
- **Optional Links** - Clickable logos linking to partner websites
- **Status Management** - Show/hide partnerships from admin panel

## 🛠 Tech Stack

### Backend
- **Laravel 12** - Latest PHP framework
- **PHP 8.2+** - Modern PHP version
- **MySQL** - Relational database
- **Laravel Breeze** - Authentication scaffolding

### Frontend
- **Blade Templates** - Laravel's templating engine
- **TailwindCSS 3.x** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **Google Fonts** - Space Grotesk & Inter typography

### Tools & Libraries
- **Vite** - Frontend build tool
- **barryvdh/laravel-dompdf** - PDF generation
- **Axios** - HTTP client for AJAX requests

## 🚀 Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL database server

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/salman_portfolio.git
cd salman_portfolio
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Configure Database

Update `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=salman_portfolio
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Configure Mail (Optional - for contact form replies)

Update `.env` with SMTP settings:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 6. Database Setup

```bash
# Run migrations to create database tables
php artisan migrate

# (Optional) Seed database with sample data
php artisan db:seed

# Create storage symbolic link for image uploads
php artisan storage:link
```

### 7. Build Frontend Assets

```bash
# For development (with hot reload)
npm run dev

# For production
npm run build
```

### 8. Run the Application

```bash
# Start the Laravel development server
php artisan serve
```

Visit: **http://localhost:8000**

Admin Panel: **http://localhost:8000/admin/dashboard**

## 📖 Usage Guide

### Public Routes

| Route | Page | Description |
|-------|------|-------------|
| `/` | Home | Hero section, skills preview, achievements, partnerships, contact info |
| `/skills` | Skills | All technical skills organized by categories |
| `/projects` | Projects | Project portfolio with details and links |
| `/education` | Education | Academic history and qualifications |
| `/experience` | Experience | Work experience and leadership roles |
| `/achievements` | Achievements | Awards, competitions, and recognitions |
| `/research` | Research | Publications and research papers |
| `/certifications` | Certifications | Training programs and certificates |
| `/languages` | Languages | Spoken languages with proficiency |
| `/resume` | Resume | Complete resume with PDF download option |
| `/competitive` | Competitive | Programming competitions (team & individual) |
| `/judges` | Online Judges | Coding platform profiles |

### Admin Routes (Authentication Required)

| Route | Section | Description |
|-------|---------|-------------|
| `/admin/dashboard` | Dashboard | Overview and statistics |
| `/admin/personal-info/edit` | Personal Info | Edit profile, bio, contact details |
| `/admin/skills` | Skills | Manage technical skills |
| `/admin/programming-languages` | Languages | Manage programming languages |
| `/admin/projects` | Projects | Manage portfolio projects |
| `/admin/education` | Education | Manage academic records |
| `/admin/experiences` | Experience | Manage work experience |
| `/admin/achievements` | Achievements | Manage awards and recognitions |
| `/admin/research` | Research | Manage publications |
| `/admin/certifications` | Certifications | Manage certificates |
| `/admin/languages` | Spoken Languages | Manage spoken languages |
| `/admin/partnerships` | Partnerships | Manage organization logos |
| `/admin/social-links` | Social Links | Manage social media links |
| `/admin/messages` | Messages | View and reply to contact messages |
| `/admin/team-competitions` | Team Competitions | Manage team programming contests |
| `/admin/individual-competitions` | Individual Competitions | Manage solo programming contests |
| `/admin/online-judges` | Online Judges | Manage coding platform profiles |

## 📁 Project Structure

```
salman_portfolio/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/                    # Admin panel controllers
│   │       │   ├── DashboardController.php
│   │       │   ├── PersonalInfoController.php
│   │       │   ├── SkillController.php
│   │       │   ├── ProjectController.php
│   │       │   ├── MessageController.php
│   │       │   ├── PartnershipController.php
│   │       │   └── ... (14 more controllers)
│   │       ├── CVController.php          # PDF generation
│   │       ├── HomeController.php        # Homepage
│   │       ├── PortfolioController.php   # Portfolio pages
│   │       └── ContactController.php     # Contact form
│   └── Models/                           # Eloquent models
│       ├── PersonalInfo.php
│       ├── Skill.php
│       ├── Project.php
│       ├── Message.php
│       ├── Partnership.php
│       ├── SocialLink.php
│       └── ... (11 more models)
├── database/
│   ├── migrations/                       # 25 database migrations
│   └── seeders/                          # Database seeders
├── public/
│   ├── images/                           # Static images
│   └── storage/                          # Symlink to storage/app/public
├── resources/
│   ├── css/
│   │   └── app.css                       # Custom CSS with dark theme
│   └── views/
│       ├── admin/                        # Admin panel views (47 files)
│       ├── auth/                         # Authentication pages
│       ├── cv/                           # PDF template
│       │   └── template.blade.php
│       ├── layouts/
│       │   ├── app.blade.php             # Main layout
│       │   ├── guest.blade.php           # Guest layout
│       │   └── admin.blade.php           # Admin layout
│       ├── components/                   # Reusable components
│       ├── home.blade.php                # Homepage
│       ├── skills.blade.php
│       ├── projects.blade.php
│       ├── resume.blade.php
│       └── ... (10+ more pages)
├── routes/
│   ├── web.php                           # All application routes
│   └── auth.php                          # Authentication routes
├── storage/
│   └── app/
│       └── public/                       # User uploads (images, files)
├── .env.example                          # Environment template
├── composer.json                         # PHP dependencies
├── package.json                          # Node.js dependencies
├── tailwind.config.js                    # Tailwind configuration
├── vite.config.js                        # Vite configuration
└── README.md
```

## 🎨 Design System

### Color Palette
```css
/* Primary Colors */
--primary: Indigo/Purple gradients
--secondary: Pink/Cyan accents
--background: Deep navy (#0f172a)
--surface: Slate (#1e293b)

/* Glass Effect */
--glass-bg: rgba(255, 255, 255, 0.05)
--glass-border: rgba(255, 255, 255, 0.1)
```

### Reusable CSS Classes
```css
.glass-card           /* Glassmorphic card with backdrop blur */
.gradient-text        /* Primary gradient text effect */
.gradient-text-cool   /* Cool gradient (indigo to cyan) */
.btn-gradient         /* Gradient button style */
.hover-lift           /* Lift animation on hover */
.section-title        /* Consistent section heading style */
.skill-badge          /* Skill tag styling */
.text-glow            /* Text glow effect */
```

### Typography
- **Headings**: Space Grotesk (Bold, Extrabold)
- **Body Text**: Inter (Regular, Medium, Semibold)

## 🔧 Development Commands

```bash
# Development
php artisan serve                      # Start Laravel server (http://localhost:8000)
npm run dev                            # Watch and compile assets with Vite
composer run dev                       # Run all services concurrently

# Database
php artisan migrate                    # Run pending migrations
php artisan migrate:fresh --seed       # Fresh database with sample data
php artisan db:seed                    # Seed database

# Cache Management
php artisan cache:clear                # Clear application cache
php artisan config:clear               # Clear configuration cache
php artisan route:clear                # Clear route cache
php artisan view:clear                 # Clear compiled views

# Storage
php artisan storage:link               # Create storage symbolic link

# Testing
php artisan test                       # Run PHPUnit tests
composer run test                      # Run tests via composer
```

## 🚢 Production Deployment

### 1. Environment Setup

Update `.env` file for production:

```env
APP_NAME="Salman Ahmed"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=your-production-host
DB_DATABASE=your-production-db
DB_USERNAME=your-production-user
DB_PASSWORD=your-production-password

# Mail (for contact form)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

### 2. Install Dependencies

```bash
# Install PHP dependencies (production only)
composer install --no-dev --optimize-autoloader

# Install and build frontend assets
npm install
npm run build
```

### 3. Database Migration

```bash
# Run migrations
php artisan migrate --force

# (Optional) Seed initial data
php artisan db:seed --force
```

### 4. Optimization

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Create storage link
php artisan storage:link
```

### 5. File Permissions

```bash
# Storage and bootstrap cache directories must be writable
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 6. Web Server Configuration

#### For cPanel/Shared Hosting:
- Upload files to `public_html` or subdirectory
- Point document root to `public` folder
- Use `.htaccess` for URL rewriting

#### For Nginx:
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/salman_portfolio/public;

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### 7. Utility Routes (Remove After Use)

The project includes helper routes for deployment:

- `/create-storage-link` - Creates storage symlink (remove after use)
- `/clear-cache` - Clears all caches (remove after use)

**Important:** Remove or protect these routes in production for security.

## 🐛 Troubleshooting

### Common Issues

| Problem | Solution |
|---------|----------|
| **Images not displaying** | Run `php artisan storage:link` |
| **Routes returning 404** | Run `php artisan route:clear` and `php artisan route:cache` |
| **Styles not loading** | Run `npm run build` and clear browser cache |
| **PDF generation fails** | Ensure `barryvdh/laravel-dompdf` is installed: `composer require barryvdh/laravel-dompdf` |
| **Migrations failing** | Check database credentials in `.env` |
| **CSS not updating** | Clear compiled views: `php artisan view:clear` |
| **500 Error on production** | Check file permissions on `storage/` and `bootstrap/cache/` |
| **Contact form not working** | Configure SMTP settings in `.env` |

### Debug Mode

If you encounter errors, temporarily enable debug mode:

```env
APP_DEBUG=true
```

**Remember to disable it in production!**

## 📧 Contact Form Configuration

To enable email replies from the admin panel:

1. Get Gmail App Password (if using Gmail):
   - Go to Google Account Settings
   - Security → 2-Step Verification → App passwords
   - Generate password for "Mail"

2. Update `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-16-digit-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
```

## 🔒 Security Recommendations

- Change default admin credentials immediately after installation
- Keep `.env` file secure and never commit to version control
- Use strong passwords for database and admin accounts
- Enable 2FA for email accounts used for SMTP
- Remove debug/utility routes in production
- Keep Laravel and dependencies updated
- Use HTTPS in production

## 🤝 Contributing

This is a personal portfolio project. Feel free to fork and customize for your own use.

## 📄 License

This project is open-source and available under the MIT License.

---

**Built with ❤️ by Salman Ahmed using Laravel 12, TailwindCSS & Alpine.js**
