<?php
$notes = [
'Dominique' => 16,
'Patrick' => 16,
'Jean' => 10,
'Leïla' => 7,
'Christophe' => 12,
'Eric' => 2,
'François' => 10,
'Vladimir' => 0,
'Loïc' => 13,
'Sophie' => 14,
'Louka' => 12,
'Emmanuel' => 8,
'Marie' => 15,
'Hugo' => 18
];
?>
<table class="table justify-content-between">
        <thead>
            <tr>
                <td>Etudiant</td>
                <td>Notes</td>
                <td>mention</td>
            </tr>
        </thead>
        <tbody>
                <tr> <?php echo tabNote()?></tr>
        </tbody>
    </table>



