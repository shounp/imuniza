<div class="modal fade" id="edit-{{ $empresa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inserir uma empresa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('empresa.update', $empresa->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nome" class="form-label">NOME</label>
                  <input required type="text" value={{ $empresa->nome_empresa }} maxlength="50" class="form-control" id="nome" aria-describedby="emailHelp" name="nome_empresa">
                </div>
                <div class="mb-3">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input required type="number" value={{ $empresa->cnpj }} maxlength="11"  class="form-control" id="cnpj" aria-describedby="emailHelp" name="cnpj">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">TELEFONE</label>
                    <input required type="number" value={{ $empresa->telefone }} class="form-control" id="telefone" aria-describedby="emailHelp" name="telefone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input required type="text" value={{ $empresa->email }} class="form-control" id="data_nascimento" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">CEP</label>
                    <input required type="number" value={{ $empresa->endereco['cep'] }} maxlength="8" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[cep]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">PAIS</label>
                    <input required type="text" value={{ $empresa->endereco['country'] }} maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[country]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">CIDADE</label>
                    <input required type="text" value={{ $empresa->endereco['city'] }} maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[city]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">ESTADO</label>
                    <input required type="text" value={{ $empresa->endereco['state'] }} maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[state]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">BAIRRO</label>
                    <input required type="text" value={{ $empresa->endereco['district'] }} maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[district]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">RUA</label>
                    <input required type="text" value={{ $empresa->endereco['street'] }} maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[street]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">NUMERO</label>
                    <input required type="number" value={{ $empresa->endereco['number'] }} maxlength="5" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[number]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">COMPLEMENTO</label>
                    <input type="text" value="{{ $empresa->endereco['complement'] }}" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[complement]">
                </div>

                <div class="modal-footer"></div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
