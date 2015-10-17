<?php 
	function contenido(){
		$contenido="
			<div class='cuerpo'>
				<main>
					<div class='producto_categoria' categoria=''>
						<p>Categoria</p>
					</div>
					<div class='producto_categoria' categoria=''>
						<p>Categoria</p>
					</div>
					<div class='producto_categoria' categoria=''>
						<p>Categoria</p>
					</div>
					<div class='producto_categoria' categoria=''>
						<p>Categoria</p>
					</div>
				</main>
				<div class='apps'>
					<section class='cotizacion'>
						<p>Cotizacion</p>
						
							<table>
								<tr>
									<th>Producto</th>
									<th>Precio</th>
								</tr>
								<tr>
									<td>1</td>
									<td>2</td>
								</tr>
								<tr>
									<td>1</td>
									<td>2</td>
								</tr>
								<tr>
									<td>1</td>
									<td>2</td>
								</tr>
						
					</section>
					<section class='fotos'>
						<img href=''/>
					</section>
				</div>
			</div>
		";
		print $contenido;
	}
