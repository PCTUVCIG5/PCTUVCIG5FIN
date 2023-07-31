<div class="table-responsive">
    <table class="table" id="naissances-table">
        <thead>
        <tr>
            <th>Nom du bebe</th>
        <th>Prenoms du bebe</th>
        <th>Date naissance</th>
        <th>Lieu naissance</th>
        <th>Mode de naissance</th>
        <th>Lieu habitation</th>
        <th>nom de la mere</th>
        <th>nom du pere</th>
        </tr>
        </thead>
        <tbody>
        @foreach($naissances as $naissance)
            <tr>
            <td>{{ $naissance->nom_nais }}</td>
            <td>{{ $naissance->prenoms_nais }}</td>
            <td>{{ $naissance->dateNaissance_nais }}</td>
            <td>{{ $naissance->lieuNaissance_nais }}</td>
            <td>{{ $naissance->mode_nais }}</td>
            <td>{{ $naissance->lieuHabitation_nais }}</td>
            <td>{{ $naissance->homme->nomHomm }} {{ $naissance->homme->prenHomm }}</td>
            <td>{{ $naissance->femme->nomFemm }} {{ $naissance->femme->prenFemm }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
