<?php
  require_once("../models/Pokemon.php");
  $pokemon= new Pokemon();
  switch($_GET["op"]){
   case "listar":
    $datos=$pokemon->get_pokemon();
    $data=Array();
    foreach($datos['results'] as $row){
        $datos2 = $pokemon->get_pokemon_x_id($row["url"]);
        $sub_array= array();
        $sub_array[]=$row["url"];
        $sub_array[]='<img src="'.$datos2.'" class="img-thumbnail">';
        $sub_array[]=$row['name'];
        $data[]=$sub_array;
    }
    $results= array(
        "sEcho"=>1,
        "iTotalRecords"=>count($data),
        "iTotalDisplayRecords"=>count($data),
        "aaData"=>$data);
        echo json_encode($results);
    break;
  }
?>