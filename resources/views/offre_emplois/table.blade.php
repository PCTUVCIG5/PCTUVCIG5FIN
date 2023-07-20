<div class="table-responsive">
    <table class="table" id="offreEmplois-table">
        <thead>
        <tr>
            <th>Descriptionofr</th>
        <th>Datedebutofr</th>
        <th>Datefinofr</th>
        <th>Entrepriseofr</th>
        <th>Statutofr</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($offreEmplois as $offreEmploi)
            <tr>
                <td>{{ $offreEmploi->descriptionOfr }}</td>
            <td>{{ $offreEmploi->dateDebutOfr }}</td>
            <td>{{ $offreEmploi->dateFinOfr }}</td>
            <td>{{ $offreEmploi->entrepriseOfr }}</td>
            <td>{{ $offreEmploi->statutOfr }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['offreEmplois.destroy', $offreEmploi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('offreEmplois.show', [$offreEmploi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('offreEmplois.edit', [$offreEmploi->id]) }}"
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
