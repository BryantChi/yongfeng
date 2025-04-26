<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $visitorLog->id }}</p>
</div>

<!-- Ip Field -->
<div class="col-sm-12">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $visitorLog->ip }}</p>
</div>

<!-- Visit Date Field -->
<div class="col-sm-12">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    <p>{{ $visitorLog->visit_date }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $visitorLog->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $visitorLog->updated_at }}</p>
</div>

