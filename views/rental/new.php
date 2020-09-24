<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex jutify-content-center">Nuevo Alquiler</h1>
    </div>

    <section class="row mt-5">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2 class="m-auto">Información Alquiler</h2>
            </div>

            <div class="card-body w-100">                
                    <div class="form-group">
                        <label>Fecha de inicio</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Fecha de fin</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="text" name="total" id="total" class="form-control" placeholder="Ej. Total1">
                    </div>
                    <div class="form-group">
                        <label>Usuarios</label>
                        <select id="user_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>  
                    <!--<div class="form-group">
                        <label>Estado</label>
                        <select id="status_id" class="form-control" name="status_id">
                            <option value="">Seleccione...</option>
                            <?php foreach($statuses as $status): ?>
                                <option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>--> 

                <div class="form-group row">
                    <div class="col-md-8">                            
                        <label>Peliculas</label>
                        <select id="movie" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($movies as $movie): ?>
                                <option value="<?php echo $movie->id ?>"><?php echo $movie->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                </div>                    

                <div id="list-movies" class="form-group"></div>

                <div class="form-group">
                    <button class="btn btn-primary" id="save">Guardar</button>
                </div>                
            </div>
        </div>
    </section>
</main>

<script src="assets/js/rental.js"></script>