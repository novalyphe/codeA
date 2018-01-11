<?php



$masyvas = ['BMW', 'Audi', 'Honda'];
$masyvasdu = ['BMW' => 'Raudona', 'Audi' => 'Balta', 'Honda' => 'Juoda'];

echo $masyvas[0] . '<br>';

////////////////////////////////////////////////////////////////////////////////////////////
$masyvastrys = ['BMW' => ['Raudona', 'Melyna', 'Zalia'], 'Audi' => 'Balta', 'Honda' => 'Juoda'];

echo $masyvastrys ['BMW'][0].'<br>';                    //taip nurodome ka norime kad isvestu
                                                        //siuo atveju bmv raudona

echo implode(' ', $masyvastrys['BMW']).'<br>';      //taip isveda visa masyva masyve

/*
 * jeigu nori prideti i masyva :        $masyvasdu['Lada'] = 'Geltona';
 *
 * jeigu nori pasalinti is masyvo:      unset($masyvasdu['BMW']);
 */

////////////////////////////////////////////////////////////////////////////////////////////


$masyvasketuri = ['BMW' => ['Raudona', 'Melyna', 'Zalia'], 'Audi' => 'Balta', 'Honda' => 'Juoda'];

sort($masyvasketuri);           //  Rusiuoti raktu reiksmes

// ksort($masyvasketuri);            Rusiuoti pagal raktus
// krsort - rusiuoti is desnes

///////////////////////////////////////////////////////////////////////////////////////////

                                // 2 masyvu sujungimas

$a = ['a','b','c'];
$b = ['q','w'];

$c = array_merge($a, $b );
print_r($c);                        //print_r skirta derinimui (isveda i ekrana)
sort($c);
print_r($c);

echo '<br>' . json_encode($c) . '<br>';

///////////////////////////////////////////////////////////////////////////////////////////

$hh = ['BMW' => ['Raudona', 'Melyna', 'Zalia'], 'Audi' => 'Balta', 'Honda' => 'Juoda'];
$jj = ['Tesla' => ['Raudona', 'Melyna', 'Zalia'], 'Skoda' => 'Balta', 'Volga' => 'Juoda'];

$kk = array_merge($hh, $jj);
ksort($kk);

echo json_encode($kk). '<br>';





function test($ma,$key){
    if (isset($ma[$key])) echo '<br>yra';
    else echo '<br> nera';
}

test($kk, 'Tesla');
test($kk, 'Sleika');

//////////////////////////////////////////////////////////////////////////////////////////

$s = "Labas %s %s Sveiki atvyke";                          //%s tai zodis koki idesi

echo '<br>' . sprintf($s, 'jonas', 'jonaitis');     //jonas jonaitis isides vietoje %s


//////////////////////////////////////////////////////////////////////////////////////////








