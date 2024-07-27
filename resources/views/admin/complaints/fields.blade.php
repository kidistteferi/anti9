<!-- Complaint Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('complaint_id', 'Complaint Id:') !!}
    {!! Form::text('complaint_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Complaint Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('complaint_name', 'Complaint Name:') !!}
    {!! Form::text('complaint_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.complaints.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
