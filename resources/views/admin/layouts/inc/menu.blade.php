<!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <div id="mainnav">

                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">

                                        <!--Category name-->
                                        <li class="list-header">Navigácia</li>

                                        <!--Menu list item-->
                                        <li class="{{ set_active('admin') }}"> <!-- app/Helpers.php -->
                                            <a href="{{ url('admin') }}">
                                                <i class="fa fa-dashboard"></i>
                                                <span class="menu-title">
                                                    <strong>Administrácia</strong>
                                                    <span class="label label-success pull-right">Top</span>
                                                </span>
                                            </a>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                <span class="menu-title">
                                                    <strong>Obsah</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{ url('admin/content/index') }}">Sekcie</a></li>
                                                <li><a href="{{ url('admin/content/navigation') }}">Navigácia</a></li>
                                                <li><a href="{{ url('admin/content/categories') }}">Kategórie</a></li>
                                                <li><a href="{{ url('admin/content/filemanager') }}">Súbory</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-suitcase"></i>
                                                <span class="menu-title">
                                                    <strong>Katalóg</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./product/index.html">Produkty</a></li>
                                                <li><a href="./product/brands.html">Výrobcovia</a></li>
                                                <li><a href="./product/categories.html">Kategórie</a></li>
                                                <li><a href="./product/sale.html">Zľavy</a></li>
                                                <li><a href="./product/import.html">Import</a></li>
                                                <li><a href="./product/export.html">Export</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="menu-title">
                                                    <strong>Objednávky</strong>
                                                    <span class="pull-right badge badge-warning badge-arrow">9</span>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./order/index.html">Prehľad</a></li>
                                                <li><a href="./order/delivery.html">Doprava</a></li>
                                                <li><a href="./order/payment.html">Platba</a></li>
                                                <li><a href="./order/cart.html">Nákupný košík</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-cloud"></i>
                                                <span class="menu-title">
                                                    <strong>Blog</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./blog/index.html">Príspevky</a></li>
                                                <li><a href="./blog/categories.html">Kategórie</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-image"></i>
                                                <span class="menu-title">
                                                    <strong>Galéria</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./gallery/index.html">Galérie</a></li>
                                                <li><a href="./gallery/categories.html">Kategórie</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-video-camera"></i>
                                                <span class="menu-title">
                                                    <strong>Video</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./video/index.html">Videá</a></li>
                                                <li><a href="./video/categories.html">Kategórie</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-calendar"></i>
                                                <span class="menu-title">
                                                    <strong>Kalendár</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./calendar/index.html">Udalosti</a></li>
                                                <li><a href="./calendar/categories.html">Kategórie</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="./comment/index.html">
                                                <i class="fa fa-comments"></i>
                                                <span class="menu-title">
                                                    <strong>Komentáre</strong>
                                                    <span class="pull-right badge badge-warning badge-arrow">3</span>
                                                </span>
                                            </a>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bolt"></i>
                                                <span class="menu-title">
                                                    <strong>Reklama</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./advertisement/index.html">Kampane</a></li>
                                                <li><a href="./advertisement/positions.html">Pozície</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li class="{{ set_active('admin/user') }}">
                                            <a href="{{ url('admin/user') }}">
                                                <i class="fa fa-user"></i>
                                                <span class="menu-title">
                                                    <strong>Užívatelia</strong>
                                                </span>
                                            </a>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                                <span class="menu-title">
                                                    <strong>Newsletter</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./newsletter/index.html">Kampane</a></li>
                                                <li><a href="./newsletter/email_list.html">Zoznam emailov</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-wrench"></i>
                                                <span class="menu-title">
                                                    <strong>Nastavenia</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./settings/index.html">Hlavné</a></li>
                                                <li><a href="./settings/database.html">Databáza</a></li>
                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-line-chart"></i>
                                                <span class="menu-title">
                                                    <strong>Štatistiky</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="./stats/index.html">Návštevnosť</a></li>
                                                <li><a href="./stats/shop.html">Obchod</a></li>
                                                <li><a href="./stats/user.html">Užívatelia</a></li>
                                                <li><a href="./stats/newsletter.html">Newsletter</a></li>
                                                <li><a href="./stats/search.html">Vyhľadávanie</a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->

                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->