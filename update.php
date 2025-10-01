<?php  
$conn = new mysqli ("localhost","root","","kashmir_db");
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: admin.php');
    exit();
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM packages WHERE id = $id");
    $packages = $result->fetch_assoc();

    if(!$packages){
        echo "package not found!";
        exit();
    }
}


if (isset($_POST['update'])) {
    $pname = $_POST['name'];
    $pdays = $_POST['day'];
    $pnight = $_POST['night'];
    $pfrom = $_POST['loc_from'];
    $pto = $_POST['loc_to'];
    $pprice = $_POST['price'];
    
    // If a new image is uploaded, update it
    if ($_FILES['img']['name']) {
        $image = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "php/pimage/" . $image);
        $conn->query("UPDATE packages SET image = '$image' WHERE id = $id");
    } else {
        $image = $packages['img']; // Keep the old image if no new image is uploaded
    }

    
   
    

   $conn->query("UPDATE packages SET name = '$pname', day = '$pdays', night = '$pnight', loc_from = '$pfrom', loc_to = '$pto', price='$pprice' WHERE id = '$id'");
//    header('Location:panel.php');
echo "<script>
alert('package updated successfully!');
window.location.href='panel.php';
</script>";
   exit();
}
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="update-packages">
        <h2>update the package</h2>
        <form class="update-form"  method="post" enctype="multipart/form-data"><br>
            <label hidden for="id">select the package id</label><br>
            <input hidden type="number" id="id" name="id" value="<?php echo $packages['id']; ?>"><br><br>
            <img src="php/pimage/<?= $packages['img'] ?>" width="100"><br>
            <input type="file" name="img"><br><br>
            <label for="name">update name</label><br>
            <input type="text" id="name" name="name" value ="<?php echo $packages['name']; ?>"><br><br>
            <label for="day">update number of days</label><br>
            <input type="number" id="day" name="day" value="<?php echo $packages['day']; ?>" ><br><br>
            <label for="night"> update number of nights</label><br>
            <input type="number" id="night" name="night" value="<?php echo $packages['night']; ?>"><br><br>
            <label for="from"> update location starting point</label><br>
            <input type="text" id="from" name="loc_from" value="<?php echo $packages['loc_from']; ?>"><br><br>
            <label for="to"> update location reaching point</label><br>
            <input type="text" id="to" name="loc_to" value="<?php echo $packages['loc_to']; ?>"><br><br>
            <label for="pp"> update package price</label><br>
            <input type="number" id="pp" name="price" value="<?php echo $packages['price']; ?>"><br><br><br>
            <button id="update-button" type="submit"  name="update">update the package</button>

        </form>
    </div>


</body>

</html>