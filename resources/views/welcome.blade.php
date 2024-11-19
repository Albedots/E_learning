@extends("layouts.main")

@section("title", "Videos")


@section('content')
<!--página principal do site-->
<section id="search-container" class="col-md-12">
    <h1>Busque um curso</h1>
    <form action="/" method="get">
        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar...">
    </form>
</section>
<section id="events-container" class="col-md-12">   
    @if($search)
    <h2>Resultados encontrados: {{ $search }}</h2>
    @else
    <h2>Veja todos os cursos:</h2>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)     <!--Cards com os cursos cadastrados-->
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-modulos">{{ count($event->modules) }} modulos</p>
                <p class="card-aulas">x aulas</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Entrar</a> <!--aqui no href chamamos o elemento pelo id, se for o primeiro elemento id=1, se for o segundo id=2-->
            </div>
        </div>
        @endforeach
            <!--Verifica se existe algum curso no banco e se foi pesquisado alguma coisa-->
        @if(count($events) == 0 && $search)
        <p>Não foi possível encontrar nenhum curso chamado: "{{ $search }}"</p> <a href="/" id="voltar">Ver todos!</a>
        @elseif(count($events) == 0)
        <p>Não há cursos disponíveis!</p>
        @endif
    </div>
</section>

@endsection