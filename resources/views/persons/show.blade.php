@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Viewing  Profile: {{ $person->first_name }} {{ $person->surname }}</div>
                <div class="panel-body">
                    <table  class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $person->first_name }}</td>
                            </tr>
                            <tr>
                                <td>Surname</td>
                                <td>{{ $person->surname }}</td>
                            </tr>
                            <tr>    
                                <td>Email</td>
                                <td>{{ $person->email}}</td>
                            </tr>
                            <tr>    
                                <td>Mobile</td>
                                <td>{{ $person->mobile}}</td>
                            </tr>
                            <tr>    
                                <td>Language</td>
                                <td> {{ $person->language->name}}</td>
                            </tr>
                            <tr>    
                                <td>D.O.B</td>
                                <td>{{ $person->date_of_birth}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>                     
                        {!! Html::linkRoute('person.index', 'Back',array(), array('class' => 'btn btn-default btn-sm')) !!}
                        {!! Html::linkRoute('person.edit', 'Edit', array('id'=>$person->id), array('class' => 'btn btn-primary btn-sm')) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
