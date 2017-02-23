<footer class="footer">
    <h4>Wambo</h4>
    <div class="row">
        <div class="col-md-6">
            <ul class="textofooter">
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/frutas"?>">Wambo Frutas</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/verduras"?>">Wambo Verduras</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/noticias"?>">Wambo Noticas</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/lideres"?>">Wambo Líderes</a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="textofooter">
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/deporte"?>">Wambo Deportes</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/alimentos"?>">Wambo Alimentos</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/desafiodiario"?>">Wambo Desafío Diario</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-link"></span>
                    <a href="<?php echo base_url()."aplicacion/certificado"?>">Wambo Diploma</a>
                </li>
            </ul>
        </div>
    </div>
    <p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    <p>Leonardo Concha Mella</p>
    <p>Copyright <?php echo date('Y')?></p>
</footer>