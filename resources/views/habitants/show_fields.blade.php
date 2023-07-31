<div class="col-md-2"></div>

<div class="col-md-8">

  <!-- Profile Image -->
  <div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
        <img class="profile-user-img img-fluid img-circle"
             src="{{ isset($habitant) ? Storage::url($habitant->image) : '' }}"
             alt="User profile picture">
      </div>
      @if($habitant->sexeHabi=='M')
      <h3 class="profile-username text-center"><p>MONSIEUR {{ $habitant->nomHabi }} {{ $habitant->prenHabi }}</p></h3> 
                @else
                <h3 class="profile-username text-center"><p>MADAME {{ $habitant->nomHabi }} {{ $habitant->prenHabi }}</p></h3>
                @endif

      <p class="text-muted text-center">Né le {{ $habitant->dateNHabi }} à {{ $habitant->lieuNHabi }}</p>

      <ul class="list-group list-group-unbordered mb-3">
        <li class="list-group-item">
          <b>NUMERO DE TELEPHONE</b> <a class="float-right">{{ $habitant->telHabi }}</a>
        </li>
        <li class="list-group-item">
          <b>DATE DE NAISSANCE</b> <a class="float-right">{{ $habitant->dateNHabi }}</a>
        </li>
        <li class="list-group-item">
          <b>LIEU DE NAISSANCE</b> <a class="float-right">{{ $habitant->lieuNHabi }}</a>
        </li>
      </ul>

      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


<div class="col-md-2"></div>