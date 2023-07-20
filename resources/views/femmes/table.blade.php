<div class="table-responsive">
    <table class="table" id="femmes-table">
        <thead>
        <tr>
            <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($femmes as $femme)
            <tr>
                <td>{{ $femme->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['femmes.destroy', $femme->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('femmes.show', [$femme->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('femmes.edit', [$femme->id]) }}"
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
