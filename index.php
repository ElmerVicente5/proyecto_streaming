<?php 
include('login.php'); 

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sammy.js/0.7.6/sammy.js"></script>

<script type="text/javascript">
    var ratPack = $.sammy(function() {	  	
        this.element_selector = '#panelForm';


       
        this.get('#/suscribirse', function(context) {
            context.app.swap('');
        
            context.partial("crearCuenta.php", function() {});
            
        });
        
        this.get('#/recuperarContrasena', function(context) {
            context.app.swap('');
        
            context.partial("cambiarContrasena.php", function() {});
            
        });



        

    });
    $(function() {
    	ratPack.run('#/');
  	});

    
</script>


<?php 
include('footer.php'); 
?>


