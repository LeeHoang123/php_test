# Sử dụng PHP phiên bản 8.0 chính thức từ Docker Hub
FROM php:8.0-cli

# Thiết lập thư mục làm việc trong container
WORKDIR /var/www/html

# Sao chép toàn bộ mã nguồn của bạn vào container
COPY . .

# Cài đặt các tiện ích mở rộng PHP nếu cần (tùy chỉnh theo nhu cầu)
# RUN docker-php-ext-install pdo pdo_mysql

# Mở cổng nếu bạn cần sử dụng với ứng dụng web
# EXPOSE 80

# Lệnh mặc định để chạy file PHP (index.php)
CMD [ "php", "index.php" ]
