@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                    <div class="actions">
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $record->id) }}">
                            <i class="fas fa-pen"></i>
                            {{ __('Editar') }}
                        </a>
                        <a href="#confirm_delete" class="btn btn-sm btn-danger" role="button" data-toggle="modal">
                            <i class="fas fa-trash"></i> {{ __('Eliminar') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">{{ __('Nombre') }}:</label>
                                    <p class="form-control-plaintext">{{ $record->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">{{ __('Rango') }}:</label>
                                    <p class="form-control-plaintext">{{ $roleName }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">{{ __('Correo electronico') }}:</label>
                                    <p class="form-control-plaintext">{{ $record->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions float-right">
                            <a class="btn btn-secondary"
                               href="{{ route('admin.users.index') }}">{{ __('Volver') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.users.includes._delete_modal')
@endsection
