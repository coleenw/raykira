<section id="about-us">

    <?php if(get_field('about_section_title')): ?>
        <div class="row">
            <div class="columns-10 column-center">
                <h2 class="section-heading text-center"><?php the_field('about_section_title'); ?></h2>
            </div>
        </div>
    <?php endif; ?>

    <div class="row row-center">
        <div class="columns-6">
            <div class="bio text-center">
                <div class="bio-desc">
                    <?php the_field('about_section_content'); ?>
                </div>
            </div>
        </div>
    </div>

</section>