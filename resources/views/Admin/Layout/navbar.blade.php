<div class="header-top-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top-wraper">
                    <div class="row">
                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                            <div class="menu-switcher-pro">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="icon nalika-menu-task"></i>
                                    </button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                            
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="header-right-info">
                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                    
                                    
                                    <li class="nav-item">
                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                <span class="admin-name"><?= Auth::user()->name ?></span>
                                                <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                            </a>
                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated">
                                            <li>
                                                <a href="{{ route('user.Profile') }}"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('market.Logout') }}"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>