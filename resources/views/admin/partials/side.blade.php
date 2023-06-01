
<aside>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <h3>Logo</h3>
                </span>

                <div class="text header-text">
                    <span class="name">High School</span>
                    <span class="profession">Former les meilleurs</span>
                </div>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <div class="menu-link">
                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search........">
                    </li>
                </div>
                <div class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('accueil.dashboard') }}">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Accueil</span>
                        </a>
                    </li>
                </div>
                <div class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('admin.notes') }}">
                            <i class='bx bxs-devices icon'></i>
                            <span class="text nav-text">Notes</span>
                        </a>
                    </li>
                </div>
                <div class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('admin.prof') }}">
                            <i class='bx bxs-user-detail icon'></i>
                            <span class="text nav-text">Professeurs</span>
                        </a>
                    </li>
                </div>
                <div class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('admin.delib') }}">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text nav-text">Délibération</span>
                        </a>
                    </li>
                </div>
                <div class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('admin.inscription') }}">
                            <i class='bx bxs-spreadsheet icon'></i>
                            <span class="text nav-text">Inscriptions</span>
                        </a>
                    </li>
                </div>
            </div>
            <div class="bottom-content">
                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch">

                        </span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
</aside>
