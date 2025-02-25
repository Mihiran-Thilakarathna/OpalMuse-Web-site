# Opal Muse Clothing Website

## Overview
This is a fully functional clothing shop website developed using **HTML, CSS, JavaScript, and PHP**. The website provides a user-friendly shopping experience.

## Features
- **User Registration & Login**
- **Product Listings & Details**
- **Shopping Cart & Checkout**
- **Client-side Form Validation (JavaScript)**
- **Database Integration (PHP & MySQL)**
- **Responsive Design (CSS)**
  

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP, MySQL
- **Validation:** JavaScript
- **Server:** WAMP/XAMPP (for local testing)


## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/Mihiran-Thilakarathna/OpalMuse-Web-site.git
   ```
2. Move to the project directory:
   ```bash
   cd OpalMuse-Web-site
   ```
3. Import the database:
   - Locate `config1.php` in the project folder.
   - Import the SQL file into your MySQL database using **phpMyAdmin** or the command line.
4. Configure database connection:
   - Open `config1.php`.
   - Update the database credentials.
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "OpalMuse";
   ```
5. Start the local server using **WAMP/XAMPP**.
6. Open `index.html` in the browser.

## Folder Structure
```
OpalMuse-Web-site/
├── css/                    # Stylesheets
│   ├── KidsStyles.css
│   ├── MenStyles.css
│   ├── NewArrivalsStyles.css
│   ├── WomenStyles.css
│   ├── cart-styles.css
│   ├── return&exchange.css
│   ├── size chart.css
│   ├── styles.css
│
├── js/                     # JavaScript files
│   ├── scripts.js
│
├── php/                    # Backend scripts
│   ├── config1.php
│   ├── login.php
│   ├── register.php
│   ├── return&exchange.php
│   ├── subscribe.php
│
├── images/                 # Product images
│
├── pages/                  # HTML Pages
│   ├── cart.html
│   ├── contact.html
│   ├── gift_cards.html
│   ├── index.html
│   ├── kids.html
│   ├── login.html
│   ├── men.html
│   ├── new_arrivals.html
│   ├── register.html
│   ├── return&exchange.html
│   ├── size chart.html
│   ├── support.html
│   ├── women.html
│
├── Update README.md               # Documentation
```
