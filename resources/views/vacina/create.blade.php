
<div class="modal fade" id="create-vacina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inserir uma vacina</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('vacina.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nome" class="form-label">NOME</label>
                  <input required type="text" maxlength="50" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="lote" class="form-label">LOTE</label>
                    <input required type="text" maxlength="11"  class="form-control" id="lote" aria-describedby="emailHelp" name="lote">
                </div>
                <div class="mb-3">
                    <label for="validade" class="form-label">DATA DE VALIDADE</label>
                    <input required type="date" class="form-control" id="validade" aria-describedby="emailHelp" name="validade">
                </div>
                <div class="mb-3">
                    <label for="doses" class="form-label">DOSES</label>
                    <input required type="number" maxlength="50" class="form-control" id="doses" aria-describedby="emailHelp" name="doses">
                </div>
                <div class="mb-3">
                    <label for="fabricante_id" class="form-label">FABRICANTE</label>
                    <select required class="form-select" aria-label="Default select example" name="fabricante_id">
                        <option value="" disabled selected>--- Selecione um Fabricante ---</option>
                        @isset($empresas)
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->cnpj }}">{{ $empresa->nome_empresa }}</option>
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
