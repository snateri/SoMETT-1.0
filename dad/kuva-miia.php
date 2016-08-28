<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SoMETT</title>
<script src="foundation.js"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<link rel="stylesheet" href="foundation.css">
<link rel="stylesheet" href="tyylit-miia.css">
</head>
<body>
  <!-- Navipalkki -->
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">SoMETT</li>
      <li><a href="#">Etusivu</a></li>
      <li><a href="#">Kuvapankki</a></li>
      <li><a href="#">Lisäyspalvelu</a></li>
    </ul>
  </div>
</div>
  <!-- Jotain ylimääräistä paskaa, joka saa sivun näyttämään kivemmalta --!>
<section class="hero">
  <h1>Lähetyspalvelu</h1>
  <p>Tämän kautta voit lähettä kuviasi yhteisön ja museoasiantuntioiden tutkittavaksi.
  Suosittelemme lämpimästi käytäjäehtoihin tutustumista ennen kuvien lähettämistä.
  Mikäli et tiedä kuinka lähetysboksia käytetään, löytyy aiheesta tietoa sivunalaosassa.</p>
</section>  
  <!-- Sivun keskeisin sisältö  -->
<section class="main">
  <div class="small-11 small-centered columns">
  <!-- Kuvien laitto juttu -->
    <form action="upload.php" class="dropzone"></form>
  </div>
</section>
  <!-- Apua uusavuttomille --!>
<section class="help">
  <h2>Helppinurkka</h2>
  <p>SoMETTin lähetyspalveluboksi on "drag & drop -tekniikalla" toimiva lähetyslaatikko.
  Mikäli selaimesi tukee kyseistä tiedostojen lähetystapaa voi yksinkertaisesti "raahata ja
  tiputtaa" kuvan lähetysboksin ruutuun. Jos selain ei tue "drag & drop -tekniikkaa", voit 
  klikata ruudussa olevaa tekstiä, joka avaa perinteisen tiedoston valinta ikkunan.</p>
</section>
  <!-- Footer osio -->
<footer>
</footer>
</body>
</html>

