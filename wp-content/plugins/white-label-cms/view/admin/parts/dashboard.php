<div class="wlcms-body-wrapper">
    <div class="wlcms-body-header">
        <h2><?php _e('Default Panels', 'wlcms') ?></h2>
    </div>
    <div class="wlcms-body-main">
        <?php wlcms()->admin_view('parts/dashboard-default-panels'); ?>
    </div>
</div>
<div class="wlcms-body-wrapper">
    <div class="wlcms-body-header">
        <h2><?php _e('Custom Welcome Dashboard Panel', 'wlcms') ?></h2>
    </div>
    <div class="wlcms-body-main">
        <?php wlcms()->admin_view('parts/dashboard-custom-welcome-dashboard-panel'); ?>
    </div>
</div>
<div class="wlcms-body-wrapper">
    <div class="wlcms-body-header">
        <h2><?php _e('RSS Dashboard Panel', 'wlcms') ?></h2>
    </div>
    <div class="wlcms-body-main">
        <?php wlcms()->admin_view('parts/dashboard-rss-dashboard-panel'); ?>
    </div>
</div>