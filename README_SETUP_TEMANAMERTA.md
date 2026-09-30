# Setup TemanAmerta

Taruh file `composer.json`, `composer.lock`, `package.json`, `.env.example`, dan `.gitignore` di root project Laravel (folder yang sama dengan `artisan`).

## Environment minimum project saat ini
- PHP: ^8.3
- Laravel: ^13.17
- Composer: 2.x
- Node.js: gunakan versi yang kompatibel dengan Vite 8; samakan versi antar anggota tim
- npm: samakan versi mayor antar anggota tim
- Database: MySQL (konfigurasi `.env.example` sudah diarahkan ke MySQL)

## Setelah clone repository

```bash
composer install
npm install
```

Windows:
```bat
copy .env.example .env
```

macOS/Linux:
```bash
cp .env.example .env
```

Lanjutkan:
```bash
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

## Catatan penting
- `.env` jangan di-commit.
- `composer.lock` harus di-commit.
- `package-lock.json` harus di-commit setelah `npm install` berhasil dijalankan pada project.
- `vendor/` dan `node_modules/` jangan di-commit.
