<div class="container espacioWell">
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3">
			<form action="baknd/login.php" method="post" class="well" id="formAcceso">
				<h2 class="text-center">..:::  Acceso  :::..</h2>
				<input type="text" class="form-control espacioText" name="user" placeholder="Usuario" pattern=".{3,}" required="required"/>
				<input type="text" class="form-control espacioText" name="pass" placeholder="Contraseña" pattern=".{3,}" required="required"/>
				<input type="submit" class="btn btn-success pull-right" value="Enviar"/>
				<!--div class="alert alert-warning clear-both">
					<strong>¡Atención!</strong> La contraseña debe tener como mínimo 8 caractéres.
				</div-->
			</form>
            <div>
                <a id="btnRegist" class="btn btn-info center-block" href="#">Regístrate ahora</a>
            </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3 espacioText">
			<p id="textoAcceso">Si no dispone de un nombre de usuario y una contraseña válidos,
			por favor, póngase en contacto con su administrador para que le asigne unos nuevos.</p>
		</div>
	</div>
</div>