<?php 
include('header.php'); 

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sammy.js/0.7.6/sammy.js"></script>

<script type="text/javascript">
    var ratPack = $.sammy(function() {	  	
        this.element_selector = '#kt_content_container';
       
       
        this.get('#/cuenta', function(context) {
            context.app.swap('');
            $("#kt_app_sidebar_navs_wrappers .menu-link").removeClass("active");
            context.partial("modulos/cuenta.php", function() {});
            $("#btnMenuCuenta").addClass("active");
        });

        this.get('#/productos', function(context) {
            context.app.swap('');
            $("#kt_app_sidebar_navs_wrappers .menu-link").removeClass("active");
            context.partial("productos.php", function() {});
            $("#btnMenuProductos").addClass("active");
        });


        this.notFound = function(context,url){
           	console.log("Url no encontrada");
        }
        

    });
    $(function() {
    	ratPack.run('#/');
  	});

    
</script>
<?php 
include('footer.php'); 
?>