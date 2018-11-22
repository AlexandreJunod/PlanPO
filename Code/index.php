<!-- Page to show the classes
Quentin Rossier
Alexandre Junod
22.11.2018 -->
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <title>Plan du batiment</title>
      <link rel="stylesheet" type="text/css" href="sources/css/style.css">
      <script src="jquery/dist/jquery.js"></script>
      <script src="sources/js/main.js"></script>
   </head>
   <body>
      <!-- Stage 1 in SVG - Pointer-events:none; is added to be able to click on text too-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1606 458"><defs><style>.cls-2{font-size:30px;pointer-events:none;}.cls-2,.cls-4{font-family:ArialMT, Arial;pointer-events:none;}.cls-3{letter-spacing:-0.07em;pointer-events:none;}.cls-4{font-size:24px;pointer-events:none;}</style></defs><g id="Structure_E1" data-name="Structure E1"><rect id="AileGauche" class="cls-1" x="1.5" y="90.5" width="910" height="366"/><rect id="AileDroite" class="cls-1" x="911.5" y="1.5" width="693" height="455"/></g><g id="Classes_E1" data-name="Classes E1"><rect id="C112" class="cls-1" x="1.5" y="90.5" width="286" height="183"/><rect id="C111" class="cls-1" x="1.5" y="273.5" width="286" height="183"/><rect id="Distributeur" class="cls-1" x="287.5" y="90.5" width="183" height="366"/><rect id="C121" class="cls-1" x="470.5" y="273.5" width="325" height="183"/><rect id="C122" class="cls-1" x="470.5" y="90.5" width="114" height="183"/><rect id="C124" class="cls-1" x="584.5" y="90.5" width="102" height="183"/><rect id="C126" class="cls-1" x="686.5" y="90.5" width="109" height="183"/><rect id="EntreeP" class="cls-1" x="795.5" y="90.5" width="116" height="366"/><rect id="EntreeDroite" class="cls-1" x="1503.5" y="1.5" width="101" height="455"/><rect id="C131" class="cls-1" x="911.5" y="1.5" width="278" height="455"/><rect id="C133" class="cls-1" x="1189.5" y="1.5" width="314" height="455"/></g><g id="Textes"><text class="cls-2" transform="translate(88 194)">C<tspan class="cls-3" x="21.67" y="0">1</tspan><tspan x="36.12" y="0">12</tspan></text><text class="cls-2" transform="translate(88 378)">C<tspan class="cls-3" x="21.67" y="0">11</tspan><tspan x="50.58" y="0">1</tspan></text><text class="cls-2" transform="translate(331.48 263)">Couloir<tspan x="-29.17" y="36">Distributeur</tspan></text><text class="cls-2" transform="translate(492.14 194)">C122</text><text class="cls-2" transform="translate(598.14 192)">C124</text><text class="cls-2" transform="translate(702.14 192)">C126</text><text class="cls-2" transform="translate(600.14 378)">C121</text><text class="cls-4" transform="translate(815.31 263)">Entrée <tspan x="-14" y="28.8">Principale</tspan></text><text class="cls-2" transform="translate(1008.14 263)">C131</text><text class="cls-2" transform="translate(1311.14 263)">C133</text><text class="cls-4" transform="translate(1518.64 263)">Entrée</text></g></svg>

      <!-- Divs who are link with the classes -->
      <div class="Default C112Text hidden">
         <h2>C112</h2>
         <p>Bonjour, nous présontons pacman prog</p>
      </div>
      <div class="Default C111Text hidden">
         <h2>C111</h2>
         <p>Bonjour, nous présontons une bataille navale en C++</p>
      </div>
      <div class="Default DistributeurText hidden">
         <h2>Distributeur</h2>
         <p>Des boissons, des barres céreales, des gateaux et plus encore...</p>
      </div>
      <div class="Default C121Text hidden">
         <h2>C121</h2>
         <p>Tu as faim ? Viens chez nous !</p>
      </div>
      <div class="Default C122Text hidden">
         <h2>C122</h2>
         <p>Tu as faim ? Viens chez nous !<p>
         <p>Nous avons un coin tranquille a l'abri des regards et des prises pour charger ton smartphone</p>
      </div>
      <div class="Default C124Text hidden">
         <h2>C124</h2>
         <p>Nous vendons des hot-dogs, hamburgers et croque-monsieurs</p>
      </div>
      <div class="Default C126Text hidden">
         <h2>C126</h2>
         <p>Une petite blessure ? Nous sommes la pour vous soigner</p>
      </div>
      <div class="Default EntreePText hidden">
         <h2>Entrée principale</h2>
         <p>Entrée principale, le secrétariat se trouve au dessus</p>
      </div>
      <div class="Default EntreeDroiteText hidden">
         <h2>Entrée</h2>
         <p>Entrée banale, de ce côté il y a 4 étages</p>
      </div>
      <div class="Default C131Text hidden">
         <h2>C131</h2>
         <p>Bonjour, nous présentons la recherchev sous excel</p>
      </div>
      <div class="Default C133Text hidden">
         <h2>C133</h2>
         <p>Venez apprendre a compter en binaire</p>
         <p>Vous saurez enfin quels sont les 10 types de personnes sur terre</p>
      </div>
   </body>
</html>
