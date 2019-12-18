 <!-- CONDITION -->
 <section class="condition">

    <div class="bg-secondary py-2">
        <a href="https://apprendre-php.com/tutoriels/tutoriel-9-les-structures-de-contrle-les-conditions.html" target="_blank"><h2 class="text-center text-success">PHP - Les conditions</h2></a>
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
    <p class="text-center"><u>CONSIGNE : Créer une variable age et l'initialiser avec une valeur.<br>Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</u></p>
    <p>
        Le if permet de n'executer le code qui lui est donné que si la condition demandée est remplie.<br>
        La condition lui est donné entre des parethèse, puis le code à executer doit se trouver entre les accolades qui suivent.<br>
        Le else est optionnel et s'executera si la condition du if n'est pas remplie, le else ne demande pas de condition contrairement au else if.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $age = 18 ;<br>
                    <br>
                    if ($age < 18){<br>
                        echo "Rentres chez ta mère !" ;<br>
                    }<br>
                    <br>
                    else{<br>
                       echo "Vous êtes majeur" ;<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    $age = 18;

                    if ($age < 18){
                        echo "Rentres chez ta mère !";
                    }
                    else{
                       echo "Vous êtes majeur";
                    }
                ?>
            </div>
        </div>
    </div>
</div>



<div class="container py-2 fiches" id="fiche-2">
    <h3 class="text-center">Exercice 2</h3>
    <p class="text-center"><u>CONSIGNE : Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.<br>Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!</u></p>
    <p>
        
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $IsEasy = true ;<br>
                    <br>
                    if ($IsEasy == true){<br>
                        echo "C'est facile !!" ;<br>
                    }<br>
                    else{<br>
                        echo "C'est difficile !!!" ;<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    $IsEasy = true;

                    if ($IsEasy == true){
                        echo "C'est facile !!";
                    }
                    else{
                        echo "C'est difficile !!!";
                    }
                ?>
            </div>
        </div>
    </div>
</div>




<div class="container py-2 fiches" id="fiche-3">
    <h3 class="text-center">Exercice 3</h3>
    <p class="text-center"><u>CONSIGNE : Créer deux variables age et genre. La variable genre peut prendre comme valeur : "Homme" ou "Femme"<br>En fonction de l'âge et du genre afficher la phrase correspondante :<br>
    Vous êtes un homme et vous êtes majeur <br>
        Vous êtes un homme et vous êtes mineur <br>
        Vous êtes une femme et vous êtes majeur <br>
        Vous êtes une femme et vous êtes mineur <br>
    </u></p>
    <p>
        Dans la situation actuelle, nous devons former une seule phrase avec deux conditions différents.<br>
        Nous pourvons donc adapter les deux morceux de phrase en fonction des résultats, les deux echo se concaténeront seuls.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $age = 42; <br>
                    $genre = true; <br>
                    <br>
                    if ($genre == true){ <br>
                        echo "Vous êtes un homme et "; <br>
                    } <br>
                    else{ <br>
                        echo "Vous êtes une femme et "; <br>
                    } <br>
                    <br>
                    if ($age < 18){ <br>
                        echo "vous êtes mineur"; <br>
                    } <br>
                    else{ <br>
                       echo "vous êtes majeur"; <br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    $age = 42;
                    $genre = true;
                
                    if ($genre == true){
                        echo "Vous êtes un homme et ";
                    }
                    else{
                        echo "Vous êtes une femme et ";
                    }
                
                    if ($age < 18){
                        echo "vous êtes mineur";
                    }
                    else{
                       echo "vous êtes majeur";
                    }
                ?>
            </div>
        </div>
    </div>
</div>



<div class="container py-2 fiches" id="fiche-4">
    <h3 class="text-center">Exercice 4</h3>
    <p class="text-center"><u>CONSIGNE : 
    L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre.<br>
        Cette échelle va de 1 à 9.<br>
            Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.<br>
            <br>
            1	Micro-séisme impossible à ressentir.<br>
            2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>
            3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>
            4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>
            5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>
            6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>
            7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>
            8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>
            9	Séisme capable de tout détruire sur une très vaste zone.
    </u></p>
    <p>
        Le switch est une série de valeurs pouvant correspondre avec celle de la variable qui lui est donnée.<br>
        Il parcourt ensuite les cases en attendant de trouver une valeur correspondante.<br>
        Lorsqu'il trouve cette valeur, il execute la case et toutes celles qui suivent.<br>
        Nous utiliserons ici le break pour empêcher le switch de se poursuivre lorsqu'il aura trouvé la valeur recherchée.<br>
        default est une case qui s'execute à la fin du switch, peut importe la valeur demandée, dans notre cas, il ne s'execute que si la valeur donnée est incorrecte.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    $magnitude = 7;<br>
                    <br>
                    switch ($magnitude) {<br>
                        case '1':<br>
                            echo "Micro-séisme impossible à ressentir.";<br>
                            break;<br>
                            <br>
                        case '2':<br>
                            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";<br>
                            break;<br>
                            <br>
                        case '3':<br>
                            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";<br>
                            break;<br>
                            <br>
                        case '4':<br>
                            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";<br>
                            break;<br>
                            <br>
                        case '5':<br>
                            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";<br>
                            break;<br>
                            <br>
                        case '6':<br>
                            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";<br>
                            break;<br>
                            <br>
                        case '7':<br>
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";<br>
                            break;<br>
                            <br>
                        case '8':<br>
                            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";<br>
                            break;<br>
                            <br>
                        case '9':<br>
                            echo "Séisme capable de tout détruire sur une très vaste zone.";<br>
                            break;<br>
                            <br>
                        default:<br>
                            echo "Donnée incorrecte";<br>
                            break;<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    $magnitude = 7;

                    switch ($magnitude) {
                        case '1':
                            echo "Micro-séisme impossible à ressentir.";
                            break;
                
                        case '2':
                            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                            break;
                        
                        case '3':
                            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                            break;
                        
                        case '4':
                            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                            break;
                
                        case '5':
                            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                            break;
                
                        case '6':
                            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                            break;
                
                        case '7':
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                            break;
                        
                        case '8':
                            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                            break;
                
                        case '9':
                            echo "Séisme capable de tout détruire sur une très vaste zone.";
                            break;
                        
                        default:
                            echo "Donnée incorrecte";
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
</div>



<div class="container py-2 fiches" id="fiche-5">
    <h3 class="text-center">Exercice 5</h3>
    <p class="text-center"><u>CONSIGNE : Traduire ce code avec des if et des else : <br>
    &lt?php

            echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

    ?&gt      
    </u></p>
    <p>
        Les parenthèses possèdent une condition, le "?" donne un résultat si la condition est vraie, le ":" en retourne un autre si celle-ci est fausse.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    if ($maVariable != "Homme"){<br>
                        echo "C'est une développeuse";<br>
                    }<br>
                    else{<br>
                        echo "C'est un développeur";<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php
                    if ($maVariable != "Homme"){
                        echo "C'est une développeuse";
                    }
                    else{
                        echo "C'est un développeur";
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container py-2 fiches" id="fiche-6">
    <h3 class="text-center">Exercice 6</h3>
    <p class="text-center"><u>CONSIGNE : Traduire ce code avec des if et des else : <br>
    &lt?php echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'; ?&gt
    </u></p>
    <p>
    Les parenthèses possèdent une condition, le "?" donne un résultat si la condition est vraie, le ":" en retourne un autre si celle-ci est fausse.<br>
    Le \' permet d'afficher une apostrophe sans que celle-ci n'influe sur la chaine de caractères.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    if ($monAge >= 18){<br>
                        echo "Tu es majeur";<br>
                    }<br>
                    else{<br>
                        echo "Tu n'es pas majeur";<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    if ($monAge >= 18){
                        echo "Tu es majeur";
                    }
                    else{
                        echo "Tu n'es pas majeur";
                    }

                ?>
            </div>
        </div>
    </div>
</div>




<div class="container py-2 fiches" id="fiche-7">
    <h3 class="text-center">Exercice 7</h3>
    <p class="text-center"><u>CONSIGNE : Traduire ce code avec des if et des else :<br>
    &lt?php

    echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';

    ?&gt
    </u></p>
    <p>
        La traduction se réalise comme dans les deux précédents exercices.<br>
        Cette condition peut est remplie si la variable est un booléan False, ou si la variable n'existe pas, dans le cas présent elle n'existe pas.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    if ($maVariable == false){
                        echo "C'est pas bon !!!";
                    }
                    else{
                        echo "C'est ok !!";
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    if ($maVariable == false){
                        echo "C'est pas bon !!!";
                    }
                    else{
                        echo "C'est ok !!";
                    }

                ?>
            </div>
        </div>
    </div>
</div>



<div class="container py-2 fiches" id="fiche-8">
    <h3 class="text-center">Exercice 8</h3>
    <p class="text-center"><u>CONSIGNE : Traduire ce code avec des if et des else :<br>
    &lt?phpphp

    echo ($maVariable) ? 'cest ok !!' : 'cest null :D';

    ?&gt
    </u></p>
    <p>
    La traduction se réalise comme dans les deux précédents exercices.<br>
    La condition est vrai si la variable possède une valeur, et donc n'est pas NULL.
    </p>
    <div class="row">
        <div class="col-6 border p-0">
            <h4 class="text-center bg-danger">CODE</h4>
            <div class="contain text-center">
                <p>
                    &lt?php <br>
                    if ($maVariable != NULL){<br>
                        echo "C'est ok !!";<br>
                    }<br>
                    else{<br>
                        echo "C'est null :D";<br>
                    }
                    <br>?&gt
                </p>
            </div>
        </div>
        <div class="col-6 border p-0 d-flex flex-column">
            <h4 class="text-center bg-success">RESULTAT</h4>
            <div class="contain text-center align-items-center">
                <?php

                    if ($maVariable != NULL){
                        echo "C'est ok !!";
                    }
                    else{
                        echo "C'est null :D";
                    }

                ?>
            </div>
        </div>
    </div>
</div>



</section><!-- /condition -->

<script src="static/js/genex.js"></script>
