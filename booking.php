<?php
    $conn = new mysqli("localhost", "root", "", "kashmir_db");
    $sql = "SELECT * FROM packages";
    $results = $conn->query($sql);
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result1 = $conn->query("SELECT * FROM packages WHERE id = '$id'");
    $package = $result1->fetch_assoc();

    if(!$package){
        echo "package not found!";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>project</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css"
            integrity="sha512-58P9Hy7II0YeXLv+iFiLCv1rtLW47xmiRpC1oFafeKNShp8V5bKV/ciVtYqbk2YfxXQMt58DjNfkXFOn62xE+g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" ; referrerpolicy="no-referrer">
        <link rel="stylesheet" href="index.html">
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
                <div class="enquiry"><a href="admin.php">admin</a></div>
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
                    <div class="ginfo"><a href="guide-info.php">guides</a></div>
                    <div class="contact"><a href="contact.html">contact us</a></div>
                    <div class="icon-four">
                        <div class="icon-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="book-head">book now</h1>
        <div class="booking-content">

            <h2>don't miss it grab discounted deals</h2>
            <h3>filling out the information form provided allow you to receive best budget-friendly customised
                itinerary in just a few hours.</h3>
            <form class="book" action="sendmail.php" method="post">
                <fieldset>
                    <legend>Package Info</legend>
                    <div class="book-one">
                        <div class="book-box">
                       
                            Package Name
                            <input type="text" placeholder="enter the package name" name="p_name" id="box-c" value="<?php echo $package['name'];?>">
                        </div>
                        <div class="book-box">
                            Package Price
                            <input type="number" placeholder="" id="box-c" name="price" value="<?php echo $package['price'];?>">
                        </div>
                        <div class="book-box">
                            Package Location
                            <input type="text" placeholder="" id="box-c" name="location" value="<?php echo $package['loc_to'];?>">
          </div>
                </fieldset>
                <fieldset>
                    <legend>customer info</legend>
                    <div class="book-one">

                        <div class="book-box">
                            Full Name
                            <input type="text" placeholder="enter your name" id="box-c" name="c_name">
                        </div>
                        <div class="book-box">
                            Email
                            <input type="email" placeholder="enter your mail-address" id="box-c" name="c_email">
                        </div>
                        <div class="book-box">
                            Phone Number
                            <input type="tel" placeholder="enter your number" id="box-c" name="c_phone">
                        </div>
                    </div>
                    <div class="book-two">
                        <div class="book-box">
                            Date Of Travel
                            <br>
                            <input type="date" id="box-c" name="c_dot">
                        </div>
                        <div class="book-box">
                            Number Of People
                            <input type="number" placeholder="type your no. of person" id="box-c" name=c_nop>
                        </div>
                        <div class="book-box">
                            Address(Optional)
                            <input type="text" placeholder="enter your address" id="box-c" name="c_add"><br>
                        </div>
                    </div>
                    <div class="require">
                        <b>Requirements(optional)</b><br>
                        <textarea
                            placeholder="write a description of your tour so we can design a best package for you!"
                            id="require" rowspan="25" colspan="50" name="c_requirements"></textarea>
                </fieldset>
                <div class="details">
                    <ul>
                        <li>We assure the privacy of your contact data.
                        </li>
                        <li>This data will only be used by our team to contact you and no other purposes.</li>
                    </ul>
                    <button id="detail-button">send me details</button>
                </div>
        </div>
        </form>
        </div>



        <footer>
            <div class="footer-div">
                <div class="footer-one">
                    <div class="foot">
                        <div class="foot-add">
                            <div class="footer-img">
                                <div></div>
                            </div>
                            <div class="footer-head">
                                <h2>kashmir tour</h2>
                                <hr>
                                <h5>heaven of earth</h5>
                            </div>
                        </div>
                        <div class="foot-para">
                            <p>Explore Kashmir, the true paradise on earth with our beautifully crafted Kashmir Tour
                                Packages.
                                Best
                                Honeymoon tour in Kashmir is our USP. Enjoy your holidays in Kashmir with us.
                            </p>
                        </div>


                    </div>

                    <div class="footer-icon">
                        <div class="fb"></div>
                        <div class="twitter"></div>
                        <div class="utube"></div>
                        <div class="pinterest"></div>
                        <div class="in"></div>
                    </div>
                    <p class="end">copyright@2023 www.JewelOfTheNorth.world</p>
                </div>
                <div class="footer-two">
                    <div class="foot-list">
                        <h2>quick links</h2>

                        <a href="index.html">about us</a><br><br>
                        <a href="contact.html">contact us</a><br><br>
                        <a href="review.html">reviews</a><br><br>
                        <a href="book.php">booking form</a><br><br>
                        <a href="policy.html">privacy policy</a><br><br>
                        <a href="terms.html">terms&conditions</a><br><br>

                    </div>
                </div>



                <div class="footer-three">
                    <div class="foot-info">
                        <h2>company info</h2>

                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>1st floor,zahidpora,near mahjid sharief
                            hawal,srinagar(j&k)-190001</p>


                        <pre><p><i class="fa fa-envelope" aria-hidden="true"></i>info@JewelOfTheNorth.world</p></pre>

                        <p><i class="fa fa-mobile" aria-hidden="true"></i>+91 7895865748</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>