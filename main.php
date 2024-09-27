<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Container;
use Pyl\Mud\Space;
use Jugid\Staurie\Staurie;
use Pyl\Mud\Npcs\Goat;
use Pyl\Mud\NpcsBlueprint;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER
$staurie = new Staurie('My game');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Inventory::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);

$menu->configuration([
    "text"=> "Welcome to MUD!",
    "labels"=> [
    "new_game"=> "Enter the world",
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
$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
    "statistics" => $stats
]);


$staurie->run(function(Container $container) {
    $blueprints = $container->gets('blueprint');

    $bars = array_map(function(Blueprint $blueprint) {
        return $blueprint->name();
    }, $blueprints);

    $indexAleatoire = array_rand($bars);
    $barName = $bars[$indexAleatoire];

    foreach($blueprints as $blueprint) {
        if($blueprint->name() === $barName) {
            if(!$blueprint instanceof NpcsBlueprint) {
                echo "Impossible car pas de NPCS pour " . $blueprint->name();
                return;
            }

            $blueprint->npcs[] = new Goat();
        }
    }
}); //LANCE LE JEU

