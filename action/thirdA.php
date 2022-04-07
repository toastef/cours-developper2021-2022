<?php
require_once __DIR__ . '/../lib/array.php';


if (isset($_POST['submit']) && !empty($_POST['choice1']) && !empty($_POST['choice2']) && empty($_POST['multi'])) {
    switch ($_POST['choice1']) {
        case 'firstname':
            switch ($_POST['choice2']) {
                case 'de':
                    echo "Voici le prénom trouvé : " . $firstname['de'][mt_rand(0, 12)];
                    break;
                case 'en':
                    echo "Voici le prénom trouvé : " . $firstname['en'][mt_rand(0, 13)];
                    break;
                case 'fr':
                    echo "Voici le prénom trouvé : " . $firstname['fr'][mt_rand(0, 13)];
                    break;
                case 'it':
                    echo "Voici le prénom trouvé : " . $firstname['it'][mt_rand(0, 12)];
                    break;
            }
            break;

        case 'lastname':
            switch ($_POST['choice2']) {
                case 'de':
                    echo "Voici le nom trouvé : " . $lastname['de'][mt_rand(0, 16)];
                    break;
                case 'en':
                    echo "Voici le nom trouvé : " . $lastname['en'][mt_rand(0, 15)];
                    break;
                case 'fr':
                    echo "Voici le nom trouvé : " . $lastname['fr'][mt_rand(0, 15)];
                    break;
                case 'it':
                    echo "Voici le nom trouvé : " . $lastname['it'][mt_rand(0, 15)];
                    break;
            }
            break;

        case 'both' :
            switch ($_POST['choice2']) {
                case 'de':
                    echo "Voici le prénom trouvé : " . $firstname['de'][mt_rand(0, 12)];
                    echo "<br>";
                    echo "Voici le nom trouvé : " . $lastname['de'][mt_rand(0, 16)];
                    break;
                case 'en':
                    echo "Voici le prénom trouvé : " . $firstname['en'][mt_rand(0, 13)];
                    echo "<br>";
                    echo "Voici le nom trouvé : " . $lastname['en'][mt_rand(0, 15)];
                    break;
                case 'fr':
                    echo "Voici le prénom trouvé : " . $firstname['fr'][mt_rand(0, 13)];
                    echo "<br>";
                    echo "Voici le nom trouvé : " . $lastname['fr'][mt_rand(0, 15)];
                    break;
                case 'it':
                    echo "Voici le prénom trouvé : " . $firstname['it'][mt_rand(0, 12)];
                    echo "<br>";
                    echo "Voici le nom trouvé : " . $lastname['it'][mt_rand(0, 15)];
                    break;
            }
    }


} elseif (isset($_POST['submit']) && !empty($_POST['choice1']) && !empty($_POST['choice2']) && !empty($_POST['multi'])) {
    $tmp = array();
    // Tant que le nombre d'éléments de notre array n'est pas égal à la quantité demandée, la boucle s'exécute
   for($i=1;$i<=4;$i++){
        if($_POST['choice1'] == 'lastname' || $_POST['choice1'] == 'firstname'){
            if($_POST['choice1'] == 'lastname'){
                // On insère un élément aléatoire du tableau $firstname dans notre tableau $tmp
                $tmp[] = $firstname[$_POST['choice2']][array_rand($firstname[$_POST['choice2']])];
                // A chaqua insertion dans notre tableau, on effectue un tri pour retirer les doublons
                $tmp = array_unique($tmp);
            }
            elseif($_POST['choice1'] == 'firstname'){
                $tmp[] = $lastname[$_POST['choice2']][array_rand($lastname[$_POST['choice2']])];
                $tmp = array_unique($tmp);
            }
        } elseif($_POST['choice1'] == 'both'){
            $first_name = $firstname[$_POST['choice2']][array_rand($firstname[$_POST['choice2']])];
            $last_name = $lastname[$_POST['choice2']][array_rand($lastname[$_POST['choice2']])];
            // On effectue la même opération qu'avant, mais on concatène les deux données pour le nom + prénom
            $tmp[] = $first_name .' '. $last_name;
            $tmp = array_unique($tmp);
        }
    }
    // Une fois toutes les données nécéssaires insérées dans notre tableau $tmp, on print.

    foreach($tmp as $key => $value){
        ?> <ul><li><?php echo $value.'<br>'?></li></ul>  <?php
    }
} else {
    header('Location: ./index.php');
}

