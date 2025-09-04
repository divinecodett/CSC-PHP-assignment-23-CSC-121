# CSC-PHP-assignment-23-CSC-121
CSC Assignment: Student Registration System in PHP and MySQL (Reg No: 23/CSC/121)
 Student Registration System (PHP & MySQL)

Project Overview
This is a simple Student Registration System built with PHP, MySQL, and CSS.
It allows students to register their details, view all registered students in a table, and delete records.
The project was created as part of CSC Practical Lab II Task (200 Level).

 Project Structure

student_registration_system/
│── index.php        # Registration form
│── process.php      # Handles form submission & inserts into DB
│── view.php         # Displays registered students in a table
│── delete.php       # Deletes a student record
│── style.css        # Styling for the project
│── student_db.sql   # Database setup with sample data
│── README.md        # Project setup instructions




Setup Instructions

1. Install Requirements

Install XAMPP or WAMP.

Start Apache and MySQL services.


2. Copy Files

Extract the project ZIP.

Copy the folder student_registration_system to:

C:/xampp/htdocs/ (for XAMPP)

C:/wamp64/www/ (for WAMP)



3. Setup Database

1. Open http://localhost/phpmyadmin.


2. Create a new database named:

student_db


3. Import the file student_db.sql (this will create the table and insert sample data).



4. Run the Project

Open your browser and go to:

http://localhost/student_registration_system/index.php

index.php → Registration form

process.php → Handles form submission

view.php → View all registered students

delete.php → Delete a student record

Sample Data

After importing student_db.sql, you’ll see these students already registered:

Alice Johnson – Computer Science – CSC2001

Brian Smith – Mathematics – MTH2002

Cynthia Lee – Physics – PHY2003


 Features

1.) Student Registration with validation

2.) Data stored in MySQL

3.) View all registered students

4.) Delete student records (extra credit)

5.) Simple, clean CSS design

Author:
Created by GODSPOWER DIVINE JESUSEME as part of CSC Practical Lab II Task (200 Level).
