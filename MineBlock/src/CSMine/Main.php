<?php

namespace MineBlock;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\block\Block;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\entity\Item;
use pocketmine\math\Vector3;

use onebone\economyapi\EconomyAPI;

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
			$num = mt_rand(0, 50);
                        if($num>48)
                                  $this->giveMoneys($event,$player,1000);
                        else if($num >43)
                                  $this->giveMoneys($event,$player,500);
                        else if($num>38)
                                  $this->giveMoneys($event,$player,100);
                        else if ($num > 27)
				  $this->giveMoneys($event,$player,50);
                        else if ($num > 16)
                                  $this->giveMoneys($event,$player,10);
                        else
                                  $this->giveMoneys($event,$player,1);
                        return;
		}
	}
	public function onDisable() {
		$this->getLogger()->info(TextFormat::DARK_AQUA . "CSBlock 플러그인을 비활성화 합니다");
	}
        public function giveMoneys($event, $player, $num) {
                $block = $event->getBlock();
+		$block->getLevel()->setBlock(new Vector3($block->getX(), $block->getY(), $block->getZ()), Block::get(14));
		EconomyAPI::getInstance()->addMoney($player, num);
                $player->removeCreativeItem(Block::get(14));
		$event->getPlayer()->sendMessage($num . "원이 지급되었습니다!");
        }
}

?>
