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
                        <label class="form-label" for="user">Usuario</label>
                        <input
                          class="form-control"
                          type="text"
                          id="user"
                          name="user" required autofocus
                        />
                        <div class="valid-feedback">
                          Se ve bien!
                        </div>
                    </div>
                    <div class="col-md-6">
                                <label class="form-label" for="nombre">Nombre</label>
                                <input class="form-control" type="text" id="nombre" name="nombre" required />
                                <div class="valid-feedback">
                                Se ve bien!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="apellidos">Apellidos</label>
                                <input class="form-control" type="text" id="apellidos" name="apellidos" required />
                                <div class="valid-feedback">
                                Se ve bien!
                                </div>
                    </div>
                    <div class="col-md-6">
                                <label class="form-label" for="correo">Correo</label>
                                <input class="form-control" type="email" id="correo" name="correo" required />
                                <div class="valid-feedback">
                                Se ve bien!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="pass">Contraseña</label>
                                <input class="form-control" type="password" id="pass" name="pass" required />
                                <div class="valid-feedback">
                                Se ve bien!
                                </div>
                    </div>
                    
                    <button class="btn btn-success w-100" type="submit">Registrarse</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>