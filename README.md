# Aahaas ECommerce - Backend Laravel API

A modern laravel-based e-commerce backend for browsing and managing products with real-time search and shopping cart functionality.

## 🔗 Backend API Setup

This frontend requires the *Aahaas ECommerce Laravel Backend API* to function.

### Backend Installation

1. *Create Laravel Project*
```
bash
composer create-project laravel/laravel product-api-laravel
cd product-api-laravel
```

2. *Install Dependencies*
```
bash
composer install
```

### 🗄 Database Setup

1. *Create Model & Migration*
```
bash
php artisan make:model Product -m
```

2. *Run Migrations*
```
bash
php artisan migrate
```

3. *Create Seeder*
```
bash
php artisan make:seeder ProductSeeder
```

4. *Run Seeder*
```
bash
php artisan db:seed
```

### Start the Laravel Server
```
bash
php artisan serve
```

The API will be available at http://localhost:8000

## ⚙ Configuration

Update the API base URL in src/services/api.ts if your backend runs on a different URL:

typescript
const API_BASE_URL = 'https://eclass.skytechsl.com/backend/product-api-laravel1/public/api';
