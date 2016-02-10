<div id="headerbar" class="clearfix">

    <?php
    if ($page['breadcrumbs']) {
        echo $this->get_breadcrumb_title($page, $base_page);
    } else {
        echo $page['title'];
    }
    ?>
    
    <div class="pull-right">
        <a href="https://github.com/InvoicePlane/InvoicePlane-2">
            <i class="fa fa-github"></i>
        </a>
    </div>
    
</div>