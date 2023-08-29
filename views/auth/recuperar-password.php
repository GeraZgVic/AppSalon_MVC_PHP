<h1 class="nombre-pagina">Recuperar password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>

<?php include_once __DIR__ . "/../templates/alertas.php"?>
<?php if($error) return;?> <!-- Si es false, entonces no muestra el form-->
<!-- Eliminamos el action porque es la misma página y para que no nos borre el token -->
<form class="formulario" method="POST">
<div class="campo">
        <label for="password">Password</label>
        <input 
            type= "password"
            id="password"
            placeholder="Tu Nuevo Password"
            name="password"
        />
    </div>
<input type="submit" class="boton" value="Guardar Nuevo Password"> 
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Obtener una</a>
</div>