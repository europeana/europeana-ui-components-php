**This project is deprecated and not maintained anymore**

# europeana-ui-components-php
poc for including [europeana ui-components](https://github.com/europeana/ui-components) in a php project

## installing
requires [composer](https://getcomposer.org/doc/00-intro.md)

1. clone the repo into a project directory
   * `git clone https://github.com/dan-nl/europeana-ui-components-php /path/to/your/project`

1. use composer to install dependencies
   * `cd /path/to/your/project`
   * `composer install`

1. here is an example vhost configuration for apache 2.2, which will require an entry in the `/etc/hosts` file `127.0.0.1 ui-components-test`
  ```apache
  <VirtualHost *:80>
	  ServerName ui-components-test
	  DocumentRoot "/path/to/your/project/www"
	  ErrorLog "/path/to/your/error.log"
	  CustomLog "/path/to/your/access.log" common
	  SetEnv PHP_ENV "development"
	  <Directory "/path/to/your/project/www">
		  Options Indexes FollowSymLinks
		  AllowOverride All
		  Order allow,deny
		  Allow from all
	  </Directory>
  </VirtualHost>
  ```

1. restart apache
   * mac - `apachectl restart`
   * ubuntu - `sudo /etc/init.d/apache2 restart`

1. open a browser to [http://ui-components-test/](http://ui-components-test/)
