<?php

namespace Pyl\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Goat extends Npc {
  private $bars = [
    'Pirate'
  ];
  public $barName;

  public function randomBar() : string
  {
    $indexAleatoire = array_rand($this->bars);
    $barName = $this->bars[$indexAleatoire];
    return $barName;
  }

  public function name() : string 
  {
    return "Goat";
  }
  public function description(): string
  {
    return "Goat";
  }
  public function speak(): string|array
  {
    return "Find me if you dare!";
  }
  public function isPresent($bar)
  {
    if ($bar === $this->barName) {
      return true;
    }
  }
}