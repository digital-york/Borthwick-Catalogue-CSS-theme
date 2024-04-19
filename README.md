# Borthwick-Catalogue-CSS-theme
A lightly-customised Bootstrap 5 CSS theme for the UoY Borthwick Catalogue, based on the default *arDominionB5* theme provided with AtoM (Access to Memory). This plugin has been tested with AtoM 2.8.1.

Based on [artefactual-labs/arThemeB5Plugin](https://github.com/artefactual-labs/arThemeB5Plugin).

Commands for deploying the theme:
```
cd /usr/share/nginx/atom/plugins
git clone --depth 1 --branch Bootstrap5 --single-branch https://github.com/digital-york/Borthwick-Catalogue-CSS-theme arBorthwickB5Plugin
chown -R www-data:www-data arBorthwickB5Plugin
cd arBorthwickB5Plugin
rm -rf .git
rm .gitignore README.md
cd ../..
npm install
npm run build
php symfony cc
```
