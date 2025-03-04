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
                        <select class="form-select" name="vacina" id="vacina">
                            <option value="" selected disabled>--- Selecione uma Vacina ---</option>
                            @isset($vacinas)
                                @foreach ($vacinas as $vacina)
                                    <option value="{{ $vacina->id }}">{{ $vacina->nome }}</option>
                                @endforeach
                            @endisset
                        </select>
                        @error('vacina')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dose" class="form-label">Dose</label>
                        <input type="number" class="form-control" name="dose" id="dose" min="1" step="1" placeholder="Ex.: 1">
                        @error('dose')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer"></div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </form>
            </div>
        </div>
    </div>
</div>