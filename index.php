<?php
	/**
	 * HTML skeleton for the webpage.
	 *
	 * @package ${NAMESPACE}
	 * @since   1.0.0
	 * @author  Luke Grippa
	 * @link    https://github.com/grippal?tab=repositories
	 * @license GNU General Public License 2.0+
	 */

	include_once 'src/includes/dbh.inc.php';
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
<div>
    <h1>Inventory Manager</h1>
</div>
<main>
    <div class="add-form">
        <p>Manually add fish into inventory:</p>
        <form action="src/includes/add_box.inc.php" method="POST">
            <ul>
                <li><input type="text" name="type" placeholder="type of fish"></li>
                <li><input type="text" name="size" placeholder="size of fish"></li>
                <li><input type="text" name="weight" placeholder="weight of the box"></li>
                <li><input type="text" name="count" placeholder="# of fish in the box"></li>
                <li><input type="datetime-local" name="harvest" placeholder="harvest date"></li>
                <li><input type="datetime-local" name="arrival" placeholder="arrival date"></li>
                <li><input type="text" name="brand" placeholder="brand"></li>
                <li>
                    <button type="submit" name="add">ADD</button>
                </li>
            </ul>
        </form>
    </div>

    <table>
        <caption> Fish Inventory</caption>
        <thead>
        <tr>
            <th></th>
            <th>BoxID</th>
            <th>Fish Type</th>
            <th>Fish Size</th>
            <th>Box Weight</th>
            <th>Number of Fish</th>
            <th>Harvest Date</th>
            <th>Arrival Date</th>
            <th>Brand</th>
        </tr>
        </thead>
        <tbody>
		<?php
			// retrieve information from database
			$sql         = "SELECT * FROM inventory_manager;";
			$result      = mysqli_query( $conn, $sql );
			$resultCheck = mysqli_num_rows( $result );

			if ( $resultCheck > 0 ) {
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					//<input type='checkbox' id='item-checkbox'>
					echo "<tr>
                                <td><input type='checkbox' name='row[]' value='". $row['id'] ."' form='delete-form'></td>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['us_type'] . "</td>
                                <td>" . $row['us_size'] . "</td>
                                <td>" . $row['us_weight'] . "</td>
                                <td>" . $row['us_count'] . "</td>
                                <td>" . $row['us_harvest'] . "</td>
                                <td>" . $row['us_arrival'] . "</td>
                                <td>" . $row['us_brand'] . "</td>
                                </tr>";

				}
			}
		?>

        </tbody>
    </table>

    <div class="delete-button">
        <form action="src/includes/delete_box.inc.php" method="POST" id="delete-form">
            <button type="submit" name="delete">DELETE</button>
        </form>
    </div>
</main>

</body>
</html>