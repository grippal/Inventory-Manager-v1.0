<?php
	/**
	 * Header structural HTML markup that will be imported to every page.
	 *
	 * @package ${NAMESPACE}
	 * @since   1.0.0
	 * @author  Luke Grippa
	 * @link    https://www.LukeGrippa.com
	 * @license GNU General Public License 2.0+
	 */

	namespace UniversalSeafood\InventoryManager\structure;

	include_once 'lib/mysql/dbh.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Inventory Management Tool</title>
</head>
<body>

<div class="grid-wrapper">
    <header>
        <h1>Inventory Manager</h1>
    </header>

