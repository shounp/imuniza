
<div class="modal fade" id="addvac-{{ $pessoa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inserir uma vacina</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('pessoa.vacina', $pessoa->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="vacina" class="form-label">Vacina</label>
                    <select class="form-select" aria-label="Default select example" name="vacina">
                        <option selected>--- Selecione uma Vacina ---</option>
                        @isset($vacinas)
                            @foreach ($vacinas as $vacina)
                                <option value="{{ $vacina->id }}">{{ $vacina->nome }}</option>
                            @endforeach
                        @endisset
                      </select>
                </div>
                <div class="modal-footer"></div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
