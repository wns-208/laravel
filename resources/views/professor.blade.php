@foreach($professores as $professor)
<h3>Nome: {{ $professor->nome }}</h3>
<h3>telefone: {{ $professor->telefone }}</h3>
<hr>
@endforeach
