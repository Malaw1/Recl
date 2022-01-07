@extends('layouts.app')

@section('content')
<div class="masonry-item  w-100">
    <div class="row gap-20">
        <!-- #Erreur N ==================== -->
        <div class='col-md-3'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Nombre d'erreurs N</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $nbrerreur->total }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #Erreur M ==================== -->
        <div class='col-md-3'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Nombre d'erreurs M</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash2"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{ $nbrerreur->total }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #Reclamations N ==================== -->
        <div class='col-md-3'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Nombre de Reclamations N</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">{{ $nbrrecN->total }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #Reclamation M ==================== -->
        <div class='col-md-3'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Nombre de Reclamations M</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash4"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $nbrerreur->total }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="masonry-item col-md-6">
                <!-- #Sales Report ==================== -->
                <div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100">
                      <div class="bgc-light-blue-500 c-white p-20">
                        <div class="peers ai-c jc-sb gap-40">
                          <div class="peer peer-greed">
                            <h5>Suivi des Reclamations par Categories</h5>
                          </div>
                          <div class="peer">
                            <h3 class="text-end">{{ $nbrrecN->total }}</h3>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive p-20">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class=" bdwT-0">Motif</th>
                              <th class=" bdwT-0">N</th>
                              <th class=" bdwT-0">M</th>
                              <th class=" bdwT-0">% TG</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($nbrrec as $rec)
                            <tr>
                              <td class="fw-600"> {{ $rec->motif }}</td>
                              <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill">{{ $rec->total }}</span> </td>
                              <td>{{ $rec->total }}</td>
                              <td><span class="text-success">{{ $rec->total }}</span></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                       </div>
                    </div>
                  </div>
                 
                </div>
              </div>
              
</div>



@endsection
