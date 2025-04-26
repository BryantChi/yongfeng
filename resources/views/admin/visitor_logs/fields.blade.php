<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    {!! Form::text('visit_date', null, ['class' => 'form-control','id'=>'visit_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#visit_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush