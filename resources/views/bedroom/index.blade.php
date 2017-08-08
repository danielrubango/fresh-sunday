@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Chambres disponibles</strong></div>
            </div>

            @foreach($bedrooms as $bedroom)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>{{ $bedroom['code_name'] }}</h2>
                        <p>
                            Petite description de la chambre ...
                        </p>

                        <p>Prix : <strong>{{ $bedroom['bedroom_category']['price'] }}</strong></p>
                    </div>

                    <div class="panel-footer">
                        <a href="{{ route('chambre.reserver', $bedroom['id']) }}" class="btn btn-success">Reserver cette chambre</a>
                    </div>
                </div>
            @endforeach()
        </div>
    </div>
</div>
@endsection
