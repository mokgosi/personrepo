@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Languages</div>
                <div class="panel-body">
                    @if (Auth::check())
                        <a href="{{ route('language.create') }}" class="btn btn-success btn-sm">Add New</a>
                        <br/><br/>
                    @endif
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>    
                                <td>Name</td>
                                @if (Auth::check())
                                    <td>&nbsp;</td>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($languages as $language)
                                <tr>
                                    <td>{{ $language->name }}</td>
                                    @if (Auth::check())
                                        <td>
                                            <a href="{{ route('language.edit',$language->id) }}">Edit</a> |
                                            <a href="{{ route('language.show',$language->id) }}">View</a>
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
