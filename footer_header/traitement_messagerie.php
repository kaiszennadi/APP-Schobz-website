<?php
require "../securite/bd-setup.php";

$nom = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];
$staff = "vien.henry.jrv@gmail.com";

$header="Mine-Version: 1.0\r\n";
$header.='From: "Contact.SCHBOTZ.com"<support@schobtz'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$message ='
    <!DOCTYPE html>
    <html lang="fr">
        <body>
            <div style="padding:0;margin:0 auto;font-size:16px;font-weight:normal;line-height:22px"> 
                <h3> Nom:</h3>'.$nom.'
                <h3> Mail:</h3>'.$mail.'
                <h3> Message: </h3> '.$message.'
            </div>                
        </body>
    </html>';
mail($staff,"Messagerie de l'auto école.",$message,$header);
header("location: http://localhost/APP-Schobz-website/accueil/accueil.php"); ?>