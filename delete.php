<?php
    
    $id=$_GET['id'];
    $image=$_GET['image'];
    include("db.php");
    
      
    $sql="delete from usuarios where id='".$id."'";
    $resultado=mysqli_query($conn,$sql);
   
    

    if($resultado){
        unlink($image);
        echo "<script language='JavaScript'>
                    alert('Los datos se eliminaron correctamente de la Base de Datos');
                    location.assign('index.php');
                    </script>";
    }
    else{
        echo "<script language='JavaScript'>
                    alert('Los datos NO se eliminaron de la Base de Datos');
                    location.assign('index.php');
                    </script>";
    }
?>