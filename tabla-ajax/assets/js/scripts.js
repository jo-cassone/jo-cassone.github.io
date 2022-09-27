$(document).ready(function(){
    $.get({
        url: 'https://my-json-server.typicode.com/alaravena/ldp3101/usuarios',
        dataType: 'json',
        success: function(data){
            $.each(data,function(i,item){
                $("#datos").append("<tr><td>"+item.id+
                "</td><td>"+item.nombre+
                "</td><td>"+item.email+
                "</td><td>"+"<button class='btn btn-success me-2' id='edicion'><i class='fa-solid fa-pen-to-square'></i></button>"+
                "<button class='btn btn-danger me-2' id='eliminar'><i class='fa-solid fa-circle-minus'></i></button>"+
                "<button class='btn btn-primary' id='info'><i class='fa-solid fa-circle-info'></i></button>"+"</td></tr>");
            });
            $('button#edicion').click(function(){
                //Vacío
            });
            $('button#eliminar').click(function(){
                $(this).parents('tr').remove();
            });
            $('button#info').click(function(){
                //alert($(this).parents('tr').css("color","red"))
                alert($(this).parents('tr').text())
             });
             var prueba = 9;
             $('button#agregarUsuario').click(function(){
                var nombre = prompt("Ingrese el nombre");
                var email = prompt("Ingrese el email");
                prueba++;
                alert(nombre + email);
                $("#datos").append("<tr><td>"+prueba+
                "</td><td>"+nombre+
                "</td><td>"+email+
                "</td><td>"+"<button class='btn btn-success me-2' id='edicion2'><i class='fa-solid fa-pen-to-square'></i></button>"+
                "<button class='btn btn-danger me-2' id='eliminar2'><i class='fa-solid fa-circle-minus'></i></button>"+
                "<button class='btn btn-primary' id='info2'><i class='fa-solid fa-circle-info'></i></button>"+"</td></tr>");
                //Botones para los nuevos datos añadidos a la tabla, usando prompt :7
                $('button#eliminar2').click(function(){
                    $(this).parents('tr').remove();
                });
                $('button#info2').click(function(){
                    //alert($(this).parents('tr').css("color","red"))
                    alert($(this).parents('tr').text())
                 });
            });
        },
        error: function(){
            console.error("Sin respuesta");
        }
    })
});//document.ready

