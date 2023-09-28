FROM webdevops/php-apache-dev:8.2

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your application files into the container
COPY . /var/www/html

# Additional setup or configuration steps if needed