$(document).ready(function(){
    $('.boton-info').click(function(){
        var img = $(this).parents("tr").find(".tableimage").html();
        var title = $(this).parents("tr").find(".tabletitle").text();
        var ingredients = $(this).parents("tr").find(".tabledescript1").text();
        var description = $(this).parents("tr").find(".tabledescript2").text();

        var p ='';

        p+=

        "<p id='tableImage'>Imagen: "+ img +"</p>";

        p+=
        "<p id='tableTitle'>Título: "+ title +"</p>";

        p+=
        "<p id='tableIngredients'>Ingredientes: "+ ingredients +"</p>";

        p+=
        "<p id='tableDescription'>Descripción: "+ description +"</p>";

        //Borrar los datos precargados
        $('.modalInfo').empty();
        //Anotar la info al modal
        $('.modalInfo').append(p);
    })
})