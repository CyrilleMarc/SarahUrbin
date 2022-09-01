<?php require_once 'ShowMessages.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Fredericka+the+Great&family=Rubik+Maze&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <title>Accueil SUP
    </title>
</head>
<header>
        <div id="Header">
            <div id="Logo">
                <img id="logo" src="image/Sup.jpg">
            </div>
            <div id="Title">
                <h1>Sarah Urbin Musique & Production</h1>
            </div>
        </div>
        <!-- <div id="navigation">
            <ul>
                <li>Se connecter</li>
                <li>M'envoyer un message</li>
                <li>Prestation</li>
                <li>Aidez-moi</li>
            </ul>
        </div> -->
        <div id="Tampon">
            <span class="clignote">E.P EN COURS D'ENREGISTREMENT...</span>
        </div>
        <audio id="audio" src="./son/CaysonRenshaw.mp3"></audio>
        <script>
            var audio = document.getElementById("audio");
            var Tampon = document.getElementById('Tampon');

            function play() {
                audio.play();
            }

            function stop() {
                audio.pause();
            }
            Tampon.addEventListener('mouseover', play);
            Tampon.addEventListener('mouseout', stop);
        </script>
        <div id="Intro">
            <p>La musique est un art, un art qui se doit d'être partagé.
                Je fais de la musique pour transmettre un message d'amour et de
                tolérance. Chaque personne que vous êtes m'intéresse et si grâce
                à mes reprises et compositions je peux vous apporter quelque chose
                alors pour moi c'est une victoire. J'ai reçu énormément de soutien
                dès le début et je vous remercie d'être là et de me suivre depuis
                tout ce temps. On me dit souvent que j'ai énormément de chance,
                je réponds toujours que ce n'est même plus de la chance mais de la
                détermination. Lorsque je chante j'ai l'impression de changer
                le monde et ceci c'est grâce à vous. Much love ! God bless you.
        </div>
        <div id="Wapper">
        </div>
</header>

<body>
        <h3 id="TitleMesCovers">Compositions & Covers</h3>
    <div id="LiensVideo">
        <div id="Videos">
            <iframe src="https://www.youtube.com/embed/FpxdzC3J778" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="Videos">
            <iframe src="https://www.youtube.com/embed/j_0WQVIa7MU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="Videos">
            <iframe src="https://www.youtube.com/embed/v3IkkseluHQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="Videos">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fchristianbouvypresse%2Fvideos%2F1450645785276306%2F&show_text=false&width=560&t=0"></iframe>
        </div>
        <!-- <div id="Videos">
            <iframe src="https://twitter.com/SarahUrbinMusic/status/941399633514856448" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> -->
    </div>
    <div id="Messages">
        <h3 id="TitleMesMessages">Vos messages (source Youtube).</h3>
        <div>
            <marquee id="marquee" scrollamount="12">
                <?php foreach ($messages as $message) : ?>
                    <td><em><?php echo '"' . $message['message'] . '"'; ?></em></td>
                    <td><?php echo "-" . $message['signature'] . "-"; ?></td>
                <?php endforeach; ?>
            </marquee>
        </div>
    </div>
    <h3 id="TitleMaTournee">Mes dates de tournée</h3>
    <p id ="paysage">Tournez votre téléphone pour voir les dates</p>
        <div id="Tournee">
            <table>
                <thead>
                    <th>Lieu</th>
                    <p>
                        <th>Date</th>
                    <p>
                        <th>Prix</th>
                    <p>
                    <p>
                        <th>Complet</th>
                    <p>
                </thead>
                <p>
                    <br />
                    <tbody>

                        <?php include 'ShowMessages.php'; //on inclut notre fichier de connection  
                        $sql = 'SELECT * FROM concert ORDER BY id DESC'; //on formule notre requete 
                        foreach ($bdd->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<tr>';
                            echo '<td>' . $row['Lieu'] . '</td><p>';
                            echo '<td>' . $row['Date'] . '</td><p>';
                            echo '<td>' . $row['Prix'] . '€</td><p>';
                            echo '<td>' . $row['Complet'] . '</td><p>';
                            echo '<td>';
                            echo '<a class="btn btn-dark" href="index.php?id=' . $row['id'] . '">Voir les détails</a>'; // un autre td pour le bouton d'edition
                            echo '</td><p>';
                            echo '</tr><p>';
                        }
                        ?>
                    </tbody>
                <p>
            </table>
        </div>
        </div id="Reso">
        <h3 id="TitleMesReseaux">Mes réseaux sociaux.</h3>
        <div id="Reseaux">
            <a href="https://www.facebook.com/sarah.urbin" target="blank" class="fa fa-facebook"></a>
            <a href=" https://www.instagram.com/sarahurbin/" target="blank" class="fa fa-instagram"></a>
            <a href="https://twitter.com/SarahUrbinMusic" target="blank" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/c/SarahUrbinSarahUrbin" target="blank" class="fa fa-youtube"></a>
        </div>
        <div id="Webmaster">
            <a href="https://portfolio-cyrille-marc.netlify.app" target="blank"><span>Site réalisé par Cyrille MARC</span>
        </div>
        <div>
            <object data="./BalloonPlanet - Wandering Mind.mp3 - Wandering Mind.mp3" type="audio/x-mpeg" width="0" height="0">
                <param name="src" value="BallonPlanet.mp3" />
                <param name="controls" value="console" />
                <param name="autostart" value="true" />
                <param name="loop" value="false" />
                <script type="text/javascript">
                    // document.write('<embed src="NOM_DE_LA_MUSIQUE.mp3" width="0" height="0" controls="console" loop="false" autostart="true" ></embed>');
                </script>
            </object>
        </div>
