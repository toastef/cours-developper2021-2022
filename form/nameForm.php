

<form action="index.php?view=action/thirdA" method="post">
    <div class="btn-group flex-sm-column p-2" role="group" aria-label="Basic checkbox toggle button group">
        <h3>Générateur de Prénoms et de noms</h3>
        <label for="generated choice" class="p-1" >Que souhaitez-vous générer : </label>
            <select id="choice" name="choice1" class="p-1">
                <option disabled>--choisissez--</option>
                <option value="firstname" >Prénom</option>
                <option value="lastname">Nom</option>
                <option value="both">Nom+prénom</option>

            </select>

        <label for="generated choice" class="p-1">Choix de la langue: </label>
            <select id="choice" name="choice2" class="p-1" >
                <option disabled >--choisissez--</option>
                <option value="de" >Allemand</option>
                <option value="en">Anglais</option>
                <option value="fr">Francais</option>
                <option value="it">Italien</option>
            </select>

            <div class="form-check">
                <label for="multi" class="form-check-label p-1">Voulez-vous en générer plusieurs? </label>
                <input type="checkbox" name="multi" class="form-check-input mt-2" type="radio">
            </div>
        <input type="submit" value="Générer" name="submit">
    </div>
</form>





