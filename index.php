<?php
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
require 'classes/Database.php';
require 'classes/MessageGraphBuilder.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true,
));
$template = $twig->loadTemplate('endpoint.html');
if(isset($_GET['frontend'])){
  $messageBuilder = new MessageGraphBuilder();
  $template = $twig->loadTemplate('frontend.html');
  return print($template->render(array(
    'messages' => Database::arrayQuery('SELECT * FROM messages'),
  )));
}
return print($template->render(array()));
