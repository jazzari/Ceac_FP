<div class="container justify-content-center align-items-center mt-5">
  <div class="row justify-content-center">
      <div class="col-md-4">
          <img src="../assets/img/registro.jpg" class="img-thumbnail" alt="">
      </div>
      <div class="col-md-6 col-xl-4">
          <div class="card shadow">
              <div class="card-body">
                  <h5 class="card-title text-center">Cree una cuenta</h5>
                  <form action="" class="row g-3" data-form="save" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="usuario">Usuario</label>
                        <input
                          class="form-control"
                          type="text"
                          id="usuario"
                          name="usuario" required autofocus
                        />
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                                <label class="form-label" for="nombre">Nombre</label>
                                <input class="form-control" type="text" id="nombre" name="nombre" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="apellidos">Apellidos</label>
                                <input class="form-control" type="text" id="apellidos" name="apellidos" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                    </div>
                    <div class="col-md-6">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="contraseña">Contraseña</label>
                                <input class="form-control" type="password" id="contraseña" name="contraseña" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                    </div>
                    
                    <button class="btn btn-success w-100" type="submit">Registrarse</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>