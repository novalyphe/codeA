$(document) .ready(function() {
    //surasti pagal ID
    var a = $("#para").html();
    console.log(a);
//    surasti visus p
    var p = $ ("p")
    for (var i = 0; i<= p.length; i++) console.log ($(p[i]).html());

    //uždėti css
    $("#para").css({
        'font-weight':'bold'
    });
    $("p span").css('color', 'red');
    $("span", '#para').css('color', 'blue');
    $('#para').find('span').css('color', 'green');
    $(".antras").closest('.viršus').find('.pirmas').text('labukas');
    $.each($('#sekantis'), function () {
        $(this).css ('color','red');
    })
    $('#lentele tr > td:first-child').css('color', 'blue');
    $('#kitas').append ('<p>rytas</p>');
    $('#kitas').prepend ('<p>Pradžia</p>');



});