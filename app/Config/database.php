<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour of Cake.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * datasource => The name of a supported datasource; valid options are as follows:
 *		Database/Mysql 		- MySQL 4 & 5,
 *		Database/Sqlite		- SQLite (PHP5 only),
 *		Database/Postgres	- PostgreSQL 7 and higher,
 *		Database/Sqlserver	- Microsoft SQL Server 2005 and higher
 *
 * You can add custom database datasources (or override existing datasources) by adding the
 * appropriate file to app/Model/Datasource/Database. Datasources should be named 'MyDatasource.php',
 *
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * host =>
 * the host you connect to the database. To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database. This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres/Sqlserver specifies which schema you would like to use the tables in. Postgres defaults to 'public'. For Sqlserver, it defaults to empty and use
 * the connected user's default schema (typically 'dbo').
 *
 * encoding =>
 * For MySQL, Postgres specifies the character encoding to use when connecting to the
 * database. Uses database default not specified.
 *
 * unix_socket =>
 * For MySQL to connect via socket specify the `unix_socket` parameter instead of `host` and `port`
 */
class DATABASE_CONFIG {

	var $development = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'us-cdbr-east-03.cleardb.com',
		'login' => 'b85eadea7f676c',
		'password' => '11fd9bdd',
		'database' => 'heroku_9f2a562c4bcc93f',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
	
	var $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'us-cdbr-east-03.cleardb.com',
		'login' => 'b9c78850a0818d',
		'password' => '3a9127c7',
		'database' => 'heroku_084542947a871a7',
		'prefix' => '',
		#'port' => '6199',
		'encoding' => 'utf8',
	);

	public function __construct()
	{
	    if (!$_SERVER['SERVER_NAME'] == 'localhost') {
	        $this->default = $this->development;
	    } else {
	        $this->default = $this->production;
	    }
	}

	#mysql://b85eadea7f676c:11fd9bdd@us-cdbr-east-03.cleardb.com/heroku_9f2a562c4bcc93f?reconnect=true
}
