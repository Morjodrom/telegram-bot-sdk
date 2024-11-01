<?php

namespace Telegram\Bot\Menu;

class MenuButtonDefault implements MenuButtonInterface, \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            'type' => 'default',
        ];
    }

    public function __toString(): string
    {
        return json_encode($this->jsonSerialize());
    }
}