<div class="modal fade" id="listvac-{{ $pessoa->id }}" tabindex="-1" aria-labelledby="listVacLabel-{{ $pessoa->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="listVacLabel-{{ $pessoa->id }}">Vacinas de {{ $pessoa->nome }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($pessoa->pessoa_vacina->isEmpty())
                    <p>Nenhuma vacina atribuída a esta pessoa.</p>
                @else
                    <ul class="list-group">
                        @foreach ($pessoa->pessoa_vacina as $pv)
                            <li class="list-group-item">
                                {{ $pv->vacina->nome }} 
                                (Dose: {{ $pv->dose }}, 
                                Lote: {{ $pv->vacina->lote }}, 
                                Data de Aplicação: {{ $pv->created_at->format('d/m/Y H:i') }})
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>