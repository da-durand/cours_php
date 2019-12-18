<!-- VARIABLE -->
<section class="variable">

<!-- Ouvrir le terminal dans le dossier ou se trouve ce fichier. -->
<!-- Entrer la commande suivante: php -S 127.0.0.1:8080 -->
<!-- Dans votre navigateur utiliser l'adresse 127.0.0.1:8080 -->
<div class="bg-secondary py-2">
    <a href="https://apprendre-php.com/tutoriels/tutoriel-6-les-variables.html" target="_blank"><h2 class="text-center text-success">PHP - Les variables</h2></a>
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
    <p class="text-center"><u>CONSIGNE : Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu.</u></p>
    <p>
        En PHP, une variable s'initie avec le symbole "$", il n'est pas nécessaire de la déclarer avant de l'utiliser.<br>
        Nous allons donc ici créer la variable "nom", ayant pour valeur "Henry".<br>
        Nous utiliserons la fonction "echo", pour afficher la variable.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                &lt?php <br>
                $nom = "Henry" ; <br>
                echo($nom) ; <br>
                ?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                $nom = "Henry";
                echo($nom);
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container py-2 fiches" id="fiche-2">
    <h3 class="text-center">Exercice 2</h3>
    <p class="text-center"><u>CONSIGNE : Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix.<br>Attention age est de type entier. Afficher leur contenu.</u></p>
    <p>
        Nous reproduisons l'exercice 1, à la différence que la valeur de "age", ne sera pas encandrée par des guillemets ou apostrophes car celui-ci est un entier.<br>
        Il en va de même si la valeur est un float ou un boléen.<br>
        Il est possible d'afficher plusieurs variables dans un seul echo en les séparant par des points.<br>
        Dans le cas présent nous allons les séparer par des espaces pour rendre le résultat plus lisible.

    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $nom = "Delesquin" ; <br>
                    $prenom = "Henry" ; <br>
                    $age = 42 ; <br>
                    echo($nom." ".$prenom." ".$age) ;
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">             
                <?php
                    $nom = "Delesquin";
                    $prenom = "Henry";
                    $age = 42;
                    echo($nom." ".$prenom." ".$age);
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container py-2 fiches" id="fiche-3">
    <h3 class="text-center">Exercice 3</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable km. L'initialiser à 1. Afficher son contenu.<br>Changer sa valeur par 3. Afficher son contenu.<br>Changer sa valeur par 125. Afficher son contenu.</u></p>
    <p>
        Nous récupérons la même variable, en affichant sa valeur avant de la modifier.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $km = 1 ;<br>
                    echo($km) ;<br>
                    $km = 3 ;<br>
                    echo($km) ;<br>
                    $km = 125 ;<br>
                    echo($km) ;
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    $km = 1;
                    echo($km);
                    $km = 3;
                    echo($km);
                    $km = 125;
                    echo($km);
                ?>
            </div>
        </div>
    </div>
</div>




<div class="container py-2 fiches" id="fiche-4">
    <h3 class="text-center">Exercice 4</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.</u></p>
    <p>
        Les floats sont des nombres à virgule, et le booléan est une variable qui est True (retournera 1) ou False (retournera 0).
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $string = "Hello World" ; <br>
                    $int = 3 ; <br>
                    $float = 125.78 ; <br>
                    $bool = True ;  <br>
                    echo($string." ".$int." ".$float." ".$bool) ;
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $string = "Hello World";
                    $int = 3;
                    $float = 125.78;
                    $bool = True; 

                    echo($string." ".$int." ".$float." ".$bool);

                ?>
            </div>
        </div>
    </div>
</div>





<div class="container py-2 fiches" id="fiche-5">
    <h3 class="text-center">Exercice 5</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable de type float. L'initialiser à 1. Afficher son type.<br>Changer sa valeur par 4.8 et afficher son contenu.</u></p>
    <p>
        Ici nous utiliserons la fonction settype() pour créer notre variable et lui définir un type.<br>
        Commençons d'abord par donner une valeur à notre variable.<br>
        Nous allons ensuite utiliser la fonction settype(), qui prendre en premier paramètre notre variable, puis en second le type souhaité.<br>
        La fonction gettype() permet ensuite d'afficher le type de la variable donnée en paramètre.<br>
        "\n" revient à faire un espace.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $nb = 1 ; <br>
                    settype($nb, "float") ; <br>
                    echo gettype($nb) ; <br>
                    $nb = 4.8 ; <br>
                    echo "\n".$nb ;
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $nb = 1;
                    settype($nb, "float");
                    echo gettype($nb);
                    $nb = 4.8;
                    echo "\n".$nb;

                ?>
            </div>
        </div>
    </div>
</div>




<div class="container py-2 fiches" id="fiche-6">
    <h3 class="text-center">Exercice 6</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable nom et l'initialiser avec la valeur de votre choix.<br>Afficher : "Bonjour" + nom + ", comment vas tu ?".</u></p>
    <p>
        Nous créons notre variable comme dans les précédents exercices,<br> puis l'incrémentons à des chaines caractères comme nous l'avons déjà fait pour des espaces.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $nom = "Robert" ;<br>
                    echo "Bonjour ".$nom.", comment vas-tu ?" ;
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $nom = "Robert";
                    
                    echo "Bonour ".$nom.", comment vas-tu ?";

                ?>
            </div>
        </div>
    </div>
</div>




<div class="container py-2 fiches" id="fiche-7">
    <h3 class="text-center">Exercice 7</h3>
    <p class="text-center"><u>CONSIGNE : Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.<br>Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</u></p>
    <p>
        Pas de différence avec l'exercices précédent, si ce n'est qu'il y a plusieurs variables dont un entier.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $nom = "Barathéon" ;<br>
                    $prenom = "Robert" ;<br>
                    $age = 54 ;<br>
                    echo "Bonjour ".$nom." ".$prenom." tu as ".$age." ans";
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $nom = "Barathéon";
                    $prenom = "Robert";
                    $age = 54;

                    echo "Bonjour ".$nom." ".$prenom." tu as ".$age." ans";

                ?>
            </div>
        </div>
    </div>
</div>




<div class="container py-2 fiches" id="fiche-8">
    <h3 class="text-center">Exercice 8</h3>
    <p class="text-center"><u>CONSIGNE : Créer 3 variables, dans la première mettre le résultat de l'opération 3 + 4.<br>Dans la deuxième mettre le résultat de l'opération 5 * 20, dans la troisième mettre le résultat de l'opération 45 / 5.</u></p>
    <p>
        Les calculs peuvent s'effecteur directement lorsque l'on initie sa variable.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $addition = 3+4 ;<br>
                    $multiple = 5*20 ;<br>
                    $division = 45/5 ;<br>
                    echo $addition." ".$multiple." ".$division ;
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    $addition = 3+4 ;
                    $multiple = 5*20 ;
                    $division = 45/5 ;

                    echo $addition." ".$multiple." ".$division ;

                ?>
            </div>
        </div>
    </div>
</div>

</section><!-- /variable -->



<script src="static/js/genex.js"></script>