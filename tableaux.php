 <!-- TABLEAU -->
 <section class="array">

 <div class="bg-secondary py-2">

        <a href="https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html" target="_blank"><h2 class="text-center text-success">PHP - Les tableaux (ou array)</h2></a>

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
        

        <h4>Exercice 1</h4>
        <!-- #PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes : -->

            <!-- janvier -->
            <!-- février -->
            <!-- mars -->
            <!-- avril -->
            <!-- mai -->
            <!-- juin -->
            <!-- juillet -->
            <!-- aout -->
            <!-- septembre -->
            <!-- octobre -->
            <!-- novembre -->
            <!-- décembre -->

        <?php

            $mois = ["janvier","février", "mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];

        ?>

        <h4>Exercice 2</h4>
        <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->

        <?php

            echo $mois[2];
        
        ?>
      
        <h4>Exercice 3</h4>
        <!-- Avec le tableau de l'exercice , afficher la valeur de l'index 5. -->

        <?php

            echo $mois[4];
        
        ?>

        <h4>Exercice 4</h4>
        <!-- ##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->

        <?php

            $mois[7] = "août";
            echo $mois[7];
        
        ?>

        <h4>Exercice 4</h4>
        <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->

        <?php

            $dep[2] = "Aisne";
            $dep[59] = "Nord";
            $dep[69] = "Oise";
            $dep[62] = "Pas-de-Calais";
            $dep[80] = "Somme";
        
        ?>

        <h4>Exercice 6</h4>
        <!-- ##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->

        <?php

            echo $dep[59];
        
        ?>

        <h4>Exercice 7</h4>
        <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->

        <?php

            $dep[51] = "Marne";
        
        ?>

        <h4>Exercice 8</h4>
        <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->

        <?php


            for ($i=0; $i < sizeof($mois); $i++) { 
                echo $mois[$i], " ";
            }  

        
        ?>

        <h4>Exercice 9</h4>
        <!-- ##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->

        <?php

            for ($i=0; $i < sizeof($dep); $i++) { 
                $element = current($dep);
                echo $element, "<br>";
                $element = next($dep);
            }
        
        ?>

        <h4>Exercice 10</h4>
        <!-- 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. -->
        <!-- Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement -->

        <?php

            foreach ($dep as $key) {
                $element = current($dep);
                $index = array_search($element, $dep);
                if ($index != ""){
                    echo "Le département ", $element, " a le numéro ", $index, "<br>";
                }
                $element = next($dep);
            }

        
        ?>

    </section><!-- /array -->