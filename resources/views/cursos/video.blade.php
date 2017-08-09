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
                    {!! Form::open(['route' => 'cursos.store', 'files' => true]) !!}

                    <table class="table table-responsive">
                        <thead>
                        <th>
                            Link do video
                        </th>
                        <th>Título</th>
                        <th>Descrição</th>
                        </thead>
                        <tbody>
                        <?php $cont = 0; ?>
                        @if(!count($videos))
                            <tr>
                                <td>
                                    {!! Form::text('link[0][]', null, ['class' => 'form-control']) !!}
                                </td>
                                <td>
                                    {!! Form::text('titulo[0][]', null, ['class' => 'form-control']) !!}
                                </td>
                                <td>
                                    {!! Form::textarea('descricao[0][]') !!}
                                </td>
                                <td>
                                    <a onclick="" class='btn btn-default btn-xs'><i
                                                class="glyphicon glyphicon-plus-sign"></i></a>
                                    <a href="#" class='btn btn-default btn-xs'><i
                                                class="glyphicon glyphicon-remove-sign"></i></a>

                                </td>
                            </tr>
                        @endif
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
