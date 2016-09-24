<?php

namespace MineBlock;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\block\BlockBreakEvent;
use onebone\economyapi\EconomyAPI;
use ifteam\SimpleArea\SimpleArea;
use pocketmine\entity\Item;
class Main extends PluginBase implements Listener {
	public function onLoad() {
		$this->getLogger()->info(TextFormat::AQUA . "CSBLOCK 플러그인을 로드하고 있습니다");
	}
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::AQUA . "CSBLOCK 플러그인을 사용할 수 있습니다!");
	}
	public function BreakBlock(BlockBreakEvent $event) {
		$player = $event->getPlayer();
		if ($event->getBlock()->getId() == 14) {
			switch (mt_rand(0, 50)) {
				case "0":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "1":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "3":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "4":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "5":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "6":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "7":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "8":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "9":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "10":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "11":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "12":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "13":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "14":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "15":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
				case "16":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "17":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "18":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "19":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "20":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "21":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "22":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "23":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "24":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "25":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "26":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
				case "27":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "28":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "29":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "30":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "31":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "32":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "33":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "34":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "35":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "36":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "37":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
				case "38":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 100);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("100원이 지급되었습니다!");
				case "39":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 100);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("100원이 지급되었습니다!");
				case "40":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 100);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("100원이 지급되었습니다!");
				case "41":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 100);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("100원이 지급되었습니다!");
				case "42":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 100);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("100원이 지급되었습니다!");
				case "43":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 500);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("500원이 지급되었습니다!");
				case "44":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 500);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("500원이 지급되었습니다!");
				case "45":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 500);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("500원이 지급되었습니다!");
				case "46":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 500);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("500원이 지급되었습니다!");
				case "47":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 500);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("500원이 지급되었습니다!");
				case "48":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1000);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1000원이 지급되었습니다!");
				case "49":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1000);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1000원이 지급되었습니다!");
				case "50":
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1000);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1000원이 지급되었습니다!");
				return;
				break;
			}
		}
	}
	public function onDisable() {
		$this->getLogger()->info(TextFormat::DARK_AQUA . "CSBlock 플러그인을 비활성화 합니다");
	}
}

?>
