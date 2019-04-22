<?php
    print"Digite um número:";
    $n1 = (int) fgets(STDIN);

    print"Digite outro número:";
    $n2 = (int) fgets(STDIN);

    print"Digite mais um número:";
    $n3 = (int) fgets(STDIN);
    
    if (($n1>$n2) && ($n2>$n3)){
        print"A ordem decrescente é $n1, $n2, $n3";
    }
    elseif (($n3>$n2) && ($n2>$n1)){
        print"A ordem decrescente é $n3, $n2, $n1";
    }
    elseif (($n2>$n1) && ($n1>$n3)){
        print"A ordem decrescente é $n2, $n1, $n3";
    }
    elseif (($n3>$n1) && ($n1>$n2)){
        print"A ordem decrescente é $n3, $n1, $n2";
    }
    elseif (($n1>$n3) && ($n3>$n2)){
        print"A ordem decrescente é $n1, $n3, $n2";
    }
    else {
        print"A ordem decrescente é $n2, $n3, $n1";
    }
    
    
    
    
    
    
    

    
    
    

    
    
    
    
    
    
    

    


