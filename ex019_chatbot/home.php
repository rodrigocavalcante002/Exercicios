<h1>home</h1>
<a href="login.php">Fazer login</a>
<?php 
require 'vendor/autoload.php';
require 'vendor/botman/botman/src/BotMan.php';
use BotMan\BotMan\BotMan; 
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

var_dump($this->config);
$botman = BotManFactory::create($config);

$botman->hears('Oi', function (BotMan $bot) {
    $bot->reply('Olá! Como posso ajudar você?');
});

$botman->listen();
?>