<?php

class ProdModel {
    private $db;

 //La conexion la abre el constructor
    function __construct(){
       
        // 1. abro conexión a la DB 
        $this->db = $this->getDB();
    }

 
   private function getDB()
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=db_vinoteca;charset=utf8', 'root', '');
        return $db;
    }

    function getAllProducts()
    {
       

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM producto");
        $query->execute();

        // 3. obtengo los resultados
        $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $products;
    }



    function getProduct($id)
    {
        

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM producto WHERE id = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $product = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $product;
    }



    function insertProd($Variedad, $Descripcion, $Precio)
    {

        $query = $this->db->prepare("INSERT INTO `producto` (`Variedad`, `Descripcion`, `Precio`) VALUES (?, ?,?)"); //(preparo)-escribo mi consulta
        $query->execute([$Variedad, $Descripcion,$Precio]);

        //para el id
        return $this->db->lastInsertId();
    }

    

    function deleteProductById($id){
   
    $query = $this->db->prepare('DELETE FROM `producto` WHERE id = ?');
    $query->execute([$id]);

    }
  
   function updateProductById($id){

        $query = $this->db->prepare('UPDATE producto SET id_Marca= ?, Variedad =?, Precio = ?, Descripcion=? WHERE id = ?');
        $query->execute([$id]);
        
    }
    

    function getProdByBrand($id){
        
        $query = $this->db->prepare('SELECT * FROM marca AS m 
                                    INNER JOIN producto AS p
                                    ON  m.id_Marca = p.id_Marca');
        $query->execute([$id]);

        $ProdByBrand = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $ProdByBrand;
    }

}
