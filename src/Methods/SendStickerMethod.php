<?php

namespace WeStacks\TeleBot\Methods;

use WeStacks\TeleBot\Contracts\TelegramMethod;
use WeStacks\TeleBot\Objects\InputFile;
use WeStacks\TeleBot\Objects\Keyboard;
use WeStacks\TeleBot\Objects\Message;
use WeStacks\TeleBot\Objects\ReplyParameters;

/**
 * Use this method to send static .WEBP or [animated](https://telegram.org/blog/animated-stickers) .TGS stickers. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
 *
 * @property string          $business_connection_id      __Required: Optional__. Unique identifier of the business connection on behalf of which the message will be sent
 * @property string          $chat_id                     __Required: Yes__. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int             $message_thread_id           __Required: Optional__. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property InputFile       $sticker                     __Required: Yes__. Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. More information on Sending Files ». Video and animated stickers can't be sent via an HTTP URL.
 * @property string          $emoji                       __Required: Optional__. Emoji associated with the sticker; only for just uploaded stickers
 * @property bool            $disable_notification        __Required: Optional__. Sends the message silently. Users will receive a notification with no sound.
 * @property bool            $protect_content             __Required: Optional__. Protects the contents of the sent message from forwarding and saving
 * @property ReplyParameters $reply_parameters            __Required: Optional__. Description of the message to reply to
 * @property Keyboard        $reply_markup                __Required: Optional__. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */
class SendStickerMethod extends TelegramMethod
{
    protected string $method = 'sendSticker';

    protected string $expect = 'Message';

    protected array $parameters = [
        'bussiness_connection_id' => 'string',
        'chat_id' => 'string',
        'message_thread_id' => 'integer',
        'sticker' => 'InputFile',
        'emoji' => 'string',
        'disable_notification' => 'boolean',
        'protect_content' => 'boolean',
        'reply_parameters' => 'ReplyParameters',
        'reply_markup' => 'Keyboard',
    ];

    public function mock($arguments)
    {
        return new Message([
            'message_id' => '123456789',
            'from' => [
                'id' => '123456789',
                'first_name' => 'First',
                'last_name' => 'Last',
                'username' => 'username',
            ],
            'chat' => [
                'id' => '123456789',
                'first_name' => 'First',
                'last_name' => 'Last',
                'type' => 'private',
            ],
            'date' => '1479168447',
            'sticker' => [
                'file_id' => '123456789',
                'width' => '123',
                'height' => '123',
                'thumbnail' => [
                    'file_id' => '123456789',
                    'width' => '123',
                    'height' => '123',
                ],
                'emoji' => 'emoji',
                'set_name' => 'set_name',
                'mask_position' => [
                    'point' => 'point',
                    'x_shift' => '123',
                    'y_shift' => '123',
                    'scale' => '123',
                ],
                'file_size' => '123',
            ],
            'emoji' => 'emoji',
        ]);
    }
}
