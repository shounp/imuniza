<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inserir uma pessoa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('pessoa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nome" class="form-label">NOME</label>
                  <input type="text" maxlength="50" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="number" maxlength="11"  class="form-control" id="cpf" aria-describedby="emailHelp" name="cpf">
                </div>
                <div class="mb-3">
                    <label for="num_sus" class="form-label">NÚMERO DO SUS</label>
                    <input type="number" class="form-control" id="num_sus" aria-describedby="emailHelp" name="num_sus">
                </div>
                <div class="mb-3">
                    <label for="data_nascimento" class="form-label">DATA DE NASCIMENTO</label>
                    <input type="date" class="form-control" id="data_nascimento" aria-describedby="emailHelp" name="data_nascimento">
                </div>
                <div class="mb-3">
                    <label for="nome_mae" class="form-label">NOME DA MÃE</label>
                    <input type="text" maxlength="50" class="form-control" id="nome_mae" aria-describedby="emailHelp" name="nome_mae">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">SEXO</label>
                    <select class="form-select" aria-label="Default select example" name="sexo">
                        <option selected>escolha um</option>
                        <option value="M">masculino</option>
                        <option value="F">feminilo</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="estado_civil" class="form-label">ESTADO CIVIL</label>
                    <select class="form-select" aria-label="Default select example" name="estado_civil">
                        <option selected>Selecione um</option>
                        <option value="casado">casado</option>
                        <option value="solteiro">solteiro</option>
                        <option value="divorciado">divorciado</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="escolaridade" class="form-label">ESCOLARIDADE</label>
                    <select class="form-select" aria-label="Default select example" name="escolaridade">
                        <option selected>Selecione um</option>
                        <option value="casado">Fudamental</option>
                        <option value="solteiro">Médio</option>
                        <option value="divorciado">Superior</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="raca_cor" class="form-label">COR</label>
                    <select class="form-select" aria-label="Default select example" name="raca_cor">
                        <option selected>Selecione um</option>
                        <option value="Preto">Preto</option>
                        <option value="Pardo">Pardo</option>
                        <option value="Branco">Braco</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="plano_saude" class="form-label">PLANO DE SAUDE</label>
                    <select class="form-select" aria-label="Default select example" name="plano_saude">
                        <option selected>Selecione um</option>
                        <option value="S">Sim</option>
                        <option value="N">Não</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">CEP</label>
                    <input type="number" maxlength="8" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[cep]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">PAIS</label>
                    <input type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[country]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">CIDADE</label>
                    <input type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[city]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">ESTADO</label>
                    <input type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[state]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">BAIRRO</label>
                    <input type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[district]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">RUA</label>
                    <input type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[street]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">NUMERO</label>
                    <input type="number" maxlength="5" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[number]">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">COMPLEMENTO</label>
                    <input type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[complement]">
                </div>

                <div class="modal-footer"></div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
