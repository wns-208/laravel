<div>
    
<form action="{{ route('componente.adicionar') }}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">


    <label for="hora_inicio">hora inicio</label>
    <input type="hora_inicio" name="hora_inicio" id="hora_inicio">

    <label for="hora_fim">hora fim</label>
    <input type="hora_fim" name="hora_fim" id="hora_fim">

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

        @isset($componente)
                @foreach($componente as $componente)
                    <tr>
                        <td>
                            <h3>{{ $componente->nome }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form> 
                        </td>
                        <td>
                        <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset



</div>