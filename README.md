# Borthwick-Catalogue-CSS-theme
A lightly-customised CSS theme for the Borthwick Catalogue, based on the default *arDominion* theme provided with AtoM.

This plugin has been test with AtoM 2.4. To use, down the clone the repo to */usr/share/nginx/atom/plugins* and type

cd /usr/share/nginx/atom/plugins/arBorthwickPlugin

make

To see the changes, type

php symfony cc

systemctl restart php7.0-fpm.service

Then go into the web interface's admin settings > Themes and choose the arBorthwickPlugin theme
