<?php

$conn=new mysqli("localhost","root","","kashmir_db");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $file_name=$_FILES["pimage"]["name"];
    $tmp_name=$_FILES["pimage"]["tmp_name"];
    $folder="pimage/".$file_name;
    $pname=$_POST["name"];
    $pdays=$_POST["day"];
     $pnight=$_POST["night"];
    $pfrom=$_POST["loc_from"];
    $pto=$_POST["loc_to"];
   $pprice=$_POST["price"];

   $sql="INSERT INTO packages(img,name,day,night,loc_from,loc_to,price)values('$file_name','$pname','$pdays','$pnight','$pfrom','$pto','$pprice')";
if(move_uploaded_file($tmp_name,$folder)){
    echo"image uploaded";
}
    else {
        echo"image upload failed";
    }
    
$conn->query($sql);
echo "package added";
// header("Location: ../panel.php");

echo "<script>
alert('package uploaded successfully!');
window.location.href='../panel.php';
</script>";


}

$conn->close();

?>
 <!DOCTYPE html>
       <html lang="en">
       <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>packages</title>
       
        <style>
            

.add-packages {
  border: 1px solid lightgrey;
  height: fit-content;
  width: 60%;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 15px;

}
h2{

    height:60px;
    text-align:center;
    text-transform:capitalize;
    font-size:35px;
    background-color: #0461ae;
    color: #ffffff;
    padding-top:20px;
}


.add-form label {
  font-size: larger;
  font-weight: bold;
  margin-top: 50px;
  margin-bottom: 40px;
  text-transform: capitalize;
  margin-left:20px;
}

#img {
  width: 90%;
  height: 18px;
  padding: 10px;

  margin-left: 15px;
}

#name {
  width: 90%;
  height: 8px;
  padding: 10px;
  margin-left: 15px;
  margin-top: 5px;
}

#day {
  width: 90%;
  height: 8px;
  padding: 10px;
  margin-left: 15px;
  margin-top: 5px;
}

#night {
  width: 90%;
  height: 8px;
  padding: 10px;
  margin-left: 15px;
  margin-top: 5px;
}

#from {
  width: 90%;
  height: 8px;
  padding: 10px;
  margin-left: 15px;
  margin-top: 5px;
}

#to {
  width: 90%;
  height: 8px;
  padding: 10px;
  margin-left: 15px;
  margin-top: 5px;
}

#pp {
  width: 90%;
  height: 8px;
  padding: 10px;
  margin-left: 15px;
  margin-top: 5px;
}

#add-button {
  width: fit-content;
  background-color: #ffffff;
  border: 2px solid black;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 28%;
  text-transform: uppercase;
  font-weight: bold;
  font-size: x-large;
}

#add-button:hover {
  background-color: #0461ae;
  color: #ffffff;
}

        </style>
       </head>
       <body>
       <h2>add new package</h2> 
       <div class="add-packages">
        
         <form class="add-form"  method="post" enctype="multipart/form-data"><br>
            <label for="img">add images</label><br>
            <input type="file" id="img" name="pimage" required><br><br>
            <label for="name">add package name</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="day"> number of days</label><br>
            <input type="number" id="day" name="day" required><br><br>
            <label for="night">number of nights</label><br>
            <input type="number" id="night" name="night" required><br><br>
            <label for="from"> location starting point</label><br>
            <input type="text" id="from" name="loc_from" required><br><br>
            <label for="to"> location reaching point</label><br>
            <input type="text" id="to" name="loc_to" required><br><br>
            <label for="pp"> package price</label><br>
            <input type="number" id="pp" name="price" required><br><br><br>
            <button id="add-button" type="submit">submit the package</button>
       </body>
       </html> 