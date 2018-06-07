<section id="event" <?php section_bg('event_section_background'); ?>>
    <div class="row">
        <div class="columns-10 right-2">
            <h2 class="section-heading"><?php the_field('event_section_title'); ?></h2>
            <h3 class="section-tagline"><?php the_field('event_address'); ?></h3>
    
            <?php if(have_rows('event_details')): ?>
                <table class="event-details">

                    <?php while(have_rows('event_details')): the_row(); ?>
                        <tr>
                            <th><?php the_sub_field('detail_label'); ?></th>
                            <td>
                                <?php the_sub_field('detail_info'); ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>

                </table>
            <?php endif; ?>

        </div>

        <?php if(get_field('google_directions')): ?>
            <div class="columns-12 text-center">
                <a href="<?php the_field('google_directions'); ?>" class="button" target="_blank">directions</a>
            </div>
        <?php endif; ?>

    </div>

</section>