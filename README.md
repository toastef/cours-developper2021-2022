# Exercices de révision

## Exercice 1

Créez une page permettant d'afficher la saison d'une date insérée via un formulaire.

## Exercice 2

Créez une page affichant dans un tableau les notes des étudiants, trié par note ou par nom d'étudiant.
La première colonne du tableau comprendra le nom de l'étudiant, la deuxième sa note et la dernière la mention éventuelle.

* la réussite sans mention est fixée à 10/20 et devra apparaître en gris;
* la réussite avec satisfaction est fixée à 12/20 et devra apparaître en jaune;
* la réussite avec distinction est fixée à 14/20 et devra apparaître en vert;
* la réussite avec grande distinction est fixée à 16/20 et devra apparaître en bleu;
* la réussite avec la plus grande distinction est fixée à 18/20 et devra appaître en gras et en violet.
* les notes des étudiants en échec (inférieur à 10) doivent apparaitre en rouge.

### Tableau contenant les notes des étudiants

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

## Exercice 3
Créez une page générant un (ou plusieurs) prénom(s) ou un nom(s) ou les deux dans une langue au choix parmi l'allemand, l'anglais, le français et l'italien.
Dans le cas de plusieurs résultats, il est nécessaire d'éviter les doublons.

### Tableaux contenant les prénoms et les noms

$firstname = [
"de" => ["Adolf", "Franz", "Fritz", "Gunther", "Gustav", "Hans", "Heinrich", "Lothar", "Manfred", "Rudolf", "Siegfried", "Ulrich", "Wilhelm"],
"en" => ["Allan", "Anthony", "Ashley", "Donald", "Edward", "George", "Harry", "Henry", "John", "Philip", "Richard", "Sean", "William", "Winston"],
"fr" => ["Albert", "André", "Bernard", "Charles", "Didier", "Fabrice", "Gérard", "Joseph", "Louis", "Michel", "Pierre", "Serge", "Thierry", "Xavier"],
"it" => ["Antonio", "Alberto", "Benito", "Bruno", "Cesare", "Enzo", "Francesco", "Guiseppe", "Paolo", "Pietro", "Raffaele", "Roberto", "Salvatore"]
]

$lastname = [
"de" => ["Bergmann", "Hartmann", "Jäger", "Kauffmann", "Maier", "Meyer", "Müller", "Richter", "Schneider", "Schmidt", "Schulz", "Schumacher", "Strauss", "Wagner", "Weber", "Wolff", "Zimmermann"],
"en" => ["Adams", "Brown", "Clark", "Cooper", "Ford", "Freeman", "Green", "Jackson", "Johnson", "Kent", "Mitchell", "Patton", "Robinson", "Smith", "Walker", "Wood"],
"fr" => ["Blanc", "Dubois", "Dupond", "Dupont", "Dufour", "Durand", "Germain", "Lebrun", "Leclerc", "Lecomte", "Legrand", "Lejeune", "Lemaire", "Maréchal", "Morel", "Renard"],
"it" => ["Rossi", "Russo", "Ferrari", "Bianchi", "Romano", "Colombo", "Ricci", "Gallo", "Conti", "Mancini", "Costa", "Giordano", "Rizzo", "Lombardi", "Moretti", "Fellini"]
]