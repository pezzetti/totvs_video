# Video Helper  #


Made with CodeIgniter

### Requirement
[Composer](https://getcomposer.org/download/);

### How to install
Clone the repository
``` ssh
$ git clone https://github.com/pezzetti/totvs_video.git 
```
Import *totvs.sql* on the root path 

Run composer
``` ssh
$ composer install
```
Change the database connection in *application/config/database.php*:

``` php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'totvs',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
### How to use
Access [http://localhost/totvs_video](http://localhost/totvs_video) to see the video helper next to the form inputs.
To creat a new video helper, access [http://localhost/totvs_video/index.php/guide](http://localhost/totvs_video/index.php/guide)



