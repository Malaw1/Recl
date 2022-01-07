<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{ url('home') }}">
                        <div class="peers ai-c fxw-nw">
                        <div class="peer">
                            <div class="logo">
                              <img src="{{ asset('img/laborex-logo.png') }}" width="100" height="50" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="peer peer-greed">
                            <h5 class="lh-1 mB-0 logo-text"></h5>
                        </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="sidebar-menu scrollable pos-r">
            

              <li class="nav-item">
                <a class='sidebar-link' href="{{ url('home') }}">
                  <span class="icon-holder">
                    <i class="c-deep-yellow-500 ti-home"></i>
                  </span>
                  <span class="title">Acceuil</span>
                </a>
              </li>

              <li class="nav-item">
                <a class='sidebar-link' href="{{ url('collecteurs') }}">
                  <span class="icon-holder">
                    <i class="c-yellow-500 ti-user"></i>
                  </span>
                  <span class="title">Collecteurs</span>
                </a>
              </li>

              <li class="nav-item">
                <a class='sidebar-link' href="{{ route('erreurs.index') }}">
                  <span class="icon-holder">
                    <i class="c-green-500 ti-write"></i>
                  </span>
                  <span class="title">Erreurs</span>
                </a>
              </li>

              <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-red-500 ti-world"></i>
                </span>
                <span class="title">Reclamation</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('reclamation.create') }}">Nouvelle Reclamation</a>
                </li>
                <li>
                  <a class='sidebar-link' href="{{ route('traite') }}">Traitées</a>
                </li>
                <li>
                  <a class='sidebar-link' href="{{ route('reclamation.index') }}">En Traitement</a>
                </li>
              </ul>
            </li>

  


        </ul>
    </div>
</div>
