<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/')}}"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/charts')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                            class="hide-menu">Charts</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/widgets')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                            class="hide-menu">Widgets</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/tables')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Tables</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/full-width')}}"
                        aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full
                            Width</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                            class="hide-menu">Forms </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/form-basic')}}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/form-wizard')}}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/buttons')}}" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                            class="hide-menu">Buttons</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                            class="hide-menu">Icons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/material-icons')}}" class="sidebar-link"><i
                                    class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/font-awesome-icons')}}" class="sidebar-link"><i
                                    class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/elements')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                            class="hide-menu">Elements</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span
                            class="hide-menu">Addons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/dashboard2')}}" class="sidebar-link"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/gallery')}}" class="sidebar-link"><i
                                    class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/calendar')}}" class="sidebar-link"><i
                                    class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/invoice')}}" class="sidebar-link"><i
                                    class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/chat-option')}}" class="sidebar-link"><i
                                    class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                            class="hide-menu">Authentication </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/login')}}" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/register')}}" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                            class="hide-menu">Errors </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/error403')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/error404')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/error405')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/error500')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>