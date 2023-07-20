<div class="table-responsive">
    <table class="table" id="centreSantes-table">
        <thead>
        <tr>
            <th>Description</th>
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th>Typecent</th>
        <th>Statutcent</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($centreSantes as $centreSante)
            <tr>
                <td>{{ $centreSante->description }}</td>
            <td>{{ $centreSante->image1 }}</td>
            <td>{{ $centreSante->image2 }}</td>
            <td>{{ $centreSante->image3 }}</td>
            <td>{{ $centreSante->typeCent }}</td>
            <td>{{ $centreSante->statutCent }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['centreSantes.destroy', $centreSante->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('centreSantes.show', [$centreSante->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('centreSantes.edit', [$centreSante->id]) }}"
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
