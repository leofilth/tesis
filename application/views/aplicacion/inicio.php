<!--Archivo que incluye el menu de navegación-->
<?php include "nav.php"?>
<div class="container-fluid">
        <h1>Hola tesis</h1>
    <p>Algún texto de prueba, ñandú</p>
    <a class="btn btn-primary" href="<?php echo base_url()?>aplicacion/registro">Registrate :D </a>
    <a class="btn btn-primary" href="<?php echo base_url()?>aplicacion/sesion">Inicia tu sesión !</a>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
