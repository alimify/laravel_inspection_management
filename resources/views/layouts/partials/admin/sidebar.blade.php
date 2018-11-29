<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item text-center">
                    <a href="{{route('admin.task.create')}}" class="btn btn-primary btn-success">New Task</a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.dashboard.index')}}" aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.task.index')}}" aria-expanded="false">
                        <i class="fas fa-tasks"></i>
                        <span class="hide-menu">Task </span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.request.index')}}" aria-expanded="false">
                        <i class="fab fa-accusoft"></i>
                        <span class="hide-menu">Request </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.category.index')}}" aria-expanded="false">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="hide-menu">Category</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.client.index')}}" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <span class="hide-menu">Client </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.user.index')}}" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <span class="hide-menu">User </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-cogs"></i>
                        <span class="hide-menu">Setting </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.system.setting')}}" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                                <span class="hide-menu">System Setting </span>
                            </a>
                        </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.system.setting.mail.index')}}" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="hide-menu">Mail Template </span>
                    </a>
                </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.homeHTML')}}" aria-expanded="false">
                                <i class="fa fa-edit"></i>
                                <span class="hide-menu">Homepage HTML </span>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
