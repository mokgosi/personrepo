@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Language</div>
                <div class="panel-body">
                    {!! Form::model($language, ['method' => 'PATCH', 'route' => ['language.update', $language->id], 'class'=>'form-horizontal']) !!}
                        @include('languages/partials/_form', ['submit_text' => 'Update'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection