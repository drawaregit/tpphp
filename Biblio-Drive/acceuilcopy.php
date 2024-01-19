<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Aceuil Biblio-Drive</title>
    <link rel="icon" type="image/png" href="icon.png" />
    <script src="tarteaucitron.js-1.15.0/tarteaucitron.js"></script>
    <script>
        tarteaucitron.init({
            "privacyUrl": "cgu.html", /* URL de la page de la politique de vie privée */

            "hashtag": "#tarteaucitron", /* Ouvrir le panneau contenant ce hashtag */
            "cookieName": "tarteaucitron", /* Nom du Cookie */

            "orientation": "middle", /* Position de la bannière (top - bottom) */
            "showAlertSmall": true, /* Voir la bannière réduite en bas à droite */
            "cookieslist": true, /* Voir la liste des cookies */

            "adblocker": false, /* Voir une alerte si un bloqueur de publicités est détecté */
            "AcceptAllCta": true, /* Voir le bouton accepter tout (quand highPrivacy est à true) */
            "highPrivacy": true, /* Désactiver le consentement automatique */
            "handleBrowserDNTRequest": false, /* Si la protection du suivi du navigateur est activée, tout interdire */

            "removeCredit": false, /* Retirer le lien vers tarteaucitron.js */
            "moreInfoLink": true, /* Afficher le lien "voir plus d'infos" */
            "useExternalCss": false, /* Si false, tarteaucitron.css sera chargé */

            //"cookieDomain": ".my-multisite-domaine.fr", /* Cookie multisite */

            "readmoreLink": "/cookiespolicy" /* Lien vers la page "Lire plus" */
        });
        (tarteaucitron.job = tarteaucitron.job || []).push('youtube');
	</script>
</head>
<body>
    
<?php
session_start();
require_once('conf/connexion.php'); ?>     
<div class="container-fluid">
<?php include 'navbar.php';
?>
</div>
<div class="container-fluid"> <div class=row>
<div class="col-md-8" >
<?php include 'carousselv2.php';?></div> 
<div class="col-md-4"> <?php include 'authentification.php';?> </div>
    </div>
</div>


</body>