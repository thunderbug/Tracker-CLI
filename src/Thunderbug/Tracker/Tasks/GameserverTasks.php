<?php


namespace Thunderbug\Tracker\Tasks;

use Spatie\Async\Task;
use Thunderbug\QuakeConnection\Master\Server;
use Thunderbug\QuakeConnection\Server\Gameserver;

/**
 * Class GameserverTasks
 * @package Thunderbug\Tracker\Tasks
 */
class GameserverTasks extends Task
{
    private $server;

    /**
     * GameserverTasks constructor.
     * @param Server $server
     */
    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function configure()
    {

    }

    /**
     * @throws \Exception
     */
    public function run()
    {
        $gameserver = new Gameserver($this->server->getIp(), $this->server->getPort());
        $gameserver->getStatus($cvarlist, $playerlist);
        print_r($cvarlist);
    }
}