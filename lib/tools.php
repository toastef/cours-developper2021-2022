<?php
/**
 * Exercice 1
 * @return void echo du résultat du mois séléctionné en fonction du tableau donnant les saisons
 */
function getSaison(){

    $date = explode('-',$_POST['date']);
    $month = intval($date[1]) ;
    $timestamp = strtotime($_POST['date']);
    $newDate = date("d-m-y",$timestamp);


    $saisons=array(
        'Eté' => array(6, 7, 8),
        'automne' => array(9, 10, 11),
        'Hiver' => array(12, 1, 2),
        'Printemps' => array(3, 4, 5)
    );

    foreach ($saisons as $key => $val){
        if(in_array($month,$val)){
            switch ($key) {
                case 'Eté' :
                    ?>
                        <style>
                           body{ background-color : yellow;}
                        </style>
                    <?php
                    break;
                case 'automne' :
                        ?>
                            <style>
                                body{ background-color :orange;}
                            </style>
                        <?php
                    break;
                case 'Hiver' :
                        ?>
                            <style>
                                body{ background-color : dodgerblue;}
                            </style>
                        <?php
                    break;
                case 'Printemps' :
                        ?>
                            <style>
                                body{ background-color : orangered;}
                            </style>
                        <?php
                    break;
            }
            echo '<div class="d-flex justify-content-center pt-5 fw-35"><p>La date que vous avez choisi : ' .$newDate. ' se situe en ' .$key. '</p></div>' ;
        }
    }
}


/** EXERCICE 2
 * function pour le retour du tableau avec les couleur et les mentions
 * @return void
 */

function tabNote()
{
    global $notes;
    ksort($notes);

    foreach ($notes as $key => $value) {
       ?><tr> <?php
        echo '<td>' . ucfirst($key) . '</td>';
        if($value == 0){
            ?><td style="color: red;"><?php echo $value ?> </td>
            <td></td><?php
        }
         switch ($value){

            case $value < 10:
                ?><td style="color: red;"><?php echo $value ?> </td>
                <td></td><?php
                break;
            case $value < 12 :
                ?><td style="color: grey;"><?php echo $value ?> </td>
                <td></td><?php
                break;
            case $value < 14 :
                ?><td style="color: yellow;"><?php echo $value ?> </td>
                <td>réussite avec satisfaction</td><?php
                break;
            case $value < 16 :
                ?><td style="color: green;"><?php echo $value ?> </td>
                <td>réussite avec  distinction</td><?php
                break;
            case $value < 18 :
                ?><td style="color: blue;"><?php echo $value ?> </td>
                <td>réussite avec grande distinction</td><?php
                break;
            case $value <= 20 :
                ?><td style="font-weight:bold; color: purple;"><?php echo $value ?> </td> <td>réussite avec la plus grande distinction</td><?php
                break;

        }

    }
    ?></tr><?php
}



