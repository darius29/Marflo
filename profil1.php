<?php 
session_start();
require_once('connection.php');
require('functions.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="slider.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="profil.css">
 
</head>
<body>
    
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Contul meu</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="http://localhost:4000/www/profil1.php">Profile</a>
                <a href="http://localhost:4000/www/update1.php">Update Profile</a>
                <a href="http://localhost:4000/www/programari1.php">Programari</a>
                <a href="http://localhost:4000/www/logout.php">Logout</a>
            </div>
        </div>
    
        <div class="logo"><a href="#"><img src="logo.bmp"></a>
        <h1> Cabinet medical Marflo
            <td class="text-rcenter"><span class="flag-icon flag-icon-ro"></span></td>
            <td class="text-center"><span class="flag-icon flag-icon-us"></span></td>
        </h1>
        
        <div class="navbar">
            <a href="http://localhost:4000/www/index.php"> Marflo </a>
            <a href="http://localhost:4000/www/programari.php"> Programari </a>
            <a href="http://localhost:4000/www/servici.php"> Servicii</a>
            <a href="http://localhost:4000/www/tarife.php"> Tarife </a>
            <a href="http://localhost:4000/www/echipa.php"> Echipa </a>
            <a href="http://localhost:4000/www/contact.php"> Contact</a>
        </div>
    </div>
    <br><br>
    <center>
    <div class="container">
        <form action="" method="POST">
            <input type="email" class="btn" name="mail" placeholder="Email">
            <input type="submit" class="search" name="search" value="Search">
        </form> 
        <table>
        <tr>
            <th> Nume </th> 
            <th> Prenume </th> 
            <th> Email  </th> 
            <th> Nr telefon </th> 
        </tr> <br>
        <?php 
        $conn = mysqli_connect("localhost", "root", "");
        $db=mysqli_select_db($conn, "baza2");

        if(isset($_POST['search'])){
            $mail = $_POST['mail'];
            $query = "SELECT * FROM users where mail='$mail'";
            $result = mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_array( $result)){
                ?>
                <tr> 
                    <td>  <?php echo $row['firstname']; ?> </td>
                    <td>  <?php echo $row['lastname']; ?> </td>
                    <td>  <?php echo $row['mail']; ?> </td>
                    <td> <?php echo $row['phonenumber']; ?> </td>
                </tr>
                <?php 
            }
        }
        ?>
        </table>
    </div>

    </center>







   
       

</body>
</html>