@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear categoria</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.types.store', 'files' => true]) !!}

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
@endsection
