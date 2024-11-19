@extends("layouts.main")

@section("title", "Criar Curso")

@section("content")
<!--Formulário de criação de curso-->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu curso</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Curso:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Nome do Curso:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso">
        </div>
        <div class="form-group">
            <label for="activity">O curso está ativo?</label>
            <select name="activity" id="activity" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição do Curso:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do curso"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>
</div>
@endsection