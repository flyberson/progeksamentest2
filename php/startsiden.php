<html>
<header><title>This is title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/javascript/js3.js" ></script>
<body>

<h1>Startsiden</h1>
<button onclick="getpoke()"></button>

<?php


include 'databaseconnection.php';
$sql = "SELECT * FROM linklist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    ?>
    <table id='table1' class='table table-striped table-hover table-bordered' width="100%" cellspacing="">
<thead>
    <tr>

        <td>
            Title
        </td>
        <td>
            url
        </td>
        <td>kategori</td>
        <td>dato</td>
    </tr></thead>
        <tbody>
        <?php
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
        echo $row["dato"];
        echo "</td>";
        echo "</tr>";


    }



}
        ?>
        </tbody>
    </table>


<script>$('#table1').DataTable();</script>

</body>
</html>