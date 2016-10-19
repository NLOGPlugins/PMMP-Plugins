<?php

namespace chansol\PreventDamage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\Player;
use pocketmine\block\Lava;

class PreventDamage extends PluginBase implements Listener {

  public $config;
  public $configData;

  public function onEnable() {
     @mkdir ($this->getDataFolder());
		
		$this->config = new Config ( $this->getDataFolder () . "setting.yml", Config::YAML, [
"# Prevent-Lava-Damage는 용암에 의한 데미지 보호 설정입니다. on이 아니라면 보호되지 않습니다",
"Prevent-Lava-Damage" => "on",
"# Prevent-Fall-Damage는 떨어짐 의한 데미지 보호 설정입니다. on이 아니라면 보호되지 않습니다",
"Prevent-Fall-Damage" => "on",
"# Prevent-Fire-Damage는 불에 의한 데미지 보호 설정입니다. on이 아니라면 보호되지 않습니다",				
"Prevent-Fire-Damage" => "on"
     ] );
		$this->configData = $this->config->getAll ();

		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }


	public function save() {
		$this->config->setAll ($this->configData);
		$this->config->save();
	}
	public function onEntityDamage(EntityDamageEvent $ev) {
		if ($ev->getEntity() instanceof Player) {
			if ($this->configData["Prevent-Lava-Damage"] == "on") {
				if ($ev->getCause() == EntityDamageEvent::CAUSE_LAVA) {
					$ev->setCancelled(true);
				}
			}
		}
		if ($ev->getEntity() instanceof Player) {
			if ($this->configData["Prevent-Fall-Damage"] == "on") {
				if ($ev->getCause() == EntityDamageEvent::CAUSE_FALL) {
					$ev->setCancelled(true);
				}
			}
		}
		if ($ev->getEntity() instanceof Player) {
			if ($this->configData["Prevent-Fire-Damage"] == "on") {
				if ($ev->getCause() == EntityDamageEvent::CAUSE_FIRE) {
					$ev->setCancelled(true);
				}
			}
		}
	}
}

?>