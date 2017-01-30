@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Persons</div>
                <div class="panel-body">
                    @if (Auth::check())
                        <a href="{{ route('person.create') }}" class="btn btn-success btn-sm">Add New</a>
                        <br/><br/>
                    @endif
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>    
                                <td>Name</td>
                                <td>Surname</td>
                                <td>Email</td>
                                @if (Auth::check())
                                    <td>&nbsp;</td>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($persons as $person)
                                <tr>
                                    <td>{{ $person->first_name }}</td>
                                    <td>{{ $person->surname }}</td>
                                    <td>{{ $person->email}}</td>
                                    @if (Auth::check())
                                        <td>
                                            <a href="{{ route('person.edit',$person->id) }}">Edit</a> |
                                            <a href="{{ route('person.show',$person->id) }}">View</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
