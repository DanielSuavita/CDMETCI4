
<section class="container mt-5">
    <div class="row">
    <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h3>Bitácoras Creadas</h3>
                    <div class="button-group">
                        <a href="./new" class="btn btn-success"><span class="fas fa-save"></span> Crear</a>
                        <a href="./new" class="btn btn-success"><span class="fas fa-file"></span> Subir</a>
                    </div>
                    
                    <table id="TableBitacoras" class="table table-bordered table-condensed">
                        <thead class="orange">
                            <tr>
                                <th>N°</th>
                                <th>Archivo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12</td>
                                <td>12123</td>
                                <td>12123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <h3>Bitácoras Subidas</h3>
                    
                    <table id="TableBitacorasSubidas" class="table table-bordered table-condensed">
                        <thead class="orange">
                            <tr>
                                <th>N°</th>
                                <th>Archivo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12</td>
                                <td>12123</td>
                                <td>12123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <div class="col-md-8">
            <h3>Visitas</h3>
            <p>Para Solicitar visitas, dale click al día que la necesites</p>
            <table id="TableVisitas" class="table table-bordered table-condensed">
                <thead class="orange">
                    <tr>
                        <th>N°</th>
                        <th>Directiva Asignada</th>
                        <th>Fecha de Visita</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12</td>
                        <td>123</td>
                        <td>1234</td>
                        <td>12123</td>
                        <td>12123</td>
                    </tr>
                </tbody>
            </table>
            <div id="calendar"></div>
        </div>
        
    </div>
</section>
<script src="./assets/js/CDMETAjax.js"></script>
<div id="myModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="Date" class="form-control" type="text">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>