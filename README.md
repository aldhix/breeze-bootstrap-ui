# Breeze Bootstrap UI for Laravel Breeze

This package provides **Bootstrap 5 UI** for Laravel Breeze (Blade only), making it easier to use Breeze with a modern and responsive frontend.

Perfect if you want to quickly set up Laravel Breeze + Bootstrap without extra configuration.

---

## 🚀 Installation

1. Install Laravel Breeze (if not installed yet):

```bash
composer require laravel/breeze --dev
php artisan breeze:install
```

2. Install this package:

`composer require aldhix/breeze-bootstrap-ui`

3. Run the artisan command to replace the default Breeze views with Bootstrap-based views:

`php artisan breeze-bootstrap-ui:install`

This command will overwrite the default Breeze views with Bootstrap versions.
Use `--force` if you want to overwrite existing files.

4. Remove Tailwind CSS

Since this package uses Bootstrap 5, you should remove Tailwind to avoid conflicts:

```
# Remove Tailwind CSS packages
npm uninstall tailwindcss postcss autoprefixer

# Delete Tailwind config files if exist
rm tailwind.config.js postcss.config.js
```

Open your main CSS file (usually `resources/css/app.css`) and remove:

```
@tailwind base;
@tailwind components;
@tailwind utilities;
```

## 📦 Features

- Full Bootstrap 5 integration for Laravel Breeze
- Ready-to-use Blade components for auth UI
- Custom artisan command:
  `php artisan breeze-bootstrap-ui:install`

## 📌 Notes

- This package is still under development.
- Feedback, issues, and pull requests are very welcome! 🙌

## 📄 License

MIT © 2025 Aldhi Xar
