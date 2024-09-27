<?php

namespace Pyl\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class EauDeVie extends Item_Equippable {
  public function name(): string {
    return "Eau de vie";
  }

  public function description(): string {
    return "Gives you one last chance to find the goat.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array
  {
    return [
      'chance' => 90
    ];
  }
}