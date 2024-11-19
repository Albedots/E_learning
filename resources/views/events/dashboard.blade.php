@extends("layouts.main")

@section("title", "Dashboard")

@section("content")
<!--Dashboard dos cursos do usuário-->
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus cursos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col">Modulos/Aulas</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td scope="row">{{ $loop->index + 1 }}</td>
                <td><img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}"></td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>
                <p>Módulos: {{ count($event->modules)}}</p>
                <p>Aulas: X</p>
                </td>
                <td><a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"></ion-icon> Editar</a>
                    <form action="/events/{{ $event->id }}" method="post">
                        @csrf
                        @method("DELETE") <!--Diretiva para trocar o methos=post para delete-->
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem nenhum curso, <a href="/events/create">Criar curso?</a></p>
    @endif
</div>
@endsection