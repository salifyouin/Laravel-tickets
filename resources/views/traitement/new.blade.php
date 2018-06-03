@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Traitement du Ticket n° {{$ticket->id}} crée par {{$ticket->user->name}}, le {{$ticket->created_at}}</div>
                <div class="card-body">
                    
                        {!! Form::open(['method'=>'POST','url'=>'traitement/enregistrer','class'=>'form-horizontal']) !!}
                        <div class="form-group {{$errors->has('description')? 'has-error':''}}">
                        {!! Form::Label('description','Description') !!}
                        {!! Form::textarea('description',null,['class'=>'form-control','require'=>'require']) !!}
                        <small class="text-danger">{{$errors->first('description')}}</small>
                        </div>
                        <div class="btn-group">
                        {!! Form::reset("Annuler",['class'=>'btn btn-warning']) !!}
                        </div>
                        <div class="btn-group">
                        {!! Form::submit("enregistrer",['class'=>'btn btn-success']) !!}
                       
                        </div>
                          {!! Form::close() !!}
                       
                    </div> 
            </div>
        </div>
       
    </div>
</div>
@endsection