<?php 
	
	function encabesado(){

		$encabesado="
		<div class='encabesado'>
			<header>
			<img src='imagenes_de_diseno/logo.png'/>
			<nav>
				<p>Productos</p>
				<p>Ofertas</p>
				<p>Conosenos</p>
			</nav>
			</header>
			<div>	
				<aside>
					<img src='imagenes_de_diseno/facebook.png'/>
					<img src='imagenes_de_diseno/google+.png'/>
					<img src='imagenes_de_diseno/twitter.png'/>
				</aside>
				
				<div class='buscador'>
					<input/>
					<input type='button' value='buscar'/>
				</div>
					
			</div>

		</div>
		";
		print $encabesado;
	}

	function head(){
		print "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta name='theme-color' content='#812'>
		<link  rel='stylesheet'  href= 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' >";
	}


 ?>