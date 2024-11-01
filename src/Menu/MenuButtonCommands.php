<?php

namespace Telegram\Bot\Menu;

class MenuButtonCommands implements MenuButtonInterface, \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            'type' => 'commands',
        ];
    }

    public function __toString(): string
    {
        return json_encode($this->jsonSerialize());
    }


}