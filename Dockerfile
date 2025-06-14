

```Dockerfile
Utilise une image officielle de PHP avec Apache
FROM php:8.1-apache

Copie tous les fichiers du projet dans le dossier web d’Apache
COPY . /var/www/html/

Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

Active le module rewrite d’Apache si nécessaire (utile pour certains CMS)
RUN a2enmod rewrite

Expose le port 80
EXPOSE 80
`''
