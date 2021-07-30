$(document).ready(function(){ 
    $('form').on("submit",function(e){
        caracteres=$('form input[type=text]').val().length
        if (caracteres>=15) {
            alert('Maximo de caracteres superado')
            e.preventDefault()
        }
     console.log('click');
    })
 })