<div class="table-responsive">
    <table class="table" id="femmes-table">
        <thead>
        <tr>
            <th>Nomfemm</th>
        <th>Prenfemm</th>
        <th>Datenfemm</th>
        <th>Lieunfemm</th>
        <th>Sexefemm</th>
        <th>Telfemm</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($femmes as $femme)
            <tr>
                <td>{{ $femme->nomFemm }}</td>
            <td>{{ $femme->prenFemm }}</td>
            <td>{{ $femme->dateNFemm }}</td>
            <td>{{ $femme->lieuNFemm }}</td>
            <td>{{ $femme->sexeFemm }}</td>
            <td>{{ $femme->telFemm }}</td>
            <td>{{ $femme->image }}</td>
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
