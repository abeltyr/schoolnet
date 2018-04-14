@extends('layouts.app')

@section('content')




<h1>grade table></h1>

@foreach($tabs as $tab)  
    <div class="well">
    <table class="form-control col-md-12" border="1px">
        <tr>
        <td>{{$tab->school_name}} </td>
        <td>{{$tab->school_code}} </td>
        <td>{{$tab->testno}} </td>
        <td>{{$tab->no_section}} </td>
        <td>{{$tab->grade}}</td>
        <td>{{$tab->subj1}} </td>
        <td>{{$tab->subj2}} </td>
        <td>{{$tab->subj3}} </td>
        <td>{{$tab->subj4}} </td>
        <td>{{$tab->subj5}} </td>
    </table>    
        <form  action="{{ route('addtable')  }}" method="POST">
            <input type="hidden" name="see" value="{{$tab->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <input type="submit" class="btn btn-lg btn-success col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs  " value="add table" >
        </form>
    </div>
@endforeach
@endsection