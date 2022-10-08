<?php

class brandModel
{
    private $db;

    //La conexion la abre el constructor
    function __construct()
    {

        // 1. abro conexión a la DB 
        $this->db = $this->getDB();
    }


    private function getDB()
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=db_vinoteca;charset=utf8', 'root', '');
        return $db;
    }

    function getAllBrands(){
        
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();

        // 3. obtengo los resultados
        $brands = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $brands;
    }

    
    function insertBrand($Marca)
    {

        $query = $this->db->prepare("INSERT INTO `marca` ( `Marca`) VALUES (?)"); //(preparo)-escribo mi consulta
        $query->execute([$Marca]);

        //para el id
        return $this->db->lastInsertId();
    }
    
    function deleteBrandtById($id){
   
        $query = $this->db->prepare('DELETE FROM `marca` WHERE id_Marca = ?');
        $query->execute([$id]);
    
    }
   

    function updateBrandById($Marca, $id_Marca,){

        $query = $this->db->prepare('UPDATE `marca` SET `Marca`= ? WHERE `id_Marca`= ?');
        $query->execute([$Marca, $id_Marca]);
        
    }
    
    
    
}
