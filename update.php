<?php

if(isset($_POST['btn'])){
    require('connect.php');


if(empty($_POST['title']) && !empty($_POST['desc'])){

    $desc=$_POST['desc'];
    $query="update articles set long_desc='{$desc}' where id_a={$id}";
    $result=mysqli_query($connection,$query);

    if($result){
        header('Location:edit.php');
    }

}

if(!empty($_POST['title']) && empty($_POST['desc'])){

    $title=$_POST['title'];
    $query="update articles set title='{$title}' where id_a={$id}";
    $result=mysqli_query($connection,$query);

    if($result){
        header('Location:edit.php');
    }

}

if(!empty($_POST['title']) && !empty($_POST['desc'])){

    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $query="update articles set title='{$title}', long_desc='{$desc}' where id_a={$id}";
    $result=mysqli_query($connection,$query);

    if($result){
        header('Location:edit.php');
    }

}

}

?>