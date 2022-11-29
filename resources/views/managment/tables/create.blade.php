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
                                        <i class="fas fa-th-list"></i>Ajouter un tables
                                    </h3>                                 
                              
                                <form action="{{route("tables.store")}}" method="post">
                                   @csrf
                                   <div class="form-group">
                                     <input type="text" name="name" id="title"
                                     class="form-control"
                                     placeholder="Nom"
                                     >
                                   </div>
                                   <div class="form-group">
                                    <select name="status" id="form-control">
                                        <option value="" selected disabled>Disponible</option>
                                        <option value="1">oui</option>
                                        <option value="0">Nom</option>
                                    </select>
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