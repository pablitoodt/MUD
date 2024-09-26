<?php

namespace Src\Npcs;

use Jugid\Staurie\Game\Npc;

class Npcs extends Npc {
  public function name() : string 
  {
    return "The name of the goat is 'La Chèvre'";
  }
  public function description(): string
  {
    return "'La Chèvre' is a goat";
  }
  public function speak(): string|array
  {
    return "You find me! You are a winner!";
  }
}