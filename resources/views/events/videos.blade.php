@extends("layouts.main")

@section("title", "Criar Curso")

@section("content")

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre a aula</h1>
    <form action="/lessons" method="post">
        @csrf 
        <!--Campo fantasma usado para enviar o moduleId para a action-->
        <input type="hidden" name="moduleId" value="{{ $moduleId }}">
        <div class="form-group">
            <label for="title">Título da Aula:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do módulo" required>
        </div>
        <div class="form-group">
            <label for="title">Descrição da Aula:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição da aula" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Link do vídeo:</label>
            <input type="text" class="form-control" id="title" name="video_url" placeholder="Link do vídeo" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Aula">
    </form>
</div>
@endsection