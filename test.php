<?php
/**
 * Created by PhpStorm.
 * User: Vishal
 * Date: 06-02-2019
 * Time: 20:08
 */
include_once ("classes/Database.class.php");
include_once ("classes/Posts.class.php");
$db = new Database();
$conn = $db->getConnection();
$post = new Posts($conn);


$array = array("post_category_id"=>10, "post_title"=>"Some New Post Title ", "post_body"=>"<b>My contents</b>");
$post->updatePost($array,"post_category_id=40");

?>