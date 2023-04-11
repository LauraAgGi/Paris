<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php 
//array que almacena el nombre de los archivos
$fotos =['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg'];

//si GET'diapo' existe...
if(isset($_GET['diapo'])){
    // igualamos su valor al de la variable $imagen
    $imagen = $_GET['diapo'];
}
// y si no (existe)
else{
    // me igualas la variable $imagen a un valor aleatorio entre 0
    // y el número máximo de elementos que tiene el array $fotos -1
    $imagen=rand(0,count($fotos)-1);
}

//variable igual a 'img/' más un elemento del array con los archivos
$imagenActual = 'img/'.$fotos[$imagen];
?>

<!-- Links a las diferentes opciones donde la URL del link contiene
referencias al método GET donde diapo=0 almacena el valor
que luego vamos a capturar por PHP y con el que vamos a trabajar --->
<br>
    <a href="index.php?diapo=0">Torre Eifel</a>
    <a href="index.php?diapo=1">Arco del Triunfo</a>
    <a href="index.php?diapo=2">Louvre</a>
    <a href="index.php?diapo=3">Le Pont Neuf</a>
    <a href="index.php">Aleatoria</a>

    <!--
    Se carga via src gracias al php
    la ruta que previamente hemos generado
    en el códido anterior de PHP.
     "img/a.jpg" (por ejemplo)
    -->
    <br><br>
    <img src="<?php echo $imagenActual;?>" alt="">
    <?php
    if($imagen==count($fotos)-1){
       $imagen=0;
    }else{
        $imagen++;
    }
    ?>
    <br>
    <a href="index.php?diapo=<?php echo $imagen; ?>">Siguiente</a>
  
</body>
</html>