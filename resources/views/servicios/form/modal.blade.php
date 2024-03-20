<div class="modal fade" id="modal-delete-{{$prod->id}}" tabindex="-1" arialabelledby="ModalLabel" aria-hidden="true">
<form method="POST" action="{{ route('servicios.destroy',$prod->id) }}"
role="form" enctype="multipart/form-data">
 <input type="hidden" name="_method" value="delete">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Eliminar registo</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
 </div>
 <div class="modal-body">
 <p>Confirme si desea Eliminar el registo del paquete ?</p>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-bsdismiss="modal">Cerrar</button>
 <button type="submit" class="btn btn-primary">Confirmar</button>
 </div>
 </div>
 </div>
</div>
</form>