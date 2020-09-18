<?php

namespace WeStacks\TeleBot\Methods\Stickers;

use WeStacks\TeleBot\Helpers\TypeCaster;
use WeStacks\TeleBot\Interfaces\TelegramMethod;
use WeStacks\TeleBot\Objects\Stickers\StickerSet;

class GetStickerSetMethod extends TelegramMethod
{
    protected function request()
    {
        return [
            'type'      => 'POST',
            'url'       => "https://api.telegram.org/bot{$this->token}/getStickerSet",
            'send'      => $this->send(),
            'expect'    => StickerSet::class
        ];
    }

    private function send()
    {
        $parameters = [
            'name'                   => 'string'
        ];

        $object = TypeCaster::castValues($this->arguments[0] ?? [], $parameters);
        return [ 'json' => TypeCaster::stripArrays($object) ];
    }
}