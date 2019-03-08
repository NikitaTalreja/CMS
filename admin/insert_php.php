<?php
/**
 * Created by PhpStorm.
 * User: Vishal
 * Date: 11-02-2019
 * Time: 21:26
 */
require_once ("includes/admin-bootstrap.php");
if(isset($_POST['post_submit'])){
    $post_category_id = $_POST['post_category_id'];
    $post_title = $_POST['post_title'];
    $post_body = $_POST['post_body'];
    $post_tags = $_POST['post_tags'];
    $date = date('Y-m-d');
    session_start();
    //echo session_status();
    //echo $_SESSION['user_id'];
    if(isset($_SESSION['user_id'])){
        $post_author_id = $_SESSION['user_id'];
    }else{
        die("How did u came here????");
    }
    $data = array("post_category_id"=>$post_category_id,"post_title"=>"$post_title","post_body"=>"$post_body","post_tags"=>"$post_tags","post_author_id"=>$post_author_id,"post_date"=>$date,"post_image"=>$_FILES['post_image']['name']);
    $db = new Database();
    $conn = $db->getConnection();
    $post = new Posts($conn);
    $post->createPost($data);
    if($post->createPost($data)){
        //Now Upload Image
        $fileName = $_FILES['post_image']['name'];
        $tmpName = $_FILES['post_image']['tmp_name'];
        if(!move_uploaded_file($tmpName , "../images/".$fileName))
            die("Error While Uploading Image");
    }else{
        die("Error While Inserting Post!");
    }

}
?>