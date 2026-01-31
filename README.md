# Garuda 3D Website

Garuda 3D is a PHP & MySQL–based dynamic website developed to showcase blogs, engineering knowledge, and technology-focused content related to additive manufacturing and 3D printing.  
The project is currently under active development.

---

## 🚀 Project Overview

This website is built using:
- **PHP** for server-side logic
- **MySQL** for database management
- **Apache (XAMPP)** as the local development server
- **HTML & CSS** for UI design

The system follows a **database-driven blog architecture**, where all blog content is dynamically loaded from MySQL.

---

## ✨ Features Implemented

- Modern landing page UI
- Blog listing page
- Individual blog detail page
- Admin blog creation page (with image upload)
- Image storage using assets directory
- Database-driven content (no static blog files)
- Clean and scalable folder structure
- Backup-friendly development workflow

---

## 🗂️ Project Structure

public_html/
├── index.php # Landing page
├── blogs/
│ ├── index.php # Blog list page
│ ├── view.php # Single blog view
│ └── add.php # Admin page to add blogs
├── includes/
│ ├── db.php # Database connection
│ ├── header.php # Common header
│ └── footer.php # Common footer
├── assets/
│ └── images/
│ └── blogs/ # Blog images
├── backup1/ # Development / experiment backup
└── back_main/ # Last stable backup


---

## 🛠️ Technologies Used

- PHP 8.x
- MySQL
- Apache (XAMPP)
- HTML5
- CSS3
- Git & GitHub

---

## ⚙️ How to Run the Project (Development)

### Requirements
- XAMPP (Apache + MySQL)
- Web browser
- Git (optional)

### Steps
1. Install XAMPP
2. Clone or download this repository
3. Place the project inside:
4. Start **Apache** and **MySQL** from XAMPP Control Panel
5. Create database in phpMyAdmin:
6. Import the provided SQL backup (if available)
7. Open browser:
http://localhost/public_html/

---

## 🔐 Database Notes

- Database name: `garuda_blog`
- Table used: `blogs`
- Database is **not stored in GitHub**
- Database is backed up separately as an `.sql` file using phpMyAdmin

---

## 💾 Backup Strategy

- **Code** is backed up using GitHub
- **Database** is exported as `.sql` and stored separately
- **backup1** is used for experimental development
- **back_main** stores the last stable working version

This ensures recovery in case of accidental errors or system failure.

---

## 🌍 Hosting Plan

- Final deployment will be done on **BigRock Hosting**
- Hosting will be performed after development reaches a stable stage
- Local development is done using XAMPP

---

## 📌 Current Status

🟢 Active Development  
The project is still being enhanced with additional features and UI improvements.

---

## 🔮 Future Enhancements

- Admin authentication
- Blog edit & delete functionality
- SEO-friendly URLs
- Mobile responsiveness improvements
- Contact form
- Deployment on live server

---

## 👨‍💻 Developer

**Garuda 3D Team**  
Project developed as part of real-time web development learning and implementation.

---

## 📄 License

This project is for educational and internal use.  
All rights reserved © Garuda 3D.
