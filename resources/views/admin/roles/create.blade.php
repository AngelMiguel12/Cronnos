@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nuevo rango</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.roles.store', 'files' => true]) !!}

                    @include('admin.roles.includes.fields')

                    <div class="form-actions float-right">
                        <a class="btn btn-secondary"
                           href="{{ route('admin.roles.index') }}">{{ __('Volver') }}</a>
                        {!! Form::submit(__('Guardar'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
