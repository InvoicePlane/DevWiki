<div class="sidebar-inner">

    <div class="sidebar-top">
        <a href="/">
            InvoicePlane DevWiki
        </a>
        <a href="#" class="sidebar-toggle pull-right"><i class="fa fa-close hidden-lg-up"></i></a>
    </div>

    <ul class="menu">
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-clients" class="has-submenu collapsed">
                General
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="submenu-clients" class="submenu collapse">
                <li><a href="<?php echo $params['base_url'] ?>contribution">Contribution</a></li>
            </ul>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#sub-v2" class="has-submenu collapsed">
                InvoicePlane 2
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="sub-v2" class="submenu collapse">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#sub-v2-guides" class="has-submenu collapsed">
                        Guides
                        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
                    </a>
                    <ul id="sub-v2-guides" class="submenu collapse">
                        <li><a href="<?php echo $params['base_url'] ?>v2/guides/setup_environment">Development environment setup</a></li>
                        <li><a href="<?php echo $params['base_url'] ?>v2/guides/apigen">PHP documentation generation</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#sub-v2-modules" class="has-submenu collapsed">
                        Modules
                        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
                    </a>
                    <ul id="sub-v2-modules" class="submenu collapse">
                        <li><a href="<?php echo $params['base_url'] ?>v2/modules/users">Users</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="divider"></li>

        <li>
            <a href="http://invoiceplane.com/">
                InvoicePlane.com
            </a>
        </li>
        <li>
            <a href="https://github.com/InvoicePlane">
                Github.com
            </a>
        </li>
        <li>
            <a href="https://community.invoiceplane.com/">
                Community Forums
            </a>
        </li>
    </ul>
</div>