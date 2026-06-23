<div>
    <form action="{{ route('professor.adicionar') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}">
        
        <button type="submit">Salvar</button>

    @isset($sucess)
    <h1> {{$sucess}} </h1>
    @endisset
    @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
</form>

@isset($professores)
            @foreach($professores as $professor)
                    <h3>{{ $professor->nome  }}</h3>
                    <h3>{{ $professor->email  }}</h3>
                    <h3>{{ $professor->telefone  }}</h3>
            @endforeach
@endisset


<table border="1">
        <tr>
            <td>Nome do Professor</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($professor)
                @foreach($professor as $professor)
                    <tr>
                        <td>
                            <h3>{{ $professor->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $professor->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $professor->telefone }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
