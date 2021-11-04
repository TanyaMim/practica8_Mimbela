<?php include("header.php");?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Usuario</h1>
			</div>

			<div class="articulo">
				<article>
				<h1>Formulario</h1>

				<form action="/action_page.php">
  				<label for="fname">Primer nombre:</label>
  				<input type="text" id="fname" name="fname"><br><br>
  				<label for="lname">Apellido:</label>
  				<input type="text" id="lname" name="lname"><br><br>
				<label for="lname">No. de servicio:</label>
  				<input type="text" id="lname" name="lname"><br><br>
  				<input type="submit" value="Enviar">
				</form>
				</article>
			</div>
<?php include("sidebar.php"); ?>
		</div>
	</section>
<?php include("footer.php") ?>
</body>
</html>