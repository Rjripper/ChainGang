<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{ route ('dashboard') }}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                            <div class="logo"><img class="sidepanel-logo" src="{{asset('images/logo.png')}}" alt=""></div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Chain Gang</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active"><a class="sidebar-link" href="{{ route ('dashboard') }}"><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('users') }}"><span class="icon-holder"><i class="c-brown-500 ti-user"></i> </span><span class="title">Gebruikers</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('customers') }}"><span class="icon-holder"><i class="c-blue-500 ti-info-alt"></i> </span><span class="title">Klanten</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('products') }}"><span class="icon-holder"><i class="c-deep-orange-500 ti-archive"></i> </span><span class="title">Producten</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('orders') }}"><span class="icon-holder"><i class="c-deep-purple-500 ti-truck"></i> </span><span class="title">Bestellingen</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('newsletters') }}"><span class="icon-holder"><i class="c-indigo-500 ti-write"></i> </span><span class="title">Nieuwsbrieven</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('reviews') }}"><span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> </span><span class="title">Recensies</span></a></li>
            <li class="nav-item"><a class="sidebar-link" href="{{ route ('sales') }}"><span class="icon-holder"><i class="c-pink-500 ti-gift"></i> </span><span class="title">Uitverkopen</span></a></li>
        </ul>
    </div>
</div>