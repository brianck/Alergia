<?php 
	require("header.php"); 
	require("menu.php"); 
	require("breadcrumb.php");
?>

<!---CONTENT-->
<section id="wrapper_content">
	<div class="container contentCenter">		

		<!---MAIN CONTENT-->
		
		<section class="main_content">
		
			<h1>Contacto</h1>
			<p>
				<b>Teléfonos:</b> +54 11 4334 7680<br/>
				<b>Dirección:</b> Moreno 909 - Capital Federal<br/>
				<b>Buenos Aires - Argentina<br/>
				<b>Administración:</b> <a href="#" style="color:#464646; text-decoration:underline;font-style: normal">administracion@aaaeic.org.ar</a><br/>
				<b>Secretaría:</b> <a href="#" style="color:#464646; text-decoration:underline;font-style: normal">secretaria@aaaeic.org.ar</a><br/>
				<b>Contacto Técnico:</b> <a href="#" style="color:#464646; text-decoration:underline;font-style: normal">carolina@alergia.org.ar</a></p>
			<hr>		

			<strong>Si lo desea puede llenar el siguiente formulario</strong>	
			<article>
			<p>	
				Para suscribirse deberá completar el siguiente Formulario y enviarlo haciendo clik sobre Enviar.
			</p>
			</article>
			<form action="" method="get" role="form" id="formSpecial">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Nombre y Apellido">
                	</div>
                	<div class="form-group">
                		<input type="text" class="form-control" placeholder="Ciudad">
                	</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="E-mail">
                	</div>
                	<div class="form-group">
                		<input type="text" class="form-control" placeholder="Pais">
                	</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control" rows="3">Comentarios</textarea>
					</div>
				</div>
				
			</div>
				<div class="row">
					<div class="col-md-9">
					</div>
					<div class="col-md-3">
						<input type="submit" class="form-control" value="Enviar &rarr;">
					</div>
				</div>
            </form>
		</section>
		
		<!---/END - MAIN CONTENT-->

		<!---SIDEBAR CONTENT-->
		<aside class="sidebar_content">
			<h1>Nuestra historia</h1>
			<strong>Resumen histórico</strong>
			<figure>
				<img src="images/sidebarContent_img1.jpg" class="img-responsive" alt="image">
			</figure>
			<article>
				<p>
					La primera institución científica de alergología que existió en la Argentina se denominó “Sociedad para el Estudio de la Alergia”. 
				</p>
				<a href="#" class="pushLightBlue">VER MÁS &rarr;</a>
			</article>


			<div class="sidebar_darkBlue">
				<h1>Registros AAAeIC Esvasa y Aines</h1>
			</div>

			<div class="sidebar_grey">
				<h1>Accesos Rápidos</h1>
				<a href="#" class="linkSidebar">La Asociación en los Medios</a>
				<a href="#" class="linkSidebar">Links destacados</a>
				<div id="logosSidebar">
					<a href="#">
						<img src="images/logoWorldAllergyWeek.jpg" alt="image">
					</a>
		
					<a href="#">
						<img src="images/logoFundaler.jpg" alt="image">
					</a>		
				</div>
			</div>
		</aside>
		<!---/END - SIDEBAR CONTENT-->
	</div>
<br style="cleat:both"/>
</section>
<!--/END - CONTENT-->



<?php 
	require("topPage.php");
	require("footer.php");
?>

