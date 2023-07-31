<div class="table-responsive">
    <table class="table" id="amenagements-table">
        <thead>
        <tr>
            <!-- <th>photo</th> -->
            <th>NOM</th>
            <th>PRENOMS</th>
            <th>SEXE</th>
            <th>CONTACT</th>
            <th>PROVENANCE</th>
            <th>DATE D'ARRIVER</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($amenagements as $amenagement)
            <tr>
                <td><img class="img-circle img-bordered-sm" src="{{ isset($amenagement) ? Storage::url($amenagement->habitant->image) : '' }}" width="50px" alt="user image"></td>
                <td>{{ $amenagement->habitant->nomHabi }}</td>
                <td>{{ $amenagement->habitant->prenHabi }}</td>
                <td>{{ $amenagement->habitant->sexeHabi }}</td>
                <td>{{ $amenagement->habitant->telHabi }}</td>
                <td>{{ $amenagement->Qtier }}</td>
                <td>{{ $amenagement->updated_at }}</td>
                <td width="120">
                    <!-- {!! Form::open(['route' => ['amenagements.destroy', $amenagement->id], 'method' => 'delete']) !!}
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
                <td> -->
                <a href="{{ url('change-status-amenagement/'.$amenagement->id) }}" onclick="return confirm('Etre vous sûr que {{ $amenagement->habitant->nomHabi }} {{ $amenagement->habitant->prenHabi }} demenage ?')" class="btn btn-sm btn-danger">Demenage</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
