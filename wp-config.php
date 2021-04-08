<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'missaofm' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rsdy(cb!L-&0W|<##)Dy8lPBLIM=,]F~X#%.LC:+bkY@b @tTDs}}F;z]sAvu$F*' );
define( 'SECURE_AUTH_KEY',  '1<n%yUzpa9pN[a$*N&^bMqyVC}#bBU>H^G.q8TF_T=tffrTF*DZy@l|UJd;-5f*I' );
define( 'LOGGED_IN_KEY',    'y_Xxhxl5]E)o,U.eki^17Z+] HRc;Nm7Hd&3;%V~:H$IjB=S#P;|C<xY3$/=pnbT' );
define( 'NONCE_KEY',        'N>Y0)zy4^rN9L6Vk4fdlQ|me)h6+d}>fff*M0Qq}V4Vq%Gde6LJeur<#P3.g7!9Q' );
define( 'AUTH_SALT',        '#C5yew_4>e)vzN9>~|b9O/jQ7^^>,h{NY).zacWBa@/2lOXxZ`9hb({/i^=DGS6u' );
define( 'SECURE_AUTH_SALT', ')+.@dkCm% c;Ron|7.~oS|7-bj$1$s:<bY`(vdb:/u:X/b@6>)MMY!<&bYf*$b`T' );
define( 'LOGGED_IN_SALT',   's%&Ru,I-S.h}+)1+o%p+LjuRqrxJ{lZC!(=_bo0^$8%P,Uj;G_uHSN~pBK1BKQ>s' );
define( 'NONCE_SALT',       '{&HmN]~a2~ 2wt9HAjXc]~*wZ,FYo7y(Z-xy5Bvb1~UkLMW2|zIs:{g${_[Z(+>K' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'msfm_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
