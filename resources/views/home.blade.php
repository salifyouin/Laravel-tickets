@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Systeme de gestion des tickets</div>

                <div class="card-body">
                   <table class="table table-striped table-borfered table-hovered">
                       <tr>
                           <th>Messages</th>
                           <th>Priorites</th>
                           <th>Etat</th>
                           @if(Auth::user()->role=='admin')
                           <th>Utilisateur</th>
                           @endif
                           <th>actions</th>
                       </tr>
                       @foreach($tickets as $ticket)
                       <tr>
                           <td>{{$ticket->message}}</td>
                           <td>{{$ticket->priorite->nom}}</td>
                           <td>{{$ticket->etat}}</td>
                           @if(Auth::user()->role=='admin')
                           <td>{{$ticket->user->name}}</td>
                           @endif
                           <td>
                               <a href="{{url('ticket/'.$ticket->id.'/consulter')}}"class="btn btn-info">Consulter</>
                           </td>
                       </tr>
                       @endforeach
                   </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
