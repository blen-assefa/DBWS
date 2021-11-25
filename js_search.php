<?php

require_once "config.php";

// Get search term 
$searchTerm = $_GET['term']; 

echo "<p> Term is -- `$searchTerm`</p>";
 
function get_movie($link , $term){ 

 $query = "SELECT * FROM Movies M WHERE M.name LIKE '%".$term."%' ORDER BY name ASC";
 $result = mysqli_query($link, $query); 
 $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($searchTerm)) {
 $getmovie = get_movie($link, $searchTerm);
 $movieList = array();
 foreach($getmovie as $movie){
 $movieList[] = $movie['name'];
 }
 echo json_encode($movieList);
}

?>
