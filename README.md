<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Decision Support System for Determining Insurance Priority Customers Using TOPSIS Method

This application is a decision support system built with the Laravel framework, aimed at helping insurance companies determine priority customers using the TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution) method. TOPSIS is a multi-criteria decision-making method that uses the concept that the chosen alternative should have the shortest distance from the positive ideal solution and the farthest distance from the negative ideal solution.

### Key Features

- **User Authentication**: Utilizes Laravel Sanctum for user authentication and authorization management.
- **Customer Data Management**: CRUD (Create, Read, Update, Delete) operations for customer data.
- **TOPSIS Calculation**: Implementation of the TOPSIS algorithm to determine priority customers based on predefined criteria.
- **Results Visualization**: Provides visual representation of calculation results in tables and charts.
- **Notifications**: Sends notifications to users about the status of priority customers.

### Technologies Used

- **Backend**: Laravel 10.x
- **Frontend**: Vite, Axios
- **Database**: MySQL
- **Authentication**: Laravel Sanctum
- **Testing**: PHPUnit, Mockery
- **Linting & Formatting**: Laravel Pint

### Installation

1. **Clone this repository**:

    ```bash
    git clone https://github.com/nchola/SistemPendukungKeputusan-MetodeTopsis
    ```

2. **Install dependencies with Composer**:

    ```bash
    composer install
    ```

3. **Copy the .env.example file to .env**:

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key**:

    ```bash
    php artisan key:generate
    ```

5. **Configure your database in the .env file, then run migrations**:

    ```bash
    php artisan migrate
    ```

6. **Install frontend dependencies**:

    ```bash
    npm install
    ```

7. **Run the application**:

    ```bash
    npm run dev
    php artisan serve
    ```

### Usage

1. **Log in as a registered user.**
2. **Manage customer data through the provided interface.**
3. **Perform TOPSIS calculations to determine priority customers.**
4. **View calculation results and analysis in tables and charts.**
