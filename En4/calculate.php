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


?>