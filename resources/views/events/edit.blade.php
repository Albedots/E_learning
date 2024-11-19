@extends("layouts.main")

@section("title", "Editando: " . $event->title)

@section("content")
<!--Formulário de edição de curso-->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")  <!--Diretiva para trocar o method para PUT-->
        <div class="form-group">
            <label for="image">Imagem do Curso:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Nome do Curso:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label for="activity">O curso está ativo?</label>
            <select name="activity" id="activity" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->activity == 1 ? "selected='selected'" : ""}}>Sim</option> <!--if terniario (no segundo valor, ja que o primeiro vem por padrão), caso o segundo valor for verdadeiro é selected-->
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição do Curso:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do curso">{{ $event->description }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar curso">
    </form>
</div>
@endsection