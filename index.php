<?php
    include_once('connexion.php');
    $select="SELECT * FROM inscreption ";
    $query=mysqli_query($cnx,$select);
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delet="DELETE FROM inscreption WHERE id=$id";
        $query1=mysqli_query($cnx,$delet);
        if($query1){
            header('Location: admin.php');
        }else{
             echo"error";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./css/styl1.css">
    <title>DELET</title>
</head>
<body>
<table border="1" style="border:coral;">
   <tr>
       <th>id</th>
       <th>nom_utilisateur</th>
       <th>pass_word</th>
       <th>Update/delete </th>
   </tr>
   <?php
    foreach ($query as$row):
    ?>
        <tr>
            <td><?php echo $row['id'] ;?></td>
            <td> <?php echo $row['nom_utilisateur'] ;?></td>
            <td><?php echo $row['pass_word'] ;?></td>
            <td><a href="traitement.php?id=<?php echo $row['id']; ?>">update</a>/<a href="admin.php?id=<?php echo $row['id']; ?>">delete</a></td>
        </tr>
    <?php
        endforeach;
    ?>
</table>
</body>
</html>