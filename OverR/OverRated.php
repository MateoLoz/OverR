
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>


  <?php if($mensaje!=""){?>
    <div class="alert alert-success">
    <?php echo $mensaje;?>
      
      <a href="mostrarcarrito.php" class="badge badge-success">Ver carrito</a>
    
      </div>
      <?php }?>


<?php 

$sentencia = $pdo->prepare('SELECT * FROM `productos`');
$sentencia->execute();
$listaproducto = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//    print_r($listaproducto);

?>
 <nav class="contcards">
<?php 

    foreach ($listaproducto as $productos) {?>


 
           
         
         <article class="card__article">
             <img src=" <?php echo $productos['img'];?>" alt="UPD" class="card__img">

             <div class="card__data">
             <h4 style="margin-top: -4px;"> <?php echo $productos['nombre'];?> </h4>
                 <h4 style="margin-top: 4px;"> <?php echo $productos['precio'];?></h4>
                 <form action="" method="post">
                 <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($productos['id'],COD,KEY);?>">
                         <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($productos['nombre'],COD,KEY); ?>">
                         <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($productos['precio'],COD,KEY); ?>">
                         <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                 <button style="margin-top: 7px;" class="lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                 </form>
             </div>
         </article>






<?php }

?>

</nav>

 </div>


 <div class="rightSide"></div>

        
    <?php 
        include 'templates/pie.php';
        ?>
        



