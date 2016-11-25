# Demo hapus composite key di Laravel

Ada tiga cara yang dijadikan contoh. Mau pakai cara lain juga bisa.

## Install

Setelah clone dan menjalankan `composer install`, jangan lupa setup database dan lakukan migration.

```
./artisan migrate --seed
```

Jalankan web server

```
./artisan serve
```

Buka [http://localhost:8000](http://localhost:8000)

> Cek cara hapus dari file 
[resources/views/welcome.blade.php](resources/views/welcome.blade.php) 
dan [routes/web.php](routes/web.php).

> Cek cara membuat composite key di 
[database/migrations/2016_11_25_032715_create_rooms_table.php](database/migrations/2016_11_25_032715_create_rooms_table.php)