</body>

</html>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url('image/priscilla-du-preez-AW1vLlH39Ww-unsplash.jpg');
        background-size: cover;
        background-position: center;
    }

    #navigation {
        margin: 50px;
    }

    ul {
        display: flex;
        align-items: center;
        justify-content: space-around;
        list-style: none;
        font-size: 20px;
        margin-bottom: 20px;

    }

    #Reso {
        margin-bottom: 30px;
        ;
    }

    li {
        text-decoration: none;
        color: white;
        cursor: pointer;
        font-family: 'Fredericka the Great', cursive;
        background-color: transparent;
        border-radius: 5px;
        padding: 5px;
        font-weight: 900;
        letter-spacing: .1em;

    }

    li:hover {
        border: 1px solid white;
    }

    #Tampon {
        text-align: center;
        transform: rotate(354deg);
        margin: 40px;
        flex: 1;
        cursor: pointer;

    }

    .clignote {
        font-family: 'Fredericka the Great', cursive;
        font-size: 25px;
        color: red;
        font-weight: 900;
        border-color: red;
        background-color: transparent;
        border: 2px solid red;
        animation: clignote 3s linear infinite;
        border-radius: 10px;
        padding: 5px;
        margin-top: 40px;

    }

    @keyframes clignote {
        50% {
            opacity: 0.4;
        }
    }

    table {
        width: 100%;
        color: white;
        font-family: 'Fredericka the Great', cursive;
        text-align: center;

    }

    th {
        border: 1px solid white;
        width: 80%;
        font-size: 40px;
        padding: 20px;
    }

    td {
        font-size: 30px;
        border: 1px solid white;
        padding: 20px;
    }

    #Tournee {
        width: 100%;
        padding: 0;
        margin-bottom: 60px;
    }

    #Reseaux {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .fa-facebook {
        background: transparent;
        color: white;
    }

    .fa-twitter {
        background: transparent;
        color: white;
    }

    .fa-youtube {
        background: transparent;
        color: white;
    }

    .fa-instagram {
        background: transparent;
        color: white;
    }

    .fa {
        padding: 20px;
        font-size: 40px;
        width: 100px;
        text-align: center;
        text-decoration: none;
        margin: 5px 10px;
        border: 1px solid white;
        border-radius: 10px;
    }

    .fa:hover {
        background: white;
        color: black;
    }

    #Intro {
        font-family: 'Fredericka the Great', cursive;
        color: white;
        font-size: 30px;
        width: 94%;
        margin: 3%;
        padding-top: 20px;

    }

    img {
        width: 560;
        height: auto;
        border-radius: 20px;
        image-resolution: max;
    }

    #Title {
        font-family: 'Fredericka the Great', cursive;
        text-align: center;
        color: white;
        font-size: 38px;
        opacity: 0.7;
        margin: 50px;
    }

    #TitleMesCovers {
        font-family: 'Fredericka the Great', cursive;
        text-align: center;
        color: white;
        font-size: 50px;
        opacity: 0.7;
        margin: 3px 60px;
    }

    #TitleMesMessages {
        font-family: 'Fredericka the Great', cursive;
        text-align: center;
        color: white;
        font-size: 50px;
        opacity: 0.7;
        margin: 0 60px;
    }

    #TitleMesReseaux {
        font-family: 'Fredericka the Great', cursive;
        text-align: center;
        color: white;
        font-size: 50px;
        opacity: 0.7;
        margin: 0 60px;
    }

    #TitleMaTournee {
        font-family: 'Fredericka the Great', cursive;
        text-align: center;
        color: white;
        font-size: 50px;
        opacity: 0.7;
        margin: 0 60px;
    }

    #Header {
        display: flex;
        align-items: center;
        margin: 40px 50px;
        justify-content: space-around;

    }

    #logo {
        border-radius: 50%;
    }

    #LiensVideo {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        margin: 40px;
    }

    iFrame {
        border-radius: 20px;
        width: 100%;
        border: 1px solid white;
        height: 100%;
        background-color: black;

    }

    #Videos {
        margin: 10px;
        height: 350px;
    }

    #Videos:hover {
        opacity: 0.6;
    }

    #marquee {
        width: 90%;
        font-family: 'Annie Use Your Telescope', cursive;
        letter-spacing: .1em;
        color: white;
        text-shadow: 0.1em 0.1em 0.2em black;
        font-size: 30px;
        margin-bottom: 50px;
        margin-left: 5%;
        opacity: 0.7;
    }

    a {
        text-decoration: none;
        color: white;
        text-align: center;
        letter-spacing: .1em;

    }

    a:hover {
        color: red;
        background-color: transparent;
    }

    #Webmaster {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        font-family: 'Rubik Maze', cursive;
        font-size: 17px;
    }

    #Webmaster:hover {
        letter-spacing: .2em;
    }

    #Open {
        width: 35px;
        height: 35px;
        font-weight: 900;
    }

    #paysage{
        font-family: 'Annie Use Your Telescope', cursive;
        font-size: 18px;
        color: white;
        text-align: center;
    }

    @media screen and (min-width: 200px) and (max-width: 750px) {
        #Header {
            display: flex;
            flex-direction: column;
            padding: 5px;
        }
        #Title{
            font-size: 2em;
        }
        #LiensVideo{
            margin: 3px;
            display: flex;
            flex-direction: column;
        }
        table{
            display: none;
        }
        .clignote{
            border-color: transparent;
        }
        #TitleMesMessages{
            font-size: 25px;
            padding-top: 40px;
            text-align: center;
        }
        #TitleMaTournee{
            font-size: 25px;
            padding-top: 40px;
            text-align: center;
        }
        #TitleMesReseaux{
            font-size: 25px;
            padding-top: 40px;
            text-align: center;
        }
        #TitleMesCovers{
            font-size: 25px;
            padding-top: 40px;
            padding-bottom: 20px;
            text-align: center;
        }
        #Reseaux {
        padding: 15px;
    }
    }
    @media screen and (min-width: 751px) {
        #paysage{
            display: none;
        }
        #Title{
            font-size: 2em;
        }
    }
</style>