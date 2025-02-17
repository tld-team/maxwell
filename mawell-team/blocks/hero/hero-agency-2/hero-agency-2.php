<?php
$title = get_field( 'hero_agency_2_title' );
$subtitle = get_field( 'hero_agency_2_subtitle' );
$link = get_field( 'hero_agency_2_link' );
$bg_image = get_field( 'hero_agency_2_bg_image' );
$image = get_field( 'hero_agency_2_image' );
global $blocks_list;

?>
<!-- Hero Section Start -->
<?php if (!empty($bg_image)): ?>
<section id="home" style="background-image: url(<?php echo $bg_image; ?>);" class="py-10 <?php echo !empty($block["className"]) ?? $block["className"]; ?>">
<!--    TODO: Dve pozadinske slike-->
    <?php else: ?>
    <section id="home" class="py-10">
        <?php endif; ?>
    <div class="container">
        <div class="grid items-center gap-6 lg:grid-cols-2">
            <?php if (!empty($title) || !empty($subtitle)): ?>
            <div>
                <div class="max-w-lg text-center lg:text-start">
                    <?php if (!empty($title)): ?>
	                    <?php print_heading( $blocks_list, $block['name'], $title, 'mt-5 text-4xl font-medium text-default-950' ); ?>

                    <?php endif; ?>
                    <?php if (!empty($subtitle)): ?>
                    <div class="my-6 text-base">
                        <?php echo apply_filters( 'the_content', $subtitle ); ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($link)): ?>
                        <?php parse_link($link, $icon='yes'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if (!empty($image)): $image_src = get_image($image); ?>
            <div>
                <img
                    class="h-full w-full rounded-xl"
                    src="<?php echo $image_src['url']; ?>"
                    alt="<?php echo $image_src['alt']; ?>"
                />
            </div>
            <?php endif; ?>

        </div>
        <!-- grid End -->
    </div>
</section>
<!-- Hero end -->