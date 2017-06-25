<table class="table table-responsive" id="professorUsers-table">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($professorUsers as $professorUser)
        <tr>
            <td>{!! $professorUser->id !!}</td>
            <td>{!! $professorUser->name !!}</td>
            <td>{!! $professorUser->email !!}</td>
            <td>
                {!! Form::open(['route' => ['professorUsers.destroy', $professorUser->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('professorUsers.show', [$professorUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('professorUsers.edit', [$professorUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>