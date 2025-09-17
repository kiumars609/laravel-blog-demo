# Laravel Blog Demo — Professional Demo Project

**Purpose:** Lightweight, professional Laravel demo project for GitHub portfolio showcasing backend development skills.

## Features
- Authentication (Login/Register)
- Blog Post CRUD (Create/Read/Update/Delete)
- Server-side validation
- Migration + Seeder for Posts
- Clean folder structure with Blade templates
- Upload-ready (no vendor/ node_modules)

## How to use
1. Clone the repo:
```bash
git clone https://github.com/<your-username>/<repo>.git
cd <repo>
```
2. Install dependencies:
```bash
composer install
```
3. Copy `.env.example` to `.env`, set DB credentials and run:
```bash
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
4. Default seeded user:
- Email: `demo@example.com`
- Password: `password`
