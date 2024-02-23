<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion']))
{
    switch($_POST['btnAccion'])
    {
      case 'Agregar':
          
         if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY)))

         {
           $ID=openssl_decrypt($_POST['id'],COD,KEY);
           $mensaje.="ID:"." ".$ID."<br/>";
         } else
         {
           $mensaje.= "Algo salio mal...";
         }
         
          if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY)))
          {
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.="Nombre: "." ".$NOMBRE."<br/>" ;
          }else{$mensaje.= "Algo salio mal..."; break;}
          
          if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY)))
          {
            $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
            $mensaje.="Cantidad:"." ".$CANTIDAD."<br/>";
          }else{$mensaje.= "Algo salio mal..."; break;}

          if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY)))
          {
            $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
            $mensaje.="Precio:"." ".$PRECIO."<br/>";
          }else{$mensaje.= "Algo salio mal..."; break;} 

          if (!isset($_SESSION['CARRITO']))
           {
             $producto=array(
             'id'=>$ID,
             'nombre'=>$NOMBRE,
             'cantidad'=>$CANTIDAD,
             'precio'=>$PRECIO
             );
             $_SESSION['CARRITO'][0]=$producto;
             $mensaje="Producto agregado al carrito";
            }
            else
            {

              $idProductos=array_column($_SESSION['CARRITO'],"id");
              
              if(in_array($ID,$idProductos)){
                  echo"<script>alert('El producto ya ha sido seleccionado');</script>";
                  $mensaje="";

              }else{
              $NumeroProductos=count($_SESSION['CARRITO']);
              $producto=array(
              'id'=>$ID,
              'nombre'=>$NOMBRE,
              'cantidad'=>$CANTIDAD,
              'precio'=>$PRECIO
              );

              $_SESSION['CARRITO'][$NumeroProductos]=$producto;
              $mensaje="Producto agregado al carrito";
            }
           }
            
            break;

            
          case "Eliminar":
               
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
              
              $ID=openssl_decrypt($_POST['id'],COD,KEY);

              foreach($_SESSION['CARRITO'] as $indice=>$producto)
              {
                 
                if($producto['id']==$ID){
                      unset($_SESSION['CARRITO'][$indice]);              
                      $_SESSION['CARRITO']=array_values($_SESSION["CARRITO"]);

                 }

              }
            }
               
            else
            {
              $mensaje.= "Algo salio mal...";
            }
            
            break;

          
        }
    }

?>