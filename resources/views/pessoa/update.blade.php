<div class="modal fade" id="edit-{{ $pessoa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel-{{ $pessoa->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel-{{ $pessoa->id }}">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('pessoa.update', $pessoa->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nome" class="form-label">NOME</label>
                  <input required value="{{ $pessoa->nome }}" type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input required value="{{ $pessoa->cpf }}" type="text" class="form-control" id="cpf" aria-describedby="emailHelp" name="cpf">
                </div>
                <div class="mb-3">
                    <label for="num_sus" class="form-label">NUMERO DO SUS</label>
                    <input required value="{{ $pessoa->num_sus }}" type="text" class="form-control" id="numeor_sus" aria-describedby="emailHelp" name="numeor_sus">
                </div>
                <div class="mb-3">
                    <label for="data_nascimento" class="form-label">DATA DE NASCIMENTO</label>
                    <input required value="{{ $pessoa->data_nascimento }}" type="text" class="form-control" id="data_nascimento" aria-describedby="emailHelp" name="data_nascimento">
                </div>
                <div class="mb-3">
                    <label for="nome_mae" class="form-label">NOME DA MÃE</label>
                    <input required value="{{ $pessoa->nome_mae }}" type="text" class="form-control" id="nome_mae" aria-describedby="emailHelp" name="nome_mae">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">SEXO</label>
                    <select required class="form-select" name="sexo">
                        <option value="M" {{ $pessoa->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $pessoa->sexo == 'F' ? 'selected' : '' }}>Feminino</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="estado_civil" class="form-label">ESTADO CIVIL</label>
                        <select required class="form-select" name="estado_civil">
                            <option value="casado" {{ $pessoa->estado_civil == 'casado' ? 'selected' : '' }}>Casado</option>
                            <option value="solteiro" {{ $pessoa->estado_civil == 'solteiro' ? 'selected' : '' }}>Solteiro</option>
                            <option value="divorciado" {{ $pessoa->estado_civil == 'divorciado' ? 'selected' : '' }}>Divorciado</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="escolaridade" class="form-label">ESCOLARIDADE</label>
                        <select required class="form-select" name="escolaridade">
                            <option value="fundamental" {{ $pessoa->escolaridade == 'fundamental' ? 'selected' : '' }}>Fundamental</option>
                            <option value="medio" {{ $pessoa->escolaridade == 'medio' ? 'selected' : '' }}>Médio</option>
                            <option value="superior" {{ $pessoa->escolaridade == 'superior' ? 'selected' : '' }}>Superior</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="raca_cor" class="form-label">COR</label>
                        <select required class="form-select" name="raca_cor">
                            <option value="Preto" {{ $pessoa->raca_cor == 'Preto' ? 'selected' : '' }}>Preto</option>
                            <option value="Pardo" {{ $pessoa->raca_cor == 'Pardo' ? 'selected' : '' }}>Pardo</option>
                            <option value="Branco" {{ $pessoa->raca_cor == 'Branco' ? 'selected' : '' }}>Branco</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="plano_saude" class="form-label">PLANO DE SAÚDE</label>
                        <select required class="form-select" name="plano_saude">
                            <option value="S" {{ $pessoa->plano_saude == 'S' ? 'selected' : '' }}>Sim</option>
                            <option value="N" {{ $pessoa->plano_saude == 'N' ? 'selected' : '' }}>Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">CEP</label>
                        <input required value={{ $pessoa->endereco['cep'] }} type="number" maxlength="8" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[cep]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">PAIS</label>
                        <input required value={{ $pessoa->endereco['country'] }} type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[country]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">CIDADE</label>
                        <input required value={{ $pessoa->endereco['city'] }} type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[city]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">ESTADO</label>
                        <input required value={{ $pessoa->endereco['state'] }} type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[state]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">BAIRRO</label>
                        <input required value={{ $pessoa->endereco['district'] }} type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[district]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">RUA</label>
                        <input required value={{ $pessoa->endereco['street'] }} type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[street]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">NUMERO</label>
                        <input required value={{ $pessoa->endereco['number'] }} type="number" maxlength="5" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[number]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">COMPLEMENTO</label>
                        <input required value="{{ $pessoa->endereco['complement'] }}" type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[complement]">
                    </div>

                <div class="modal-footer"></div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
