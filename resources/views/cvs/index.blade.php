@extends('layouts.app')
@section('content')
    <div class="container bg-light">
        <div class="row">
            <div class="col-md-12">
            
                   <div>
                       <a href="{{url('cvs/create')}}" class="btn btn-success">Ajouter </a>
                   </div>
                  <table class="table" border="1">
                  
                      <head>
                       
                          <tr>
                              <th>Title</th>
                              <th>Presentation</th>
                              <th>created_at</th>
                              <th>actions</th>
                          </tr>
                      </head>
                      <body>
                        @foreach ($cvx as $cv)
                          <tr>
                              <td>{{$cv->titre}}</td>
                              <td>{{$cv->presentation}}</td>
                              <td>{{$cv->created_at}}</td>
                              <td>
                                  <a href="" class="btn btn-warning">detailles</a>
                                  <a href="" class="btn btn-default">Edite</a>
                                  <a href="" class="btn btn-danger  ">Suppression</a>


                              </td>

                          </tr>
                          @endforeach
                      
                      </body>
                    
                  </table>
                   
                   
                   
            
            </div>
        </div>
    </div>
@endsection