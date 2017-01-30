@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New</div>
                <div class="panel-body">
                    {!! Form::model(new App\Person, ['route' => ['person.store'], 'class'=>'form-horizontal']) !!}
                        @include('persons/partials/_form', ['submit_text' => 'Add'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
