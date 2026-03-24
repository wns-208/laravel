<h1>Produtos do estoque</h1>
<table border="56">
        <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        </tr> 
        @foreach ($produtos as $produto)
        <tr>
            <td>Id: {{ $produto['id'] }}</td>
            <td>Nome: {{ $produto['nome'] }}</td>
            <td>Preço: {{ $produto['preco'] }}</td>
        </tr>
@endforeach
</table>