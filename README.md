# Borthwick-Catalogue-CSS-theme
A lightly-customised CSS theme for the UoY Borthwick Catalogue, based on the default *arDominion* theme provided with AtoM (Access to Memory). This plugin has been tested with AtoM 2.7.

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
    systemctl restart php7.4-fpm.service

The *arBorthwickPlugin* theme should be selectable from the web interface's admin Settings > Themes.

The theme is deployed through Puppet so the above CLI commands are only really relevant when testing or making changes to the theme.

Note that this theme — as per the *arDominion* theme — is incompatible with less >= 2.0. Please use less 1.x. Further information on Theming can be found at https://www.accesstomemory.org/en/docs/2.7/admin-manual/customization/theming/

Note also that the [atom-york](https://github.com/Jimadine/atom-york/tree/stable/2.7.x/plugins) repo embeds this theme as a `git submodule`. When changes to the theme are pushed upstream, the `atom-york` repo can get these changes by running `git submodule update --remote` from the root of the `atom-york` repo. You'll then notice when you run `git status` that `git` has tracked the change to the submodule git commit ref. You'll want to then commit this change.

### Repository visibility

This GitHub repository is intentionally public, so that the theme can be automatically downloaded and deployed without the additional complexities associated with access to private repositories.
