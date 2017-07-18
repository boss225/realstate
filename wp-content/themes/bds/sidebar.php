<?php global $ss_options; ?>
<div class="side-menu">
    <?php system_square_show_menu('left-menu','list-service'); ?>
    <?php system_square_display_widget('sidebar-common'); ?>
         <?php //system_square_show_widget_by_language('sidebar-common','sidebar-common-ja'); ?>
    <?php add_widget_specific(); ?>
    <div class="contact">
        <?php if(!empty($ss_options['before-title'])) : ?>
            <h3><?php echo $ss_options['before-title']; ?></h3>
        <?php endif; ?>
        <div class="phone-group">
            <?php system_square_display_widget('sidebar-contact');?>
            <?php
               //system_square_show_widget_by_language('sidebar-contact','sidebar-contact-ja');
            ?>
        </div>
        <?php if(!empty($ss_options['contact-link'])) : ?>
            <a class="contact-link" href="<?php echo check_link($ss_options['contact-link'])?>"><?php echo $ss_options['contact-title']; ?></a>
        <?php endif; ?>
    </div>
</div>