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
                        <th width="15%">
                            Link do video
                        </th>
                        <th width="20%">Título</th>
                        <th width="55%">Descrição</th>
                        <th width="10%">Ações</th>
                        </thead>
                        <tbody>
                        @if (count($videos) == 0)
                        @else
                        @foreach($videos as $video)       
                            <tr>
                                <td width="15%">{!! $video->link !!}</td>
                                <td width="20%">{{ $video->titulo }}</td>
                                <td width="55%" class="description-videos">{{ $video->descricao }}</td>
                                <td width="10%">
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
