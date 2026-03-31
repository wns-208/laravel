@foreach($alunos as $aluno)
<h3>Nome: {{ $aluno->nome }}</h3>
<h3>Nome: {{ $aluno->telefone }}</h3>
<h3>Nome: {{ $aluno->email }}</h3>
<hr>
@endforeach