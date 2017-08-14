@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Listar Vídeos
        </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -30px;margin-bottom: 5px" href="{!! route('create.video', ['code' => $code]) !!}">Cadastrar Video</a>
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <table class="table table-responsive">
                        <thead>
                        <th>
                            Link do video
                        </th>
                        <th>Título</th>
                        <th>Descrição</th>
                        </thead>
                        <tbody>
                        @if (count($videos) == 0)
                        @else
                        @foreach($videos as $video)       
                            <tr>
                                <td>{!! $video->link !!}</td>
                                <td>{{ $video->titulo }}</td>
                                <td>{{ $video->descricao }}</td>
                                <td>
                                    <button type="submit" class='btn btn-default btn-xs'><i
                                                class="glyphicon glyphicon-plus-sign"></i></button>
                                    <a href="#" class='btn btn-default btn-xs'><i
                                                class="glyphicon glyphicon-remove-sign"></i></a>

                                </td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
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
