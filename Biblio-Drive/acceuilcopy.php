<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/png" href="icon.png" />
    <script src="/tarteaucitron/tarteaucitron.js"></script>

        <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */
          "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
       
          "groupServices": false, /* Group services by category */
          "showDetailsOnClick": true, /* Click to expand the description */
          "serviceDefaultState": "wait", /* Default state (true - wait - false) */
                           
    	  "showAlertSmall": false, /* Show the small banner on bottom right */
    	  "cookieslist": false, /* Show the cookie list */
                           
          "closePopup": false, /* Show a close X on the banner */

          "showIcon": true, /* Show cookie icon to manage cookies */
          //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
          "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                           
          "DenyAllCta" : true, /* Show the deny all button */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */

          "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
          "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
          "readmoreLink": "", /* Change the default readmore link */

          "mandatory": true, /* Show a message about mandatory cookies */
          "mandatoryCta": true, /* Show the disabled accept button when mandatory on */
    
          //"customCloserId": "" /* Optional a11y: Custom element ID used to open the panel */
        });
        </script>
</head>
<body>
<?php
session_start();
require_once('conf/connexion.php'); ?>     
<div class="container-fluid">
<?php include 'navbar.php';?>
</div>
<div class="container-fluid">
<div class="col-md-8" >
<?php include 'carousselv2.php';?></div>
<div class="col-md-4"> <?php include 'authentification.php';?> </div>
</div>


</body>