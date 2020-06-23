<?php $urls = $this->uri->segment(1) ?>
<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}
    </script>

    <ul class="nav nav-list">
        <li class="<?= $urls == "welcome" ? "active" : null ?>">
            <a href="<?= site_url('welcome') ?>">
                <i class="menu-icon icon-home4"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?= $urls == "tindakan" ? "active open" : null ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon icon-grid4"></i>
                <span class="menu-text">Master Data</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="<?= $urls == "tindakan" ? "active" : null ?>">
                    <a href="<?= site_url('tindakan') ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tindakan
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>