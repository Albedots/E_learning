@extends("layouts.main")

@section("content")
<!--Lista de video com base no modulo do curso-->
<h1>MÓDULO: {{ $module->title }}</h1>
<div class="module-container">
    <h1>Lista de Vídeos</h1> 
    <a href="/lessons/create/{{ $module->id }}" class="btn btn-primary" id="create-lesson">Criar aula</a>

    <div class="module-list">
        <ul>
            @foreach($lessons as $lesson)   <!--Loop para mostrar todas as lessons do modulo-->
            <li><a href="/lesson/{{ $lesson->id }}">Aula {{ $loop->index + 1 }}: {{ $lesson->title }}</a>
                <a href="/lesson/edit/{{ $lesson->id }}" class="btn btn-primary">Editar</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection