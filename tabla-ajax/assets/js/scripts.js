$(document).ready(function(){
    $.get({
        url: 'https://my-json-server.typicode.com/alaravena/ldp3101/usuarios',
        dataType: 'json',
        success: function(data){
            $.each(data,function(i,item){
                $("#datos").append("<tr id='tabla-datos'><td id='id'>"+item.id+
                "</td><td id='nombre'>"+item.nombre+
                "</td><td id='email'>"+item.email+
                "</td><td>"+"<button class='btn btn-success me-2' id='edicion'><i class='fa-solid fa-pen-to-square'></i></button>"+
                "<button class='btn btn-danger me-2' id='eliminar'><i class='fa-solid fa-circle-minus'></i></button>"+
                "<button class='btn btn-primary' id='info' data-bs-toggle='modal' data-bs-target='#infoModal'><i class='fa-solid fa-circle-info'></i></button>"+"</td></tr>");
            })
            $('button#edicion').click(function(){
                var nombreOriginal = $(this).parents('tr').find('#nombre').text();
                var nombreNuevo = prompt("Ingrese un nombre nuevo: ", nombreOriginal);
                var emailOriginal = $(this).parents('tr').find('#email').text();
                var emailNuevo = prompt("Ingrese un nombre nuevo: ", emailOriginal);

                $(this).parents('tr').find('#nombre').html(nombreNuevo);
                $(this).parents('tr').find('#email').html(emailNuevo);
                });
            $('button#info').click(function(){
                var id = $(this).parents('tr').find('#id').text();
                var nombre = $(this).parents('tr').find('#nombre').text();
                var email = $(this).parents('tr').find('#email').text();
                //Adición del contenido por medio de una variable "modal" (0j0: uno por uno) 
                var modal ='';
                    modal+="<p id='tableId'>ID: "+ id +"</p>";
                    modal+="<p id='tableNombre'>Nombre: "+ nombre +"</p>";
                    modal+="<p id='tableEmail'>Email: "+ email +"</p>";
                //Borrar los datos precargados, evitando que siga mostrando lo mismo
                $('.modal-body-info').empty();
                //Añadir la variable con el contenido al modal
                $('.modal-body-info').append(modal);
                $("#infoModal").modal({
                    backdrop: false,
                    show: true,
                  });
                if (!$(".modal.in").length) {
                    $(".modal-dialog").css({
                      top: 20,
                      left: 0,
                    });
                  }
                  $(".modal-dialog").draggable({
                    cursor: "move",
                    handle: ".dragable_touch",
                  });
            });
            $('button#eliminar').click(function(){
                $(this).parents('tr').remove();
            });
            //Funciones para el agregado de un nuevo usuario a la tabla
             var contador = 9;
             $('button#agregarUsuario').click(function(){
                var nombre = prompt("Ingrese el nombre");
                var email = prompt("Ingrese el email");
                contador++;
                $("#datos").append("<tr><td id='id'>"+contador+
                "</td><td id='nombre'>"+nombre+
                "</td><td id='email'>"+email+
                "</td><td>"+"<button class='btn btn-success me-2' id='edicion'><i class='fa-solid fa-pen-to-square'></i></button>"+
                "<button class='btn btn-danger me-2' id='eliminar'><i class='fa-solid fa-circle-minus'></i></button>"+
                "<button class='btn btn-primary' id='info' data-bs-toggle='modal' data-bs-target='#infoModal'><i class='fa-solid fa-circle-info'></i></button>"+"</td></tr>");
                //Botones para los usuarios añadidos
                $('button#edicion').click(function(){
                    var nombreOriginal = $(this).parents('tr').find('#nombre').text();
                    var nombreNuevo = prompt("Ingrese un nombre nuevo: ", nombreOriginal);
                    var emailOriginal = $(this).parents('tr').find('#email').text();
                    var emailNuevo = prompt("Ingrese un nombre nuevo: ", emailOriginal);
                    
                    $(this).parents('tr').find('#nombre').html(nombreNuevo);
                    $(this).parents('tr').find('#email').html(emailNuevo);
                    });
                $('button#info').click(function(){
                    var id = $(this).parents('tr').find('#id').text();
                    var nombre = $(this).parents('tr').find('#nombre').text();
                    var email = $(this).parents('tr').find('#email').text();
                    var modal ='';
                        modal+="<p id='tableId'>ID: "+ id +"</p>";    
                        modal+="<p id='tableNombre'>Nombre: "+ nombre +"</p>";
                        modal+="<p id='tableEmail'>Email: "+ email +"</p>";
                    //Borrar los datos precargados
                    $('.modal-body-info').empty();
                    //Añadir la variable con el contenido al modal
                    $('.modal-body-info').append(modal);
                    $("#infoModal").modal({
                        backdrop: false,
                        show: true,
                      });
                    if (!$(".modal.in").length) {
                        $(".modal-dialog").css({
                          top: 20,
                          left: 0,
                        });
                      }
                      $(".modal-dialog").draggable({
                        cursor: "move",
                        handle: ".dragable_touch",
                      });
                });
                $('button#eliminar').click(function(){
                    $(this).parents('tr').remove();
                });
            });
        },
        error: function(){
            console.error("Sin respuesta ;-;");
        }
    });//.get

    
});//document.ready
// reset modal if it isn't visible
