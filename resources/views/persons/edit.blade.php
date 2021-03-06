@extends('layouts.app')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Person</div>
                <div class="panel-body">
                    {!! Form::model($person, ['method' => 'PATCH', 'route' => ['person.update', $person->id], 
                            'data-parsley-validate'=>'', 'class'=>'form-horizontal']) !!}
                        @include('persons/partials/_form', ['submit_text' => 'Update'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection