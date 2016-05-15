<?php

namespace Mcrafterss;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;
use pocketmine\utils\Utils;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

	private static $instance = null;
	
	private $langList = [
		"def" => "English",
		"en" => "English",
		"fr" => "Français",
		"nl" => "Nederlands",
	];
	
	public function getPlayerLang($player)
	
	public function setPlayerLang($player)
	
	public function Translate($player, $message)
	$lang = $player->getPlayerLang($player);
	if $lang = NL
	$this->NL->get->$message
	
	public function sendMessage($message)
