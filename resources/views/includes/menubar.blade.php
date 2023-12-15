<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/female4.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->name }} </p>
                <a><i class="fa fa-circle text-success"></i> En Ligne</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">REPORTS</li>

            <li class=""><a href="/admin"><i class="fa fa-dashboard"></i> <span>Tableau De Bord</span></a></li>

            <li class="header">Gerer</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Employees</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/employees"><i class="fa fa-circle-o"></i> Liste Des Employés</a></li>
                </ul>
            </li>
            <li><a href="/schedule"><i class="fa fa-clock-o"></i> <span>Shift </span></a></li>


            <li class="header">TABLES</li>
      

            <li><a href="/attendance"><i class="fa fa-calendar"></i> <span>Entrée</span></a></li>
            <li><a href="/latetime"><i class="fa fa-circle-o"></i> <span>Heure tardive</span></a></li>


            <li><a href="/leave"><i class="fa fa-calendar"></i> <span>Sortie</span></a></li>

            <li><a href="/overtime"><i class="fa fa-circle-o"></i> <span>Overtime</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
