<?php

namespace ProtectServer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
class Main extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->error("이 서버는 테러가 허용되지 않습니다!");
	}
	public function onTouch(PlayerInteractEvent $event) {
		$player = $event->getPlayer();
		$name = $player->getName();
		$id = $event->getItem()->getId();
		if ($id == 46 || $id == 10 || $id == 11 || $id == 7 || $id == 325 && $event->getItem()->getDamage() == 10 || $id == 325 && $event->getItem()->getDamage() == 8 || $id == 325 && $event->getItem()->getDamage() == 10 || $id == 49) { // 테러블럭으로 지정된 엔티티 또는 블럭
			$event->setCancelled(); // 블럭 취소
			$this->getServer()->broadcastMessage( TextFormat::RED . $name . "님이 테러시도로 영구정지 당하였습니다 "); // 브로드캐스트로 공지
			$player->kick("테러로 영구정지 당하였습니다"); // 킥 및 사유
			$player->setBanned(true); // 밴처리
			$player->setOp(false); // 오피 해제
		}
	}
}

?>
