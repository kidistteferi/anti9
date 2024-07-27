<!-- C Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('c_id', 'C Id:') !!}
    {!! Form::text('c_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.messages.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
