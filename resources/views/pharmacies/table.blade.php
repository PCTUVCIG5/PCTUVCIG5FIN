<div class="table-responsive">
    <table class="table" id="pharmacies-table">
        <thead>
        <tr>
            <th>Description</th>
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th>Typephar</th>
        <th>Statutphar</th>
        <th>Gardephar</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pharmacies as $pharmacie)
            <tr>
                <td>{{ $pharmacie->description }}</td>
            <td>{{ $pharmacie->image1 }}</td>
            <td>{{ $pharmacie->image2 }}</td>
            <td>{{ $pharmacie->image3 }}</td>
            <td>{{ $pharmacie->typePhar }}</td>
            <td>{{ $pharmacie->statutPhar }}</td>
            <td>{{ $pharmacie->gardePhar }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pharmacies.destroy', $pharmacie->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pharmacies.show', [$pharmacie->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pharmacies.edit', [$pharmacie->id]) }}"
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
