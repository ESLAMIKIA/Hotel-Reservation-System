This project is an Online Hotel Reservation System that allows users to view hotel listings, book rooms, and manage their reservations. It also includes an admin dashboard where administrators can manage hotels, users, and bookings.

✅ Users can:

    Register and log in
    Browse available hotels
    Book rooms for specific dates
    View and cancel their reservations

✅ Admins can:

    Manage hotels (add, edit, delete)
    Manage users and their access
    View and approve/cancel bookings

This system is built using Laravel (backend) and React (frontend) with SQL Server (SSMS) for database management. 🚀

# 🏨 Online Hotel Reservation System

This project is a **full-featured hotel reservation system** built using **Laravel** for the backend and **React** for the frontend. It allows users to browse hotels, make reservations, and manage bookings. Admins can manage users, hotels, and reservations.

## 🚀 Features

### **User Features**
- 🔹 User authentication (Login, Registration) using Laravel Sanctum
- 🔹 Browse available hotels with images
- 🔹 Book a hotel for a specific date range
- 🔹 View and manage personal reservations
- 🔹 Logout functionality

### **Admin Features**
- 🔹 Dashboard to manage users, hotels, and bookings
- 🔹 View, add, update, and delete hotels
- 🔹 Manage user accounts
- 🔹 Approve or cancel bookings

## 🛠️ Technologies Used

- **Backend**: Laravel, PHP, MySQL (SSMS)
- **Frontend**: React.js, Bootstrap
- **API Security**: Laravel Sanctum
- **Database Management**: SQL Server (SSMS) with XAMPP

## 🏗️ Installation Guide

### **1️⃣ Backend (Laravel) Setup**

```bash

# Navigate to the backend folder
cd hotel-reservation/backend

# Install dependencies
composer install

# Set up the environment
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database (update .env with DB details)
php artisan migrate --seed

# Serve the backend
php artisan serve
```
### **2️⃣ Frontend (React) Setup**

```bash

# Navigate to the frontend folder
cd hotel-reservation/frontend

# Install dependencies
npm install

# Start the development server
npm start
```

📷 Screenshots
User Dashboard

Admin Panel
