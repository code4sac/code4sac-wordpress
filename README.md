#Code4Sac website

## Installing this repo
1. Clone this repo
2. Rename coders/wp-config-sample.php coders/wp-config.php
3. Configure MySQL Settings for local config
4. Generate Keys and Salts at (https://api.wordpress.org/secret-key/1.1/salt/) and insert into coders/wp-config.php
5. Export MySQL database from main site
6. Import MySQL database to local MySQL

### Plugins
#### wp-brigade-widgets (https://github.com/code4sac/wp-brigade-widgets)
The widgets are ignored by .gitignore since they are a seperate github repository.
To install wp-brigade-widgets in this repo, go to coders/wp-content/plugins and clone the wp-brigade-widgets repo there.
