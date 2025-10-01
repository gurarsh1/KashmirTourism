<?php 
$conn = new mysqli("localhost", "root","", "kashmir_db");
$sql = "SELECT * FROM packages";
$result = $conn->query($sql);
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM packages WHERE id = $id";
    mysqli_query($conn, $query);
//     header("Location: panel.php");
echo "<script>
alert('package deleted successfully!');
window.location.href='panel.php';
</script>";
 }


?>
<?php 

$sql1 = "SELECT * FROM guides";
$result1 = $conn->query($sql1);
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM guides WHERE id = $id";
    mysqli_query($conn, $query);
    // header("Location: panel.php");
    echo "<script>
alert('guide deleted successfully!');
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
     
            <div class="add-table">
                
                <table>
                <caption>tour packages

                </caption>
                    <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>day</th>
                        <th>night</th>
                        <th>loc_from </th>
                        <th>loc_to</th>
                        <th>price</th>
                        <th>action</th>
                    </tr>
                    <tr>
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <td><img src="php/pimage/<?php echo $row['img']; ?>" width="50px" ; height="30px" ;></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['day']; ?></td>
                            <td><?php echo $row['night']; ?></td>
                            <td><?php echo $row['loc_from']; ?></td>
                            <td><?php echo $row['loc_to']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>">edit</a>&nbsp;<a href="panel.php?action=delete&id=<?php echo $row['id']; ?>">delete</a></td>
                    </tr>
                    
                        <?php } ?>
                    
                </table>
            </div>
                <div class="guide-table">
                        <table>
                            <caption>tour guide info</caption>
                            <tr>
                                <th>img</th>
                                <th>name</th>
                                <th>location</th>
                                <th>phone-no</th>
                                <th>email</th>
                                <th>wok_exp</th>
                                <th>charges</th>
                                <th>action</th>
                            </tr>
                                    <tr>
                                <?php while($row = mysqli_fetch_assoc($result1)){ ?>
                                    <td><img src="gimage/<?php echo $row['img']; ?>" width="50px" ; height="30px" ;></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['location']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['work_exp']; ?> Years</td>
                                    <td><?php echo $row['charges']; ?></td>
                                    <td><a href="update_guide.php?id=<?php echo $row['id']; ?>">edit</a>&nbsp;<a href="panel.php?action=delete&id=<?php echo $row['id']; ?>">delete</a></td>
                            </tr>
                    
                          <?php } ?>
                    </table>
                   
                </div>
          
       
</body>

</html> 