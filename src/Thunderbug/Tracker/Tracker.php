<?php

namespace Thunderbug\Tracker;

use Spatie\Async\Pool;
use Thunderbug\Tracker\Tasks\GameserverTasks;

class Tracker
{
    /**
     * Run tracker CLI
     */
    public static function run()
    {
        $pool = Pool::create();
        $pool->concurrency(200);

        $servers = Master::getServers("cod4master.activision.com", 20810);
        foreach ($servers as $server)
        {
            $pool->add(new GameserverTasks($server))->catch(function() {});
        }

        $pool->wait();
    }
}