@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Categorias</h4>
                    <div class="actions">
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.types.create') }}">
                            <i class="fas fa-plus"></i>
                            {{ __('Agregar') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($records->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Nombre') }}</th>
                                    <th>{{ __('Categoria') }}</th>
                                    <th class="text-center">{{ __('Acciones') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->slug }}</td>
                                        <td class="text-center">
                                            @include('admin.partials.table-actions', ['showRoute' => 'admin.types.show', 'editRoute' => 'admin.types.edit'])
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @include('admin.partials.table-footer')
                    @else
                        <span>{{__('app.there_are_currently_no_records')}}. {!! linkToRoute('admin.types.create', __('app.create_a_new_record')) !!}.</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="">CRONNOS B</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection
