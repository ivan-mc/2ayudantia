<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><div style="width:900px; position: relative; margin-left: auto; margin-right: auto;"> 
<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea2isw</title>
+</head>

+

+<center><?php

+                $color = "#FF0000"; 

+                $cadena1 = "Si piensas que los usuarios de tus programas son idiotas, sólo los idiotas usarán tus programas";

+                $cadena2 = "La mejor forma de predecir el futuro es implementarlo";

+                $variable= rand(1, 2);

+     if($variable==1){

+        echo "<p><font color='".$color."'>".$cadena1."</font></p>";

+     }

+     if ($variable==2){

+         echo "<p><font color='".$color."'>".$cadena2        ."</font></p>";

+    }   

+    ?></center>

+

+<head>

<script >
var objetos = new Array();
//acá van los eslogan en fotos
objetos[0] = "slogan01.jpg";
objetos[1] = "BeFunky_BeFunky_homer-informatica.jpg";
objetos[2] = "01.jpg";

function aleatorio() {
   var azar = Math.floor(Math.random() * objetos.length);
   document.images["imagen"].src = objetos[azar];
}
</script>

<head>
<center><?php
		$color = "#FF0000"; 
		$cadena1 = "Si piensas que los usuarios de tus programas son idiotas, sólo los idiotas usarán tus programas";
		$cadena2 = "La mejor forma de predecir el futuro es implementarlo";
		$variable= rand(1, 2);
     if($variable==1){
        echo "<p><font color='".$color."'>".$cadena1."</font></p>";
     }
     if ($variable==2){
         echo "<p><font color='".$color."'>".$cadena2	."</font></p>";
    }   
    ?></center>


</head>


<body onload="aleatorio()">
    <img src="" name="imagen" />
<div>
<div id="menu4">
            <ul>
                <li><a href="Fernando.php">
                        <span class="title">Ficha 1</span>
                        
                    </a>
                </li>
                <li><a href="David.php">
                        <span class="title">Ficha 2</span>
                       
                    </a>
                </li>
                <li><a href="Ivan.php">
                        <span class="title">Ficha 3</span>
                        
                    </a>
                </li>
                
           
            </ul>
</div>
        <a><b>Nombre:</b> Iván Montenegro Contreras <br ><b>Edad:</b> 23 años <br /><b>Carrera:</b> Ingenieria en Informática <br> <b>Direccion:</b> Pasaje Dolores #8840, La Libertad <br> <b>Comuna:</b> San Ramón </a><br><b>Email:</b> <color2> <a href="#"><color2>ivan.andres.mc@gmail.com </a></color2><br>
        
         
      <b>Github:</b><a href="https://github.com/fernanrock/2ayudantia"><color>https://github.com/fernanrock/2ayudantia</a></color> <br><br>
      <center>
      <img  src="3.jpg"  width="400" height="400" /></center>
  
          
     


</body>
</html>
