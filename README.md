# QuickPOS ⚡

Modern Point of Sale (POS) Landing Page with Full Stack Integration and CI/CD Pipeline.

Website Link : http://quickpos.scienceontheweb.net/

## 📋 Project Overview
QuickPOS is a professional, responsive landing page for a POS system. It features a modern, SaaS-style UI built with HTML/CSS/JS and a secure PHP/MySQL backend for contact form handling. Developed using Software Project Management (SPM) best practices including GitFlow, automated testing, and CI/CD.

## 🛠️ Tech Stack
- **Frontend:** HTML5, CSS3 (Custom Design System, Glassmorphism), Vanilla JavaScript
- **Backend:** PHP 8.1+ (PDO)
- **Database:** MySQL
- **Testing:** PHPUnit
- **Static Analysis:** PHPStan
- **CI/CD:** GitHub Actions

## 🚀 Setup Guide

### 1. Prerequisites
- PHP 8.1 or higher
- MySQL / MariaDB
- Composer (for PHPUnit/PHPStan)
- A local web server (XAMPP, MAMP, or PHP Built-in server)

### 2. Database Setup
1. Open your MySQL client (e.g., phpMyAdmin or command line).
2. Create the database:
   ```sql
   CREATE DATABASE quickpos_db;
   ```
3. Create the table:
   ```sql
   USE quickpos_db;

   CREATE TABLE contact_messages (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       message TEXT NOT NULL,
       created_at DATETIME DEFAULT CURRENT_TIMESTAMP
   );
   ```
4. Configure database credentials in `includes/db.php` if needed (default uses `root` with no password).

### 3. Running Locally
Using PHP's built-in server:
```bash
# Clone the repository
git clone https://github.com/yourusername/quickpos.git
cd quickpos

# Start the server
php -S localhost:8000
```
Visit `http://localhost:8000` in your browser.

## 🧪 Testing

### Setup Dependencies
Install development dependencies (PHPUnit, PHPStan) using Composer:
```bash
composer install
```

### Run Tests
```bash
# Run PHPUnit tests
composer test
# OR
./vendor/bin/phpunit

# Run Static Analysis (PHPStan)
composer analyse
```

## 🌿 Git Workflow (GitFlow)
We strictly follow a structured branching strategy:
- `main`: Production-ready code only.
- `develop`: Active development branch.
- `feature/*`: For new features (e.g., `feature/POS-101-hero-section`).
- `bugfix/*`: For bug fixes.

**Rules:**
- No direct commits to `main`.
- All work is merged via Pull Requests (PRs).
- Mandatory PR reviews.
- Commit format: `[POS-XXX] Brief description of changes`.

## ⚙️ CI/CD Pipeline
Our GitHub Actions pipeline (`.github/workflows/ci.yml`) automates quality assurance and deployment:
1. **Commit Validation:** Ensures commit messages follow the Jira ID pattern.
2. **Setup PHP:** Configures the PHP 8.1 environment with necessary extensions.
3. **Syntax Check:** Verifies PHP file syntax (`php -l`).
4. **Code Quality:** Runs PHPStan (Level 5) to catch potential logic errors.
5. **Testing:** Executes the PHPUnit test suite using an in-memory SQLite database for speed.
6. **Continuous Deployment (CD):** Once merged into `main`, the pipeline automatically triggers the deployment job to push the latest build to the production environment.
7. **PR Blocking:** Pull Requests are blocked from merging if any CI checks fail, ensuring zero-defect code in `main`.

## 📸 Screenshots

<img width="958" height="436" alt="image" src="https://github.com/user-attachments/assets/7ba5fc1d-377c-4ff0-b6eb-dba20f285a4b" />

*Developed for SPM Semester Project.*
