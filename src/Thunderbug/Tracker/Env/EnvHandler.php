<?php
namespace Thunderbug\Tracker\Env;

/**
 * Class EnvHandler
 * @package Thunderbug\Tracker\Env
 */
class EnvHandler
{
    public static $db_host;
    public static $db_database;
    public static $db_username;
    public static $db_password;

    /**
     * EnvHandler constructor.
     */
    public function __construct()
    {
        $this->checkEnvironmentVariables();
    }

    /**
     * Load all the environment variables into the php application
     */
    private function checkEnvironmentVariables()
    {
        $this->checkEnvironmentVariable("DB_HOST", self::$db_host, "localhost");
        $this->checkEnvironmentVariable("DB_DATABASE", self::$db_database, "tracker");
        $this->checkEnvironmentVariable("DB_USERNAME", self::$db_username, "tracker");
        $this->checkEnvironmentVariable("DB_PASSWORD", self::$db_password, "tracker");
    }

    /**
     * Retrieve an variable from the docker environment
     * @param string $var Variable name from the environment
     * @param string $local Local variable in the class
     * @param string $defaultValue Default varlue of the variable
     */
    private function checkEnvironmentVariable(string $var, string &$local, string $defaultValue)
    {
        if(getenv($var) === false) {
            $local = $defaultValue;
        } else {
            $local = getenv($var);
        }
    }
}