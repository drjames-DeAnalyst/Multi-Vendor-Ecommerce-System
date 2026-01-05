DR WEB INSTITUTE — Multi-Vendor Ecommerce System (Offline MVP)

What this is ?

An offline, WordPress-like ecommerce prototype built with PHP, MySQL, HTML, CSS and JavaScript, designed for local development on XAMPP and portfolio demonstration.
This system simulates a real-world ecommerce platform with user authentication, admin dashboard, product catalog, cart flow, and structured navigation (header, side menu, footer).
It follows mature UI and security practices such as Gmail-only authentication, strong password enforcement, CAPTCHA validation, and role-based access.
This project is for learning, demos, and portfolio use only. It is NOT production ready.
Core Features
Gmail-only user registration and login
Strong password policy (uppercase, lowercase, number, special character)
Custom CAPTCHA (text/number based)
Login and Register on the same page
Role-based access (Admin and User)
Admin dashboard with side navigation menu
Header with menu options and hamburger (three-line dropdown)
Fully linked pages with forward and backward navigation
Mature footer layout (brand info, useful links, support, contact)
Clean container-based layout using DIVs
PHP sessions and password hashing
MySQL database backend
Runs entirely on XAMPP (localhost)
Technology Stack
Frontend: HTML, CSS (inline + external), JavaScript
Backend: PHP
Database: MySQL
Server: Apache (XAMPP)
Environment: Localhost only
Setup (exact)
Follow these steps carefully and in order.
1. Install XAMPP
Download and install XAMPP
Start Apache and MySQL from the XAMPP Control Panel
2. Create Project Folder
Create the project directory:


C:\xampp\htdocs\drweb_ecommerce\
Copy all project folders and files into this directory:


admin/
assets/
auth/
includes/
index.php
shop.php
cart.php
checkout.php
README.md

3. Create and Import Database
Open your browser and visit:


http://localhost/phpmyadmin
Click New
Create a database named:


drweb_ecommerce
Click the database, then click Import
Paste or import the provided SQL file
Click Go
Confirm the users table is created successfully
4. Configure Database Connection
Open:


includes/db.php
Confirm the database credentials:

Php
$conn = new mysqli("localhost", "root", "", "drweb_ecommerce");
(Default XAMPP credentials are assumed)
5. Run the Application
Open your browser and visit:


http://localhost/drweb_ecommerce/
Authentication page:


http://localhost/drweb_ecommerce/auth/login_register.php
Admin dashboard (after login):


http://localhost/drweb_ecommerce/admin/dashboard.php
Authentication Rules (Very Important)
Email Policy
Only Gmail addresses are accepted
Examples allowed:


example@gmail.com
example123@gmail.com
Examples rejected:

example@yahoo.com
example@outlook.com
example@company.com
Password Policy
Passwords must contain all of the following:
At least one uppercase letter
At least one lowercase letter
At least one number
At least one special character
Minimum length of 8 characters
Example valid passwords:


Drweb@2026
Secure#123
PassWord9!
CAPTCHA
Random text/number CAPTCHA is generated per session
User must enter the CAPTCHA correctly to proceed
CAPTCHA is validated on the server side (PHP)
Navigation Structure
Header menu links to all main pages
Hamburger menu (three-line icon) for responsive navigation
Side menu tab available in dashboards
Footer contains links to all major pages and support sections
No dead links; all pages are connected
Security Notes (Must Follow for Production)
This project must not be used directly in production.
For real deployment, you must:
Use HTTPS
Change default database credentials
Restrict database user privileges
Add CSRF protection
Implement email verification
Use rate limiting on login
Validate and sanitize all user inputs
Add proper logging and error handling
Integrate real payment gateways securely
Passwords are stored using password_hash() and verified using password_verify().
Project Limitations
No real payment processing (mock only)
No email sending
No vendor payout logic
No file upload validation
No advanced role permissions
These are intentional for MVP simplicity.
Next Steps You Can Ask Me to Implement
Product management system (CRUD)
Shopping cart logic
Checkout flow (mock payment)
Product search and filters
Order history
Admin product upload with images
User profile management
Email verification
Payment gateway integration (Paystack or Flutterwave sandbox)
Improved UI and responsiveness
Export data to CSV
Activity logs
Quick Testing Checklist
Start XAMPP, confirm Apache and MySQL are running
Import the database and confirm tables exist
Visit:
Copy code

http://localhost/drweb_ecommerce/auth/login_register.php
Register using a Gmail address
Use a strong password
Enter CAPTCHA correctly
Login successfully
Access admin dashboard
Navigate through header, side menu and footer links
© 2026 DR WEB INSTITUTE
Built for learning, demonstration, and professional portfolio use.