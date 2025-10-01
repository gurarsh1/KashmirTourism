<?php 
$conn = new mysqli("localhost", "root","", "kashmir_db");
$sql2 = "SELECT * FROM booking_info";
$result2 = $conn->query($sql2);
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM booking_info WHERE id = $id";
    mysqli_query($conn, $query);
    // header("Location: panel.php");
    echo "<script>
alert(' booking cancelled successfully!');
window.location.href='panel.php';
</script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="panel-list">
        <h2>admin panel</h2>
        <ul>
            <li><a href="php/addpackage.php">add tour package</a></li>
            <li><a href="guide.php">add tourist guide</a></li>
            <li><a href="booking_data.php">booking data</a></li>
           
        </ul>
    </div>
    <div class="booking-table">
                        <table >
                            <caption>booking table</caption>
                           
                            <tr>
                                <th>package name</th>
                                <th>package price</th>
                                <th>package location</th>
                                <th>customer name</th>
                                <th>customer email</th>
                                <th>customer phone</th>
                                <th>date of travel</th>
                                <th>number of people</th>
                                <th>customer address</th>
                                <th>requirements</th>
                                <th>action</th>
                            </tr>
                            <tr>
                    <?php while($row = mysqli_fetch_assoc($result2)){ ?>
                        
                        <td><?php echo $row['p_name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['c_name']; ?></td>
                        <td><?php echo $row['c_email']; ?> </td>
                        <td><?php echo $row['c_phone']; ?></td>
                        <td><?php echo $row['c_dot']; ?></td>
                        <td><?php echo $row['c_nop']; ?></td>
                        <td><?php echo $row['c_add']; ?></td>
                        <td><?php echo $row['c_requirements']; ?></td>
                        <td><a href="?action=delete&id=<?php echo $row['id']; ?>">delete</a></td>
                    </tr>
                    
                        <?php } ?>
                    </table>
                    </div>
                </div>
          
        
</body>

</html> 