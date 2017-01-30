@extends('layouts.app')

@section('stylesheets')
    {!! Html::styles(css/parsley.css) !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New</div>
                <div class="panel-body">
                    {!! Form::model(new App\Language, ['route' => ['language.store'], 'class'=>'form-horizontal']) !!}
                        @include('languages/partials/_form', ['submit_text' => 'Add'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::styles(js/parsley.min.js) !!}
@endsection