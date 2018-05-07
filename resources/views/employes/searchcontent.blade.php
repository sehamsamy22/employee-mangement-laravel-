@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
    @if(count($employes)>0)
    @foreach($employes as $employe)
 <strong> id:</strong>  {{ $employe->id }}<br>
 <strong> FristName:</strong> {{  $employe->fristname   }}<br>
 <strong> LastName:</strong> {{  $employe->lastname   }}<br>
 <strong> Job: </strong> {{  $employe->job   }}<br>
 <strong> Photo: </strong> {!! Html:: image('image/'.$employe->image,'image',['class'=>'image']) !!}  <br> <br>
 <br>
    @endforeach
    @endif
    </div>
</div>
@endsection