@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiche Ticket n° {{$ticket->id}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                          <table class="table table-striped">
                              <tr>
                                  <th>Message</th>
                                  <td>{{$ticket->message}}</td>
                              </tr>
                              <tr>
                                  <th>Priorité</th>
                                  <td>{{$ticket->priorite->nom}}</td>
                              </tr>
                              <tr>
                                  <th>Etat</th>
                                  <td>{{$ticket->etat}}</td>
                              </tr>
                              <tr>
                                  <th>Crée le:</th>
                                  <td>{{$ticket->created_at}}</td>
                              </tr>
                              <tr>
                                  <th>Utilisateur:</th>
                                  <td>{{$ticket->user->name}}</td>
                              </tr>
                              <tr>
                              <td>
                              <a href="{{url('ticket/'.$ticket->id.'/traiter')}}"class="btn btn-info">Traiter<a/>
                              </td>
                              </tr>
                          </table>
                          
                        </div>
                        
                    </div>
                    
            </div>
        </div>
       
    </div>
</div>
@endsection