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
    switch ($_POST['choice1']) {
        case 'firstname':
            switch ($_POST['choice2']) {
                case 'de':
                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['de'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'en':
                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['en'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'fr':

                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['fr'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'it':

                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['it'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
            }

        case 'lastname':
            switch ($_POST['choice2']) {
                case 'de':
                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['de'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'en':
                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['en'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'fr':

                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['fr'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'it':

                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['it'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
            }
        case 'both' :
            switch ($_POST['choice2']) {
                case 'de':
                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['de'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php

                    echo "<br>";
                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['de'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'en':
                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['en'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php

                    echo "<br>";
                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['en'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'fr':
                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['fr'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    echo "<br>";
                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom = $lastname['fr'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
                case 'it':
                    ?> Voici les prénom trouvé :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $prenom = $firstname['it'][mt_rand(0, 12)];
                            ?>
                            <li><?php
                                echo $prenom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    echo "<br>";
                    ?> Voici les noms trouvés :
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            $nom =$lastname['it'][mt_rand(0, 12)];
                            ?>
                            <li><?php

                                    echo $nom . "<br>";
                                ?></li>

                        <?php } ?>
                    </ul>
                    <?php
                    break;
            }
    }
}


