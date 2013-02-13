<?php 

$books = array(); 

$books[] = array("id" => "b1", "title" => "title1-biblio1", "author" => "author1-biblio1"); 
$books[] = array("id" => "b1", "title" => "title2-biblio1", "author" => "author2-biblio1"); 
$books[] = array("id" => "b1", "title" => "title3-biblio1", "author" => "author3-biblio1"); 
$books[] = array("id" => "b1", "title" => "title4-biblio1", "author" => "author4-biblio1"); 
$books[] = array("id" => "b1", "title" => "title5-biblio1", "author" => "author5-biblio1"); 

echo $_GET['cb'] ."(".json_encode($books).");"; 

?>
