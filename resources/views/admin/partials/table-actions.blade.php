@if(isset($record))
    @if(isset($showRoute))
        <a class="btn btn-sm btn-info" href="{{ route($showRoute, $record->id) }}"
           title="View record">
            <i class="fas fa-eye"></i>
            {{ __('Ver') }}
        </a>
    @endif
    @if(isset($editRoute))
        <a class="btn btn-sm btn-secondary" href="{{ route($editRoute, $record->id) }}"
           title="Edit record">
            <i class="fas fa-pencil-alt"></i>
            {{ __('Editar') }}
        </a>
    @endif
@endif
