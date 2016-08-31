<!DOCTYPE HTML>
<html>
  <head>
    <title>SoMETT</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="foundation.css">
    <script src="foundation.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~toniisosaari/SoMETT/SoMETT-1.0/dad/Uploadtheme-Toni.css">
    <script>
    function textCounter(field,field2,maxlimit)
    {
     var countfield = document.getElementById(field2);
      if ( field.value.length > maxlimit ) {
        field.value = field.value.substring( 0, maxlimit );
          return false;
           } else {
             countfield.value = maxlimit - field.value.length;
              }
              }
    </script>
   </head>
  <body>
  <div class="top-bar">
    <div class="top-bar-title">SoMETT</div>
      <div>
        <div class="top-bar-left">
        <a class="link" href="#">Main page</a>
        <a class="link" href="#">Send files</a>
        <a class="link" hfer="#">...</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="large-12 medium-12 small-12">
        <img class="main-image" alt="Vanha kaupunki" data-interchange="[http://www.hotel-r.net/im/hotel/ge/old-city-19.jpg, (small)]" src="http://www.hotel-r.net/im/hotel/ge/old-city-19.jpg">
      </div>
      <div class="large-12 medium-12 small-12">
        <h4 class="text-center">Tiedoston lähetys</h4>
      </div>
      <div class="Send-file">
        <form action="upload.php" class="dropzone">
        <input class="input-field-b" type="text" name="" id="" size=140 placeholder="Otsikko"/>
        <textarea class="input-field-a" size="40" placeholder="Tarina (Merkki raja on 140)" maxlength="140" onkeyup="textCounter(this,'counter',140);" id="message"></textarea>
        <input class="counter" disabled  maxlength="3" size="3" value="140" id="counter"><p class="Text-counter">Jäljellä olevat merkit:</p>
        </form>
      </div>
    </div>
  </div> 

<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <h4>Somet</h4>
      <p>Facebook</p>
      <p>Twitter</p>
      <p>Pinterest</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-address-book"></i>
      <h4>Yhteystiedot</h4>
      <p>Puh.</p>
      <p>Osoite</p>
      <p>...</p>
    </div>
  </div>
</footer>                                                                                                                                                                                </footer>
</html>