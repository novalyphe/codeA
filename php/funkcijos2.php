<?php




function automatas ($pinigai, $pavadinimas ){
    $prekes = [
        'cola' => 1,
        'mineralinis' => 0.50,
        'traskuciai' => 0.75,
        'sprite' => 1.20,
        ];
    if (isset($prekes[$pavadinimas])){
        $prekes = $prekes[$pavadinimas];
        if ($pinigai >= $preke ) {
            //prekes iskrenta pro skyle
            if ($pinigai == $preke){
                echo ('pasiimkite prekes');
            }
            else{
                echo (' pasiimkite preke ir graza');
            }
            return $preke;
        }

        }


    }

    else{
        echo 'nera tokios prekes';
        return $pinigai;


}

// ateina petras ir nori colos

$maiselis = automatas( 1, 'cola');

echo $preke;












