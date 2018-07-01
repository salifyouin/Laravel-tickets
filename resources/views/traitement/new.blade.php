@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Traitement du Ticket n° {{$ticket->id}} crée par {{$ticket->user->name}}, le {{$ticket->created_at}}</div>
                <div class="card-body">
                <div class="card-body">
                        Sujet du ticket : {{ $ticket->message }}
                      </div>
                    
                      <br/>
                        {!! Form::open(['method'=>'POST','url'=>'traitement/enregistrer','class'=>'form-horizontal']) !!}
                        {!! Form::hidden('ticket_id', $ticket->id) !!}
                        <div class="form-group {{$errors->has('description')? 'has-error':''}}">
                        {!! Form::Label('description','Description') !!}
                        {!! Form::textarea('description',null,['class'=>'form-control','require'=>'require']) !!}
                        <small class="text-danger">{{$errors->first('description')}}</small>
                        </div>
                        <div class="form-group{{ $errors->has('duree') ? ' has-error' : '' }}">
                                    {!! Form::label('duree', 'Durée(Chiffres en minutes)') !!}
                                    {!! Form::text('duree', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('duree') }}</small>
                                </div>
                                <div class="form-group{{ $errors->has('etat_ticket') ? ' has-error' : '' }}">
                                        {!! Form::label('etat_ticket', 'Input label') !!}
                                        {!! Form::select('etat_ticket', $etats, null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('etat_ticket') }}</small>
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