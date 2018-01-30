# Borthwick-Catalogue-CSS-theme
A lightly-customised CSS theme for the UoY Borthwick Catalogue, based on the default *arDominion* theme provided with AtoM (Access to Memory).

This plugin has been tested with AtoM 2.4. To use, clone the repo to */usr/share/nginx/atom/plugins* and type

    cd /usr/share/nginx/atom/plugins
    chown -R www-data:www-data /usr/share/nginx/atom/plugins/arBorthwickPlugin && chmod 755 /usr/share/nginx/atom/plugins/arBorthwickPlugin
    cd arBorthwickPlugin
    make

To see any recent changes you may have made, you may need to type the following:

    cd ../..
    php symfony cc
    systemctl restart php7.0-fpm.service

The *arBorthwickPlugin* theme should be selectable from the web interface's admin Settings > Themes.

The theme is deployed through Puppet so the above CLI commands are only really relevant for testing purposes.
