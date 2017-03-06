<nav id="side_nav">
    <ul>
        <li>
            <a href="#">
                <span class="fa fa-list"></span>
                <span class="nav_title">Facilities Type </span>
            </a>
            <div class="sub_panel">
                <div class="side_inner">
                    <h4 class="panel_heading panel_heading_first">Facilities Type Manage</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/facilities/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/facilities">
                                Manage </a></li>
                    </ul>

                </div>
            </div>
        </li>
        <li>
            <a href="#">
                <span class=" ion-android-location "></span>
                <span class="nav_title">Property </span>
            </a>

            <div class="sub_panel">
                <div class="side_inner">
                    <h4 class="panel_heading panel_heading_first">Property Manage</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/property/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/property">
                                Manage </a></li>
                    </ul>

                </div>
            </div>
        </li>

        <li>
            <a href="<?= base_url() ?>admin/slider/create">
                <span class=" ion-image "></span>
                <span class="nav_title"> Slider </span>
            </a>
        </li>
    </ul>
</nav>