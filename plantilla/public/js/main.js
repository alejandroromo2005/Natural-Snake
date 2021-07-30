$(document).ready(function(){ 
   $('#op_0').click(function(){
       $('html,body').animate({
         scrollTop:$('#main').offset().top

       }, 1000);
       
   })
   $('.a_fo').click(function(){
    window.location='http://localhost/proyecto/trabajo/proyecto/plantilla/catalogo'
    console.log('click');
    
   })
})