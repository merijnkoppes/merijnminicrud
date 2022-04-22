<?php include_once("includes/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
  <div id="navbar">
    <img src="img/Riapizzarialogo.png" height="200px">
    <h1>Ria's Pizzaria</h1>
    <a href="index.php" class="huidig">Home</a>
    <a href="menu.php">Menu</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">login</a>
  </div>

  <div id="content">
    <h1>Wie zijn wij?</h1>

    <p id="info">
      We openden de eerste vestiging in Breda. In 1989. Nu zijn we marktleider met ruim 300 vestigingen, die samen meer dan 20 miljoen (!) pizza's per jaar maken. We hebben de afgelopen jaren goed naar jullie geluisterd. We hebben onze menu's uitgebreid met vegetarische en veganistische gerechten en met heerlijke bijgerechten als kippenvleugels en ijskoude Thick Shakes. Bovendien hebben we je het veel makkelijker gemaakt om jouw favoriete pizza te bestellen via de site of bestelapps. Dankzij onze GPS-tracker en Order Anywhere weet onze bezorger je altijd te vinden.<br><br
      >Bij Ria's willen we eerlijke pizza's maken. We werken daarom met 100% vers deeg, verse groenten en de lekkerste ingrediënten tegen een eerlijke prijs. Naast goede pizza's en andere lekkere gerechten, vinden we het net zo belangrijk om goed te zijn voor onze mensen. We bieden hen een fijne werkplek, waarin iedereen dezelfde kansen krijgt om door te groeien. We willen goed zijn én goed doen voor onze omgeving waar onze winkels zich bevinden en oog hebben voor mens, dier en milieu. Iedere dag dagen we ons zelf uit om het beste uit ons zelf te halen. Voor ons zelf en voor een betere wereld.<br><br>
      Wij vinden het belangrijk dat je weet wat je eet. Daarom leggen we graag uit wat je van onze pizza's mag verwachten:
      <br>
      • We maken de saus van alleen de beste, verse tomaten.
      <br>
      • De kaas maken we van smeuïge Mozzarella.
      <br>
      • Al onze groenten zijn vers.
      <br>
      • Ons deeg bevat geen enkel ingrediënt van dierlijke oorsprong.
      <br>
      • Het vlees op onze pizza's komt uitsluitend van leveranciers die het welzijn van dieren respecteren.
      <br>
      Naast pizza's hebben we nog meer lekkere gerechten op het menu. Denk aan hot sandwiches, kippenvleugels en natuurlijk onze Thick Shakes gemaakt van 100% roomijs. Ons menu verandert regelmatig. In de testkeuken ontwikkelt onze eigen chef regelmatig nieuwe pizza's en andere producten. Iedere drie maanden vind je daarom weer nieuwe smaken op het menu.
      <br><br>
      Onze pizzadoosjes zijn gemaakt van speciaal karton en vrij van PFAS (chemicaliën die je in veel voedselverpakkingen tegenkomt). Ze mogen gewoon bij het oud papier. Gooi wel eerst eventuele pizzarestanten in de groene bak.

      <br><br>
      Wij gaan respectvol om met mensen, ons milieu en met dieren. Dat vragen we ook van onze leveranciers. Zij tekenen allemaal voor de 'five freedoms' zoals de Wereld Gezondheids Organisatie (WHO) die heeft opgesteld:
      <br>
      1. Vrij van honger en dorst: dieren hebben vrije toegang tot schoon drinkwater en voeding.
      <br>
      2. Vrij van ongemak: ze hebben een regulier dag- en nachtritme.
      <br>
      3. Vrij van pijn, letsel en ziekte: ze krijgen geen groei-stimulerende middelen en antibiotica.
      <br>
      4. Vrije ruimte: ze krijgen voldoende bewegingsvrijheid, zodat ze zich normaal kunnen gedragen.
      <br>
      5. Vrij van pijn en stress
    </p>
        
    <h1>Highlighted:</h1>
    <div id="slideshow">
      <?php
        $sql = "SELECT * FROM menukaart";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();

        foreach ($result as $res) { ?>
          <div id="highliteditem">
            <div id="product">
              <h2><?php echo $res["product"]; ?></h2>
            </div>
            <div id="ingredienten">
              <h3><?php echo $res["ingredienten"]; ?></h3>
            </div>
            <div id="prijs">
              <h3>€<?php echo $res["prijs"];
                    ?></h3>
            </div>
          </div>
      <?php } ?>

    </div>

  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>