<?php 
    class natural_snake extends Controller {
        function __construct()
        {
            parent::__construct();
        }
        function render(){
            $this->view->render('natural_snake/index');
        }
    }
?>