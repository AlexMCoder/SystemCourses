<table class="table table-responsive" id="cursos-table">
    <thead>
        <th>Nome</th>
        <th>Ícone</th>
        <th>Descrição</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($cursos as $curso)
        <tr>
            <td>{!! $curso->name !!}</td>
            <td><img src="/img/cursos/{!! $curso->file !!}" height="60px"/></td>
            <td>{!! $curso->descricao !!}</td>
            <td>
                {!! Form::open(['route' => ['cursos.destroy', $curso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cursos.show', [$curso->id]) !!}" class='btn btn-default btn-xs button-add-videos' title='Visualizar Dados'><i class="glyphicon glyphicon-eye-open"></i> Visualizar Dados</a><br>
                    <a href="{!! route('cursos.edit', [$curso->id]) !!}" class='btn btn-default btn-xs button-add-videos' title='Editar Curso'><i class="glyphicon glyphicon-edit"></i> Editar Curso</a><br>
                    <a href="{!! route('enviar.video', [$curso->id]) !!}" class='btn btn-default btn-xs button-add-videos' title='Adicionar vídeo aulas'><i class="glyphicon glyphicon-facetime-video"></i> Adicionar vídeo aulas</a><br>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir Curso', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs button-trash-videos', 'onclick' => "return confirm('Tem certeza que deseja deletar este curso?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>