<?php
    
    $personnes = [
    'personne_1' => [
        'nom' => 'Héhalice',
        'prenom' => 'Jacques-Charles',
        'age' => '19'
    ],
    'perssone_2' => [
        'nom' => 'Lachaise',
        'prenom' => 'Tom-Henry',
        'age' => '17'
    ],
    'personne_3' => [
        'nom' => 'Nommé',
        'prenom' => 'Prénommé',
        'age' => '8'
    ],
    'personne_4' => [
        'nom' => 'Jacques',
        'prenom' => 'Pierre-Paul',
        'age' => '21'
    ]
];

foreach($personnes as $element)
{
    if ($element['age'] > 18) {
      
        echo $element['prenom']. "\n";
        
    }
};

?>