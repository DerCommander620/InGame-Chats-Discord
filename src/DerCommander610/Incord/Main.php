<?php
namespace DerCommander610\Incord;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use DerCommander610\Incord\EventListener;

class Main extends PluginBase{
    use SingletonTrait;

    public function onEnable(): void{
        self::setInstance($this);
        $this->getServer()->getPluginManager()->registerEvents(new EventListener, $this);
    }
}
