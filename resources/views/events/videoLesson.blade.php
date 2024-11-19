@extends("layouts.main")

@section("content")
<!--Conteúdo das aulas-->
<div class="module-container">
    <h1>Aula: {{ $lesson->title }}</h1>
    <div>
        <ul>
            <li>Link da aula: <a href="{{ $lesson->video_url }}">{{ $lesson->video_url }}</a></li>
        </ul>
        <ul>
            <li>Descrição: {{ $lesson->description}}</li>
        </ul>
    </div>
</div>

@endsection