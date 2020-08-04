<?php


namespace Thunderbug\Tracker;


use Thunderbug\QuakeConnection\Master\Master as MasterLib;

/**
 * Class Master
 * @package Thunderbug\Tracker
 */
class Master
{
    /**
     * Get all servers that are listed in the master server
     * @param string $server
     * @param int $port
     * @return array
     */
    public static function getServers(string $server, int $port) : array
    {
        $master = new MasterLib($server, $port);
        return $master->getServerList();
    }
}