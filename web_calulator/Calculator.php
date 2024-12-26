#creating a calculator using stack datetype

<?php

function stack($arr){
    $count = count($arr);
    $i=0;
    /*while($i<$count){
        $ans=$arr[$i]
    }*/
    
}

function cal($_operand1,$_operand2,$_operator){
    if($operator=='+'){
        return $_operand1+$_operand2;
    }
    if($operator=='-'){
        return $_operand1-$_operand2;
    }
    if($operator=='/'){
        return $_operand1/$_operand2;

    }
    if($operator=='*'){
        return $_operand1*$_operand2;
    }
    if($operator=='%'){
        return $_operand1%$_operand2;
    }

    if($operator=='^'){
        return $_operand1**$_operand2;
    }
}
 
?>





