<?php 
class pedirModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertar($datos){
        $sql = 'INSERT INTO dimension_cliente (nombre,correo,telefono,direccion)
        values (:nombre,:correo,:telefono,:direccion)';
         $sql_1 = 'INSERT INTO dimension_pedido (id_producto,id_cliente)
         values (:id_producto, :id_cliente)';
        $query = $this->db->conectar();
        
        $query->beginTransaction();

        try{
            $param=['nombre'=>$datos['cliente'],
            'direccion'=>$datos['direccion'],
            'correo'=>$datos['email'],
            'telefono'=>$datos['numero']];

            $result = $query->prepare($sql);
            $result->execute($param);
            $last_id=$query->lastInsertId();
            $param_1 = ['id_producto'=>$datos['id_producto'], 'id_cliente'=>$last_id];
            $result=$query->prepare($sql_1);
            $result->execute($param_1);
            $query->commit();

            return true;
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
    public function productos($param){
        $datos=[];
      try {
          $sql='SELECT `producto`, `precio`, `descripcion`, `url` FROM `dimension_producto` where id_producto=:id_producto';
          $valores=['id_producto'=>$param];
          $conectar=$this->db->conectar();//->query($sql);
          $resultado = $conectar->Prepare($sql);
          $resultado -> execute($valores);
          while ($a = $resultado->fetch() ){
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