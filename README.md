Decision Support System for Determining Insurance Priority Customers Using TOPSIS Method
This application is a decision support system built with the Laravel framework, aimed at helping insurance companies determine priority customers using the TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution) method. TOPSIS is a multi-criteria decision-making method that uses the concept that the chosen alternative should have the shortest distance from the positive ideal solution and the farthest distance from the negative ideal solution.


Key Features

-User Authentication: Utilizes Laravel Sanctum for user authentication and authorization management.
-Customer Data Management: CRUD (Create, Read, Update, Delete) operations for customer data.
-TOPSIS Calculation: Implementation of the TOPSIS algorithm to determine priority customers based on predefined criteria.
-Results Visualization: Provides visual representation of calculation results in tables and charts.
-Notifications: Sends notifications to users about the status of priority customers.


Technologies Used

Backend: Laravel 10.x
Frontend: Vite, Axios
Database: MySQL
Authentication: Laravel Sanctum
Testing: PHPUnit, Mockery
Linting & Formatting: Laravel Pint


Installation

1. Clone this repository:

2. Install dependencies with Composer:
composer install

3. Copy the .env.example file to .env:
cp .env.example .env

4. Generate the application key:
php artisan key:generate

5. Configure your database in the .env file, then run migrations:
php artisan migrate

6. Install frontend dependencies:
npm install

7. Run the application:
npm run dev
php artisan serve

Usage
Log in as a registered user.
Manage customer data through the provided interface.
Perform TOPSIS calculations to determine priority customers.
View calculation results and analysis in tables and charts.
