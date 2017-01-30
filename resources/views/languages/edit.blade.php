@extends('layouts.app')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Language</div>
                <div class="panel-body">
                    {!! Form::model($language, ['method' => 'PATCH', 'route' => ['language.update', $language->id], 
                            'data-parsley-validate'=>'', 'class'=>'form-horizontal']) !!}
                        @include('languages/partials/_form', ['submit_text' => 'Update'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection