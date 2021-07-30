<?php 
class pedidosModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
      public function productos(){
          $datos=[];
        try {
            $sql='SELECT `id_producto`, `producto`, `precio`, `descripcion`, `url` FROM `dimension_producto`';
            $conectar=$this->db->conectar()->query($sql);
            while ($a = $conectar->fetch() ){
                array_push($datos,$a);
            }
            return $datos;
        } catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
      }
}
 ?>