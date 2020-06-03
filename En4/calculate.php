<?php
//*calculer le factorielle*//

function factorielle($nbr) { 
    if($nbr === 0) 
    return 1;  
    else 
    return $nbr*factorielle($nbr-1); 
}  
$result = factorielle(3);
echo $result .'<br>';

//*fonction pour addition*//

function addition(int...$nbrs) { 

    echo  array_sum($nbrs);
      
  }  
  
  $result = addition(3,34,'4',20);
  echo $result .'<br>';



?>
