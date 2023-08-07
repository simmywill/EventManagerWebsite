<?php

if (!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
    exit;
}

get_header();

while (have_posts()) {
    the_post();

?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image');
                                                                        echo $pageBannerImage['sizes']['pageBanner'];; ?> );">
        </div>
        <div class="page-banner__content container container--narrow">
            <h3 class="page-banner__title">Your suggestion and feedback matter to Us</h3>
            <div class="page-banner__intro">

            </div>
        </div>
    </div>




    <div class="container container--narrow page-section">
        <ul class="min-list link-list" id="my-notes">
            <?php
            $userNotes = new WP_Query(array(
                'post_type' => 'note',
                'posts_per_page' => -1,
                'author' => get_current_user_id()
            ));

            while ($userNotes->have_posts()) {
                $userNotes->the_post(); ?>
                <li data-id="<?php the_ID(); ?>">
                    <input readonly class="note-title-field" value="<?php echo esc_attr(get_the_title()); ?>">
                    <span class="edit-note"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</span>
                    <span style="color:red" class="delete-note"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span>
                    <textarea readonly class="note-body-field"><?php echo esc_attr(wp_strip_all_tags(get_the_content())); ?></textarea>
                    <span class="update-note btn btn--blue btn--small"><i class="fa fa-arrow-right" aria-hidden="true"></i> Save</span>
                </li>
            <?php }

            ?>
        </ul>
    </div>

<?php }

get_footer();

?>