<?php

$con = mysqli_connect("localhost", "root", "", "mydb");
if (!$con) {
    echo "<h5>DATABASE NOT CONNECTED</h5>";
} else {
    echo "<h5>DATABASE CONNECTED</h5>";
}

$sql_get_query = "SELECT * FROM user";
$res = mysqli_query($con, $sql_get_query);

if ($res) {
    echo "<h1>USER DATA</h1>";
    echo "<table border='1'>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
  </tr>";

    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr> 
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['password']) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<h2>Query execution failed</h2>";
}

mysqli_close($con);
?>
