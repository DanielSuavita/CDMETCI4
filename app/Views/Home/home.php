<section>
    <div class="container">
        <div class="row  mt-5">
            <div class="col-md-6">
                <h1>Bienvenido</h1>
                <p>Somos un centro de desarrollo tecnológico que surge como fruto del convenio entre los gobiernos de Colombia e Italia en el año 1988</p>
                <p>El Centro de Diseño y Metrología ofrece y ejecuta acciones de formación profesional orientadas a apoyar y fomentar la innovación y el desarrollo tecnológico.</p>
            </div>
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">
                        <h1 class="card-title">Iniciar Sesión</h1>
                    </div>
                    <div class="card-body green">
                        <form action="./Auth/login" role="form" method="POST">
                            <div class="form-group row">
                                <label for="Email" class="col-sm-3 col-form-label">Usuario</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="Email" placeholder="N° de Documento" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Password" class="col-sm-3 col-form-label">Contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="Password" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-block btn-success" type="submit" value="iniciar Sesión">
                            </div>
                            <div class="input-group">
                                <div class="col-md-12">
                                    <div>
                                        ¿No tienes una cuenta? <a class="enlace" href="index.php?load=registros&ubi=10">¡Registrate aquí!</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>