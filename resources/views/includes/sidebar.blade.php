<div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
    <a href="#" class="app-navigation-logo">
        Boooya - Revolution Admin Template
        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel">
            <span class="icon-alarm"></span> 
            <span class="app-navigation-logo-button-alert">7</span>
        </button>
    </a>
    
    <nav>
        <ul>
            <li class="title">MAIN</li>
            <li><a href="{{ route('dashboard') }}"><span class="nav-icon-circle">DS</span> Dashboard</a></li>
        
            <li>
                <a href="#"><span class="nav-icon-circle">MD</span> Master Data</a>
                <ul>
                    <li><a href="#"><span class="nav-icon-circle">US</span> User</a></li>
                    <li><a href="#"><span class="nav-icon-circle">DN</span> Dinas</a></li>
                    <li><a href="{{ route('perusahaan.index') }}"><span class="nav-icon-circle">PR</span> Perusahaan</a></li>
                    <li><a href="{{ route('ta.index') }}"><span class="nav-icon-circle">TA</span> Tenaga Ahli</a></li>
                </ul>            
            </li>
                            
            <li class="title">Simanda &nbsp;//&nbsp; Copyrights &reg; Pemkot Depok, 2017</li>
        </ul>
    </nav>
</div>