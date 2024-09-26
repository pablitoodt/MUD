<?php

namespace Pyl\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Theo extends Npc {
  public function name() : string 
  {
    return "Theo";
  }
  public function description(): string
  {
    return "Tours's citizen";
  }
  public function speak(): string|array
  {
    return "Hello there!";
  }
}