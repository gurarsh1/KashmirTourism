<?php  
$conn = new mysqli ("localhost","root","","kashmir_db");
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: admin.php');
    exit();
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result1 = $conn->query("SELECT * FROM guides WHERE id = '$id'");
    $guides = $result1->fetch_assoc();

    if(!$guides){
        echo "package not found!";
        exit();
    }
}


if (isset($_POST['update'])){
  
    $gname=$_POST["name"];
    $gloc=$_POST["location"];
     $gphone=$_POST["phone"];
    $gemail=$_POST["email"];
    $gwork=$_POST["work_exp"];
   $gcharges=$_POST["charges"];

   if ($_FILES['img']['name']) {
    $image = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "gimage/" . $image);
    $conn->query("UPDATE guides SET img = '$image' WHERE id = '$id'");
} else {
    $image = $guides['img']; // Keep the old image if no new image is uploaded
}
    
   
    

   $conn->query("UPDATE guides SET name = '$gname', location = '$gloc', phone = '$gphone', email = '$gemail', work_exp = '$gwork', charges='$gcharges' WHERE id = '$id'");
//    header('Location:panel.php');
echo "<script>
alert('guide  info updated successfully!');
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
    <div class="update-guides">
        <h2>update the guide</h2>
        <form class="update-form"  method="post" enctype="multipart/form-data"><br>
            <!-- <label hidden for="id">select the guide id</label><br>
            < <input hidden type="number" id="id" name="id" value="<?= $guides['id']; ?>"><br><br> --> 
           
             <img src="gimage"  width="100"><br> 
            <input type="file" name="img" value="<?php echo $guides['img']; ?>"><br><br>
            <label for="name">update name</label><br>
            <input type="text" id="name" name="name" value="<?php echo $guides['name']; ?>"><br><br>
            <label for="loc">update guide's location</label><br>
            <input type="text" id="loc" name="location" value="<?php echo $guides['location']; ?>"><br><br>
            <label for="phone"> update phone number</label><br>
            <input type="number" id="phone" name="phone" value="<?php echo $guides['phone']; ?>"><br><br>
            <label for="email"> update email</label><br>
            <input type="email" id="email" name="email" value="<?php echo $guides['email']; ?>"><br><br>
            <label for="work"> update work experience</label><br>
            <input type="number" id="work" name="work_exp" value="<?php echo $guides['work_exp']; ?>"><br><br>
            <label for="charges"> update charges</label><br>
            <input type="number" id="charges" name="charges" value="<?php echo $guides['charges']; ?>"><br><br><br>
            <button id="update-button" type="submit"  name="update">update guide info</button>

        </form>
    </div>


</body>

</html>