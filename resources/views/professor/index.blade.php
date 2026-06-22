<div>
    <form action="{{ route('professor.add')}}" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($professores)
    <td>
            @foreach($professores as $professor)
                <h3>{{ $professor->nome }}</h3>
                <h3>{{ $professor->email }}</h3>
                <h3>{{ $professor->telefone }}</h3>
                </td>
                        <td>
                            <form action="{{ route('aluno.remove', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('aluno.atualizar', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
