<?php

namespace WeStacks\TeleBot\Methods;

use WeStacks\TeleBot\Contracts\TelegramMethod;
use WeStacks\TeleBot\Objects\Keyboard;
use WeStacks\TeleBot\Objects\Message;
use WeStacks\TeleBot\Objects\ReplyParameters;

/**
 * Use this method to send an animated emoji that will display a random value. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
 *
 * @property string          $business_connection_id      __Required: Optional__. Unique identifier of the business connection on behalf of which the message will be sent
 * @property string          $chat_id                     __Required: Yes__. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int             $message_thread_id           __Required: Optional__. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property string          $emoji                       __Required: Optional__. Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, or “🎰”. Dice can have values 1-6 for “🎲” and “🎯”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
 * @property bool            $disable_notification        __Required: Optional__. Sends the message silently. Users will receive a notification with no sound.
 * @property bool            $protect_content             __Required: Optional__. Protects the contents of the sent message from forwarding
 * @property ReplyParameters $reply_parameters            __Required: Optional__. Description of the message to reply to
 * @property Keyboard        $reply_markup                __Required: Optional__. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */
class SendDiceMethod extends TelegramMethod
{
    protected string $method = 'sendDice';

    protected string $expect = 'Message';

    protected array $parameters = [
        'bussiness_connection_id' => 'string',
        'chat_id' => 'string',
        'message_thread_id' => 'integer',
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
            'dice' => [
                'emoji' => '🎲',
                'value' => '1',
            ],
        ]);
    }
}
