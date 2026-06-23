<div>
    
<form action="{{ route('administrador.adicionar') }}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">


    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">

    <label for="telefone">telefone</label>
    <input type="text" name="telefone" id="telefone">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf">

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">

    <label for="status">Status</label>
    <input type="text" name="status" id="status">


    <button type="submit">Salvar</button>
    @isset($sucesso)
    <h1> {{$sucesso}} </h1>
    @endisset
    @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


</form>

<table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($administradores)
                @foreach($administradores as $administrador)
                    <tr>
                        <td>
                            <h3>{{ $administrador->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->telefone }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->cpf }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->usuario }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->senha }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->status }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td><form action="{{ route('administrador.atualizar', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>