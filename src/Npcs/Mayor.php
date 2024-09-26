<?php

namespace Pyl\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Mayor extends Npc {
  public function name() : string 
  {
    return "Mayor";
  }
  public function description(): string
  {
    return "Tours's mayor";
  }
  public function speak(): string|array
  {
    return "Hello my dear citizen!";
  }
}