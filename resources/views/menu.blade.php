<nav class="navbar navbar-light fixed-top bg-green flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('home')}}">Silico - Analisis en tiempo real.<i class="fas fa-chart-line"></i></a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        
      </li>
    </ul>
  </nav>
  
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('home')}}"><i class=" fa-solid fa-house-window"></i>Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('bcra')}}"><span class="fa fa-thumbs-down"></span> Variables BCRA</a>
            </li>

            <li>
              <a class="nav-link" href="#!"><i class="fa fa-bars"></i> Opciones</a>
              <ul class="nav-dropdown">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ggal')}}"><i class="fa fa-table" aria-hidden="true"></i> GGAL</a>
                </li >
                <li class="nav-item">
                  <a class="nav-link" href="{{route('come')}}"><i class="fa fa-table" aria-hidden="true"></i> COME</a>
                </li >
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ypfd')}}"><i class="fa fa-table" aria-hidden="true"></i> YPFD</a>
                </li >
              </ul>
            </li>
            
            <li>
              <a class="nav-link" href="#!"><i class="fa fa-bars"></i> Dolar</a>
              <ul class="nav-dropdown">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('mep')}}"><i class="fa fa-usd" aria-hidden="true"></i> Dolar MEP</a>
                </li >
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ccl-cedear')}}"><i class="fa fa-usd" aria-hidden="true"></i> Dolar CCL</a>
                </li>
              </ul>
            </li>

<!--
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Dolar 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
              </a>
            </li>
          </ul>
-->
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>External</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/inside-silico" target=”_blank”><i class="fa fa-github"></i>
                GitHub
              </a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li> -->
          </ul>
        </div>
      </nav>
