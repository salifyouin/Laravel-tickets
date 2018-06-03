<table class="table table-striped table-bordered table-hovered">
                       <tr>
                       <th>Date creation</th>
                           <th>Messages</th>
                           <th>Priorites</th>
                           <th>Etat</th>
                           <th>Date consultaion</th>
                       </tr>
                       @foreach($tickets as $ticket)
                       <tr>
                           <td>{{$ticket->created_at}}</td>
                           <td>{{$ticket->message}}</td>
                           <td>{{$ticket->priorite->nom}}</td>
                           <td>{{$ticket->etat}}</td>
                           <td>{{$ticket->updated_at}}</td>
                           
                       </tr>
                       @endforeach
                   </table>
                   {{ $tickets->render()}}
                  