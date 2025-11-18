# Aahaas ECommerce - Product Frontend React Application

A modern React-based e-commerce frontend for browsing and managing products with real-time search and shopping cart functionality.

## 🚀 Quick Setup

### Prerequisites
- Node.js (v14 or higher)
- npm or yarn

### Installation

1. *Navigate to the project directory*
bash
cd product-frontend-react


2. *Install dependencies*
bash
npm install


3. *Start the development server*
bash
npm run dev


The application will open at http://localhost:5173

## 📝 Available Scripts

bash
# Start development server
npm run dev

# Build for production
npm run build

# Preview production build
npm run preview


## 🎯 Usage Guide

### Search Products
- Type in the search bar to filter products by name or description in real-time
- Results update instantly as you type

### Add to Cart
- Click the circular cart button on product cards or the "Add to Cart" button below each product
- Cart counter updates in the header
- View your cart to proceed to checkout

## 🔗 Backend API Setup

This frontend requires the *Aahaas ECommerce Laravel Backend API* to function.

### Backend Installation

1. *Create Laravel Project*
bash
composer create-project laravel/laravel product-api-laravel
cd product-api-laravel


2. *Install Dependencies*
bash
composer install


### 🗄 Database Setup

1. *Create Model & Migration*
bash
php artisan make:model Product -m


2. *Run Migrations*
bash
php artisan migrate


3. *Create Seeder*
bash
php artisan make:seeder ProductSeeder


4. *Run Seeder*
bash
php artisan db:seed


### Start the Laravel Server

bash
php artisan serve


The API will be available at http://localhost:8000

## ⚙ Configuration

Update the API base URL in src/services/api.ts if your backend runs on a different URL:

typescript
const API_BASE_URL = 'https://eclass.skytechsl.com/backend/product-api-laravel1/public/api';
