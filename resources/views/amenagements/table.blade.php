<div class="table-responsive">
    <table class="table" id="amenagements-table">
        <thead>
        <tr>
            <th>Dateame</th>
        <th>Ancienqtier</th>
        <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($amenagements as $amenagement)
            <tr>
                <td>{{ $amenagement->dateAme }}</td>
            <td>{{ $amenagement->ancienQtier }}</td>
            <td>{{ $amenagement->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['amenagements.destroy', $amenagement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('amenagements.show', [$amenagement->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('amenagements.edit', [$amenagement->id]) }}"
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
