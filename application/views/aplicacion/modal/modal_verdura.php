<!-- Modal
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="modal-title" class="modal-title titulo1">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img id="modalimg" width="200" height="200" class="center-block zoom" src="">
                    </div>
                    <div class="col-md-8">
                        <ul style="list-style: none">
                            <li><div class="texto-modal-titulo"><span class="glyphicon glyphicon-info-sign glyfy"></span> Descripción</div><p id="modal-descripcion" class="texto-modal"></p></li>
                            <li><div class="texto-modal-titulo"><span class="glyphicon glyphicon-question-sign glyfy"></span> Categoria </div><p id="modal-categoria" class="texto-modal"></p></li>
                            <li><div class="texto-modal-titulo"><span class="glyphicon glyphicon-heart glyfy"></span> Saludable</div><p id="modal-saludable" class="texto-modal"></p></li>
                            <li><div class="texto-modal-titulo"><span class="glyphicon glyphicon-star glyfy"></span> Beneficios</div><p id="modal-beneficios" class="texto-modal"></p></li>
                            <li><div class="texto-modal-titulo"><span class="glyphicon glyphicon-time glyfy"></span> Consumo</div><p id="modal-consumo" class="texto-modal"></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>-->
<div class="modal animated zoomInDown" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color: #673AB7">
                <div class="tip-modal">
                    <div class="margen-modal">
                        <h4 id="modal-title" class="modal-title titulo-modal-tip"></h4>
                        <ul style="list-style: none">
                            <li><div class="texto-modal-tip"><span class="glyphicon glyphicon-info-sign glyfy"></span> Descripción</div><p id="modal-descripcion" class="texto-modal-tip"></p></li>
                            <li><div class="texto-modal-tip"><span class="glyphicon glyphicon-question-sign glyfy"></span> Categoria </div><p id="modal-categoria" class="texto-modal-tip"></p></li>
                            <li><div class="texto-modal-tip"><span class="glyphicon glyphicon-heart glyfy"></span> Saludable</div><p id="modal-saludable" class="texto-modal-tip"></p></li>
                            <li><div class="texto-modal-tip"><span class="glyphicon glyphicon-star glyfy"></span> Beneficios</div><p id="modal-beneficios" class="texto-modal-tip"></p></li>
                            <li><div class="texto-modal-tip"><span class="glyphicon glyphicon-time glyfy"></span> Consumo</div><p id="modal-consumo" class="texto-modal-tip"></p>
                                <img id="modalimg" width="15%" style="position:absolute;top:10px;right:10px;margin:0;" class="zoom fondofruta borde img-circle" src="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="triangulo"></div>
                <br>
                <img class="img-circle" width="20%" src="<?php echo base_url().'public/images/modal/student3.png'?>">
                <button type="button" class="btn btn-info" style="position:absolute;bottom:10px;right:10px;margin:0;padding:10px 10px;font-family: 'finger paint'"data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>