@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <a href="#" class="btn btn-success">Demander une reservation</a>
                <a href="#" class="btn btn-danger">Annuler une reservation</a>

                <hr>

                <div class="panel panel-default">
                    <div class="panel-body">
                        Aucune reservation ...
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
