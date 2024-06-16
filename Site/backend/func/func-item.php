<?php  

# Get All Items function
function get_all_Items($con){
   $sql  = "SELECT * FROM Items ORDER bY id_item DESC";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $Items = $stmt->fetchAll();
   }else {
      $Items = 0;
   }

   return $Items;
}



# Get  item by ID function
function get_item($con, $id){
   $sql  = "SELECT * FROM Items WHERE id=?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$id]);

   if ($stmt->rowCount() > 0) {
   	  $item = $stmt->fetch();
   }else {
      $item = 0;
   }

   return $item;
}


# Search Items function
function search_Items($con, $key){
   # creating simple search algorithm :) 
   $key = "%{$key}%";

   $sql  = "SELECT * FROM Items 
            WHERE nome LIKE ?
            OR valor LIKE ?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$key, $key]);

   if ($stmt->rowCount() > 0) {
        $Items = $stmt->fetchAll();
   }else {
      $Items = 0;
   }

   return $Items;
}

# get Items by category
function get_Items_by_categoria($con, $id){
   $sql  = "SELECT * FROM Items WHERE id_categoria=?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$id]);

   if ($stmt->rowCount() > 0) {
        $Items = $stmt->fetchAll();
   }else {
      $Items = 0;
   }

   return $Items;
}
