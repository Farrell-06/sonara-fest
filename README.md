# SONARA FEST: Dynamic Concert & Music Festival Website

A dynamic concert and music festival web platform developed to deliver festival scheduling, performer lineup discovery, ticket inquiries, and secure user account management.

## Overview

SONARA FEST is an academic web development project designed to simulate a real-world concert and festival experience website. The platform combines dynamic server-side rendering using PHP with a relational MySQL database to handle authentication and interactive user flows, paired with a custom dark-aesthetic festival UI.

## Project Objectives

- Construct a responsive, immersive web interface for a contemporary music festival.
- Implement user authentication with password hashing and session tracking.
- Manage relational database operations using MySQL and PHP data access functions.
- Deliver cross-device usability with mobile-friendly navigation and structured layouts.

## Key Features

- **Festival Landing Page (\index.php\):** Hero showcase, event countdown, experience highlights, and featured lineup previews.
- **Lineup & Stage Schedules (\lineup.html\):** Detailed performer rosters, stages, and set times.
- **Experience Exploration (\experience.html\):** Immersive venue guide, culinary areas, and festival activities.
- **Ticketing Guide (\	ickets.html\):** Ticket tiers, pricing breakdown, and booking prerequisites.
- **User Authentication (\egister.php\, \login.php\, \logout.php\):** Account creation with email validation, Bcrypt password hashing, and active session protection.
- **Modular Configuration (\config/config.php\):** Centralized database connectivity with environment variable support.

## Technology Stack

- **Backend:** PHP Native (Session Management, Input Sanitization, Password Hashing)
- **Database:** MySQL / MariaDB (Relational Data Schema)
- **Frontend:** HTML5, CSS3, Vanilla JavaScript
- **Typography & Icons:** Google Fonts (Bebas Neue, Outfit, Space Mono)

## Project Structure

\\\
sonara-fest/
├── config/
│   ├── config.php          # Database connection script
│   └── config.example.php  # Sample database config template
├── database.sql            # MySQL schema for tables
├── experience.html         # Festival experience guide page
├── index.php               # Main landing page
├── lineup.html             # Performer lineups and stage schedules
├── login.php               # User login authentication handler
├── logout.php              # Session termination script
├── register.php            # New user account registration
├── style.css               # Comprehensive styling and layouts
├── tickets.html            # Ticket categories and pricing page
├── .gitignore              # Git ignore rules
└── README.md               # Project documentation
\\\

## Installation and Execution

### Prerequisites
- PHP 7.4 or higher (PHP 8.x recommended)
- MySQL / MariaDB (via XAMPP, Laragon, or standalone service)
- Modern web browser

### Step-by-Step Setup

1. **Clone the repository:**
   \\\ash
   git clone https://github.com/Farrell-06/sonara-fest.git
   cd sonara-fest
   \\\

2. **Set up the Database:**
   - Open MySQL (e.g. via phpMyAdmin, HeidiSQL, or MySQL CLI).
   - Import \database.sql\ into your MySQL server:
     \\\ash
     mysql -u root -p < database.sql
     \\\
   - By default, the database is named \konser\.

3. **Configure Database Connection:**
   - Review \config/config.php\.
   - Update host, username, password, and database if your local environment uses custom credentials.

4. **Run the Project:**
   - **Using PHP Built-in Server:**
     \\\ash
     php -S localhost:8000
     \\\
     Then visit \http://localhost:8000\ in your browser.
   - **Using XAMPP / Laragon:**
     Place the project folder inside \htdocs\ (XAMPP) or \www\ (Laragon) and open \http://localhost/sonara-fest\.

## Academic Context

This project was developed as an academic web programming project by Farrell Putra Prayoga for Information Systems studies, demonstrating server-side scripting, database normalization, and frontend user experience design.

## Author

- **Farrell Putra Prayoga**
  - Portfolio: [farrellputra.site](https://farrellputra.site)
  - GitHub: [@Farrell-06](https://github.com/Farrell-06)
  - Program: Information Systems (S1 Sistem Informasi), Universitas Mercu Buana
