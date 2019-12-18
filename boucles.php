 <!-- BOUCLE -->
 <section class="loop">

 <div class="bg-secondary py-2">
    
    <a href="https://apprendre-php.com/tutoriels/tutoriel-10-les-structures-de-contrle-les-boucles.html" target="_blank"><h2 class="text-center text-success">PHP - Les boucles</h2></a>

    <nav>
        <ul class="list-unstyled d-flex justify-content-around mt-43">
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-1">Exercice 1</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-2">Exercice 2</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-3">Exercice 3</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-4">Exercice 4</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-5">Exercice 5</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-6">Exercice 6</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-7">Exercice 7</button>
            </li>
            <li>
                <button class="exo bg-info border-0 p-1" id="ex-8">Exercice 8</button>
            </li>
        </ul>
    </nav>
</div>


<div class="container py-2 fiches" id="fiche-1">
    <h3 class="text-center">Exercice 1</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable et l'initialiser à 0.<br>Tant que cette variable n'atteint pas 10, il faut l'afficher et l'incrémenter.</u></p>
    <p>
      Alors que le if n'execute son code que si sa condition est remplie, le while s'executera en boucle tant que la sienne ne le sera pas.<br>
      Pour incrément la variable nous pouvons ajouter "++" après son nom, un raccourcis de : ma_variable = ma_variable + 1.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $nb = 0;<br>
                    <br>
                    while ($nb <= 10) {<br>
                        echo $nb." ";<br>
                        $nb++;<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $nb = 0;

                    while ($nb <= 10) {
                        echo $nb." ";
                        $nb++;
                    }

                ?>
            </div>
        </div>
    </div>
</div>






<div class="container py-2 fiches" id="fiche-2">
    <h3 class="text-center">Exercice 2</h3>
    <p class="text-center"><u>CONSIGNE : 
    Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre aléatoire compris en 1 et 100.<br>
    Tant que la première variable n'est pas supérieur à 20 :<br>
    <br>
    multiplier la première variable avec la deuxième<br>
    afficher le résultat<br>
    incrémenter la première variable
    </u></p>
    <p>
      La fonction mt_rand renvoie un nombre aléatoire entre deux autres nombres fournis en paramètres.<br>
      La multiplication se fait ensuite dans le while, nous pouvons afficher un espace après le résultat pour les distinguer.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $var1 = 0;<br>
                    $var2 = mt_rand(1, 100);<br>
                    <br>
                    while ($var1 <= 20) {<br>
                        $result = $var1*$var2;<br>
                        echo $result." ";<br>
                        $var1++;<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $var1 = 0;
                    $var2 = mt_rand(1, 100);

                    while ($var1 <= 20) {
                        $result = $var1*$var2;
                        echo $result." ";
                        $var1++;
                    }

                ?>
            </div>
        </div>
    </div>
</div>


<div class="container py-2 fiches" id="fiche-3">
    <h3 class="text-center">Exercice 3</h3>
    <p class="text-center"><u>CONSIGNE : 
    Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre aléatoire compris en 1 et 100.<br>
    Tant que la première variable n'est pas inférieur ou égale à 10 :<br>
    <br>
    diviser la première variable avec la deuxième<br>
    afficher le résultat<br>
    décrémenter la première variable
    </u></p>
    <p>
        La décrémentation fonctionne comme l'incrémentation, il suffit de remplace "++" par "--".<br>
        La boucle se poursuit tant que la première variable est supérieur à 10, elle s'arrêtera donc lorsque la variable sera inférieur ou égales à 10.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $var1 = 100;<br>
                    $var2 = mt_rand(1, 100);<br>
                    <br>
                    while ($var1 > 10) {<br>
                        $result = $var1/$var2;<br>
                        echo $result." ";<br>
                        $var1--;<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $var1 = 100;
                    $var2 = mt_rand(1, 100);
                    
                    while ($var1 > 10) {
                        $result = $var1/$var2;
                        echo $result." ";
                        $var1--;
                    }

                ?>
            </div>
        </div>
    </div>
</div>





<div class="container py-2 fiches" id="fiche-4">
    <h3 class="text-center">Exercice 4</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable et l'initialiser à 1.<br> Tant que cette variable n'atteint pas 10, il faut l'afficher et l'incrémenter de la motié de sa valeur.<br></u></p>
    <p>
        Lors d'un calcul, nous pouvons donner un priorité à l'aide de parenthèse, bien que les multiplications et divisions aient la priorité par défaut.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $var1 = 1;<br>
                    <br>
                    while ($var1 <= 10) {<br>
                        echo $var1." ";<br>
                        $var1 = $var1 + ($var1/2);<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $var1 = 1;
                    
                    while ($var1 <= 10) {
                        echo $var1." ";
                        $var1 = $var1 + ($var1/2);
                    }

                ?>
            </div>
        </div>
    </div>
</div>






<div class="container py-2 fiches" id="fiche-">
    <h3 class="text-center">Exercice </h3>
    <p class="text-center"><u>CONSIGNE : </u></p>
    <p>
      
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    
                ?>
            </div>
        </div>
    </div>
</div>

<h4>Exercice 5</h4>
<!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->

<?php

    for ($i=0; $i < 15; $i++) { 
        echo "On y arrive presque. ";
    }

?>




<div class="container py-2 fiches" id="fiche-">
    <h3 class="text-center">Exercice </h3>
    <p class="text-center"><u>CONSIGNE : </u></p>
    <p>
      
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    
                ?>
            </div>
        </div>
    </div>
</div>

<h4>Exercice 6</h4>
<!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->

<?php

    for ($i=20; $i > 0; $i--) { 
        echo "C'est presque bon. ";
    }

?>



<div class="container py-2 fiches" id="fiche-">
    <h3 class="text-center">Exercice </h3>
    <p class="text-center"><u>CONSIGNE : </u></p>
    <p>
      
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    
                ?>
            </div>
        </div>
    </div>
</div>

<h4>Exercice 7</h4>
<!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->

<?php

    for ($i=0; $i < 100; $i = $i + 15) { 
        echo "On tient le bon bout ";
    }

?>



<div class="container py-2 fiches" id="fiche-">
    <h3 class="text-center">Exercice </h3>
    <p class="text-center"><u>CONSIGNE : </u></p>
    <p>
      
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    
                ?>
            </div>
        </div>
    </div>
</div>

<h4>Exercice 8</h4>
<!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->

<?php

    for ($i=200; $i > 0; $i = $i - 12) { 
        echo "Enfin !!!! ";
    }

?>

</section><!-- /loop -->

<script src="static/js/genex.js"></script>
