<?php include_once ("header.php");

include_once "includes/init.php";

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>
<div class="container">
    <h2 style="text-align: center; margin-bottom: 40px; margin-top: 0px;">Feedback List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">IP Address</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["message"]."</td>
                    <td>".$row["ip_address"]."</td>
                </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</html>