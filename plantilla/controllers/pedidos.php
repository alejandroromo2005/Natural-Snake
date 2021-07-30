<?php 
    class pedidos extends Controller {
        function __construct()
        {
            parent::__construct();
            
        }
        function render(){
            $this->view->references=$this->model->productos();
            $this->view->render('pedidos/index');
        }
    }
?>