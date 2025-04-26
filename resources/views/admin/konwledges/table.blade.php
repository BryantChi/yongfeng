<div class="card-body p-0">
    <div class="table-responsive p-3">
        <table class="table" id="konwledges-table">
            <thead>
                <tr>
                    <th>標題</th>
                    <th>分類</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($konwledges as $konwledge)
                    <tr>
                        <td>{{ $konwledge->title }}</td>
                        <td>{{ \App\Models\Classification::find($konwledge->classification_id)->name }}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['admin.konwledges.destroy', $konwledge->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {{-- <a href="{{ route('admin.konwledges.show', [$konwledge->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a> --}}
                                <a href="{{ route('admin.konwledges.edit', [$konwledge->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                    'type' => 'button',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return check(this)",
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $konwledges])
        </div>
    </div> --}}
</div>
