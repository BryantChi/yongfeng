<div class="table-responsive">
    <table class="table" id="visitorLogs-table">
        <thead>
        <tr>
            <th>Ip</th>
        <th>Visit Date</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visitorLogs as $visitorLog)
            <tr>
                <td>{{ $visitorLog->ip }}</td>
            <td>{{ $visitorLog->visit_date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.visitorLogs.destroy', $visitorLog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.visitorLogs.show', [$visitorLog->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.visitorLogs.edit', [$visitorLog->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
