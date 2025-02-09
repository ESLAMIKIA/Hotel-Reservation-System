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


📷 Screenshots
User Dashboard

Admin Panel
```
📷 Screenshots
-------------------------------------------------------------------------
Login Page
-----------------------------------------------------------------------------------------
![Capture](https://github.com/user-attachments/assets/eda22e6c-1cad-4d70-afe6-1ee390d04f5a)
Hotel List
-----------------------------------------------------------------------------------------
![Capture2](https://github.com/user-attachments/assets/056c8527-a3ad-455c-8dc6-ef060768c682)
Reservation Form
-----------------------------------------------------------------------------------------
![Capture3](https://github.com/user-attachments/assets/4ad7a9d0-9b0d-43de-9e80-29c3a3e358a8)
User Dashboard
-----------------------------------------------------------------------------------------------------
![Capture4](https://github.com/user-attachments/assets/f7b9c7c7-e06d-40f6-8705-b218a2a272cd)
Admin Panel
-------------------------------------------------------------------------------------------------------
User List
![Capture5](https://github.com/user-attachments/assets/9328c8fd-6bac-4782-a33c-b42f790c2816)
Reservation List
![Capture6](https://github.com/user-attachments/assets/f1ddd236-a1a7-4ec0-8542-3017c5c22844)
Add Hotel
![Capture7](https://github.com/user-attachments/assets/053e0d9f-82ba-4dd3-8297-6597d81d4664)
Edit Hotel
-------------------------------------------------------------------------------------------------------
![Capture8](https://github.com/user-attachments/assets/30e4e7a9-f913-4a9c-9d1c-c1795dd3f31a)

🤝 Contributing
--------------------------------------------------------------------------
Contributions are welcome! Please fork the repository and submit a pull request.
