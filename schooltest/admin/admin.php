<?php include_once ("header.php");

include_once "includes/init.php";

// Delete user if delete button is clicked
if (isset($_POST['delete_user'])) {
    $id = $_POST['delete_user'];
    $sql = "DELETE FROM member WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Delete successful"); window.close();</script>';
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

$sql = "SELECT * FROM member";
$result = $conn->query($sql);
?>
<div class="container">
<h2 style="text-align: center; margin-bottom: 40px; margin-top: 0px;">Members List</h2>
<button type="button" onclick="fun()" class="btn btn-primary"><i class="fa-duotone fa-user-tie" style="margin-right: 5px;"></i> Add New Admin</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Role</th>
                    <th scope="col">Password (ecrypt)</th>
                    <th scope="col">Action</th>
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
                    <td>".$row["role"]."</td>
                    <td>".$row["password"]."</td>
                    <td><form onclick='fun()'><button type='submit'>Delete</button></form></td>
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
        return confirm("Are you sure you want to delete this user?");
        }
    </script>
</html>