@extends("layouts.main")

@section("title", $event->title)

@section("content")
<!--Mostra o curso e modulos-->
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title}}" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <!--Campos que mostram dados como: Dono do Curso e se ele é ativo-->
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon> X participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Curso criado por: {{ $eventOwner["name"]}}</p>
            <!--No campo abaixo eu usei um if terniario para retornar o Estado de atividade do curso-->
            <p><ion-icon name="alert-circle-outline"></ion-icon>Atividade do curso: {{$event->activity == 1 ? "Ativo" : "Inativo"}}</p>
            <a href="#" class="btn btn-primary" id="event-submit">Entrar no curso</a>
            <a href="/modules/create/{{ $event->id }}" class="btn btn-primary" id="event-submit">Criar módulo</a>
        </div>
        <div class="module-container">
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Curso:</h3>
            <p class="event-description"> {{ $event->description }}</p>
        </div>
            <h1>Lista de Módulos</h1>
            <div class="module-list">
                <ul>                            
                    @foreach($modules as $module)
                    <li><a href="/module/lesson/{{ $module->id }}">Modulo {{$loop->index + 1 }}: {{ $module->title }}</a>
                        <a href="/module/edit/{{ $module->id }}" class="btn btn-primary">Editar</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection