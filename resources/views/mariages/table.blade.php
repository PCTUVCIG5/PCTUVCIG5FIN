<div class="table-responsive">
    <table class="table" id="mariages-table">
        <thead>
        <tr>
            <th>Mariage Date</th>
        <th>Mariage Lieu</th>
        <th>Homme Id</th>
        <th>Femme Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mariages as $mariage)
            <tr>
                <td>{{ $mariage->mariage_date }}</td>
            <td>{{ $mariage->mariage_lieu }}</td>
            <td>{{ $mariage->homme_id }}</td>
            <td>{{ $mariage->femme_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mariages.destroy', $mariage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mariages.show', [$mariage->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mariages.edit', [$mariage->id]) }}"
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
