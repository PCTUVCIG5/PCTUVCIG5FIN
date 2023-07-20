<div class="table-responsive">
    <table class="table" id="divoces-table">
        <thead>
        <tr>
            <th>Divoces Date</th>
        <th>Divoces Lieu</th>
        <th>Homme Id</th>
        <th>Femme Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($divoces as $divoce)
            <tr>
                <td>{{ $divoce->divoces_date }}</td>
            <td>{{ $divoce->divoces_lieu }}</td>
            <td>{{ $divoce->homme_id }}</td>
            <td>{{ $divoce->femme_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['divoces.destroy', $divoce->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('divoces.show', [$divoce->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('divoces.edit', [$divoce->id]) }}"
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
