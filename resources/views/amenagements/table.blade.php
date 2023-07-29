<div class="table-responsive">
    <table class="table" id="amenagements-table">
        <thead>
        <tr>
        <th>PHOTO</th>
        <th>NOM</th>
        <th>PRENOMS</th>
        <th>CIVILITE</th>
        <th>CONTACT</th>   
        <th>DATE D'ARRIVEE</th>
        <th>ANCIEN QUARTIER</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($amenagements as $amenagement)
            <tr>
            <td><img src="/images/{{ $amenagement->habitant->image }}" width="100px"></td>
            <td>{{ $amenagement->habitant->nomHabi }}</td>
            <td>{{ $amenagement->habitant->prenHabi }}</td>
            <td>{{ $amenagement->habitant->sexeHabi }}</td>
            <td>{{ $amenagement->habitant->telHabi }}</td>
            <td>{{ $amenagement->ancienQtier }}</td>
            <td>{{ $amenagement->dateAme }}</td>
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
