<?php
	/**
	 * Description.
	 *
	 * @package ${NAMESPACE}
	 * @since   1.0.0
	 * @author  Luke Grippa
	 * @link    https://github.com/grippal?tab=repositories
	 * @license GNU General Public License 2.0+
	 */
	include_once 'dbh.inc.php';

	$type = $_POST['type'];
	echo $type;
	$size = $_POST['size'];
	echo $size;
	$weight = $_POST['weight'];
	echo $weight;
	$count = $_POST['count'];
	echo $count;
	$harvest = $_POST['harvest'];
	$arrival = $_POST['arrival'];
	$brand = $_POST['brand'];
	echo $brand;

	$sql = "INSERT INTO inventory_manager (us_type, us_size, us_weight, us_count, us_brand)
		VALUES('$type', $size, $weight, $count, '$brand');";

	mysqli_query($conn, $sql);

	header("Location: ../../index.php?add_box=success");