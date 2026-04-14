<form action="{{ route('aluno.adicionar') }}" method="post">
    @csrf
    <label for="Nome"></label>
    <input type="text" name="nome" id="nome">

    <label for="email">E-mail</label>
    <input type="email" nome="email" id="email">

    <button type="submit">Salvar</button>
    @isset($sucesso)
            {{ $sucesso }}
    @endisset
</form>