<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($Vuelos->id))
                <div class="mb-3">
                    <label for="origen" class="negrita">Origen:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="origen" type="text" id="origen" value="{{ $Vuelos->origen}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="destino" class="negrita">destino:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="destino" type="text" id="destino" value="{{ $Vuelos->destino}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fecha_salida" class="negrita">fecha de salida:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="fecha_salida" type="date" id="fecha_salida" value="{{ $Vuelos->fecha_salida}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fecha_llegada" class="negrita">fecha de llegada:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="fecha_llegada" type="date" id="fecha_llegada" value="{{ $Vuelos->fecha_llegada}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="duracion" class="negrita">duracion:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="duracion" type="text" id="duracion" value="{{ $Vuelos->duracion}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="negrita">precio:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="precio" type="text" id="precio" value="{{ $Vuelos->precio}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="asientos_disponibles" class="negrita">asientos disponibles:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="asientos_disponibles" type="text" id="asientos_disponibles" value="{{ $Vuelos->asientos_disponibles}}">
                    </div>
                </div>
               
                @else
                <div class="mb-3">
                    <label for="origen" class="negrita">origen:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="origen" type="text" id="origen">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="destino" class="negrita">destino:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="destino" type="text" id="destino">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fecha_salida" class="negrita">fecha de salida:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="fecha_salida" type="date" id="fecha_salida">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fecha_llegada" class="negrita">fecha de llegada:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="fecha_llegada" type="date" id="fecha_llegada">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="duracion" class="negrita">duracion:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="duracion" type="text" id="duracion">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="negrita">precio:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="precio" type="text" id="precio">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="asientos_disponibles" class="negrita">asientos disponibles:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="asientos_disponibles" type="text" id="asientos_disponibles">
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('Vuelos.index') }}" class="btn btn-warning">Cancelar</a>
                <br>
                <br>
            </div>
        </section>
    </div>
</div>
