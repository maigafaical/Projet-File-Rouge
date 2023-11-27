<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="dashboard">
                <i class="bi bi-grid"></i>
                <span>MENU</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Gestion Demandes</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('demandes.index') }}">
                        <i class="bi bi-circle"></i><span>Liste Demandes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('demandes.create') }}">
                        <i class="bi bi-circle"></i><span>Ajouter Demandes</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->





        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Gestion Rendez-vous</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Liste Rendez-vous</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Ajouter Rendez-vous</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav_1 -->

    </ul>

</aside>
