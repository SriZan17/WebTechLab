<?php

// connect to the datbase

include('connect.php');

// prepare the sql query to execute

$query = "SELECT * FROM student";

// Run the query and get the result

$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo "$count Records found";
?>
    <table border='1'>
        <tr>
            <th>Member_id</th>
            <th>Name</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
        		<tr>
        			<td>{$row['sid']}</td>
        			<td>{$row['sname']}</td>
        		</tr>
        ";
        }
        ?>
    </table>
<?php
} else {
    echo "Table is empty";
}
