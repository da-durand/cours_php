  <!-- DATE -->
  <section class="date">

<a href="https://www.php.net/manual/fr/function.date.php" target="_blank"><h2 class="text-center">PHP - Les dates</h2></a>

<h4>Exercice 1</h4>
<!-- Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->

<?php

   $today = date("d/m/Y");
   echo $today;

?>

<h4>Exercice 2</h4>
<!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->

<?php

   $today = date("d-m-y");
   echo $today;

?>

<h4>Exercice 3</h4>
<!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) -->

<?php
   
   $today = date("l d F Y");
   echo $today;

?>

<h5>Bonus</h5>
<!-- Bonus : Le faire en français. -->

<?php
   
   $today = setlocale("l d F Y");
   echo $today;

?>

<h4>Exercice 4</h4>
<!-- Afficher le timestamp du jour. -->
<!-- Afficher le timestamp du mardi 2 août 2016 à 15h00. -->

<?php
   
   $today = date(time());
   echo $today, "<br>";
   
   echo strtotime("2 August 2016 15 hours") ;

?>

<h4>Exercice 5</h4>
<!-- 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->

<?php

   $datetime1 = date_create('2016-05-16');
   $datetime2 = date_create('today');
   $interval = date_diff($datetime1, $datetime2);
   echo $interval->format('%R%a days');

?>

<h4>Exercice 6</h4>
<!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->

<?php

   $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
   echo $number, " jours en février 2016";

?>

<h4>Exercice 7</h4>
<!-- Afficher la date du jour + 20 jours. -->

<?php

   $day = strtotime("+20 day");
   $date = date("l d F Y",$day);
   echo $date;

?>

<h4>Exercice 8</h4>
<!-- Afficher la date du jour - 22 jours -->

<?php

   $day = strtotime("-22 day");
   $date = date("l d F Y",$day);
   echo $date;

?>

<h4>Exercice FINAL</h4>
<!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. -->
<!-- En fonction des choix, l'afficher dans un calendrier -->

<form action="#">
   <select name="#" id="month">
       <option value="#">janvier</option>
       <option value="#">février</option>
       <option value="#">mars</option>
       <option value="#">avril</option>
       <option value="#">mai</option>
       <option value="#">juin</option>
       <option value="#">juillet</option>
       <option value="#">aout</option>
       <option value="#">septembre</option>
       <option value="#">octobre</option>
       <option value="#">novembre </option>
       <option value="#">décembre</option>
   </select>
   <select name="#" id="year">
       <option value="#">2019</option>
       <option value="#">2018</option>
       <option value="#">2017</option>
       <option value="#">2016</option>
       <option value="#">2015</option>
       <option value="#">2014</option>
       <option value="#">2013</option>
       <option value="#">2012</option>
       <option value="#">2011</option>
       <option value="#">2010</option>
       <option value="#">2009 </option>
       <option value="#">2008</option>
   </select>
</form>

<label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
    value="2018-07-22"
    min="2007-01-01" max="2028-12-31">

</section>
