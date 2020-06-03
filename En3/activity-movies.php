<?php

$realisateurs = [
    'Martin Scorsese'=> ['Taxi Driver, palme or','La Derniere Valse','Raging Bull',' Les Affranchis','Living in the Material World'],
    'Steven Spielberg'=> ['Les Aventures de Tintin','Les Aventures de Tintin2','Les Aventures de Tintin3','Les Aventures de Tintin4','Les Aventures de Tintin5'],
    'Paul Verhoeven'=> ['Taxi Driver1','Taxi Driver2','Taxi Driver3','Taxi Driver4','Taxi Driver5'],
    'Mel Gibson'=> [' Les Affranchi1',' Les Affranchi2',' Les Affranchi3',' Les Affranchi4',' Les Affranchi5'],
    'Woody Allen'=> ['La Derniere Valse1','La Derniere Valse2','La Derniere Valse3','La Derniere Valse4','La Derniere Valse5']
    
    ];

function showDetails (int $r=5, int $t=5){

    global $realisateurs;                 
    $nbrR = array_rand($realisateurs, $r); 
    $nbrT = array_rand($nbrR, $t);        
        foreach($nbrR as $cle => $i){
        echo "<b>les films de $i :</b> <br><br>";
    
        foreach ($nbrT as $y){
        echo $realisateurs[$i][$y] .'<br>';
        }
    
        echo '<br>';
        }

}showDetails(3,2)

?>