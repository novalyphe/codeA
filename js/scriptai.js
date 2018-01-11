function daugyba(a, b) {
    return a * b;
}

var auto = ['BMW', 'Audi', 'Tesla', 'Peugeot'];
var numeris = null;
for (var i=0; i<auto.length; i++) {
    var masina = auto[i];
    if (masina == 'Peugeot') numeris = i;

}

function surastiauto(masina) {
    var rezultatas = null;
    var n = auto.length;
    var i = 0;

    while (rezultatas == null || i < n) {
        if (auto[i] == masina) rezultatas = i;
        i++;
    }
    return rezultatas;
}