# 🔐 PHP Login & User Management System

A beginner-friendly PHP + MySQL project with login, registration, and basic CRUD (Create, Read, Update, Delete) features.

## 🚀 Features
- User Registration (with password hashing)
- User Login (with session)
- View all users
- Edit user info
- Delete users
- Logout

## 🛠 Requirements
- XAMPP (Apache + MySQL)
- PHP (tested with PHP 7+)
- MySQL

## 📂 Files
- `config.php` – database connection
- `register.php` – user sign-up
- `login.php` – user login
- `dashboard.php` – protected page after login
- `users.php` – list all users
- `edit.php` – edit a user
- `delete.php` – delete a user
- `logout.php` – log out the user

## 🧪 Setup
1. Place the project in `htdocs/`
2. Create a DB `login_system` in [phpMyAdmin](http://localhost/phpmyadmin)
3. Run this SQL:
   ```sql
   CREATE TABLE users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(50) NOT NULL UNIQUE,
     password VARCHAR(255) NOT NULL
   );
4. Start XAMPP & visit: http://localhost/your-folder-name/register.php

## 📌 Notes
- Passwords are securely hashed
- SQL injection is prevented with prepared statements
- Built for learning raw PHP before using frameworks

## 📬 Contact
Made by Abdul-khaliq Solaiman
📧 Email: khaliq.business16@gmail.com

