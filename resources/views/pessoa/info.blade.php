<div class="modal fade" id="info-{{ $pessoa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel-{{ $pessoa->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex flex-column align-items-start">
            <div class="d-flex justify-content-between w-100">
                <h1 class="modal-title fs-5" id="exampleModalLabel-{{ $pessoa->id }}">Informações</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <a href="{{ route('gerador.pessoa.pdf', $pessoa->id) }}" class="btn btn-warning text-white">Gerar PDF</a>
        </div>
        <div class="modal-body">
            <form action="{{ route('pessoa.update', $pessoa->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">NOME</label>
                    <input value="{{ $pessoa->nome }}" disabled type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input value="{{ $pessoa->cpf }}" disabled type="text" class="form-control" id="cpf" aria-describedby="emailHelp" name="cpf">
                </div>
                <div class="mb-3">
                    <label for="num_sus" class="form-label">NUMERO DO SUS</label>
                    <input value="{{ $pessoa->num_sus }}" disabled type="text" class="form-control" id="numeor_sus" aria-describedby="emailHelp" name="numeor_sus">
                </div>
                <div class="mb-3">
                    <label for="data_nascimento" class="form-label">DATA DE NASCIMENTO</label>
                    <input value="{{ $pessoa->data_nascimento }}" disabled type="text" class="form-control" id="data_nascimento" aria-describedby="emailHelp" name="data_nascimento">
                </div>
                <div class="mb-3">
                    <label for="nome_mae" class="form-label">NOME DA MÃE</label>
                    <input value="{{ $pessoa->nome_mae }}" disabled type="text" class="form-control" id="nome_mae" aria-describedby="emailHelp" name="nome_mae">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">SEXO</label>
                    <select class="form-select" disabled name="sexo">
                        <option value="M" {{ $pessoa->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $pessoa->sexo == 'F' ? 'selected' : '' }}>Feminino</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="estado_civil" class="form-label">ESTADO CIVIL</label>
                        <select class="form-select" disabled name="estado_civil">
                            <option value="casado" {{ $pessoa->estado_civil == 'casado' ? 'selected' : '' }}>Casado</option>
                            <option value="solteiro" {{ $pessoa->estado_civil == 'solteiro' ? 'selected' : '' }}>Solteiro</option>
                            <option value="divorciado" {{ $pessoa->estado_civil == 'divorciado' ? 'selected' : '' }}>Divorciado</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="escolaridade" class="form-label">ESCOLARIDADE</label>
                        <select class="form-select" disabled name="escolaridade">
                            <option value="fundamental" {{ $pessoa->escolaridade == 'fundamental' ? 'selected' : '' }}>Fundamental</option>
                            <option value="medio" {{ $pessoa->escolaridade == 'medio' ? 'selected' : '' }}>Médio</option>
                            <option value="superior" {{ $pessoa->escolaridade == 'superior' ? 'selected' : '' }}>Superior</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="raca_cor" class="form-label">COR</label>
                        <select class="form-select" disabled name="raca_cor">
                            <option value="Preto" {{ $pessoa->raca_cor == 'Preto' ? 'selected' : '' }}>Preto</option>
                            <option value="Pardo" {{ $pessoa->raca_cor == 'Pardo' ? 'selected' : '' }}>Pardo</option>
                            <option value="Branco" {{ $pessoa->raca_cor == 'Branco' ? 'selected' : '' }}>Branco</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="plano_saude" class="form-label">PLANO DE SAÚDE</label>
                        <select class="form-select" disabled name="plano_saude">
                            <option value="S" {{ $pessoa->plano_saude == 'S' ? 'selected' : '' }}>Sim</option>
                            <option value="N" {{ $pessoa->plano_saude == 'N' ? 'selected' : '' }}>Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">CEP</label>
                        <input value={{ $pessoa->endereco['cep'] }} disabled type="number" maxlength="8" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[cep]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">PAIS</label>
                        <input value={{ $pessoa->endereco['country'] }} disabled type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[country]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">CIDADE</label>
                        <input value={{ $pessoa->endereco['city'] }} disabled type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[city]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">ESTADO</label>
                        <input value={{ $pessoa->endereco['state'] }} disabled type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[state]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">BAIRRO</label>
                        <input value={{ $pessoa->endereco['district'] }} disabled type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[district]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">RUA</label>
                        <input value={{ $pessoa->endereco['street'] }} disabled type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[street]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">NUMERO</label>
                        <input value={{ $pessoa->endereco['number'] }} disabled type="number" maxlength="5" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[number]">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">COMPLEMENTO</label>
                        <input value="{{ $pessoa->endereco['complement'] }}" disabled type="text" maxlength="50" class="form-control" id="endereco" aria-describedby="emailHelp" name="endereco[complement]">
                    </div>

                <div class="modal-footer"></div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
