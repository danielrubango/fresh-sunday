@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajouter une chmabre</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('chambre.ajouter') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="bedroom" class="col-md-4 control-label">Chambre</label>

                                <div class="col-md-6">
                                    <input id="bedroo" type="text" class="form-control" name="bedroom" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date_in" class="col-md-4 control-label">Date d'entree</label>

                                <div class="col-md-6">
                                    <input id="date_in" type="date" class="form-control" name="date_in" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date_out" class="col-md-4 control-label">Date de sortie</label>

                                <div class="col-md-6">
                                    <input id="date_out" type="date" class="form-control" name="date_out" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
