<?php
include 'include/dbh.inc.php';
include 'include/user.inc.php';
include 'include/viewuser.inc.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="layout/css/main.css">
        <link rel="stylesheet" href="layout/css/header.css">        
        <title>TODO supply a title</title>
    </head>
    <body>
        <div class="grid-container">
            <div class="item1">Header</div>
            <div class="item2">Menu</div>
            <div class="item3">Main
                <form class="review" action="include/signup.inc.php" method="POST">
                    <?php
                    if (isset($_GET['naam'])) {
                        $naam = $_GET['naam'];
                        echo '<input class="w100b" type="text" name="naam" placeholder="Naam" value="' . $naam . '">';
                    } else {
                        echo '<input class="w100b" type="text" name="naam" placeholder="Naam">';
                    }
                    if (isset($_GET['achternaam'])) {
                        $achternaam = $_GET['achternaam'];
                        echo '<input class="w100b" type="text" name="achternaam" placeholder="Achternaam" value="' . $achternaam . '">';
                    } else {
                        echo '<input class="w100b" type="text" name="achternaam" placeholder="Achternaam">';
                    }
                    ?>
                    <input class="w100b" type="text" name="email" placeholder="Email">
                    <textarea class='w100b'name="review" rows="5" cols="40" placeholder="Schrijf uw review"></textarea>
                    <br><br>
                    <b>Beoordeling:</b><br>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="beoordeling" value="uitstekend">Uitstekend
                        </label>
                        <label class="radio">
                            <input type="radio" name="beoordeling" value="goed">Goed
                        </label>
                        <label class="radio">
                            <input type="radio" name="beoordeling" value="matig">Matig
                        </label>
                        <label class="radio">
                            <input type="radio" name="beoordeling" value="slecht">Slecht
                        </label>
                        <label class="radio">
                            <input type="radio" name="beoordeling" value="nietAanbevelen">Onacceptabel
                        </label>
                        <label class="radio">
                            <button type="submit" name="submit">Submit</button>
                        </label>
                    </div>
                </form>
            </div>  
            <div class="item4">view
                <?php
                $users = new viewUser();
                $users->showAllUsers();
                ?>
            </div>
            <div class="item5">Right</div>
            <div class="item6">Footer
                <?PHP include 'include/template/footer.php'; ?>
            </div>


            <div class="item1">Header
                <?php
                if (!isset($_GET['signup'])) {
                    exit();
                } else {
                    $signupCheck = $_GET['signup'];

                    if ($signupCheck == "empty") {
                        echo "<p class='flash'>You did not fill in all fields!</p>";
                        exit();
                    }
                    if ($signupCheck == "char") {
                        echo "<p class='flash'>You used invalid characters!</p>";
                        exit();
                    }
                    if ($signupCheck == "email") {
                        echo "<p class='flash'>You used invalid email!</p>";
                        exit();
                    }
                    if ($signupCheck == "success") {
                        echo "<p class='success'>You have been signed up!</p>";
                        exit();
                    }
                }
                ?>
            </div>


        </div>
    </body>
</html>

<!--include/review.inc.php-->
<!--include/signup.inc.php-->