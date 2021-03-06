<?php

/*
 * ServerAuth v3.0 by EvolSoft
 * Developer: Flavius12
 * Website: https://www.evolsoft.tk
 * Copyright (C) 2015-2018 EvolSoft
 * Licensed under MIT (https://github.com/EvolSoft/ServerAuth/blob/master/LICENSE)
 */

namespace ServerAuth\Events;

use pocketmine\Player;

class ServerAuthRegisterEvent extends ServerAuthEvent {

	public static $handlerList = null;

	/** @var Player */
	private $player;
	
	/** @var string */
	private $password;

	public function __construct(Player $player, $password){
		$this->player = $player;
		$this->password = $password;
	}

	/**
	 * Get player
	 *
	 * @return Player
	 */
	public function getPlayer() : Player {
		return $this->player;
	}
	
	/**
	 * Get password (it can be hashed or not)
	 * 
	 * @return string
	 */
	public function getPassword(){
		return $this->password;
	}
}