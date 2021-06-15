
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/slick.js"></script>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">



    <!--    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">-->


    <script type="text/javascript" src="dist/demo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <title>Booking</title>
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
                    <li class="tm-list"><a href="">Booking</a></li>
                    <li><a href="Signup.php">Signup/Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="tm-main">
        <p>Booking</p>
    </section>



    <section class="tm-booking">
        <form method="POST" action="./crud.php" >

            <p>
                <fieldset id="fieldsetChambresNumber">
                    <legend><strong style="color: white;"> Nombres de chambres</strong></legend>
                    <p>
                        <label for="input_nb_chambres"> Entrer le nombres de chambres: </label>
                        <input type="number" name="input_nb_chambres" id="input_nb_chambres" max="20" min="1" required />
                        <input value="ok" id="btn_nb_chambres" type="button" />
                    </p>
                </fieldset>
            </p>

            <p>
                <fieldset id="fieldsetUneChambre">
                    <legend><strong> Type de votre chambre</strong></legend>
                    <p>
                        <input type="radio" name="boutonTypeChambre" id="optionChambreSimple" value="chambreSimple" />
                        <label for="optionChambreSimple">Chambre simple </label>
                        <span id="spanSimple"></span>
                    </p>
                    <p>
                        <input type="radio" name="boutonTypeChambre" id="optionChambreDouble" value="chambreDouble" />
                        <label for="optionChambreDouble">Chambre double </label>
                        <span id="spanDouble"></span>
                        <span id="secondSpanDouble"></span>
                    </p>
                </fieldset>
            </p>

            <p>
                <fieldset id="fieldsetPlusieursChambresSimples">
                    <legend><strong> Les chambres simples</strong></legend>
                    <p>
                        <label for="input_nb_chambres_simples">nombres de chambres simples: </label>
                        <input type="number" name="input_nb_chambres_simples" id="input_nb_chambres_simples" max="20"
                            min="1" />
                        <input type="button" value="Ok" id="btn_nb_chambres_simples">
                    </p>
                    <p id="place"></p>
                </fieldset>
            </p>

            <p>
                <fieldset id="fieldsetPlusieursChambresDoubles">
                    <legend><strong>Les chambres doubles</strong></legend>
                    <p>
                        <label for="input_nb_chambres_doubles">Nombres de chambres doubles </label>
                        <input type="number" name="input_nb_chambres_doubles" id="input_nb_chambres_doubles"  />
                        <input type="button" value="Ok" id="btn_nb_chambres_doubles">
                    </p>
                    <p id="place2"></p>
                </fieldset>
            </p>

            <p>
                <fieldset id="fieldsetEnfanst">
                    <legend><strong style="color: white;">Enfants</strong></legend>
                    <p>
                        <label for="input_nb_enfants">Enter le nombres des enfants (moins de 17ans): </label>
                        <input type="number" name="input_nb_enfants" id="input_nb_enfants" required />
                        <input type="button" value="Ok" id="btn_nb_enfants">
                    </p>
                    <p id="testBtn"></p>
                </fieldset>
            </p>


            <p>
                <fieldset id="fieldsetPension">
                    <legend><strong style="color: white;"> Pension </strong></legend>
                    <p>
                        <span id="pensionRadios">
                            <input type="radio" name="ChoixPension" id="optionSansPension" value="sansPension"  /> <label
                                for="optionSansPension"> Sans pension</label>
                            <input type="radio" name="ChoixPension" id="optionPensionComplete"
                                value="pensionComplete" checked="" /> <label for="optionPensionComplete" > Pension complète </label>
                            <input type="radio" name="ChoixPension" id="optionDemipension" value="demiPension" /> <label
                                for="optionDemipension"> Demi pension </label>
                        </span>
                        <span id="span_pension"></span>
                    </p>
                </fieldset>
            </p>

            <input name="new_reservation" type="submit" />
        </form>
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