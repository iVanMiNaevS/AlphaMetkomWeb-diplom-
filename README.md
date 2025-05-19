# Название проекта

## 📌 Системные требования

-   PHP ≥8.0
-   Composer
-   MySQL ≥5.7
-   Node.js ≥14

## 🛠 Установка

### 1. Установка зависимостей PHP

composer install 2. Настройка окружения

Скопируйте файл окружения:
cp .env.example .env

Сгенерируйте ключ приложения:
php artisan key:generate

3. Настройка базы данных

Создайте новую базу данных MySQL

Настройте подключение в файле .env:

ini
DB*CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=имя*базы
DB_USERNAME=пользователь
DB_PASSWORD=пароль

4. Запуск миграций и наполнение базы

php artisan migrate
php artisan db:seed

5. Установка фронтенд-зависимостей

npm install

Сборка ассетов для разработки:

npm run dev

Для production:
npm run build

6. Настройка хранилища

php artisan storage:link

🚀 Запуск приложения

php artisan serve

Приложение будет доступно по адресу:
http://localhost:8000
