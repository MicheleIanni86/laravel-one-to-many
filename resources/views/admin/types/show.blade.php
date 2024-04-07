
@extends('layouts.app')

@section('title', 'Dettaglio Tipologia')

@section('content')
<section>
    
    <div class="container my-4">

        <a href="{{ route('admin.types.index') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-table me-1">
            </i> Torna alla Lista
        </a>


        <h3>Dettaglio Tipologia: <strong class="fs-2">{{ $type->label }}</strong></h3>

        <div class="card mt-4 p-4">

            <h5 class="">Codice Colore:</h5>
            <p><strong>{{ $type->color }}</strong></p>
            <br>
            <h3>Badge:</h3>
            <p><strong class="fs-3">{!! $type->getBadge() !!}</strong></p>

            <h3>Progetti collegati a questa tipologia</h3>
            <table class="table">
                <thead>

                    <th>ID</th>
                    <th>PROJECT</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($type->projects as $project)
                    <tr>

                        
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">
                                <i class="fa-solid fa-eye fa-sm"></i>
                            </a> 

                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
            

    </div>

</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection