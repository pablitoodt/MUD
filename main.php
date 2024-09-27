<?php

use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Map\Map;
use Pyl\Mud\Space;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER
$staurie = new Staurie('My game');
$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);

$menu->configuration([
  "text"=> "Welcome to MUD!",
  "labels"=> [
    "new game"=> "Enter the world",
    "quit"=> "Exit game",
  ]
  ]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/src/Maps',
    'namespace'=>'Pyl\Mud\Maps', 
  ]);

  $stats = new Statistics();
  $stats
    ->addDefault("alcohol blood level", 0)
    ->addDefault("chance", 0)
  ;
  
$character = $container->registerComponent(Map::class);
$character->configuration([
    "statistics" => $stats
  ]);

  
$staurie->run(); //LANCE LE JEU
