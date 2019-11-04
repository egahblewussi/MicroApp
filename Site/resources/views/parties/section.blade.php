<section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="{{ asset('asset/img/authors/avatar1.jpg') }}" class="img-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">Addison</h4>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li class="active" id="active">
                    <a href="{{route('home_path')}}">
                             <i class="fa fa-fw fa-tachometer"></i>
                            <span class="mm-text ">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="fa fa-fw fa-font"></i>
                            <span>Administration</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-user"></i> Utilisateurs
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                    <li>
                                    <a href="{{route('user_path')}}">
                                            Créer un utilisateur
                                        </a>
                                    </li>
                                    <li>
                                    <a href="{{route('agent-create')}}">
                                           Créer un agent
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw fa-users"></i> Clients
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                    <li>
                                    <a href="{{route('client_create')}}">
                                             Créer un client
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                    <a href="javascript:void(0)">
                                            <i class="fa fa-fw fa-suitcase"></i> Domaines d'action
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu p-l-40">
                                        <li>
                                        <a href="{{route('domaine-create')}}">
                                                 Créer un domaine
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-text"></i>
                            <span>Tontine</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('compte-create')}}">
                                    <i class="fa fa-fw ti-layout"></i> Créer un carnet
                                </a>
                            </li>
                            <li>
                            <a href="{{route('domaine-list')}}">
                                    <i class="fa fa-fw ti-server"></i> Dépôt d'argent
                                </a>
                            </li>

                            <li>
                            <a href="{{route('retrait-create')}}">
                                    <i class="fa fa-fw ti-server"></i> Retrait d'argent
                                </a>
                            </li>


                            <li>
                                <a href="{{route('client_list')}}">
                                    <i class="fa fa-fw ti-layout-grid3"></i> Clients
                                </a>
                            </li>
                            <li>
                            <a href="{{route('agents-list')}}">
                                    <i class="fa fa-fw ti-layout-accordion-merged"></i> Agents
                                </a>
                            </li>
                            <li>
                                <a href="{{route('agents-list')}}">
                                        <i class="fa fa-fw ti-layout-accordion-merged"></i> Agents et leurs 
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-layout-grid4"></i>
                            <span>Listes</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('profil-list')}}">
                                    <i class="fa fa-fw ti-layout"></i> Profils
                                </a>
                            </li>
                            <li>
                            <a href="{{route('domaine-list')}}">
                                    <i class="fa fa-fw ti-server"></i> Domaines
                                </a>
                            </li>
                            <li>
                                <a href="{{route('client_list')}}">
                                    <i class="fa fa-fw ti-layout-grid3"></i> Clients
                                </a>
                            </li>
                            <li>
                            <a href="{{route('agents-list')}}">
                                    <i class="fa fa-fw ti-layout-accordion-merged"></i> Agents
                                </a>
                            </li>
                            <li>
                                <a href="{{route('agents-list')}}">
                                        <i class="fa fa-fw ti-layout-accordion-merged"></i> Agents et leurs 
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                            <a href="#">
                                    <i class="fa fa-fw fa-circle-o"></i>
                                <span>Operations</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('cotisation-create')}}">
                                        <i class="fa fa-fw ti-layout"></i> Cotisation
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <li class="menu-dropdown">
                            <a href="#"> <i class="fa fa-fw fa-columns"></i>
                                <span>Compte</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                <a href="{{}}">
                                            </i> Créer un compte 
                                    </a>
                                </li>
                                <li>
                                    <a href="nvd3_charts.html"> <i class="fa fa-fw ti-stats-up"></i> NVD3 Charts </a>
                                </li>
                            </ul>
                        </li>  
                    <li class="menu-dropdown">
                        <a href="#"> <i class="menu-icon ti-bar-chart"></i>
                            <span>Statistiques</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                            <a href="">
                                    <i class="fa fa-fw ti-bar-chart-alt"></i> Organigramme des agents
                            </li>
                            <li>
                                <a href="nvd3_charts.html"> <i class="fa fa-fw ti-stats-up"></i> NVD3 Charts </a>
                            </li>
                        </ul>
                    </li>  
                    <li class="menu-dropdown">
                        <a href="#"> <i class="menu-icon ti-user"></i> <span>Users</span> <span
                                class="fa arrow"></span> </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-fw ti-menu-alt" aria-hidden="true"></i> Users List
                                </a>
                            </li>
                        </ul>
                    </li>             
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-files"></i>
                            <span>Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>                                 <a href="forgot_password.html">                                     <i class="fa fa-fw ti-help"></i> Forgot Password                                 </a>                             </li>                             <li>                                 <a href="reset_password.html">                                     <i class="fa fa-fw ti-key"></i> Reset Password                                 </a>                             </li>
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-fw ti-lock"></i> Lockscreen
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-fw ti-unlink"></i> 404 Error
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-fw ti-face-sad"></i> 500 Error
                                </a>
                            </li>
                        </ul>
                    </li>             
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> 
        </section>