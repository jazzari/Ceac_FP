<?php

?>

<div class="container">

    <div class="container justify-content-center align-items-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="../assets/img/reg-clientes.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de Averias</h5>
                        <form action="" class="row g-3 needs-validation" data-form="save" method="POST" novalidate>
                            <div class="col">
                                <div>
                                    <label class="form-label" for="asunto">Asunto</label>
                                    <input class="form-control mb-3" type="text" id="asunto" name="asunto" required
                                        autofocus />
                                    <div class="valid-feedback">
                                        Se ve bien!
                                    </div>
                                </div>
                                <div class="col">

                                    <label class="form-label" for="asegurado_id">Asegurado</label>
                                    <select class="form-select mb-3" id="asegurado_id" name="asegurado_id"
                                        aria-label="Floating label select example" required>
                                        <option value="" selected>Seleccione Asegurado</option>
                                        <?php foreach($listAsegurado as $asegurado){ ?>
                                        <option value="<?php print_r($asegurado['asegurado_id']) ?>">
                                            <?php print_r($asegurado['nombre']) ?></option>
                                            
                                        <?php } ?>
                                    </select>
                                    <div class="valid-feedback">
                                        Se ve bien!
                                    </div>
                                </div>

                                <div class="col">
                                    <div>
                                        <label class="form-label" for="fecha">Fecha</label>
                                        <input class="form-control" type="date" id="fecha" name="fecha" required />
                                        <div class="valid-feedback">
                                            Se ve bien!
                                        </div>

                                        <label class="form-label mt-3" for="descripcion">Descripción</label>
                                        <textarea class="form-control mb-3" placeholder="Describa las averías"
                                            id="descripcion" name="descripcion" required></textarea>
                                        <div class="valid-feedback">
                                            Se ve bien!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input class="form-control form-control-sm" type="file" id="foto" name="foto"
                                            multiple>
                                    </div>

                                    <div class="valid-feedback">
                                        Se ve bien!
                                    </div>
                                </div>

                                <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuario'] ?>" />
                                <input type="hidden" id="aseguradora_id" name="aseguradora_id" ?>

                                <button class="btn btn-success w-100">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script type='text/javascript'>
$(document).ready(function() {
    // busca el id de la aseguradora del asegurado
    $('select[name="asegurado_id"]').on('change', function() {
        const asegurado_id = $(this).val();

        $.ajax({
            url: '/getAsegurado',
            type: 'GET',
            data: {
                asegurado: asegurado_id
            },
            dataType: 'text',
            success: function(result) {
                let res = JSON.parse(result);
                for (const asegurado in res) {
                    const aseguradora = res[asegurado]['aseguradora_id'];
                    $('#aseguradora_id').val(aseguradora).val();
                }
            },
            error: function(result) {
                alert('Oh no aa :(' + result[0]);
            }
        });
    });
});
</script>