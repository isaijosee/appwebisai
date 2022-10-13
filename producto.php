<?php  include("vista/cabecera.php");?>
<center><body background= "img/fondo8.jpeg" style="background-repeat: no-repeat; background-size: cover;"></center>
<?php
include("admin/config/conexion.php");
$result = ("SELECT * FROM producto");
?>
   <?php foreach($conn->query($result) as $list){ ?>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="img/<?php echo $list['foto']?>" alt="" width>
    <div class="card-body">
        <h4 class="card-title"><?php echo $list['nombre']?></h4>
        <h4 class="card-title"><span>$</span><?php echo $list['precio']?></h4>
        <a href="#" class="btn btn-primary">Ver mas</a>
    </div>
</div> 
</div>

<?php }?>

 



<?php  include("vista/pie.php");?>