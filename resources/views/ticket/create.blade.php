@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creation de nouveau ticket</div>

                <div class="card-body">
                    
                          
                        {!! Form::open(['method'=>'POST','url'=>'ticket/enregistrer','class'=>'form-horizontal']) !!}

                        <div class="form-group {{$errors->has('message')? 'has-error':''}}">
                        {!! Form::Label('Message','Votre message') !!}
                        {!! Form::textarea('message',null,['class'=>'form-control','require'=>'require']) !!}
                        <small class="text-danger">{{$errors->first('message')}}</small>
                        </div>
                        <div class="form-group {{$errors->has('priorite_id')? 'has-error':''}}">
                        {!! Form::Label('priorite_id','Priorité') !!}
                        {!! Form::select('priorite_id',$priorites,null,['class'=>'form-control','require'=>'require']) !!}
                        <small class="text-danger">{{$errors->first('priorite_id')}}</small>
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
@endsection