<?php 
$conn = new mysqli ("localhost","root","","kashmir_db");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $file_name=$_FILES["gimage"]["name"];
    $tmp_name=$_FILES["gimage"]["tmp_name"];
    $folder="gimage/".$file_name;
    $gname=$_POST["name"];
    $gloc=$_POST["location"];
    $gphone=$_POST["phone"];
    $gemail=$_POST["email"];
    $gwork=$_POST["work_exp"];
    $gcharges=$_POST["charges"];
    

   $sql="INSERT INTO guides(img,name,location,phone,email,work_exp,charges)values('$file_name','$gname','$gloc','$gphone','$gemail','$gwork','$gcharges')";
if(move_uploaded_file($tmp_name,$folder)){
    echo"image uploaded";
}
    else {
        echo"image upload failed";
    }
    
$conn->query($sql);
// echo "package added";
echo "<script>
alert(' new guide  added successfully!');
window.location.href='panel.php';
</script>";

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-packages</title>
    <title>project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css"
        integrity="sha512-58P9Hy7II0YeXLv+iFiLCv1rtLW47xmiRpC1oFafeKNShp8V5bKV/ciVtYqbk2YfxXQMt58DjNfkXFOn62xE+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" ; referrerpolicy="no-referrer">
    <link rek="stylesheet" href="index.html">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="nav">
        <div class="first">
            <div class="icon-one">
                <div class="icon-email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="email">JewelOfTheNorth@gmail.com</div>
            </div>
            <div class="icon-two">
                <div class="icon-phone"><i class="fa fa-phone"></i></div>

                <div class="num">+91 7896545678</div>
            </div>
            <div class="icon-three">
                <div class="icon-whatsapp"><i class="fa-brands fa-whatsapp"></i></div>
                <div class="whatsapp">+91 7849346578</div>
            </div>

            <div class="booking"><a href="book.php">book now</a></div>
            <div class="payment"><a href="pay.html">pay online</a> </div>
            <div class="enquiry"><a href="admin.html">admin</a></div>
        </div>

        <div class="second">
            <div class="img">
                <div></div>
            </div>
            <div class="heading">
                <h2>kashmir tour</h2>
                <hr>
                <h5>heaven of earth</h5>
            </div>
            <div class="heading-right">
                <div class="home"><a href="index.html">home</a></div>
                <div class="kashmir"><a href="kashmir.html">kashmir</a></div>
                <div class="tour"><a href="packages.php">tour packages</a></div>
                <div class="contact"><a href="contact.html">contact us</a></div>
                <div class="icon-four">
                    <div class="icon-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </head>

    <body>
        <div class="add-guide">
            <h2>guide</h2>
            <form class="add-guide"  method="post" enctype="multipart/form-data"><br>
                <label for="gguide">add images</label><br>
                <input type="file" id="gguide" name="gimage" required><br><br>
                <label for="gguide">guide name</label><br>
                <input type="text" id="gguide" name="name" required><br><br>
                <label for="gguide"> location</label><br>
                <input type="text" id="gguide" name="location" required><br><br>
                <label for="gguide">phone-num</label><br>
                <input type="number" id="gguide" name="phone" required><br><br>
                <label for="gguide "> email</label><br>
                <input type="email" id="gguide" name="email" required><br><br>
                <label for="gguide "> work-experience</label><br>
                <input type="text" id="gguide" name="work_exp" required><br><br>
                <label for="gguide "> charges per day</label><br>
                <input type="number" id="gguide" name="charges" required><br><br>
                <button id="guide-button" type="submit">add</button>

            </form>
            
            <!-- <table>
                <caption>tour guide info</captio>
                <tr><
            <th>img</th>
            <th>name</th>
            <th>location</th>
            <th>phone-no</th>
            <th>charges</th>
            </tr>
            <tr>
                <td>
                    <img src="" alt="error">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            </table> -->
        </div>
    </body>

</html>