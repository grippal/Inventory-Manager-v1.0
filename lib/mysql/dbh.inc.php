<?php
	/**
	 * Database handler
	 *
	 * @package ${NAMESPACE}
	 * @since   1.0.0
	 * @author  Luke Grippa
	 * @link    https://github.com/grippal?tab=repositories
	 * @license GNU General Public License 2.0+
	 */

	namespace UniversalSeafood\InventoryManager\mysql;

	$dbServername = "127.0.0.1";
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "universal_seafood";

	// Create connection
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, '8889');

	// Check connection
	if (!$conn) {
		die("Connection to MySQL database " . $dbName . " failed: " . mysqli_connect_error());
	}
	echo "Connection to MySQL database " . $dbName . " successful";