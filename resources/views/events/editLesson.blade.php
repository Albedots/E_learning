@extends("layouts.main")

@section("title", "Editando: " . $lesson->title)

@section("content")
<!--Formulário de edição de lesson(VideoAula)-->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $lesson->title }}</h1>
    <form action="/lesson/update/{{ $lesson->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")  <!--diretiva para trocar o method do formualrio para PUT-->
        <div class="form-group">
            <label for="title">Nome da Aula:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso" value="{{ $lesson->title }}">
        </div>
        <div class="form-group">
            <label for="description">Descrição da Aula:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do curso">{{ $lesson->description }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar aula">
    </form>
</div>
@endsection