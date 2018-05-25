<section id="friends">
    <div class="row">
        <div class="columns-12 text-center">
            <h2 class="section-heading">Friends</h2>

            <div class="friend-featured">
                <div class="friend">
                    <div class="friend-thumb">
                        <?php $maid_of_honor = get_field('maid_of_honor_photo'); ?>
                        <img src="<?php echo $maid_of_honor['sizes']['bridal_party']; ?>" alt="">
                    </div>
                    <div class="friend-name">
                        <?php the_field('maid_of_honor_name'); ?>
                    </div>
                    <div class="friend-title">
                        Maid of Honor
                    </div>
                </div>
            </div>

            <?php if(have_rows('bridesmaids')): ?>

                <ul class="friends block-grid-5 block-grid-center">

                    <?php while(have_rows('bridesmaids')): the_row(); ?>
                        <li>
                            <div class="friend">
                                <div class="friend-thumb">
                                    <?php $person = get_sub_field('bridesmaid_photo'); ?>
                                    <img src="<?php echo $person['sizes']['bridal_party']; ?>" alt="">
                                </div>
                                <div class="friend-name">
                                    <?php the_sub_field('bridesmaid_name'); ?>
                                </div>
                                <div class="friend-title">
                                    Bridesmaid
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>

            <?php endif; ?>

            <div class="friend-featured">
                <div class="friend">
                    <div class="friend-thumb">
                        <?php $best_man = get_field('best_man_photo'); ?>
                        <img src="<?php echo $best_man['sizes']['bridal_party']; ?>" alt="">
                    </div>
                    <div class="friend-name">
                        <?php the_field('best_man_name'); ?>
                    </div>
                    <div class="friend-title">
                        Best Man
                    </div>
                </div>
            </div>

            <?php if(have_rows('groomsmen')): ?>

                <ul class="friends block-grid-5 block-grid-center">

                    <?php while(have_rows('groomsmen')): the_row(); ?>
                        <li>
                            <div class="friend">
                                <div class="friend-thumb">
                                    <?php $person = get_sub_field('groomsman_photo'); ?>
                                    <img src="<?php echo $person['sizes']['bridal_party']; ?>" alt="">
                                </div>
                                <div class="friend-name">
                                    <?php the_sub_field('groomsman_name'); ?>
                                </div>
                                <div class="friend-title">
                                    Groomsman
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>

            <?php endif; ?>

        </div>
    </div>
</section>