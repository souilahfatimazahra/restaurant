@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @include('layouts.sidebar')
                            </div>
                            <div class="col-md-8">
                             
                                    <h3 class="text-secondary border-bottom mb-3 p-2">
                                        <i class="fas fa-th-list"></i>Modifier le Sérveure {{$servant->name}}
                                    </h3>                                 
                              
                                <form action="{{route("servants.update",$servant->id)}}" method="post">
                                   @csrf
                                   @method("PUT")
                                   <div class="form-group">
                                     <input type="text" name="name" id="name"
                                     class="form-control"
                                     placeholder="Nom et Prénom"
                                     value="{{$servant->name}}"
                                     >
                                   </div>
                                   <div class="form-group">
                                    <input type="text" name="address" id="address"
                                    class="form-control"
                                    placeholder="Address"
                                    value="{{$servant->address}}"
                                    >
                                  </div>
                                   <div class="form-group">
                                    <button class="btn btn-primary">
                                        valider
                                    </button>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection