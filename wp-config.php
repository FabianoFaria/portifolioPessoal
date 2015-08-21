<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_portfoliopessoal');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qa0_cOC6w896JRVyfN@k!|L?;tXzLKy<2.b%; Kf)7E,VuO2X`;TvmqP9y(` IH#');
define('SECURE_AUTH_KEY',  'yb^t5o%G!mEYJm@r;Kl#AtYE5&m f{L423|]w;}Ps0A?aXWxGkst:K*%6_}5ABA%');
define('LOGGED_IN_KEY',    'D=7,ay!ka<T[{B$J3Dw0#s79b&cQU<](|m/*Pjq#8@J;H e/9nzd}I@G-xyb#{`a');
define('NONCE_KEY',        'iPs*f,WFl$t!JfytyP:;D!g9=gJ@qzQrDx/|e:I=7=xRB!Ao|mi=?^j:)Hg0D5uy');
define('AUTH_SALT',        'Y=>yg%Q4<$qE;VI}f##~9,.SZf5oK:2rU6+*?ox-Hchu?O+5W[Pb$laxqJf9FX[O');
define('SECURE_AUTH_SALT', 'mQZ^M$`&GQ`A?NQ: ,_m<sInLg^CNO>Rqhy;Z^fnqaZT2xJPRWb[x9poo*IP/Sfv');
define('LOGGED_IN_SALT',   'Nukf0vZX+jK1KrY<uX<a,llTn;lgb }<TP:z^GZ%QD dIXXrP?JxmD>-w/yqVt D');
define('NONCE_SALT',       'e`:kdLJTO-g?~1:>at|WvxC>7N`pF2Nah-w[,u0rI 8L.LXir~-~i#m;d/SxwaBG');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
