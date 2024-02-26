<?php include_once ("header.php");

include_once "includes/init.php";

// Delete user if delete button is clicked
if (isset($_POST['delete_user'])) {
    $id = $_POST['delete_user'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Delete successful"); window.close();</script>';
    } else {
        echo '<script>alert("Error deleting user"); window.close();</script> ' . $conn->error;
    }
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<div class="container">
    <h2 style="text-align: center; margin-bottom: 40px; margin-top: 0px;">Students List</h2>
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
                    <th scope="col">Current Device</th>
                    <th scope="col">Action</th>
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
                    <td>".$row["device"]."</td>
                    <td><form method='post' onsubmit='return confirmDelete()'><button type='submit' name='delete_user' value='" . $row["id"] . "'>Delete</button></form></td>
                </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
    <script>
        function fun() {  
        alert("Access Denied For Current User");  
        }  

        function confirmDelete() {
        return confirm("Are you sure you want to delete this student?");
        }
    </script>
    <?php include("footer.php") ?>
</html>