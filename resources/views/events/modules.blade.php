@extends("layouts.main")

@section("title", "Criar Curso")

@section("content")
<!--formulario para cadastrar modulo-->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o módulo</h1>
    <form action="/modules" method="post">
        @csrf
        <!--campo fantasma para enviar o valor de eventId para a action do formulario-->
        <input type="hidden" name="eventId" value="{{ $eventId }}">
        <div class="form-group">
            <label for="title">título do módulo:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do módulo" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>
</div>
@endsection