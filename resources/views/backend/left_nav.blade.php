<div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">CodiePie</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-fire"></i><span>About</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('about')}}">All About</a></li>
                            <li><a class="nav-link" href="{{ route('about.add')}}">Add About</a></li>
                        </ul>
                    </li>

                    
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Methodology</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('methodhology')}}">All Methodology</a></li>
                            <li><a class="nav-link" href="{{ route('add.mehodology')}}">Add Methodology</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Investigation</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('investigation')}}">All Investigation</a></li>
                            <li><a class="nav-link" href="{{ route('investigation.add')}}">Add Investigation</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Team</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('team')}}">All Team</a></li>
                            <li><a class="nav-link" href="{{ route('team.add')}}">Add Team</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Team Category</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('team_category')}}">All Team Category</a></li>
                            <li><a class="nav-link" href="{{ route('team_category.add')}}">Add Team Category</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>News</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('news')}}">All News</a></li>
                            <li><a class="nav-link" href="{{ route('news.add')}}">Add News</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Contacts</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('contact')}}">All Contacts</a></li>
                            <li><a class="nav-link" href="{{ route('contact.add')}}">Add Contacts</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-fire"></i><span>Logout</span></a>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('contact')}}">All Contacts</a></li>
                            <li><a class="nav-link" href="{{ route('contact.add')}}">Add Contacts</a></li>
                        </ul> -->
                    </li>


                    <li class="dropdown">
                    <!-- <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a> -->

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>

                  
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <!-- <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> Documentation</a> -->
                </div>
            </aside>
        </div>