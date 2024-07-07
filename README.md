# Portfolio Management System with Laravel

## Features
- 🔐 **Authentication**: Secure login and registration with Laravel Breeze.
- 📄 **CRUD Operations**: Create, read, update, and delete projects.
- 🖼️ **Responsive Design**: User-friendly for both desktop and mobile.
- 📊 **Admin Dashboard**: Manage personal projects efficiently.
- 🔗 **Relationships**: One-to-Many (Project-Type), Many-to-Many (Project-Technology).
- 🌐 **API Integration**: Comprehensive backend with endpoints for CRUD operations.
- 🛠️ **Development Tools**: Utilizes MAMP and phpMyAdmin for database management.

## Techniques Used

### Laravel Breeze for Authentication
Quick setup for user authentication, providing routes, controllers, and views for secure login and registration.

### MVC Architecture
Clear separation of concerns with models, views, and controllers to handle business logic, UI, and request processing.

- **Model**: `app/Models/Project.php` - Manages project data and relationships.
- **View**: `resources/views/admin/projects` - Blade templates for displaying project data.
- **Controller**: `app/Http/Controllers/Admin/ProjectController.php` - Handles CRUD operations for projects.

### Database Migrations and Seeders
Ensures a version-controlled and repeatable database schema. Seeders populate the database with sample data.

- **Migration**: `database/migrations/2024_06_19_203358_create_projects_table.php`
- **Seeder**: `database/seeders/ProjectsTableSeeder.php`

### Eloquent ORM Relationships
Defines and manages relationships between models for easy data manipulation.

- **One-to-Many**: `Project` to `Type`
- **Many-to-Many**: `Project` to `Technology`

### Blade Templating Engine
Utilized for creating dynamic, reusable views with Blade directives (`@extends`, `@section`, `@yield`).

## Additional Features

### Technologies and Types
Projects can be categorized by types and associated with multiple technologies for detailed tracking and organization.

### Admin Dashboard
A powerful dashboard for managing personal projects, providing an intuitive interface for creating, editing, and deleting projects, types, and technologies.



### Backend API Integration
Robust API endpoints for handling CRUD operations, enabling seamless integration with frontend applications.

## Authentication System
Comprehensive authentication module using Laravel Breeze, covering user registration, login, and logout functionalities.

