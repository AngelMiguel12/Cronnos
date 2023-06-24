@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $pageTitle }}</h4>
                    <div class="actions">
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.roles.edit', $record->id) }}">
                            <i class="fas fa-pen"></i>
                            {{ __('Edit') }}
                        </a>
                        <a href="#confirm_delete" class="btn btn-sm btn-danger" role="button" data-toggle="modal">
                            <i class="fas fa-trash"></i> {{ __('app.delete') }}
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
                                    <p class="form-control-plaintext">{{ $record->slug }}</p>
                                </div>
                                @if(!$record->isAdmin())
                                    <div class="form-group">
                                        <label class="col-form-label">{{ __('Categoria') }}:</label>
                                        <p class="form-control-plaintext">{{ $record->humanizeTypeNames() }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-actions float-right">
                            <a class="btn btn-secondary"
                               href="{{ route('admin.roles.index') }}">{{ __('app.back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.roles.includes._delete_modal')
@endsection
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="">CRONNOS B</a>
  </div>
  <!-- Copyright -->
</footer>
