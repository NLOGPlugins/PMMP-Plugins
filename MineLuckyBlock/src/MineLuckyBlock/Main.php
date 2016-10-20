<?php

namespace MineLuckyBlock;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
class Main extends PluginBase implements Listener {
	
	public function onLoad() {
		$this->getLogger()->info(TextFormat::AQUA . "MineLuckyBlock 플러그인을 로드하고 있습니다");
	}
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::AQUA . "MineLuckyBlock 플러그인을 사용할 수 있습니다!");
	}
	
	public function onTouch(PlayerInteractEvent $event) {
		$player = $this->getServer()->getPlayer();
		$item = $this->getServer()->getPlayer()->getInventory()->getItem();
		if ($event->getItem()->getId() == 369) {
			if ($event->getBlock() == 130) {
				switch (mt_rand(0, 10)) {
					case "0":
						$player->sendMessage("§b§o[알림] §7꽝!");
						$item->removeCreativeItem(369);
					case "1":
						$player->sendMessage("§b§o[알림] §7다시 한 번!");
				}//mt_rand 종료
			} //if (Block)문 종료
			if (!($event->getBlock() == 369 )) {
				$player->sendMessage("§b§o[알림] §7엔더상자에 터치해주세요");
			}
		}//if(held) 문 종료
	}
	
	public function onBlock(BlockPlaceEvent $ev) {
		if ($ev->getBlock()->getId() == 130) {
			$ev->getPlayer()->sendMessage("§o§b[알림] §7당신은 이 블럭을 놓을 수 없습니다");
			$ev->setCancelled(true);
			if ($ev->getPlayer()->isOp()) {
				$ev->setCancelled(false);
			}
		}
	}
	public function onHold(PlayerItemHeldEvent $heldev) {
		if ($heldev->getItem() == 130) {
			$heldev->getItem()->setNamedTag("럭키블럭 열쇠");
		}
	}
	public function onDisable() {
		$this->getLogger()->error("MineLuckyBlock 플러그인이 종료됩니다");
	}
}

?>
