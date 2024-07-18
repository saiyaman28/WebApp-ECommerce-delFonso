# WebApp-ECommerce-delFonso

## Overview
This project was created by me, a college student tracking in website development. As part of my coursework, I created this project using vanilla PHP, which is known for its simplicity and efficiency. 

## How to Run?
1.	Clone the repository to your local machine.
2.	Download the XAMPP and install the application. Please install the application in default installation directory only. <br />
   Link: https://www.apachefriends.org/download.html
4.	Copy the "PE" folder to (assuming that you install the application to Local Disk C):
C:\This PC\xampp\htdocs
5.	Open the application and start Apache and MySQL.
6.	Click the admin under MySQL.
7.	Go to SQL. You can see it on top in nav bar
8.	Create a database. 
Type this in text area: CREATE DATABASE ecommerce
9.	Go to import.
10.	Click choose file and select the “DATABASE.sql” located in the repository folder and import.
11.	Proceed to new tab and type this in address bar. <br />
    Link: http://localhost/PE/templates/pages/index.php
13.	You can now use the website.

## Database Schema
Under this project's database, it composes 3 tables (1 only in repos file presently) which are “Products”, “Customers” & “Orders”.

## Function
•	Backend – Placement for all the backend files <br />
   o	Database – For configuration of MySQL and enshorting the sql commands via PHP’s function. <br />
   o	Systems – For handling webpages’ form operations to database such as Add products, Update products & delete products. <br />
•	Static – Placement for all the frontend configurations (such as CSS & JavaScript) & images files <br />
•	Templates – Placement for all the frontend files. <br />
   o	Elements – For website’s special elements such as the base, header & footer. <br />
   o	Pages – For actual webpages. <br />
     	index.php – The website’s homepage. You can see here all the products available. You can add, edit and delete products here as well. <br />
     	add_product.php – This is where you will be redirected to when you click add order. You can add your order here and input the product’s name, description & price. After you input the details, it will be automatically saved to database and redirect you back to home and you can see your new input right away. <br />
     	edit_product.php – This is where you will be redirected to when you click the edit button beside the table row. You can edit your product’s details here. After you modify your product’s details, you will be redirected back home, and you can see the changes right away. <br />
     	delete_product.php – This is where you will be redirected to when you click the delete button. Clicking this will delete the rows and it will redirect you back to the home page.
