<div class="header navbar">
        <div class="header-container">
            <ul class="nav-left">
                <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
            </ul>
            <ul class="nav-right">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                        <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt=""></div>
                        <div class="peer"><span class="fsz-sm c-grey-900">{{Auth::user()->username}}</span></div>
                    </a>
                    <ul class="dropdown-menu fsz-sm">
                        <li><a href="{{ url('/admin/user/edit/' . Auth::user()->id) }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Instellingen</span></a></li>
                        <li><a href="{{ url('/admin/user/' . Auth::user()->id) }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profiel</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{  route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" style="font-size:12px;" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="ti-power-off mR-10"></i> <span>Afmelden</span></a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
