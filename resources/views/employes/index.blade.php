@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

                <h1>Employee Mangement System</h1>
            </div>
            <div class="pull-right">

            <form class="navbar-form navbar-left" role="search" method="GET" action="{{  url("/searchcontent") }}" >
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="title">
                        <div class="input-group-btn">
                    <button type="submit" class="btn btn-default" > <i class="glyphicon glyphicon-search"></i></button>
                    </div>
                    </div>

             </form>


                <a class="btn btn-success" href="{{ route('employes.create') }}"> Create New Member</a>
            </div>
        </div>
    </div>


   



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
       
    @endif
    <br> <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>FristName</th>
            <th>LastName</th>
            <th>Job</th>
              <th>Photo</th>

            <th width="280px">Operation</th>
        </tr>
    @foreach ($employes as $employe)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $employe->fristname}}</td>
        <td>{{ $employe->lastname}}</td>
        <td>{{ $employe->job}}</td>
        <td>{!! Html:: image('image/'.$employe->image,'image',['class'=>'image']) !!}</td>
        <td>
            <a class="btn btn-info" href="{{ route('employes.show',$employe->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('employes.edit',$employe->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['employes.destroy', $employe->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $employes->render() !!}
@endsection
