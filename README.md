# Sample Filament App

A sample Laravel and Filament project designed to test and demonstrate proficiency in PHP, Laravel, Filament, Livewire, and related technologies. This project showcases CRUD operations, custom fields, theme customization, queued jobs, API integrations, and dashboard metrics.

---

## Table of Contents

* [Description](#description)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Database Model](#database-model)
* [Installation & Setup](#installation--setup)
* [Usage](#usage)
* [API Integration](#api-integration)
* [Credentials](#credentials)
* [Submission Guidelines](#submission-guidelines)

---

## Description

This project aims to test both your ability to work with Laravel and Filament, and your resourcefulness in solving problems. The project includes creating complex CRUDs, customizing themes, integrating APIs, and building a functional dashboard.

Key objectives include:

* Setting up Laravel using SQLite
* Installing and configuring Filament
* Building models using an ERD
* Seeding sample data
* Customizing Filament themes
* Building complex CRUDs
* Creating read-only info lists
* Implementing suffix actions and external API integrations
* Creating custom fields and jobs
* Displaying model counts on the dashboard

---

## Technologies Used

* PHP 8.2+
* Laravel 12
* Filament
* Livewire
* Tailwind CSS
* Eloquent ORM
* Laravel Queues & Jobs
* REST APIs with Token Authorization
* SQLite (for development)
* SQL & Database Design (ERD/UML)

---

## Features

* **Basic CRUDs:** Manage Product Colors, Product Categories, Product Types, and Products.
* **Complex CRUD:** Product management with conditional category selection and type assignment.
* **Custom Fields:** Status bar on products with color mapping.
* **Suffix Actions:** Validate or fetch external data via API calls.
* **Jobs & Notifications:** Simple job execution via UI with optional database notifications.
* **Dashboard Metrics:** Display count of custom models.
* **Theme Customization:** Filament sidebar color override using Tailwind CSS.
* **Seeded Data:** Preloaded colors and categories for rapid setup.

---

## Database Model

### Tables & Descriptions

| Table                  | Description                                                                                            |
| ---------------------- | ------------------------------------------------------------------------------------------------------ |
| **Product Colors**     | Stores web-safe HTML colors with HEX codes. Seeded for easy setup.                                     |
| **Product Categories** | Categories with name, description, and URL. Related to multiple product types (morph many-to-many).    |
| **Products**           | Main table linking to categories, types, and colors. Ensures category selection matches product types. |
| **Product Types**      | Types associated with multiple products and categories. Includes API number fetched via suffix action. |

---

## Installation & Setup

1. **Clone the repository:**

```bash
git clone https://github.com/dmunasingha/Sample-filament-App.git
cd Sample-filament-App
```

2. **Install dependencies:**

```bash
composer install
npm install
npm run dev
```

3. **Environment Setup:**

* Copy `.env.example` to `.env`
* Configure SQLite database:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

4. **Run Migrations and Seed Data:**

```bash
php artisan migrate --seed
```

5. **Serve the Application:**

```bash
php artisan serve
```

Access the app at: `http://localhost:8000/admin`

---

## Usage

* Login with the provided credentials.
* Manage products, colors, categories, and types via Filament admin panel.
* Use suffix actions to fetch external data.
* Execute queued jobs via UI.
* View dashboard metrics for model counts.
* Customize sidebar and UI elements via Tailwind CSS.

---

## API Integration

The app integrates with the **ASMorphic Vocus API** for address validation and service qualification.

* **Login:** `POST https://extranet.asmorphic.com/api/login`

  * Payload: `{"email": "project-test@projecttest.com.au", "password": "oxhyV9NzkZ^02MEB"}`
  * Returns Bearer token
* **Find Address:** `POST https://extranet.asmorphic.com/api/orders/findaddress`
* **Service Qualification:** `POST https://extranet.asmorphic.com/api/orders/qualify`

---

## Credentials

| User                              | Password           |
| --------------------------------- | ------------------ |
| `project-test@projecttest.com.au` | `oxhyV9NzkZ^02MEB` |

---

## Submission Guidelines

* Ensure repository is public.
* Include this README.md with setup instructions.
* Provide deployed demo URL if available.
* Use structured Git branches and clear commit messages.

---

## Demo

* Laravel Cloud Demo - Pending Task
