@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Adicionar Vídeos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <form action="{{ route('add.video') }}" method="post" >
                    {{ csrf_field() }}
                    <table class="table table-responsive">
                        <thead>
                        <th>
                            Link do video
                        </th>
                        <th>Título</th>
                        <th>Descrição</th>
                        </thead>
                        <tbody>
                        <input type="hidden" value="{{ $videos->id }}" name="curso_id">
                        
                            <tr>
                                <td>
                                    {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                </td>
                                <td>
                                    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                                </td>
                                <td>
                                    {!! Form::textarea('descricao') !!}
                                </td>
                                <td>
                                    <button type="submit" class='btn btn-success btn-xs button-add-videos'><i
                                                class="glyphicon glyphicon-plus-sign" title="Salvar"></i> Salvar</button><br>
                                    <a href="{!! route('cursos.index') !!}" class='btn btn-danger btn-xs button-add-videos'><i
                                                class="glyphicon glyphicon-remove-sign" title="Cancelar"></i> Cancelar</a>

                                </td>
                            </tr>
                        
                        </tbody>
                    </table>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function addInput($cont) {

        }
    </script>
@endsection
