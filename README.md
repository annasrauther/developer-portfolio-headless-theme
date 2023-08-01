# Developer Portfolio - Headless Theme

## Description
The Developer Portfolio - Headless Theme is a custom WordPress theme designed to disable the front end and redirect to the Site URL. This theme is primarily intended for headless WordPress setups where the front end is handled separately using a headless CMS or a static site generator.

## How It Works
The theme consists of a single `index.php` file, which prevents direct access and immediately redirects any incoming requests to the Site URL defined in the WordPress settings.

## Installation
1. Download the `developer-portfolio-headless-theme` folder.
2. Upload the folder to your WordPress themes directory (`wp-content/themes/`).
3. Go to the WordPress admin dashboard and navigate to "Appearance" > "Themes".
4. Activate the "Developer Portfolio - Headless Theme".

## Usage
Once activated, the theme will disable the front end and automatically redirect visitors to the Site URL. This allows you to use WordPress as a headless CMS, managing the content and data while rendering the front end with a separate frontend application or static site generator.

Please ensure you have set the correct Site URL in your WordPress settings. To do this, go to the WordPress admin dashboard and navigate to "Settings" > "General". Update the "WordPress Address (URL)" and "Site Address (URL)" fields as needed.

## Notes
- This theme is intended for use in headless WordPress setups. If you wish to have a traditional WordPress front end, consider using a different theme.
- This theme does not provide any front-end template files as it solely focuses on redirection.

## License
This theme is licensed under the GNU General Public License v2 or later.
