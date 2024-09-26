<?php

namespace Pyl\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Doliprane extends Item_Equippable {
  public function name(): string {
    return "Doliprane";
  }

  public function description(): string {
    return "Decrease alcohol level without decrease luck.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array
  {
    return [
      'wisdom' => 5
    ];
  }
}