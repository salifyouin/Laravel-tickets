@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Fiche Ticket n° {{$ticket->id}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-2">
                           <table class="ui red table">
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
                          </table>
                          <table class="ui blue table">
                           <tr>
                             <td>Description</td>
                             <td>Duree</td>
                             <td>Technicien</td>
                             <td>Date</td>
                           </tr>
                           @foreach ($traitements as $traitement)
                             <tr>
                               <td>{{ $traitement->description }}</td>
                               <td>{{ $traitement->duree }} min</td>
                               <td>{{ $traitement->technicien->name }}</td>
                               <td>{{ $traitement->created_at }}</td>
                             </tr>
                           @endforeach

                         </table>
                         @if($ticket->etat!='traité')
                         <a href="{{ url('ticket/'.$ticket->id.'/traiter')}}" class="btn btn-primary">Traiter</a>
                          @endif
                        </div>
                        
                    </div>
                    
            </div>
        </div>
       
    </div>
</div>
@endsection