$('#btn-dbclick').dblclick(function(){
    $('section').children("#caja-centro").remove();
    $('h1').prependTo('main');
    $('#caja-arriba').prependTo('section#ejercicio');
    $('#caja-arriba').css("background","#000").css("color", "#fff")
});