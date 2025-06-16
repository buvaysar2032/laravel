# Laravel 12 Backend Template

Это шаблон для создания бэкенд-приложений с использованием фреймворка Laravel 12.

## Требования к ПО

Для разработки и работы с этим проектом требуется:

- **PHP 8.3** или новее
- **Node.js 20** или новее
- **MySQL 8.0** или новее

### 1. Клонирование репозитория:

```
git clone [URL репозитория]
cd [название папки проекта]
```

### 2. Установка PHP зависимостей:
```php
composer install
```

### 3. Установка JavaScript зависимостей:
```
npm install
```

### 4. Настройка окружения:
- Скопируйте файл **.env.example** в **.env**
- Настройте параметры базы данных в .env
- Сгенерируйте ключ приложения:
```php
php artisan key:generate
```

### 5. Запуск миграций:
```php
php artisan migrate
```

### Создание администратора Moonshine:
```php
php artisan moonshine:user
```

### Запуск проекта
1. Запуск сервера Laravel
```php
php artisan serve
```

2. Запуск Vite для фронтенда
```
npm run dev
```

3. Админ панель Moonshine будет доступна по адресу:
```
http://localhost:8000/admin
```

### Рабочие команды

- Сборка фронтенда для production:
```
npm run build
```

- Запуск линтеров:
```
npm run lint
```

- Форматирование кода:
```
npm run format
```
