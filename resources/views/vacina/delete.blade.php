<div class="modal fade" id="delete-{{ $vacina->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('vacina.delete', $vacina->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="row">
                    <p> tem certeza que deseja excluir {{ $vacina->nome }} ?</p>
                    <div class="modal-footer"></div>
                    <button type="submit" class="btn btn-primary">Excluir</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
