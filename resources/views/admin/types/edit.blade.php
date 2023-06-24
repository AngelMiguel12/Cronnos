@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear categoria</h4>
                    <div class="actions">
                        <a href="#confirm_delete" class="btn btn-sm btn-danger" role="button" data-toggle="modal">
                            <i class="fas fa-trash"></i> {{ __('Eliminar') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::model($record, ['method' => 'patch', 'route' => ['admin.types.update', $record->id], 'files' => true]) !!}

                    @include('admin.types.includes.fields')

                    <div class="form-actions float-right">
                        <a class="btn btn-secondary"
                           href="{{ route('admin.types.index') }}">{{ __('Volver') }}</a>
                        {!! Form::submit(__('Guardar'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    @include('admin.types.includes._delete_modal')

@endsection
