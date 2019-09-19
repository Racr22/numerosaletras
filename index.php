<?php
//Ejercicio 8
    $num=69;
    $rest=substr($num,-1);
    $msj;
    $msj2;
    if($num==20){
        echo "Veinte";
        exit;
    }elseif($num>20 && $num<=29){
            $msj="Veinti";  
        }   
    if($num==30){
        echo "Treinta";
        exit;
    }elseif($num>30 &&$num<=39){
            $msj="Treinta y ";
        }
    if($num==40){
           echo "Cuarenta";
           exit;
    }elseif($num>40 && $num<=49){
           $msj="Cuarenta y ";
    }
    if($num==50){
        echo "Cincuenta";
        exit;
    }elseif($num>50 && $num<=59){
        $msj="Cincuenta y ";
    }
    if($num==60){
        echo "Sesenta";
        exit;
    }elseif($num>60 && $num<=69){
        $msj="Sesenta y ";
    }
    if($rest==1){
        $msj2="uno";
    }
    if($rest==2){
        $msj2="dos";
    }
    if($rest==3){
        $msj2="tres";
    }
    if($rest==4){
        $msj2="cuatro";
    }
    if($rest==5){
        $msj2="cinco";
    }
    if($rest==6){
        $msj2="seis";
    }
    if($rest==7){
        $msj2="siete";
    }
    if($rest==8){
        $msj2="ocho";
    }
    if($rest==9){
        $msj2="nueve";
    }
    echo $msj.$msj2;

?>