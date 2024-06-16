<?php  

# Get all Categorias function
function get_all_Categorias($con){
   $sql  = "SELECT * FROM Categorias";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $Categorias = $stmt->fetchAll();
   }else {
      $Categorias = 0;
   }

   return $Categorias;
}


# Get categoria by ID
function get_categoria($con, $id){
   $sql  = "SELECT * FROM Categorias WHERE id=?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$id]);

   if ($stmt->rowCount() > 0) {
   	  $categoria = $stmt->fetch();
   }else {
      $categoria = 0;
   }

   return $categoria;
}