<?php

namespace Pyl\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Vodka extends Item_Equippable {
  public function name(): string {
    return "Vodka";
  }

  public function description(): string {
    return "Drink to increase your chances of finding the goat.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array
  {
    return [
      'chance' => +15,
      'alchohol blood level' => +10
    ];
  }
}