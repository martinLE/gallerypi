Simple slideshow that refreshes the image list frequently. Made with jQuery, Fancybox, Nginx and PHP.

## Installation

Install PHP-FPM & Nginx, clone this repo, add folder for images
```bash
sudo -s
apt-get update && apt-get install -y php7.0-fpm nginx-full
cd /var/www
git clone https://github.com/martinLE/gallerypi.git
cd gallerypi
sudo cp config/default /etc/nginx/sites-available/.
sudo service nginx reload
mkdir -m777 src/images
```

Copy your images into the `images` folder, they wil be picked up with the next slideshow refresh.
