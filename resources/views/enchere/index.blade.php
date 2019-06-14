@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-head">Enchere</div>
        <div class="card-body">
            <img class="card-img-top col-2"
                 src="{{ url('thumbs/' . $image_enchere->name) }}"
                 alt="image">
            <div>
                <p> Prix de base {{ $image_enchere->prix_base }} € <br>
                    @if($encheres)
                        Dernière enchère {{ $encheres->montant_enchere }} € <br>
                        {{ $encheres->email_enchereur }}
                    @endif
                </p>
                <p>Date et heure de fin : {{ $image_enchere->date_fin_enchere }}</p>

            </div>

        </div>
        <div class="card-footer">
            <a href="enchere/new" class="button">Sur-enchérir</a>
        </div>
    </div>
@endsection
