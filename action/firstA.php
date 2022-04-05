<?php

if (!empty($_POST['date'])) {
    getSaison();
}else{
    header('Location: index.php?view=view/firstE');
}