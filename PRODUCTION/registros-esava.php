<?php 
	require("inc/header.php"); 
	require("inc/menu.php"); 
	require("inc/breadcrumb.php"); 
?>




<!---CONTENT-->
<section id="wrapper_content">
	<div class="container contentCenter contentGrey">		
		<strong class="large">Sistema Argentino y Latinoamericano de Farmacovigilancia en Inmunoterapia</strong>
		<hr>

		<h1>Registros ESAVA</h1>
		<form action="" method="get" role="form" id="formSpecial">			
  			<div class="row">
				<div class="col-md-12">
					<p>Registro de Eventos Adversos Supuestamente Atribuibles a Vacunas para Alergia (ESAVA)</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Pais">
                		<em>50 caracteres disponibles</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Provincia">
                		<em>50 caracteres disponibles</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Ciudad">
                		<em>50 caracteres disponibles</em>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<select>
                			<option>Tipo de ESAVA</option>
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
					<strong>Datos del Paciente</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Iniciales del Paciente">
                		<em>4 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Edad">
                		<em>2 caracteres disponibles. Valor entre 0 y 99.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<select>
                			<option>Sexo</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Peso (aproximación en kilos)">
                		<em>3 caracteres disponibles. Valor entre 0 y 200.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="text" class="form-control" placeholder="Talla (en centímetros)">
                		<em>3 caracteres disponibles. Valor entre 0 y 250.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Patología alérgica principal que motivó la <br/>indicación de inmunoterapia</p>
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
						<p>Condiciones clínicas generales del <br/>paciente al momento de la aplicación</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Condiciones médicas generales<br/> relevantes previas a la vacunación</p>
                		<input type="radio" name="condition" value="Hepatopatias">Hepatopatías<br/>
						<input type="radio" name="condition" value="Disfuncion renal">Disfunción renal<br/>
						<input type="radio" name="condition" value="Inmunodeficiencias">Inmunodeficiencias<br/>
						<input type="radio" name="condition" value="Cardiopatias">Cardiopatías<br/>
						<input type="radio" name="condition" value="Otras">Otras<br/>

                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<input type="radio" name="condition" value="Diabetes">Diabetes<br/>
						<input type="radio" name="condition" value="Enfermedades autoinmunes">Enfermedades autoinmunes<br/>
						<input type="radio" name="condition" value="Hipertensión arterial">Hipertensión arterial<br/>
						<input type="radio" name="condition" value="Ninguna">Ninguna<br/>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
                		<select>
                			<option>El paciente tiene asma?</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Medicación concomitante (especialmente<br/> B bloqueantes, inhibidores de ECA)</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Recibió al mismo tiempo otras vacunas</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<strong>Antecedentes Personales</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Antecedentes personales de otros ESAVA</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<p>Marco de aplicación de la vacuna para alergia</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<strong>Marco Temporal</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Fecha de inicio del tratamiento inmunoterápico</p>
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
						<p>Fecha de aplicación que<br/> ocasionó ESAVA</p>
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
						<p>Fecha de aplicación de la dosis<br/> inmediata anterior</p>
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
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Fase del tratamiento en que ocurrió el ESAVA</p>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<strong>Características de la Vacuna que originó ESAVA</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Especialidad del médico que hizo la indicación</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>La vacuna fue preparada por el médico o por el laboratorio</p>
                		<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<select>
                			<option>Laboratorio de procedencia</option>
                			<option>1</option>
                			<option>2</option>
                		</select>
                		<em>50 caracteres disponibles.</em>
                	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Fecha de vencimiento</p>
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
						<input type="text" class="form-control" placeholder="Lote/Serie">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Vía de administración</p>
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
						<p>Composici&oacute;n</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Detalle Cual?">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Caracteristicas</p>
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
						<input type="text" class="form-control" placeholder="Concentración">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Dosis">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Sitio de aplicaci&oacute;n">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<strong>Características del ESAVA</strong>
					<hr>	
				</div>
			</div>


			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Tiempo transcurrido desde la aplicación hasta la aparición de ESAVA</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
			<div class="col-md-4">
					<div class="form-group">
			
						<input type="text" class="form-control" placeholder="Cantidad de Minutos">
						<em>50 caracteres disponibles.</em>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Reacci&oacute;n local</p>
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
						<p>Reacción general</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	
                	</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<textarea cols="8" rows="4">Lote/Serie</textarea>
						<em>50 caracteres disponibles.</em>               	
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<p>
							Clasifique este ESAVA según la escala de severidad de reacciones adversas sistemáticas<br/>
							de WAO (The World Allergy Organization Subcutaneous Immunotherapy Systemic <br/>
							Reaction Grading System) <br/>
							Ver Sistema de Graduación de Reacciones Sistémicas con Inmunoterapia Subcutánea
						</p>
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	            	
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<strong>Resoluci&oacute;n del ESAVA</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<p>Resolución espontánea</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	            	
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Requirió tratamiento</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	            	
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Requirió observación en guardia</p>
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
						<p>Requirió hospitalización</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	            	
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Recuperación “ad integrum”</p>
						<select>
                			<option>Seleccione</option>
                			<option>1</option>
                			<option>2</option>
                		</select>	            	
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<p>Secuelas</p>
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
						<p>Riesto de vida</p>
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
					<strong>Datos del Comunicador</strong>
					<hr>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
	            		<input type="text" class="form-control" placeholder="Cantidad de Minutos">
						<em>50 caracteres disponibles.</em>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
	            		<input type="text" class="form-control" placeholder="Cantidad de Minutos">
						<em>50 caracteres disponibles.</em>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
	            		<input type="text" class="form-control" placeholder="Cantidad de Minutos">
						<em>50 caracteres disponibles.</em>
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

