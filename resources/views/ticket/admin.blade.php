<div class="card border-info mb-3">
    <div class="card-header text-white bg-info mb-3">Statistiques</div>
        <div class="card-body">
        <table class="table table-bordered">
                       <tr>
                           <th>Total des tickets :  <span class="badge badge-info">{{ $satatistiques['total']}}</span></th>

                           <th>Total des utilisateurs :  <span class="badge badge-info"> {{\App\User::All()->count()}} </span></th>
                           
                       </tr>
                      <tr>
                           <td>
                           <table class="table table-bordered table-striped">
                           <tr>
                           <th colspan="2">Etats</th>
                           </tr>
                             <tr>
                              <th>Creation</th>
                              <td><span class="badge badge-info">{{ $satatistiques['creation']}}</span></td>
                             </tr>
                             <tr>
                              <th>En cours</th>
                              <td><span class="badge badge-warning">{{ $satatistiques['encours']}}</span></td>
                             </tr>
                             <tr>
                              <th>Réalisé</th>
                              <td><span class="badge badge-success">{{ $satatistiques['realisee']}}</span></td>
                             </tr>
                            
                           </table>
                           </td>
                           <td>
                           <table class="table table-bordered table-striped">
                           <tr>
                              <th colspan="2">Priorites</th>
                           </tr>
                            @foreach($priorites as $priorites)
                           <tr>
                             <td>{{$priorites->nom}}</td>
                             <td><span class="badge badge-secondary">{{$priorites->tickets->count()}}</span></td>
                           </tr>
                             @endforeach
                           </table>
                           </td>
                           

                       </tr>
                   </table>
        </div>
</div>

<div class="card">
    <div class="card-header text-white bg-success mb-3">Liste des tickets</div>
        <div class="card-body">
        <table class="table table-striped table-bordered table-hovered">
                       <tr>
                          
                           <th>Priorites</th>
                           <th>Etat</th>
                           <th>Utilisateur</th>
                           <th>actions</th>
                       </tr>
                       @foreach($tickets as $ticket)
                       <tr>
                           <td>{{$ticket->priorite->nom}}</td>
                           <td>{{$ticket->etat}}</td>
                           <td>{{$ticket->user->name}}</td>
                           <td>
                               <a href="{{url('ticket/'.$ticket->id.'/consulter')}}"class="btn btn-info">Consulter</>
                           </td>
                       </tr>
                       @endforeach
                   </table>
                  {{ $tickets->render()}}
        </div>
</div>


