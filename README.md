# Template

## Distrobox Setup

CES ETAPES NE SONT PAS NECESSAIRES SI VOUS DISPOSEZ D'UNE VM DE DEVELOPPEMENT FANLAB

Créer la distrobox (environnement de développement)

```bash
distrobox create --image debian:latest --name template --init --additional-packages "systemd libpam-systemd"
```

Se connecter à la distrobox

```bash
distrobox enter template
```

### Installer les paquets nécessaires pour l'utilisation de Laravel

```bash
sudo apt install apache2 php libapache2-mod-php mariadb-server php-mysql php-curl php-gd php-intl php-json php-mbstring php-xml php-zip git nano
```

### Configuration du profil git

```bash
git config --global user.name "Gitfanlab"
git config --global user.email "fanlab.toulon@gmail.com"
```

### Configuration du serveur de bases de données

```bash
sudo systemctl start mariadb
sudo systemctl enable mariadb
sudo mysql_secure_installation
```

### Aux questions posées, répondre :

- Entrer
- n
- Entrer => admin => admin
- Entrer
- Entrer
- Entrer
- Entrer

### Configuration de l'utilisateur du SGBDR

```bash
sudo mariadb
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
QUIT;
```

### (Installer composer)[https://getcomposer.org/download/]

```bash
sudo mv composer.phar /usr/local/bin/composer
```

### Installer NodeJS

Copier la commande (curl)[https://nodejs.org/en/download/package-manager] puis installez la version LTS.

N'oubliez pas d'executer la commande pour charger nvm (commande affichée dans le terminal après l'installation)

cd Documents

```bash
git clone lien_github_du_projet
```

## Installation de l'application

```bash
cd nom_du_projet
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

### Avant de lancer le projet, assurez-vous de modifier les valeurs du fichier .env

### Ensuite, lancez le projet grâce à ces deux commandes qui tourneront dans 2 terminaux différents pendant toute la durée du développement

```bash
npm run dev
php artisan serve
```
