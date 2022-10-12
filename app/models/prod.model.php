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
        $query = $this->db->prepare("SELECT producto.* , marca.Marca FROM producto JOIN marca 
        ON producto.id_Marca = marca.id_Marca");
        // selecciono todos los productos y agarro la tabla de marca con las marcas y ambas tablas productos 
        $query->execute();

        // 3. obtengo los resultados
        $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $products;
    }



    function getProduct($id)
    {
        

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT producto.* , marca.Marca FROM producto JOIN marca 
                                    ON producto.id_Marca = marca.id_Marca WHERE producto.id = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $product = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $product;
    }



    function insertProd($id_Marca,$Variedad, $Descripcion, $Precio)
    {

        $query = $this->db->prepare("INSERT INTO `producto` (`id_Marca`,`Variedad`, `Descripcion`, `Precio`) VALUES (?,?, ?,?)"); //(preparo)-escribo mi consulta
        $query->execute([$id_Marca,$Variedad, $Descripcion, $Precio]);

        //para el id
        return $this->db->lastInsertId();
    }

    

    function deleteProductById($id){
   
    $query = $this->db->prepare('DELETE FROM `producto` WHERE id = ?');
    $query->execute([$id]);

    }
  
   function updateProduct($id_Marca,$Variedad,$Descripcion,$Precio,$id){

        $query = $this->db->prepare('UPDATE producto SET id_Marca= ?, Variedad =?, Descripcion=? , Precio = ? WHERE id = ?');
        $query->execute([$id_Marca,$Variedad,$Descripcion,$Precio,$id]);
        
    }
    

    // function getProdByBrand($id){
        
    //     $query = $this->db->prepare('SELECT * FROM producto WHERE id_Marca = ?');
    //     $query->execute([$id]);

    //     $ProdByBrand = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

    //     return $ProdByBrand;
    // }

    function getProdByBrand($id){
        
            $query = $this->db->prepare('SELECT producto.* , marca.Marca FROM producto JOIN marca ON 
                                         producto.id_Marca = marca.id_Marca WHERE producto.id_Marca = ?');
            $query->execute([$id]);
    
            $ProdByBrand = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
            return $ProdByBrand;
        }
    
}
