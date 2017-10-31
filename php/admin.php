<html>
<header><title>This is title</title>
    <link rel="stylesheet" href="../css/styles.css"></header>
<body>
<?php
if ($_GET["password"]!="12"){
    exit("du skal indtase password");
}
$int = 1;
include 'databaseconnection.php';
if ($result->num_rows > 0) {
// output data of each row
    echo "<table>

    <tr>

        <td>
            Title
        </td>
        <td>
            url
        </td>
        <td>kategori</td>
        <td>dato</td>
        <td>delete</td>
    </tr>";
    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>";
        echo $row["title"];

        echo "</td>";

        echo "<td>";
        echo $row["url"];
        echo "</td>";

        echo "<td>";
        echo $row["kategori"];
        echo "</td>";


        echo "<td>";
        echo $row["date"];
        echo "</td>";
        echo "<td>";
        echo "<a href=delete.php?delete=".$row["id"]."> delete</a>";
        echo "</td>";
        $int++;

    }
    echo "</table>";


}

?>





</body>
</html>