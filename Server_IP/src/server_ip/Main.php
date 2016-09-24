<?php

namespace Server_IP;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
class Main extends PluginBase implements Listener {
	public function onLoad() {
		$this->getLogger()->info(TextFormat::AQUA . ">>> 서버 주소:포트 명령어 플러그인 로딩 중...");
	}
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::DARK_AQUA . ">>> 서버주소:포트 명령어 플러그인 사용 가능!");
	}
	public function onCommand(CommandSender $player, Command $command, $label, array $args) {
		$ip = $this->getServer()->getIp();
		$port = $this->getServer()->getPort();
		if (strtolower( $command->getName () ) == "server")
			$player->sendMessage(TextFormat::BLUE . "서버 주소:포트  " .TextFormat::DARK_BLUE .  $ip .":" . $port);
	}
}

?>