@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Vídeo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($video, ['route' => ['save.video', $video->id], 'method' => 'patch']) !!}

                        @include('cursos.videos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection