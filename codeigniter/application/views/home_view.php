<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <title>Bienvenido a mi pagina de codeigniter</title>
 </head>
 <body>
  <h1>Pagina de fotos de Rick and Morty</h1>
  <div class="galeria" >
	<ul>
	<?php foreach($images as $img): ?>
	    <li><img height="100" width="100" src="uploads/<?php echo $img['name']; ?>" /></li>
        <?php endforeach; ?>
	</ul>
  </div>
  <div class="galeria" >
        <ul>
        <?php for($images_flick = 0; $images_flick < 10; $images_flick++ ){ ?>
            <li><img height="100" width="100" <?php echo $images_flick; ?>" /><$
        <?php } ?>
        </ul>
  </div>

 </body>

</html>
