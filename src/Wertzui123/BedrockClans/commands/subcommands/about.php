<?php

namespace Wertzui123\BedrockClans\commands\subcommands;

use pocketmine\command\CommandSender;

class about extends Subcommand
{

    public function canUse(CommandSender $sender): bool
    {
        return true;
    }

    public function execute(CommandSender $sender, array $args)
    {
        $sender->sendMessage("§cBedrock§bClans §awas written by Wertzui123. You are using version §73.4§a. Thanks for downloading (:");
    }

}