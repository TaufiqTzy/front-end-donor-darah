# Menggunakan Bitnami Laravel sebagai base image
FROM bitnami/laravel:latest

# Set Working Directory
WORKDIR /app

# Salin semua file dari direktori lokal ke dalam container
COPY . .

# Install dependensi PHP menggunakan Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Mengatur permission untuk storage dan bootstrap/cache
RUN chmod -R 775 /app/storage /app/bootstrap/cache

# Jalankan perintah migrasi database (Opsional)
# RUN php artisan migrate --force

# Ekspos port 8000 untuk akses aplikasi
EXPOSE 8085

# Jalankan perintah untuk memulai server Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8085"]
