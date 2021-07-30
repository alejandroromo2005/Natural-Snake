<?php 
    class Productos_mas_Comprados extends Controller {
        function __construct()
        {
            parent::__construct();
        }
        function render(){
            $this->view->render('productos_mas_comprados/index');
        }
    }
?>