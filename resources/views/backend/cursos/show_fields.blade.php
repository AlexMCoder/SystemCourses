<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Nº:') !!}
    <p>{!! $curso->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    <p>{!! $curso->name !!}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'Ícone:') !!}
    <p>{!! $curso->file !!}</p>
</div>

<!-- Descricao Field -->
<div class="form-group">
    {!! Form::label('descricao', 'Descricao:') !!}
    <p>{!! $curso->descricao !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $curso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $curso->updated_at !!}</p>
</div>

