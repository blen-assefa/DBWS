<?php

require_once "config.php";

// Get search term 

$term = trim(strip_tags($_GET['term']));

$query = $link->query("SELECT * FROM Movies M WHERE M.name LIKE '%".$term."%' ORDER BY name ASC") or die(mysqli_connect_errno());

$list = array();
        $rows = $query->num_rows;

        if($rows > 0){
                while($fetch = $query->fetch_assoc()){
                        $data['value'] = $fetch['name'];
                        array_push($list, $data);
                }
        }

        echo json_encode($list);
?>