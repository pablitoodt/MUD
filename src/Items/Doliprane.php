<?php

namespace Pyl\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Doliprane extends Item_Equippable {
  public function name(): string {
    return "Doliprane";
  }

  public function description(): string {
    return "Reduces blood alcohol content without reducing luck.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array
  {
    return [
      'chance' => +5,
      'alchohol blood level' => -20
    ];
  }
}