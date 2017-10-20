<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome do Curso:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'Ícone do Curso:') !!}
    {!! Form::file('file') !!}
</div>
<div class="clearfix"></div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cursos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
