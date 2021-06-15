<?php 
    include '../Controller/connexion.php';
    $con = new mysqli($localhost, $user, $passwd, $database);
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if(!isset($_GET["resv"])){
        header("Location: booking.php");
    }

    $result = $con->query("select * from reservations where id_reservation=".$_GET["resv"]);
    if ($result->num_rows > 0) {
      $result= $result->fetch_assoc();
    } else {
        //header("Location: booking.php");
    }
      
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/slick.js"></script>

    <link rel="stylesheet" type="text/css" href="css/slick.css">



    <!--    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">-->


    <script type="text/javascript" src="dist/demo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Reservation - ticket</title>
    <style type="text/css">
        .reservation{
            display: flex;
            justify-content: center;
            background: #ddd;
        }
        .reservation>.ticket{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .reservation>.ticket>.attr{
            display: flex;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: sans-serif;
        }
        .reservation>.ticket>.attr>.title{
            
        }
        .reservation>.ticket>.attr>.data{
            margin-left: 30px;
        }
    </style>
</head>

<body>

    <header class="tm-header">
        <img class="tm-logo" src="images/Majestic_Hotel_hd.png" alt="Majestic Hotel">
        <nav class="tm-nav">
            <div>
                <ul>
                    <li class="tm-list"><a href="index.php">Home</a></li>
                    <li class="tm-list"><a href="">Explore </a></li>
                    <li class="tm-list"><a href="">Rooms</a></li>
                    <li class="tm-list"><a href="./booking.php">Booking</a></li>
                    <li><a href="Signup.php">Signup/Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="tm-main">
        <p>Ticket</p>
    </section>

    <section class="reservation">
        <div class="ticket">
            <div class="attr">
                <p class="title">Numero du client :</p>
                <p class="data"><?php echo $result["id_customer"]; ?></p>
            </div>
            <div class="attr">
                <p class="title">Numero de chambre :</p>
                <p class="data"><?php echo $result["idRoom"]; ?></p>
            </div>
             <div class="attr">
                <p class="title">Pension Type :</p>
                <p class="data"><?php echo $result["type_pension"]; ?></p>
            </div>
             <div class="attr">
                <p class="title">Pension:</p>
                <p class="data"><?php echo $result["Pension"]; ?></p>
            </div>
             <div class="attr">
                <p class="title">Nombre d'enfant :</p>
                <p class="data"><?php echo $result["nb_lits_bebe"]; ?> personnes</p>
            </div>
        </div>        
    </section>
    <script src="test.js"></script>

    <footer class="tm-footer">
        <div class="tm-us">
            <p class="bold">About Us</p>
            <p>This site of the guest house allows a client to book two types of rooms (double or single), as well as
                apartments and bungalows.
                .</p>
        </div>

        <div class="tm-address">
            <p class="bold">Address</p>
            <p>14 Avenue Zerktouni, Safi
                Phone : (212) 664857925
                Email : dar-darkom@contact.com</p>
        </div>
        <br />
        <div class="tm-media">
            <a href="#"> <img src="images/fb.png"></a>
            <a href="#"> <img src="images/G.png"> </a>
            <a href="#"> <img src="images/twittr.png"> </a>
            <a href="#"> <img src="images/insta.png"> </a>
        </div>



    </footer>

</body>

</html>