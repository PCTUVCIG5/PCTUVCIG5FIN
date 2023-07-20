<div class="table-responsive">
    <table class="table" id="refMetiers-table">
        <thead>
        <tr>
            <th>Metier Id</th>
        <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($refMetiers as $refMetier)
            <tr>
                <td>{{ $refMetier->metier_id }}</td>
            <td>{{ $refMetier->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['refMetiers.destroy', $refMetier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('refMetiers.show', [$refMetier->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('refMetiers.edit', [$refMetier->id]) }}"
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
