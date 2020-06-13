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
	$delete= $_POST['row'];

	if (empty($delete)) {
		echo "You didn't select anything to delete.";
	} else {
		$N = count($delete);

		for($i=0; $i < $N; $i++)
		{
			$sql = "DELETE FROM inventory_manager
				WHERE id=$delete[$i];";

			mysqli_query($conn, $sql);
		}
	}

	header("Location: ../../index.php?delete_box=success");