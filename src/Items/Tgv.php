<?php

namespace Pyl\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Tgv extends Item_Equippable {
  public function name(): string {
    return "Tgv";
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
      'chance' => +30,
      'alchohol blood level' => +25
    ];
  }
}