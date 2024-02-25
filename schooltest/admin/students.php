<?php include_once ("header.php") ?>
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Birth of Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">OS Version</th>
                    <th scope="col">IP Address</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["start_date"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["age"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["birth_date"]."</td>
                    <td>".$row["gender"]."</td>
                    <td>".$row["os_version"]."</td>
                    <td>".$row["ip_address"]."</td>
                </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</html>