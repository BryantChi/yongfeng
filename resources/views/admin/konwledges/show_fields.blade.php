<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $konwledge->id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $konwledge->title }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $konwledge->content }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $konwledge->image }}</p>
</div>

<!-- Classification Id Field -->
<div class="col-sm-12">
    {!! Form::label('classification_id', 'Classification Id:') !!}
    <p>{{ $konwledge->classification_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $konwledge->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $konwledge->updated_at }}</p>
</div>

