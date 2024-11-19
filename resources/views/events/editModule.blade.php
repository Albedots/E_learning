@extends("layouts.main")

@section("title", "Editando: " . $lesson->title)

@section("content")
<!--Formulário de edição de módulo-->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $module->title }}</h1>
    <form action="/lesson/edit/{{ $lesson->id }}" method="post">
        @csrf
        @method("PUT")  <!--diretiva method para trocar o method do formulario para PUT-->
        <div class="form-group">
            <label for="title">Nome da aula:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do módulo" value="{{ $lesson->title }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar módulo">
    </form>
</div>
@endsection