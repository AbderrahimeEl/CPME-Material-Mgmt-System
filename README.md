# CPME Material Management System

## Overview

The CPME Material Management System is a web application designed to manage and track materials used in various projects. It provides features for adding, editing, and deleting materials, as well as tracking their usage and maintenance.

## Key Features

- Add, edit, and delete materials
- Track material usage and maintenance
- User authentication and authorization
- Detailed logs of material activities
- Responsive design for mobile and desktop

## Installation

To install and run the CPME Material Management System, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/AbderrahimeEl/CPME-Material-Mgmt-System.git
   cd CPME-Material-Mgmt-System
   ```

2. Install the dependencies:
   ```bash
   composer install
   npm install
   ```

3. Copy the example environment file and configure the environment variables:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run the database migrations:
   ```bash
   php artisan migrate
   ```

6. Start the development server:
   ```bash
   php artisan serve
   npm run dev
   ```

## Usage

To use the CPME Material Management System, follow these steps:

1. Access the application in your web browser at `http://localhost:8000`.
2. Register a new user account or log in with an existing account.
3. Navigate to the materials section to add, edit, or delete materials.
4. Track material usage and maintenance through the detailed logs.

## Contribution Guidelines

We welcome contributions to the CPME Material Management System! To contribute, follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them with descriptive commit messages.
4. Push your changes to your forked repository.
5. Create a pull request to the main repository.

