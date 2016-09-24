<?php

namespace OPcolorChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerChatEvent;
class Main extends PluginBase implements Listener {
	public function onLoad() {
		$this->getLogger()->info(TextFormat::AQUA . "OP색깔채팅 플러그인을 로드하고 있습니다");
	}
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::AQUA . "OP색깔채팅 플러그인을 사용할 수 있습니다!");
	}
	public function PlayerChat(PlayerChatEvent $event) {
		$event->setFormat(TextFormat::WHITE);
		if ($event->getPlayer()->isOp())
			$event->setFormat(TextFormat::AQUA);
	}
	public function onDisable() {
		$this->getLogger()->info(TextFormat::DARK_AQUA . "OP색깔채팅 플러그인을 비활성화 합니다");
	}
}

?>
