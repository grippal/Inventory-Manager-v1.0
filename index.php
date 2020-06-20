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

	namespace UniversalSeafood\InventoryManager;

	include 'lib/structure/header.php';
	include 'lib/structure/sidebar.php';

	?>

            <div class="add-form">
                <p>Manually add fish into inventory:</p>
                <form action="lib/mysql/add_box.inc.php" method="POST">

                    <input type="text" name="type" placeholder="type of fish">
                    <input type="text" name="size" placeholder="size of fish">
                    <input type="text" name="weight" placeholder="weight of the box">
                    <input type="text" name="count" placeholder="# of fish in the box">
                    <input type="datetime-local" name="harvest" placeholder="harvest date">
                    <input type="datetime-local" name="arrival" placeholder="arrival date">
                    <input type="text" name="brand" placeholder="brand">

                    <button type="submit" name="add">ADD</button>
                </form>
            </div>

            <div class="table-wrapper">
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
                                <td><input type='checkbox' name='row[]' value='" . $row['id'] . "' form='delete-form'></td>
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
                    <form action="lib/mysql/delete_box.inc.php" method="POST" id="delete-form">
                        <button type="submit" name="delete">DELETE</button>
                    </form>
                </div>
            </div>

        </div>


        </body>

		<?php
	include 'lib/structure/footer.php';