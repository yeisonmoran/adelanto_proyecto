<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($reservas->id))
                
                <div class="mb-3">
                    <label for="fecha_reserva" class="negrita">fecha de reserva:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="fecha_reserva" type="date" id="fecha_reserva" value="{{ $reservas->fecha_reserva }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="num_personas" class="negrita">numero de personas:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="num_personas" type="text" id="num_personas" value="{{ $reservas->num_personas }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="estado" class="negrita">estado:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="estado" type="text" id="estado" value="{{ $reservas->estado}}">
                    </div>
                </div>
                @else
        
                <div class="mb-3">
                    <label for="fecha_reserva" class="negrita">fecha de reserva:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="fecha_reserva" type="date" id="fecha_reserva">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="num_personas" class="negrita">numero de personas:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="num_personas" type="text" id="num_personas">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="estado" class="negrita">estado:</label>
                    <div>
                        <input class="form-control" placeholder="" required="required" name="estado" type="text" id="estado">
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('reservas.index') }}" class="btn btn-warning">Cancelar</a>
                <br>
                <br>
            </div>
        </section>
    </div>
</div>
