<div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
    <a href="#" class="app-navigation-logo">
        Boooya - Revolution Admin Template
        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel">
            <span class="icon-alarm"></span> 
            <span class="app-navigation-logo-button-alert">7</span>
        </button>
    </a>
    @php
        $path=Request::path();
    @endphp
    <nav>
        <ul>
            <li class="title">MAIN</li>
            <li><a href="{{route('dashboard')}}" class="{{(strpos($path,'dashboard')!==false ? 'active' : '')}}"><span class="nav-icon-circle">DS</span> Dashboard</a></li>
        
            @if(Auth::user()->level==1)
                <li class="{{(strpos($path,'dinas')!==false ? 'open' : (strpos($path,'user')!==false ? 'open' : (strpos($path,'perusahaan')!==false ? 'open' : (strpos($path,'tenagaahli')!==false ? 'open' : (strpos($path,'pokja')!==false ? 'open' : (strpos($path,'pekerjaan')!==false ? 'open' : ''))))))}}">
                    <a href="#"><span class="nav-icon-circle">MD</span> Master Data</a>
                    <ul>
                        <li><a href="{{ route('user.index') }}" class="{{(strpos($path,'user')!==false ? 'active' : '')}}"><span class="nav-icon-circle">US</span> User</a></li>
                        <li><a href="{{ route('dinas.index') }}" class="{{(strpos($path,'dinas')!==false ? 'active' : '')}}"><span class="nav-icon-circle">DN</span> Dinas</a></li>
                        <li><a href="{{ route('perusahaan.index') }}" class="{{(strpos($path,'perusahaan')!==false ? 'active' : '')}}"><span class="nav-icon-circle">PR</span> Perusahaan</a></li>
                        <li><a href="{{ route('tenagaahli.index') }}" class="{{(strpos($path,'tenagaahli')!==false ? 'active' : '')}}"><span class="nav-icon-circle">TA</span> Tenaga Ahli</a></li>
                        <li><a href="{{ route('pokja.index') }}" class="{{(strpos($path,'pokja')!==false ? 'active' : '')}}"><span class="nav-icon-circle">PJ</span> Kelompok Kerja (POKJA)</a></li>
                        <li><a href="{{ route('pekerjaan.index') }}" class="{{(strpos($path,'pekerjaan')!==false ? 'active' : '')}}"><span class="nav-icon-circle">JP</span> Jenis Pekerjaan</a></li>
                    </ul>            
                </li>
            @endif
                            
            <li class="title">Simanda &nbsp;//&nbsp; Copyrights &reg; Pemkot Depok, 2017</li>
        </ul>
    </nav>
</div>