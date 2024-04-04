@extends('layouts.app')

@section('title', 'Lista Projects')

@section('content')
<section>
    <div class="container my-4">

        <a href="{{ route('admin.projects.create') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-plus">
            </i> Nuovo progetto
        </a>


        <h1>Lista Projects</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>TITOLO</th>
                <th>SLUG</th>
                <th>ESTRATTO</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td>{{ $project['id'] }}</td>
                    <td>{{ $project['title'] }}</td>
                    <td>{{ $project['slug'] }}</td>
                    <td>{{ $project['content'] }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">
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
                        </a> 
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
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
</section>
@endsection

@section('modal')
@foreach ($projects as $project)
<div class="modal fade" id="delete-project-{{ $project->id }}-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina Elemento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Stai per cancellare l'elemento <strong>{{ $project->title }}</strong> !
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non Cancellare!</button>

          <form action="{{ route('admin.projects.show', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Si Cancella!</button>
           </form>

        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection  

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection