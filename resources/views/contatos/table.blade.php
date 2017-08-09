<table class="table table-responsive" id="contatos-table">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($contatos as $contato)
        <tr>
            <td>{!! $contato->nome !!}</td>
            <td>{!! $contato->email !!}</td>
            <td>{!! $contato->mensagem !!}</td>
            <td>
                {!! Form::open(['route' => ['contatos.destroy', $contato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contatos.show', [$contato->id]) !!}" class='btn btn-default btn-xs' title='Visualizar Dados'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contatos.edit', [$contato->id]) !!}" class='btn btn-default btn-xs' title='Editar Contato'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>