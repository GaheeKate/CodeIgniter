1. Creation of dynamic property CI_URI::$config is deprecated
   error from codeigniter

> https://stackoverflow.com/questions/75122899/creation-of-dynamic-property-ci-uriconfig-is-deprecated


2. Route connecting error
   create .htaccess
   > RewriteEngine on
   >
   > RewriteBase /
   >
   > RewriteCond %{REQUEST_FILENAME} !-f
   >
   > RewriteCond %{REQUEST_FILENAME} !-d
   >
   > RewriteRule ^(.*)$ index.php?/$1 [L]
   >
