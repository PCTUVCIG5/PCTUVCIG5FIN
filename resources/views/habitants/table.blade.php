<div class="table-responsive">
    <table class="table" id="habitants-table">
        <thead>
        <tr>
        <th>N°</th>
        <th>NOM</th>
        <th>PRENOMS</th>
        <th>DATE DE NAISSANCE</th>
        <th>LIEU DE NAISSANCE</th>
        <th>CIVILITE</th>
        <th>CONTACT</th>
        <th>PHOTO</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($habitants as $habitant)
            <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $habitant->nomHabi }}</td>
            <td>{{ $habitant->prenHabi }}</td>
            <td>{{ $habitant->dateNHabi }}</td>
            <td>{{ $habitant->lieuNHabi }}</td>
            <td>{{ $habitant->sexeHabi }}</td>
            <td>{{ $habitant->telHabi }}</td>
            <td>
                <img class="img-circle img-bordered-sm" src="{{ isset($habitant) ? Storage::url($habitant->image) : '' }}" width="60px" alt="user image">
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['habitants.destroy', $habitant->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('habitants.show', [$habitant->id]) }}" 
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('habitants.edit', [$habitant->id]) }}"
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
    {!! $habitants->render() !!}

</div>
