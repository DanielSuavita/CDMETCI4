<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form action="./User/create" method="post">
                <div class="card ">
                    <div class="card-header">
                        <h3>Registro de Aprendices</h3>
                    </div>
                    
                    <div class="card-body green">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4" for="">Nombre</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="Name" placeholder="Nombre del Usuario">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4" for="">Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="Email" placeholder="Email del Usuario">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2" for="">Dirección</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Address" placeholder="Dirección del Usuario">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4" for="">Contraseña</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="password" name="Password" placeholder="Mínimo 5 Caracteres">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4" for="">Teléfono</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="Cellphone" placeholder="Teléfono del Usuario">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4" for="">Departamento</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="idCountry">
                                        {Countries}
                                            <option value="{idCountry}">{Name}</option>
                                        {/Countries}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4" for="">Ciudad</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="idCity">
                                        {Cities}
                                            <option value="{idCity}">{Name}</option>
                                        {/Cities}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md">
                                <input type="hidden" name="idUserRole" value="1">
                                <button class="btn btn-block btn-success" type="submit">Crear Usuario</button>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>