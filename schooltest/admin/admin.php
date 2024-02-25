<?php include_once ("header.php") ?>
<?php
$sql = "SELECT * FROM member";
$result = $conn->query($sql);
?>
<div class="container">
<a href="register.php" type="button" class="btn btn-primary">Primary</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Password (ecrypt)</th>
                    <th scope="col">start_date</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["first_name"]."</td>
                    <td>".$row["last_name"]."</td>
                    <td>".$row["display_name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["password"]."</td>
                    <td>".$row["date_added"]."</td>
                </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</html>