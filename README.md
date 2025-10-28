# WoodStream - Антикварная мебель

Laravel приложение для магазина антикварной мебели с Filament админ-панелью.

## 🚀 Быстрый старт

### Локальная разработка

```bash
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Админ-панель: `http://localhost:8000/admin`

### Production деплой

```bash
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan cache:all
```

## ⚡ Оптимизация

Проект полностью оптимизирован для быстрой работы даже с большой базой данных:

- ✅ Индексы на всех важных полях БД
- ✅ Кэширование компонентов (social-links, duty-phone, contacts-list)
- ✅ Eager loading в Filament
- ✅ SQLite в режиме WAL
- ✅ File cache вместо database

### Команды для кэша

Очистить весь кэш:
```bash
php artisan cache:clear-all
```

Закэшировать для production:
```bash
php artisan cache:all
```

Подробнее см. [OPTIMIZATION.md](OPTIMIZATION.md)

## 📁 Структура проекта

```
app/
├── Filament/Resources/     # Админ-панель Filament
├── Http/Controllers/       # Контроллеры
├── Models/                 # Модели
├── Observers/              # Автоочистка кэша
└── Console/Commands/       # Команды

resources/
├── views/                  # Blade шаблоны
│   ├── components/         # Компоненты
│   └── layouts/            # Layouts
└── lang/                   # Локализация

verstka/                    # Оригинальная верстка (HTML/CSS/JS)

database/
├── migrations/             # Миграции
└── seeders/                # Сидеры
```

## 🛠 Технологии

- Laravel 12
- Filament 3
- SQLite (оптимизирован)
- Blade Components
- Tailwind CSS

## 📝 Разработка

При изменении конфигурации, роутов или моделей:

```bash
php artisan cache:clear-all
```

Перед коммитом убедитесь, что все работает:

```bash
php artisan cache:all
php artisan serve
```

## 🔧 Настройка сервера

Для максимальной производительности на сервере:

1. Установите правильные права
2. Запустите миграции
3. Закэшируйте все (`php artisan cache:all`)
4. Настройте PHP opcache
5. Настройте Nginx кэширование статики

Подробная инструкция в [OPTIMIZATION.md](OPTIMIZATION.md)

## 📦 Основные модули

- **Каталог** - товары, категории, фильтры
- **Блог** - статьи и новости
- **Отзывы** - отзывы клиентов с модерацией
- **Портфолио** - выполненные работы
- **Контакты** - контактная информация
- **Менеджеры** - управление менеджерами и дежурствами
- **Соцсети** - ссылки на социальные сети

## 🎨 Верстка

Оригинальная верстка находится в папке `verstka/`.
Интегрируется в Laravel 1 к 1 без изменений.

## 📧 Контакты

Email: info@woodstream.online
# woodstream
