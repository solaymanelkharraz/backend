> ⚠️ **Note:** This is the backend API and database architecture built with Laravel 11.  
> 🔗 [Click here to view the React Frontend Repository](https://github.com/solaymanelkharraz/myMaze.git)

# Soft Skills Maze Game - Backend 🧠🕹️

This is the API server for the Soft Skills Maze Game. It provides the soft skill scenario questions and handles score submissions to maintain a leaderboard. This project was developed by Soulayman El Kharraz (as part of the CC3 Soft Skills evaluation). 

---

## 🛠️ Tech Stack

- **Laravel 11** (Robust PHP framework for API development)
- **PHP 8.3**
- **SQLite** (Default database for simple and quick setup)

---

## 🚀 Getting Started

Follow these instructions to get the Laravel backend up and running on your local machine for development.

1. Install PHP dependencies via Composer:
   ```bash
   composer install
   ```
2. Copy the example environment file and generate an application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Run the database migrations (this will create the SQLite database file if it doesn't exist and run the schema):
   ```bash
   php artisan migrate
   ```
4. Start the local Laravel development server:
   ```bash
   php artisan serve
   ```
   *The backend will typically be available at `http://127.0.0.1:8000`.*

---

## 🔌 API Endpoints

- `GET /api/questions`: Retrieve a list of soft skill scenario questions.
- `GET /api/scores`: Retrieve the scores.
- `POST /api/scores`: Submit a new score from the frontend.

---

## 👤 Author
**Soulayman El Kharraz**
*Project submitted for Soft Skills CC3.*
