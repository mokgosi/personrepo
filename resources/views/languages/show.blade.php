@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Viewing: {{ $language->name }}</div>
                <div class="panel-body">
                    <table  class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $language->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>                     
                        {!! Html::linkRoute('language.index', 'Back',array(), array('class' => 'btn btn-default btn-sm')) !!}
                        {!! Html::linkRoute('language.edit', 'Edit', array('id'=>$language->id), array('class' => 'btn btn-primary btn-sm')) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
