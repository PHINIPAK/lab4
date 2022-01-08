<?php
    if(isset($_POST['submit'])){  
    $price = $_POST['price'];
    $consumption = $_POST['consumption'];
    $coefficient = $_POST['coefficient'];    
     } 
    if(!is_numeric($price) || !is_numeric($consumption) || !is_numeric($coefficient)){
     
        $error_result = "Одна из переменных не является числовым"; 
    }
    
      
    if(($price > 0) && ($coefficient> 0) && ($consumption>0)){
    $result = $price * $coefficient*$consumption;
    }
    else{
        $result = $price*$consumption;
    }
    
    
    if(isset($error_result)) {
    echo "Error: $error_result";
        }    
    else {
    echo "Total = $result";
    }
?>          
                     
    
