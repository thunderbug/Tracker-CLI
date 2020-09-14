# Tracker-CLI
[![Build Status](https://travis-ci.com/thunderbug/TrackerQuakeConnection.svg?branch=master)](https://travis-ci.com/thunderbug/TrackerQuakeConnection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/thunderbug/Tracker-CLI/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/thunderbug/Tracker-CLI/?branch=master)
[![Total Downloads](https://poser.pugx.org/thunderbug/tracker-cli/downloads)](//packagist.org/packages/thunderbug/tracker-cli)
[![Version](https://poser.pugx.org/thunderbug/tracker-cli/version)](//packagist.org/packages/thunderbug/tracker-cli)



The tracker cli is the command interface for getting live information from the master server of the call of duty games. This tool will handle all information from the gameservers to the database part.

## TODO
* Setup database
* Setup composer
* Setup connection to database via a config file
* Create libs to retrieve information from the servers
* ...

## Installation

You can download the library via composer:

```composer log
composer require thunderbug/tracker-quake-connection
```

## Start using

Define the database connection in `config/db.php`<br />
Run in command `vendor/bin/tracker`

### Envoirment variables

`DB_HOST` The hostname or ip of the database<br />
`DB_DATABASE` The database name<br />
`DB_USERNAME` Username of the database connection<br />
`DB_PASSWORD` Password of the database connection  