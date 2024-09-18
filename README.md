# Template

## Distrobox Setup

```bash
distrobox create --image debian:latest --name template --init --additional-packages "systemd libpam-systemd"
distrobox enter template

sudo apt install apache2 php libapache2-mod-php mariadb-server php-mysql php-curl php-gd php-intl php-json php-mbstring php-xml php-zip git nano

git config --global user.name "clementfavarel"
git config --global user.email "pl.kode.pro@gmail.com"

sudo nano /etc/php/8.2/apache2/php.ini

sudo systemctl start mariadb
sudo systemctl enable mariadb
sudo mysql_secure_installation
sudo mariadb
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
QUIT;

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer

curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.0/install.sh | bash
nvm install 22

composer create-project laravel/laravel template
```
