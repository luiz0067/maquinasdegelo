﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilo.css"  />
<title>Engeltec Maquinas de Gelo</title>
<style type="text/css"></style>
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
<script src="lightbox/js/jquery-1.7.2.min.js"></script>
<script src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="lightbox/js/jquery.smooth-scroll.min.js"></script>
<script src="lightbox/js/lightbox.js"></script>
<script type="text/javascript" src="bannerprincipal/js/jquery.cycle.all.2.72.js"></script>
<script type="text/javascript" src="bannerprincipal/js/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="bannerprincipal/js/script.js"></script>
<script src="bannerprincipal/Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="bannerprincipal/css/geral.css" rel="stylesheet" />
</head>

<body>
<div id="tudo">
  <?php include("topo.php"); ?>
  <div id="conteudo">
    
    <div class="divisormenuconteudo"></div>
    <article id="principal">
      <?php 
		$pg=$_GET["pg"];
		if($pg=="home")
			include('home.php');
		else if($pg=="empresa")
			include('empresa.php');
		else if($pg=="maqgelo")
			include('maqgelo.php');
		else if($pg=="outrasmaquinas")
			include('outrasmaquinas.php');
		else if($pg=="contato")
			include('contato.php');
			
		else if($pg=="maqgelo1")
			include('maqgelo1.php');
			
		else if($pg=="maqgelo2")
			include('maqgelo2.php');
			
			else if($pg=="maqgelo3")
			include('maqgelo3.php');
			
			else if($pg=="maqgelo4")
			include('maqgelo4.php');
			
			else if($pg=="maqgelo5")
			include('maqgelo5.php');
			
			else if($pg=="maqgelo6")
			include('maqgelo6.php');
			
			else if($pg=="maqgelo7")
			include('maqgelo7.php');
			
			else if($pg=="maqgelo8")
			include('maqgelo8.php');
			
			else if($pg=="maqgelo9")
			include('maqgelo9.php');
			
			else if($pg=="maqgelo10")
			include('maqgelo10.php');
			
			else if($pg=="maqgelo11")
			include('maqgelo11.php');
			
			else if($pg=="maqgelo12")
			include('maqgelo12.php');
			
			else if($pg=="maqgelo13")
			include('maqgelo13.php');
			
			else if($pg=="maqgelo14")
			include('maqgelo14.php');
			
			else if($pg=="maqgelo15")
			include('maqgelo15.php');	
			
			else if($pg=="maqgelo16")
			include('maqgelo16.php');	
			
			else if($pg=="maqgelo17")
			include('maqgelo17.php');
			
			else if($pg=="maqgelo18")
			include('maqgelo18.php');
			
			else if($pg=="maqgelo19")
			include('maqgelo19.php');
			
			else if($pg=="maqgelo20wilsongay")
			include('maqgelo20.php');
			
			
		else
			include('home.php');
	?>
    </article>
  </div>
  <?php include("footer.php"); ?>
</div>
</div>
<script type="text/javascript">
         var slideshow=new TINY.slider.slide('slideshow',{
                 id:'slider',
                 auto:3,
                 resume:true,
                 vertical:false,
                 navid:'pagination',
                 activeclass:'current',
                 position:0
         });
     </script>
</body>
</html>
