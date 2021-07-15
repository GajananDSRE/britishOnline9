<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('admin/vendors/images/logo.png') }}" alt="" class="light-logo" style="padding: 30px 30px 0px 80px;">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll"  style="padding: 30px 30px 0px 0px;">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="./index.html" class="dropdown-toggle no-arrow">
                        <i class="fa fa-tachometer micon " aria-hidden="true"></i><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.real-worli') }}" class="dropdown-toggle no-arrow">
                        <i class="fa fa-exchange micon" aria-hidden="true"></i><span class="mtext">Real Worli</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="fa fa-cogs  micon" aria-hidden="true"></i><span class="mtext">Game Zone </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.indian-casino') }}">Casino</a></li>
                        <li><a href="{{ route('admin.live-casino') }}">Live Casino</a></li>
                        <li><a href="{{ route('admin.table-game') }}">Tables</a></li>
                        <li><a href="{{ route('admin.ludo-game') }}">Ludo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.exchange-id-req') }}" class="dropdown-toggle no-arrow">
                        <i class="fa fa-exchange micon" aria-hidden="true"></i><span class="mtext">Exchange Id Request</span>
                    </a>
                </li>
                <li>
                    <a href="./clientlist.html" class="dropdown-toggle no-arrow">
                        <i class="fa fa-list-ol micon" aria-hidden="true"></i><span class="mtext">Client List</span>
                    </a>
                </li>
                <li class="dropdown ">
                    <a href="javascript:;" class="dropdown-toggle active">
                        <i class="fa fa-cogs  micon" aria-hidden="true"></i><span class="mtext">Banking</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="./your Account.html">Your Account</a></li>
                        <li><a href="./Deposit.html">Deposit</a></li>
                        <li><a href="./withdraw.html">Withdraw</a></li>
                        <li><a href="./downline request.html">Downline Request List</a></li>
                        <li><a href="./your request.html">Your Request List</a></li>
                        <li><a href="./setting.html">Setting</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="fa fa-cogs  micon" aria-hidden="true"></i><span class="mtext">Setting </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('admin.poster')}}">Add Poster</a></li>
                        <li><a href="{{route('admin.rules')}}">Add Rules</a></li>
                        <li><a href="{{route('admin.createId')}}">Create ID</a></li>
                        <li><a href="./wallet.html">Wallet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Book Detail.html" class="dropdown-toggle no-arrow">
                        <i class="fa fa-flag micon" aria-hidden="true"></i><span class="mtext">Report</span>
                    </a>
                </li>
                <li>
                    <a href="Support.html" class="dropdown-toggle no-arrow">
                        <i class="fa fa-commenting-o micon" aria-hidden="true"></i><span class="mtext">Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="mobile-menu-overlay"></div>
<!-- message -->
<marquee behavior="scroll" class="message" direction="left">Redesign BritishOnline9. We are back with so many new feature.</marquee>