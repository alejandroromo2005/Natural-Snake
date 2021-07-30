<?php 
    class pedir extends Controller {
        private $id;
        function __construct()
        {
            parent::__construct();
        }
        function render(){
            $this->id = $_GET ['id'];
            $this->view->id = $this->id;
            $this->view->producto = $this->model->productos($this->id);
            $this->view->render('pedir/index');
        }
        function comfirmacion(){
            $this->view->render('pedir/comfirmacion');
        }
       function nombre(){
           if ($_POST) {
               $nombre=$_POST["nombre"];
               $apellido=$_POST["apellido"];
               $email=$_POST["email"];
               $direccion=$_POST["direccion"];
               $numero= isset($_POST["numero"])?$_POST["numero"]:NULL;
               $cliente=$nombre.' '.$apellido;
               $id_producto=$_POST['id_producto'];
               $datos=['cliente'=>$cliente,'email'=>$email,'direccion'=>$direccion,'numero'=>$numero,'id_producto'=>$id_producto];
                    $this->model->insertar($datos);
                    echo'<script type="text/javascript">
                window.location.href="'.constant('URL').'pedir/comfirmacion";
                </script>';
                   
           }
          
           
       }
       
    }
?>