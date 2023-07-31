@extends('www.layoutsW.app2')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">BIENVENUE AUX NOUVEAUX NES</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Felicitatios aux parents</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">
                <a  href="{{ route('declarationNaissance') }}" >
                CHERS PARENTS VOUS SI VOUS AVEZ UNE NOUVELLE NAISSANCE <a  class="btn btn-success btn-lg" href="{{ route('declarationNaissance') }}">DECLARER LA ICI</a>
            </a>
            </h6>
                <h1 class="mb-5">ICI LA LISTE DES 5 DERNIERS NE DU QUARTIER</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
            @foreach($naissances as $naissance)
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ Storage::url($naissance->image) }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">{{ $naissance->nom_nais }} {{ $naissance->prenoms_nais }}</h5>
                    <p>{{ $naissance->femme->nomFemm }} {{ $naissance->femme->prenFemm }}</p>
                    <p>{{ $naissance->homme->nomHomm }} {{ $naissance->homme->prenHomm }}</p>
                    <td>à {{ $naissance->lieuNaissance_nais }}</td>
                    <p>le <td>{{ $naissance->dateNaissance_nais }}</td></p>
                </div>
            @endforeach 
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
    @endsection