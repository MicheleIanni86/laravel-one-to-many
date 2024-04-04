
@extends('layouts.app')

@section('title', 'Crea nuovo Project')

@section('content')
<section>
    
    <div class="container my-4">

        <a href="{{ route('admin.projects.index') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-table me-1">
            </i> Torna alla Lista
        </a>


        <h1>Dettaglio Project</h1>

        <p><strong>{{ $project['title'] }}</strong></p>
        <p>{{ $project['content'] }}</p>


    </div>

</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection