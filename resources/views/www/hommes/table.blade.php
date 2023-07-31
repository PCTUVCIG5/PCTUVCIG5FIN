<div class="table-responsive">
    <table class="table" id="hommes-table">
        <thead>
        <tr>
            <th>Nomhomm</th>
        <th>Prenhomm</th>
        <th>Datenhomm</th>
        <th>Lieunhomm</th>
        <th>Sexehomm</th>
        <th>Telhomm</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hommes as $homme)
            <tr>
                <td>{{ $homme->nomHomm }}</td>
            <td>{{ $homme->prenHomm }}</td>
            <td>{{ $homme->dateNHomm }}</td>
            <td>{{ $homme->lieuNHomm }}</td>
            <td>{{ $homme->sexeHomm }}</td>
            <td>{{ $homme->telHomm }}</td>
            <td>{{ $homme->image }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hommes.destroy', $homme->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hommes.show', [$homme->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hommes.edit', [$homme->id]) }}"
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
