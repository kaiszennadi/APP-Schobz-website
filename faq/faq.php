<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="faq.css">
    <link rel="stylesheet" type="text/css" href="../footer_header/footer_header.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>FAQ</title>
</head>
<body>

<!-- Header -->
<?php require "../footer_header/header.php" ?>


<!-- Corps principal -->
<div class="regroupement">
    <div class="categorie-QT">
        <a class="entête" href="#popup_QT">
            Questions techniques
        </a>
        <p class="Talk">
            Pour toutes questions concernant le fonctionnement du sites, de la lecture des résultats ou du relevé des mesures.
        </p>
    </div>
    <div class="categorie-InfoCap">
        <a class="entête" href="#popup_InfoCap">
            Information capteur
        </a>
        <p class="Talk">
            Pour toutes questions sur le fonctionnement des appareils de mesures.
        </p>
    </div>
    <div class="categorie-ProbCap">
        <a class="entête" href="#popup_ProbCap">
            Problème capteur
        </a>
        <p class="Talk">
            Pour tout endommagement du système, veuillez le signaler à votre auto-école.
        </p>
    </div>
    <div class="categorie-QF">
        <a class="entête" href="#popup_QF">
            Questions fréquentes
        </a>
        <p class="Talk">
            Pour toutes questions en générales concernant le fonctionnement du service.
        </p>
    </div>
    <div class="categorie-AddF">
        <a class="entête" href="#popup_AddF">
            Ajouter une question
        </a>
        <p class="Talk">
            Pour tout autre demandes.
        </p>
    </div>
</div>


<!-- Popup -->
<div id="popup_QT" class="overlay">
    <div class="popup">
        <h2>
            Questions techniques
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>Comment lire les résultats?</h3>
                    <p>Il est possible de lire les résultats via le profile, rubrique Mes Résultats. Vous pourrez ainsi suivre votre progression.</p>
                    <h3>Comment suivre le relevé de mesures?</h3>
                    <p>Vous avez accès aux mesures depuis votre profile. Votre suivi peut alors se faire directement par des graphiques.</p>
                </span>
    </div>
</div>

<div id="popup_InfoCap" class="overlay">
    <div class="popup">
        <h2>
            Informations sur les capteurs
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>Que font les appareils de mesures</h3>
                    <h3>À quoi servent-ils?</h3>
                    <h3>Comment fonctionnent-ils?</h3>
                </span>
    </div>
</div>

<div id="popup_ProbCap" class="overlay">
    <div class="popup">
        <h2>
            Problèmes avec les capteurs
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>Que faire lorsqu'un appareil ne s'active pas?</h3>
                </span>
    </div>
</div>

<div id="popup_QF" class="overlay">
    <div class="popup">
        <h2>
            Questions fréquentes
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    Pour toutes questions en générales à propos du fonctionnement du service.
                    <h3>Comment accéder à son profil?</h3>
                    <p>Le profil est accessible via le bouton "Profil" situé en haut de page.</p>
                </span>
    </div>
</div>

<div id="popup_AddF" class="overlay">
    <div class="popup">
        <h2>Ajouter une question</h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>Pour tout autre demande, merci de vous référer à la rubrique Nous Contacter en bas de page pour y envoyer un message.</h3>
                </span>
    </div>
</div>


<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php" ?>



<!--Footer-->

<?php require "../footer_header/footer.php"?>


</body>
</html>