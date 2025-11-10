# 🚗 Car Selling Laravel App

A full-featured **Car Selling Web Application** built with **Laravel**, showcasing modern web development best practices — from routing and Blade templating to Eloquent ORM, database seeding, and deployment.

This project was developed by following a complete Laravel tutorial that covers every key concept required to build a functional and scalable web application from scratch.

---

## 🧭 Table of Contents

- [Introduction](#introduction)
- [Project Demo](#project-demo)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
    - [Installation](#installation)
    - [Configuration](#configuration)
    - [Database Setup](#database-setup)
- [Folder Structure](#folder-structure)
- [Technologies Used](#technologies-used)
- [Core Laravel Concepts Covered](#core-laravel-concepts-covered)
- [Deployment](#deployment)
- [Screenshots](#screenshots)
- [License](#license)
- [Acknowledgments](#acknowledgments)

---

## 🏁 Introduction

This project is a **Car Selling Application** that allows users to browse, list, and manage cars. It implements a complete MVC architecture using Laravel — including routes, controllers, views, Eloquent ORM, Blade components, and database migrations.

Through this project, we cover every step of modern Laravel app development, from setting up routes to deploying the final product online.

---

## 🎥 Project Demo

A full demo of the application is available in the tutorial video.  
It showcases:
- A clean homepage with listed cars
- Detailed car pages
- Pagination and filtering
- Dynamic data rendering from the database

---

## ✨ Features

- 🏎️ **Car Listings** – Display cars with details such as make, model, year, and price
- 🧭 **Car Detail Pages** – View each car’s full information dynamically
- 🧱 **Dynamic Database Integration** – Cars and related data fetched from database
- 🧩 **Blade Templating & Components** – Reusable and dynamic UI layouts
- 📄 **Pagination** – Efficiently handle large car inventories
- 🧰 **CRUD Operations (optional)** – Manage car listings easily
- 🔗 **Relationships with Eloquent** – Cars, users, and categories
- 🧪 **Factories & Seeders** – Generate realistic testing data
- 🚀 **Deployment Ready** – Production configuration and hosting setup

---

## 🧰 Prerequisites

Before you begin, make sure you have the following installed:

- PHP >= 8.1
- Composer
- MySQL or MariaDB
- Node.js and npm (for frontend assets)
- Laravel CLI (installed globally)

---

## ⚙️ Getting Started

### 1. Installation

Clone the repository and install dependencies:

```bash
git clone https://github.com/yourusername/car-selling-laravel-app.git
cd car-selling-laravel-app
composer install
php artsian key:generate
php artisan migrate --seed
php artisan serve
