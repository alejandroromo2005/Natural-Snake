<?php 
    class quienes_Somos extends Controller {
        function __construct()
        {
            parent::__construct();
        }
        function render(){
        $this->view->render('quienes_Somos/index');
        }
    }
?>