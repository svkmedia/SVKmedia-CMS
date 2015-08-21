<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="{{ asset('img/logo-svkmedia.png') }}" alt="SVKmedia logo" class="brand-icon">
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="fa fa-navicon fa-lg"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->


                <!--Notification dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-bell fa-lg"></i>
                        <span class="badge badge-header badge-danger">5</span>
                    </a>

                    <!--Notification dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-md with-arrow">
                        <div class="pad-all bord-btm">
                            <p class="text-lg text-muted text-thin mar-no">Aktivity od posledného prihlásenia</p>
                        </div>
                        <div class="nano scrollable">
                            <div class="nano-content">
                                <ul class="head-list">

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#" class="media">
                                            <div class="media-left">
                                                <span class="icon-wrap icon-circle bg-primary">
                                                    <i class="fa fa-comment fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Nový komentár čaká na schválenie</div>
                                                <small class="text-muted">Pred 15 minútami</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#" class="media">
                                    <span class="badge badge-success pull-right">90%</span>
                                            <div class="media-left">
                                                <span class="icon-wrap icon-circle bg-danger">
                                                    <i class="fa fa-hdd-o fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">HDD je takmer plný</div>
                                                <small class="text-muted">Pred 50 minútami</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#" class="media">
                                            <div class="media-left">
                                                <span class="icon-wrap bg-info">
                                                    <i class="fa fa-file-word-o fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Nový príspevok na blogu</div>
                                                <small class="text-muted">Pred 8 hodinami</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#" class="media">
                                    <span class="label label-danger pull-right">New</span>
                                            <div class="media-left">
                                                <span class="icon-wrap bg-purple">
                                                    <i class="fa fa-comment fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Nová odpoveď na komentár</div>
                                                <small class="text-muted">Pred 9 hodinami</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#" class="media">
                                            <div class="media-left">
                                                <span class="icon-wrap bg-success">
                                                    <i class="fa fa-user fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Registrácia nového užívateľa</div>
                                                <small class="text-muted">Pred 2 dňami</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Dropdown footer-->
                        <div class="pad-all bord-top">
                            <a href="#" class="btn-link text-dark box-block">
                                <i class="fa fa-angle-right fa-lg pull-right"></i>Zobraziť všetky aktivity
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End notifications dropdown-->


            </ul>
            <ul class="nav navbar-top-links pull-right">

                <!--Language selector-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">
                    <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                        <span class="lang-selected">
                            <img class="lang-flag" src="{{ asset('img/flags/slovakia.png') }}" alt="Slovak">
                            <span class="lang-id">SK</span>
                            <span class="lang-name">Slovenčina</span>
                        </span>
                    </a>

                    <!--Language selector menu-->
                    <ul class="head-list dropdown-menu with-arrow">
                        <li>
                            <!--Slovak-->
                            <a href="#" class="active">
                                <img class="lang-flag" src="{{ asset('img/flags/slovakia.png') }}" alt="Slovak">
                                <span class="lang-id">SK</span>
                                <span class="lang-name">Slovenčina</span>
                            </a>
                        </li>
                        <li>
                            <!--English-->
                            <a href="#">
                                <img class="lang-flag" src="{{ asset('img/flags/united-kingdom.png') }}" alt="English">
                                <span class="lang-id">EN</span>
                                <span class="lang-name">English</span>
                            </a>
                        </li>
                        <li>
                            <!--Germany-->
                            <a href="#">
                                <img class="lang-flag" src="{{ asset('img/flags/germany.png') }}" alt="Germany">
                                <span class="lang-id">DE</span>
                                <span class="lang-name">Deutsch</span>
                            </a>
                        </li>
                        <li>
                            <!--Italy-->
                            <a href="#">
                                <img class="lang-flag" src="{{ asset('img/flags/italy.png') }}" alt="Italy">
                                <span class="lang-id">IT</span>
                                <span class="lang-name">Italiano</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End language selector-->



                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right">
                            <img class="img-circle img-user media-object" src="{{ asset('img/av1.png') }}" alt="Profile Picture">
                        </span>
                        <div class="username hidden-xs">Tomáš Bartalský</div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

                        <!-- Dropdown heading  -->
                        <!--
                        <div class="pad-all bord-btm">
                            <p class="text-lg text-muted text-thin mar-btm">750Gb of 1,000Gb Used</p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" style="width: 70%;">
                                    <span class="sr-only">70%</span>
                                </div>
                            </div>
                        </div>
                        -->

                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="#">
                                    <i class="fa fa-user fa-fw fa-lg"></i> Môj profil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="badge badge-danger pull-right">5</span>
                                    <i class="fa fa-bell fa-fw fa-lg"></i> Notifikácie
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success pull-right">New</span>
                                    <i class="fa fa-gear fa-fw fa-lg"></i> Nastavenia
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-question-circle fa-fw fa-lg"></i> Pomoc
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdown footer -->
                        <div class="pad-all text-right">
                            <a href="{{ url('/admin/auth/logout') }}" class="btn btn-primary">
                                <i class="fa fa-sign-out fa-fw"></i> Odhlásiť sa
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->

            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->