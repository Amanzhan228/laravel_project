📋 Laravel Task Management App
A simple Laravel-based web application to manage tasks. It includes features like creating, editing, and deleting tasks with a clean UI scaffolded using Laravel Breeze and styled with Tailwind CSS.

🚀 Features
✅ Add new tasks

📝 Edit existing tasks

❌ Delete tasks

📃 View task list

🧑‍💻 User authentication (via Laravel Breeze)

🎨 Modern responsive UI with Tailwind CSS

🛠️ Tech Stack
Laravel 12

PHP 8+

SQLite (or any Laravel-supported DB)

Laravel Breeze (Auth scaffolding)

Vite (asset bundling)

Tailwind CSS

📦 Installation
bash
Copy
Edit
git clone https://github.com/Amanzhan228/laravel_project.git
cd laravel_project

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Compile assets
npm run dev
⚙️ Configuration
bash
Copy
Edit
# Copy the .env file and generate the key
cp .env.example .env
php artisan key:generate

# Use SQLite
touch database/database.sqlite
# then in .env set:
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
🧪 Run the App
bash
Copy
Edit
php artisan migrate
php artisan serve
Visit: http://localhost:8000

📁 Project Structure Highlights
app/Models/Task.php – Eloquent model

app/Http/Controllers/TaskController.php – Controller for task CRUD

resources/views/tasks/ – Blade views for Task pages

routes/web.php – Route definitions

resources/js/app.js – JavaScript entry point

resources/css/app.css – Tailwind CSS

