<?php

namespace Yasuo\exampleplugin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\ServerCommandEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class ExamplePlugin extends PluginBase implements Listener{
	public function onCommand(CommandSender $sender, Command $command, $label, array $params){ // PluginBase::onCommand(CommandSender, Command, string, array) 의 상속 함수
		switch($command->getName()){ // 명령어의 구분
			case "돈": // 명령어
			$sender->sendMessage("
§o§f [§b 알림 §f] §7돈 명령어는 /pay 플레이어닉네임 돈수량 으로 돈을 보내고 /seemoney 닉네임 으로 플레이어의 돈을 볼수 있습니다.");
			return true;
			case "상점": // 명령어
			$sender->sendMessage("§o§f [§b 알림 §f] §7 구매또는 판매를 할려면 원하는 아이템이 있는 액자밑 표지판을 더블 터치하면 됩니다.");
			return true;
			case "토지": // 명령어
			$sender->sendMessage("§o§f [§b 알림 §f] §7유저가 사용하실 수있는 명령어는 /땅 공유, /섬 구매 , /섬 이동 번호 등등의 섬명령어를 쓰실수 있습니다.");
			return true;
		}
	}

	public function onLoad(){
		$this->getLogger()->info("§a[서버]플러그인이 로드 되었습니다");
	}

	public function onEnable(){
		$this->getLogger()->info("§a[서버]플러그인이 활성화 되었습니다");
	}
	
	public function onDisable(){
		$this->getLogger()->emergency("§a[서버]플러그인이 비활성화 되었습니다");
	}
	
/*	public function onIssueCommandEvent(ServerCommandEvent $event){
		$this->getLogger()->info($event->getSender()->getName()." issued command /".$event->getCommand());
	}
	
	public function onPlayerInteract(PlayerInteractEvent $event){
		$this->getLogger()->emergency($event->getPlayer()->getName()." touched block ID : ".$event->getBlock()->getID());
	}*/
}
