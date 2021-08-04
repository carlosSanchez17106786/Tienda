<h1>Restablecimiento de contraseña</h1>
<h3>Ingresa tu correo electronico, te enviaremos un email para restablecer tu constraseña</h3>
<form method="POST" action="<?=base_url?>usuario/confirmPass" >

<label for="email">Correo:</label>
<input type="email" name="email" required/>
<input type="submit" value="Enviar"/>
  
</form>