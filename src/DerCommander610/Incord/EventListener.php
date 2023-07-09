<?php
namespace DerCommander610\Incord;

use DerCommander610\Incord\DiscordWebhookAPI\Embed;
use DerCommander610\Incord\DiscordWebhookAPI\Message;
use DerCommander610\Incord\DiscordWebhookAPI\Webhook;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class EventListener implements Listener{

    public function onChat(PlayerChatEvent $event){
        $webhook = new Webhook(Main::getInstance()->getConfig()->get("Webhook-Link"));
        $embed = new Embed();
        $message = new Message();
        $embed->addField($event->getPlayer()->getNameTag() . " says ", $event->getMessage());
        $message->addEmbed($embed);
        $webhook->send($message);
    }
}
