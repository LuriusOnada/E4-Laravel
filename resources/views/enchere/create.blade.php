@extends('layouts.app')

@section('content')
    <div class="card">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <label for="montant">Montant</label>
            <input id="montant" name="montant">
            <label for="email">Email</label>
            <input id="email" name="email">

            <button type="submit">Valider</button>
        </form>
    </div>
@endsection
