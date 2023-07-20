<div class="table-responsive">
    <table class="table" id="actualites-table">
        <thead>
        <tr>
            <th>Description</th>
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th>Typeactu</th>
        <th>Statutactu</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actualites as $actualite)
            <tr>
                <td>{{ $actualite->description }}</td>
            <td><img src="/images/{{ $actualite->image1 }}" width="100px"></td>
            <td><img src="/images/{{ $actualite->image2 }}" width="100px"></td>
            <td><img src="/images/{{ $actualite->image3 }}" width="100px"></td>
            <td>{{ $actualite->typeActu }}</td>
            <td>{{ $actualite->statutActu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['actualites.destroy', $actualite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('actualites.show', [$actualite->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('actualites.edit', [$actualite->id]) }}"
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
