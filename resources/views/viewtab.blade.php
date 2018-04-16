@extends('layouts.app')

@section('content')




<h1>grade table</h1>

@foreach($tabs as $tab)  
    <div class="well">
    <table  style="width:100%; text-align:center;" border="1px">
        <tr>
            <th >school_name</th>
            <th >school_code</th> 
            <th >testno </th>
            <th >no_section </th>
            <th >grade</th> 
            <th >subj1 </th>
            <th >subj2 </th>
            <th >subj3 </th> 
            <th >subj4 </th>
            <th >subj5 </th>
            <th >subj6 </th> 
            <th >subj7 </th>
            <th >subj8</th>
            <th >subj9</th> 
            <th >subj10</th>
            <th >subj11</th>
            <th >subj12</th>
            <th >subj13</th> 
            <th >subj14</th>
            <th >subj15</th>
            <th >subj16</th> 
            <th >subj17</th>
            <th >subj18</th>
            <th >subj19</th> 
            <th >subj20</th>
            <th >subj21</th>
            <th >subj22</th>
            <th >subj23</th> 
            <th >subj24</th>
            <th >subj25</th>
            <th >subj26</th> 
            <th >subj27</th>
            <th >subj28</th>
            <th >subj29</th> 
            <th >subj30</th>
        </tr>
        <tr>
            <th >{{$tab->school_name}}</th>
            <th >{{$tab->school_code}}</th> 
            <th >{{$tab->testno}} </th>
            <th >{{$tab->no_section}} </th>
            <th >{{$tab->grade}}</th> 
            <th >{{$tab->subj1}} </th>
            <th >{{$tab->subj2}} </th>
            <th >{{$tab->subj3}} </th> 
            <th >{{$tab->subj4}} </th>
            <th >{{$tab->subj5}} </th>
            <th >{{$tab->subj6}} </th> 
            <th >{{$tab->subj7}} </th>
            <th >{{$tab->subj8}} </th>
            <th >{{$tab->subj9}} </th> 
            <th >{{$tab->subj10}} </th>
            <th >{{$tab->subj11}} </th>
            <th >{{$tab->subj12}} </th>
            <th >{{$tab->subj13}} </th> 
            <th >{{$tab->subj14}} </th>
            <th >{{$tab->subj15}} </th>
            <th >{{$tab->subj16}} </th> 
            <th >{{$tab->subj17}} </th>
            <th >{{$tab->subj18}} </th>
            <th >{{$tab->subj19}} </th> 
            <th >{{$tab->subj20}} </th>
            <th >{{$tab->subj21}} </th>
            <th >{{$tab->subj22}} </th>
            <th >{{$tab->subj23}} </th> 
            <th >{{$tab->subj24}} </th>
            <th >{{$tab->subj25}} </th>
            <th >{{$tab->subj26}} </th> 
            <th >{{$tab->subj27}} </th>
            <th >{{$tab->subj28}} </th>
            <th >{{$tab->subj29}} </th> 
            <th >{{$tab->subj30}} </th>
        </tr>
    </table>
        <form  action="{{ route('addtable')  }}" method="POST">
            <input type="hidden" name="see" value="{{$tab->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <input type="submit" class="btn btn-lg btn-success col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs  " value="add table" >
        </form>
    </div>
@endforeach
@endsection