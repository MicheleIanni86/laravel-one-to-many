@extends('layouts.app')

@section('title', 'Lista Tipologie')

@section('content')
<section>
    <div class="container my-4">

        <a href="{{ route('admin.types.create') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-plus">
            </i> Nuova Tipologia
        </a>

        <h1>Lista Tipologie</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>ETICHETTA</th>
                <th>COLORE</th>
                <th>BADGE</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @forelse ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->label }}</td>
                    <td>{{ $type->color }}</td>
                    <td>{!! $type->getBadge() !!}</td>
                    <td>
                        {{-- <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">
                            <i class="fa-solid fa-eye fa-sm"></i>
                        </a> 
                    </td>
                    <td>

                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">
                            <i class="fa-solid fa-pencil fa-sm"></i>
                        </a> 
                    </td>
                        <td>

                            <a href="{{ route('admin.projects.destroy', $project) }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-project-{{ $project->id }}-modal">
                                <i class="fa-solid fa-trash fa-sm"></i>
                            </a>  --}}
                        </td>
                    
                </tr>
                    
                @empty
                    <tr>
                        <td colspan="100%">
                            <i>Nessun risultato trovato</i>
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection