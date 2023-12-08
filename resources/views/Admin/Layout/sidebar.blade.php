<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <img src="{{ asset('/storage/photo/' . Auth::user()->photo) }}" alt="" />
                <h2><?= Auth::user()->name ?></h2>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                               <i class="icon nalika-home icon-wrap"></i>
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a href="{{ route('admin.Dashboard') }}"><span class="mini-sub-pro">Summary</span></a></li>
                            <li><a href="{{ route('admin.userList') }}"><span class="mini-sub-pro">User Control</span></a></li>
                            <li><a href="{{ route('admin.itemList') }}"><span class="mini-sub-pro">Item Control</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="/"><span class="mini-sub-pro">Home</span></a></li>
                            <li><a href="/buy"><span class="mini-sub-pro">Buy Page</span></a></li>
                            <li><a href="{{ route('market.sellPage') }}"><span class="mini-sub-pro">Sell Page</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>