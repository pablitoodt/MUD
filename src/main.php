<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Pyl\Mud\Space;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('My game');
$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
  'title' => 'MUD',
  'text' => 'Welcome to MUD!',
  'labels' => [
    'new game' => 'Enter the world',
    'quit' => 'Exit game',
  ]
]);

$staurie->run(); //LANCE LE JEU
