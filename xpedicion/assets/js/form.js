// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

$(document).ready(function(){
    $(".inputCupon").css({'display' : 'none'});
    $('#flexCheckCupon').on('change', function() {
        if ($(this).is(':checked') ) {
           console.log("Activar");
           $(".inputCupon").css({'display' : 'block'});
        } else {
            console.log("Desactivar")
            $(".inputCupon").css({'display' : 'none'});
       }
    })
});

