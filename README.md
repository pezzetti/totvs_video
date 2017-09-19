# Totvs Video Teste #


Utilizado Framework CodeIgniter

### Requisitos
Instalar o [Composer](https://getcomposer.org/download/), que será usado para gerenciar as dependências do projeto.

### Instalação padrão
Faça o clone do projeto dentro do www/htdocs do seu apache:
``` ssh
$ git clone https://github.com/pezzetti/totvs_video.git 
```
Importe *totvs.sql* que se encontra dentro da raiz do projeto para o seu MySql.

Instale as dependências via [Composer](https://getcomposer.org/download/):
``` ssh
$ composer install
```
Altere as configurações em *application/config/database.php*:
Exemplo:
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
### Utilizando o projeto
Após a preparação de ambiente, e de clonar o projeto, o mesmo estará disponível em  em [http://localhost/totvs_video](http://localhost/totvs_video) caso tenha feito a instalação padrão.
Para visualizar o painel de cadastro de links acesse [http://localhost/totvs_video/index.php/guide](http://localhost/totvs_video/index.php/guide)



