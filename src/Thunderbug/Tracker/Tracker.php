<?php

namespace Thunderbug\Tracker;

use Spatie\Async\Pool;
use Medoo\Medoo;
use Thunderbug\Tracker\Env\EnvHandler;
use Thunderbug\Tracker\Tasks\GameserverTasks;

class Tracker
{
    protected static $mysql;

    /**
     * Run tracker CLI
     */
    public static function run()
    {
        //Load environment variables into the application
        new EnvHandler();

        //Medoo connect (sql connection)
        self::$mysql = new Medoo([
            "database_type" => "mysql",
            "database_name" => EnvHandler::$db_database,
            "server" => EnvHandler::$db_host,
            "username" => EnvHandler::$db_username,
            "password" => EnvHandler::$db_password
        ]);

        //Pool generation
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