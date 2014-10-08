<!--FOOTER-->
<footer>
	<section class="container contentCenter">
	<div  id="wrapper_footer">
		<div class="row">

			<div class="col-md-4">
				<img src="images/logoFooter.jpg" class="img-responsive" alt="image">
				<p>Asociación Argentina de Alergia e Inmunología Clínica</p>
				<hr>
				<p>Copyright &copy; 2014 AAeIC All Rights Reserved</p>
				<br/>
			</div>

			<div class="col-md-4">
				<p>Moreno 909 - CABA, Argentina<br/>+54 11 4334 7680</p><br/>
				<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe>
				</div>
				<p><a href="#">ver mapa más grande</a></p>
				<br/>
			</div>
			
			<div class="col-md-4 moreInformation">
				<p style="float:left;">
					Diseño y Desarrollo<br/>
					Rendoro Softwarte
				</p>
				<img src="images/iconDesignySoft.jpg" class="img-responsive" alt="image" style="float: right;">			
				<hr>
				<div id="socialMedia">
					<a href="#">
						<p>Facebook</p>
						<img src="images/iconFb.jpg" class="img-responsive" alt="Facebook">
					</a>
					<a href="#">
						<img src="images/iconYoutube.jpg" class="img-responsive" alt="Youtube" style="float:right;">
						<p style="float:right;">Youtube</p>
					</a>
				</div>
				<br style="clear:both;"/>
			</div>
		</div>

		<br style="clear:both;"/>
	</div>
	</section>	
</footer>
<!--/END - FOOTER-->


<!-- MODALs -->
<!--------LOGIN MODAL---------->
<div class="modal fade bs-example-modal-sm" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
		<div class="modal-body">
			<div class="row">
			<div class="col-md-12">
				<h1>Login</h1>
			</div>	
			<div class="col-md-12">
				<form role="form">
					<div class="form-group">
						<input type="text" class="form-control" id="dni" placeholder="DNI">
					</div>
					<div class="form-group">
						<select class="form-control">
							<option>Pais</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="clave" placeholder="Clave">
					</div>
					<div class="form-group">
						<button type="submit">Enviar &rarr;</button>
					</div>
				</form>
			</div>	
			<div class="col-md-12">
				<a href="#" id="lostPassword">Olvid&oacute; su clave?</a><br/>
				<a href="#" id="newUser">Nuevo Usuario</a>
			</div>
		</div>
	</div>
    </div>
  </div>
</div>

<!--------LOST PASSWORD MODAL---------->
<div class="modal fade bs-example-modal-sm" id="modalLostPassword" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
		<div class="modal-body">
			<div class="row">
			<div class="col-md-12">
				<h1>Nueva clave</h1>
			</div>	
			<div class="col-md-12">
				<form role="form">
					<div class="form-group">
						<p>Si olvidó su clave ingrese su e-mail y le enviaremos una nueva.</p>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<button type="submit">Enviar &rarr;</button>
					</div>
				</form>
			</div>	
			<div class="col-md-12">
				<a href="#" id="backLogin">Regresar</a>
			</div>
		</div>
	</div>
    </div>
  </div>
</div>


<!--------NEW USER MODAL---------->
<div class="modal fade bs-example-modal-sm" id="modalNewUser" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
		<div class="modal-body">
			<div class="row">
			<div class="col-md-12">
				<h1>Nuevo Usuario</h1>
			</div>	
			<div class="col-md-12">
				<form role="form">
					<div class="form-group">
						<p>Por favor llene los siguientes campos...</p>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="dni" placeholder="DNI">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="name" placeholder="Nombre">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="lastname" placeholder="Apellido">
					</div>
					<div class="form-group">
						<select> 
<option>Argentina</option>             
<option>Bolivia</option>             
<option>Brasil</option>             
<option>Chile</option>             
<option>Colombia </option>            
<option>Costa Rica</option>             
<option>Cuba</option>             
<option>Ecuador</option>             
<option>El Salvador</option>             
<option>España</option>             
<option>Guatemala</option>             
<option>Haití</option>             
<option>Honduras</option>             
<option>Jamaica</option>             
<option>México</option>             
<option>Nicaragua</option>             
<option>Panamá</option>            
<option>Paraguay</option>             
<option>Perú</option>             
<option>Puerto Rico</option>             
<option>Rep. Dominicana</option>             
<option>Uruguay</option>             
<option>Venezuela</option>             
<option>Other Country</option>             
<option>Austria</option>             
<option>Belgium</option>             
<option>Denmark</option>             
<option>France</option>             
<option>Germany</option>             
<option>Ireland</option>             
<option>Italy</option>             
<option>Netherlands</option>            
<option>Norway</option>             
<option>Sweden</option>             
<option>Switzerland </option>            
<option>United Kingdom</option>             
<option>United States</option>             
<option>Australia </option>            
<option>Canada</option>             
<option>Japan</option>             
<option>Portugal </option>            
<option>Greece</option>             
<option>Korea </option>            
<option>China </option>            
<option>Poland</option>             
<option>Israel</option>             
<option>India</option>             
<option>Hungary</option>             
<option>Bulgaria</option>             
<option>Russia</option>             
<option>Serbia</option>             
<option>Egypt</option>             
<option>Iran</option>             
<option>Czech Republic</option>             
<option>Ukraine</option>             
<option>Turkey</option>             
<option>Croatia</option>             
<option>Slovakia </option>            
<option>Belarus</option>             
<option>Finland</option>             
<option>Vietnam</option>             
<option>Philippines</option>             
<option>New Zeland</option>             
<option>Georgia</option>             
<option>Rumania</option>      
						</select>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" placeholder="Mail">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" placeholder="Clave">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password-confirm" placeholder="Confirmar Clave">
					</div>
					<div class="form-group">
						<button type="submit">Enviar &rarr;</button>
					</div>
				</form>
			</div>	
			<div class="col-md-12">
				<a href="#" id="backLogin2">Regresar</a>
			</div>
		</div>
	</div>
    </div>
  </div>
</div>
<!--/END - MODALs-->


<script src="js/jquery-1.11.1.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script src="js/compiled.js"></script>
</body>
</html>
