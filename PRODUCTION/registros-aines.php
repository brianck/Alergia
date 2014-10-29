<?php 
	require("inc/header.php"); 
	require("inc/menu.php"); 
	require("inc/breadcrumb.php"); 
?>




<!---CONTENT-->
<section id="wrapper_content">
	<div class="container contentCenter contentGrey">		
		<strong class="large">Registro de Reacción de Hipersensibilidad a AINES en la República Argentina</strong>
		<hr>

		<h1>Registros AINES</h1>
		<p></p>
		<form action="" method="get" role="form" id="formSpecial">			
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Nombre del Médico">
                		<em>50 caracteres disponibles</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Ciudad">
                		<em>50 caracteres disponibles</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Iniciales del Paciente">
                		<em>50 caracteres disponibles</em>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Fecha de la Encuesta</p>
	            		<select class="day">
	            			<option>D&iacute;a</option>
	            			<option>1</option>
	            			<option>2</option>
	            		</select>								

						<select class="month">
	            			<option>Mes</option>
	            			<option>1</option>
	            			<option>2</option>
	            		</select>									

						<select class="year">
	            			<option>Año</option>
	            			<option>1</option>
	            			<option>2</option>
	            		</select>		
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Fecha de la Reacci&oacute;n</p>
	            		<select class="day">
	            			<option>D&iacute;a</option>
	            			<option>1</option>
	            			<option>2</option>
	            		</select>								

						<select class="month">
	            			<option>Mes</option>
	            			<option>1</option>
	            			<option>2</option>
	            		</select>									

						<select class="year">
	            			<option>Año</option>
	            			<option>1</option>
	            			<option>2</option>
	            		</select>
	            	</div>	
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Edad">
	            		<em>50 caracteres disponibles. Valor entre 0 y 99.</em>
	            	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<p>Género</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Manifestaciones Respiratorias</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Localizaci&oacute;n</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<p>Manifestaciones Sistemáticas</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Manifestaciones Gastrointestinales</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Factores Coadyuvantes</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Evolución<br/>(Tiempo de duración de la reacción)</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                		<p>Vía de Administración del AINE</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Marque el o los AINES responsables de la reacción</p>
                		<input type="radio" name="condition" value="Acido acetil salicílico">Acido acetil salicílico<br/>
						<input type="radio" name="condition" value="Diclofenac">Diclofenac<br/>
						<input type="radio" name="condition" value="Ibuprofeno">Ibuprofeno<br/>
						<input type="radio" name="condition" value="Dipirona">Dipirona<br/>
						<input type="radio" name="condition" value="Acido mefenamico">Acido mefenamico<br/>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="radio" name="condition" value="Ketorolac">Ketorolac<br/>
						<input type="radio" name="condition" value="Paracetamol">Paracetamol<br/>
						<input type="radio" name="condition" value="Meloxicam">Meloxicam<br/>
						<input type="radio" name="condition" value="Celecoxib">Celecoxib<br/>
						<input type="radio" name="condition" value="Otro">Otro<br/>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<p>¿Consultó a un Médico<br/>por la reacción aguda?</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>¿Recibió tratamiento?¿Cuál fue?</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Se suspendió AINES sospechoso</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Se realizón indicación de AINES<br/>alternativo a la reacción</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Indique brevemente cual">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Enfermedad crónica subyacente</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Reacción de hipersensibilidad<br/> a otras drogas</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Cual o cuales">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<strong>Procedimientos Diagnósticos In Vivo</strong>
					<hr>	
				</div>
			</div>



			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Prick Test</p>
                		<select>
                			<option>El paciente tiene asma?</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Intradermo</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Test del Parche</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Prueba de Provocación Controlada</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<strong>Procedimientos Diagnósticos In Vitro</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>IGE específica AINES</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Test Transformación Linforblástica (TTL)</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>CD69 por Citrometría de Flujo</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Test de Granulación de Basofilos</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>CD63</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>CD23c</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<input type="submit" value="Enviar &rarr;">
					
				</div>
			</div>



		</form>
	</div>
</section>
<!--/END - CONTENT-->



<?php 
	require("topPage.php");
	require("inc/footer.php");
?>

