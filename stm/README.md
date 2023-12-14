# Student-Dashboard
A responsive and dynamic Student Dashboard  project made up using HTML, CSS, JavaScript & PHP

*create "uploads" folder if it was not created automatically 
*before using it create database and table copy paste below in your sql
////////////////////////////////////////////
CREATE DATABASE dbs;

USE dbs;

CREATE TABLE dts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    roll_number VARCHAR(255),
    branch VARCHAR(255),
    dob DATE,
    contact VARCHAR(255),
    email VARCHAR(255),
    address VARCHAR(255),
    father_name VARCHAR(255),
    image VARCHAR(255)
);
////////////////////////////////////////

Steps :
1. First create database and table by coping above code.
2. Then open index.html page -> then click on create profile so you create your profile .
3. Create password for your profile .
4. It redirects to login page . enter your email and password.
5. You can see your dashboard .Next time onwards you can go to your dashboard directly clicking login in index.html page 
6. You can add as many profiles as you want .
