<h1 class="nombre-pagina">Servicios</h1>
<p class="descripcion-pagina">Administración de Servicios</p>


<?php 
include_once __DIR__ . '/../templates/barra.php';

?>

<ul class="servicios">
    <?php foreach($servicios as $servicio) { ?>
    <li>
        <p>Nombre: <span><?php echo s($servicio->nombre); ?></span></p>
        <p>Precio: <span><?php echo s($servicio->precio); ?></span></p>

        <div class="acciones">
            <a class="boton" href="/servicios/actualizar?id= <?php echo $servicio->id; ?>">Actualizar</a>

            <form action="/servicios/eliminar" method="POST"> 
                <input 
                    type="hidden" 
                    name="id" 
                    id="eliminar"
                    value="<?php echo $servicio->id; ?>"
                />
                <input 
                    type="submit"
                    value="Eliminar"
                    class="boton-eliminar"
                />
            </form>
        </div>
    </li>

    <?php } ?>    
</ul>