<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $caseInfo->id }}</p>
</div>

<!-- Occupation Field -->
<div class="col-sm-12">
    {!! Form::label('occupation', 'Occupation:') !!}
    <p>{{ $caseInfo->occupation }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $caseInfo->name }}</p>
</div>

<!-- Case Title Field -->
<div class="col-sm-12">
    {!! Form::label('case_title', 'Case Title:') !!}
    <p>{{ $caseInfo->case_title }}</p>
</div>

<!-- Case Content Field -->
<div class="col-sm-12">
    {!! Form::label('case_content', 'Case Content:') !!}
    <p>{{ $caseInfo->case_content }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $caseInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $caseInfo->updated_at }}</p>
</div>

