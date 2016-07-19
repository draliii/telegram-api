<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Methods;

use unreal4u\TelegramAPI\Abstracts\TelegramMethods;

/**
 * Use this method to unban a previously kicked user in a supergroup. The user will not return to the group
 * automatically, but will be able to join via link, etc. The bot must be an administrator in the group for this to
 * work. Returns True on success.
 *
 * Objects defined as-is july 2016
 *
 * @see https://core.telegram.org/bots/api#unbanchatmember
 */
class UnbanChatMember extends TelegramMethods
{
    /**
     * Unique identifier for the target group or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public $chat_id = '';

    /**
     * Unique identifier of the target user
     * @var int
     */
    public $user_id = 0;

    public static function bindToObjectType(): string
    {
        return 'Custom\\ResultBoolean';
    }
}