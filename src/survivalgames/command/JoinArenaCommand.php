<?php

namespace survivalgames\command;

use survivalgames\BaseCommand;

class JoinArenaCommand extends BaseCommand {

	public function __construct() {
		parent::__construct("join", "Joins an arena.", "/sg join <номер арены>", ["j"]);
	}
	
	public function execute(CommandSender $sender, $alias, array $args) {
		
	}
	
}
