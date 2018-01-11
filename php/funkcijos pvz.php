<?php



$sveciai = [
    ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'patiekalas' => 'Mesa', 'gerimas' => 'Cola'],
    ['vardas' => 'Aldona', 'pavarde' => 'Jonaitiene', 'patiekalas' => 'Salotos', 'gerimas' => 'Vanduo'],
    ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'patiekalas' => 'Bulves', 'gerimas' => 'Alus'],
];

function info($e) {
    $s = $e['vardas'] . ' ' . $e['pavarde'] . ' patiekalas: ' . $e['patiekalas'];
    if (isset($e ['gerimas'])) $s .= ' ' .$e['gerimas'] ;
return $s;

};

echo 'Sveciu Sar: <br>';
echo '------------<br>';

for ($i = 0; $i<count($sveciai); $i++) {
    $line = ($i + 1) . '.' . info($sveciai[$i]) . '<br>';
    echo $line;
}

echo '------------<br>';
echo 'Is viso sveciu: ' .count($sveciai);