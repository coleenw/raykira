<section id="rsvp">
    <div class="row row-center">
        <div class="columns-8 text-center">
            <div class="rsvp-form-container">
                <h2 class="section-heading">RSVP</h2>
                <h3 class="section-tagline">Kindly reply before <?php the_field('rsvp_by_date'); ?></h3>

                <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>
</section>