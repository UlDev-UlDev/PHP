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


$i = 5;
print "Entrez les nouvelles personnes, pour arréter, entrez des 0.\n\n";

do {
print "Prenom : ";
$p = fgets(STDIN);
    $p = str_replace("\n","",$p); 
print "Nom : ";
$n = fgets(STDIN);
    $n = str_replace("\n","",$n); 
print "Age : ";
$a = fgets(STDIN);
    $a = str_replace("\n","",$a); 

$personnes['personne_'. $i] = array('nom' => $n ,'prenom' => $p ,'age' => $a);
$i = $i +1;
echo "\n";
    
} while ($p != 0 || $n!=0 || $a !=0);

foreach($personnes as $element)
{
    if ($element['age'] > 18) {
      
        echo $element['prenom']. "\n";
        
    }
};

?>