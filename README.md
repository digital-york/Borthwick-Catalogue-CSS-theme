# Borthwick-Catalogue-CSS-theme
A lightly-customised CSS theme for the UoY Borthwick Catalogue, based on the default *arDominion* theme provided with AtoM (Access to Memory). This plugin has been tested with AtoM 2.4 and 2.6. 

Usage instructions:

    cd /usr/share/nginx/atom/plugins
    mkdir arBorthwickPlugin
    git clone https://github.com/digital-york/Borthwick-Catalogue-CSS-theme arBorthwickPlugin
    chown -R www-data:www-data arBorthwickPlugin & chmod 755 arBorthwickPlugin
    cd arBorthwickPlugin
    make

To see any recent changes you may have made, you may need to type the following:

    cd ../..
    php symfony cc
    systemctl restart php7.2-fpm

The *arBorthwickPlugin* theme should be selectable from the web interface's admin Settings > Themes.

The theme is deployed through Puppet so the above CLI commands are only really relevant when testing or making changes to the theme.
