# To-Do List App

## Overview
This project is a simple To-Do List application built with Laravel. It allows users to efficiently add, delete, and edit tasks.

## Getting Started

### Prerequisites
Before you begin, ensure you have installed Laravel on your machine. For installation instructions, visit the [Documentation](https://laravel.com/docs/11.x/installation).

### Installation
1. Clone the repository:
    ```sh
    git clone https://github.com/Swayam-Ghimire/toDoListApp.git
    ```
2. Navigate to the project directory:
    ```sh
    cd toDoListApp
    ```
3. Install dependencies:
    ```sh
    composer install
    ```
4. Install frontend dependencies:
    ```sh
    npm install
    ```
5. Add a `.env` file to the root folder and copy the contents of `.env.example` into the `.env` file.

6. Create a `database.sqlite` file within the database folder.

7. Run migration files and seed the table:
    ```sh
    php artisan migrate --seed
    ```

8. Run the application:
    ```sh
    php artisan serve
    npm run dev
    ```

### Usage
- To add a task, click on the "Create Task" button on the dashboard and fill in the task details.
- To edit a task, click on the "Edit" button next to the task you want to modify.
- To delete a task, click on the "Delete" button next to the task you want to remove.
