<?php
global $blocks_list;
$data = get_field( 'faq_agency_2' );
if ( ! empty( $data ) ):
$top_title = $data['top_title' ];
$title = $data['title'];
$image = $data['image' ];
$questions = $data['questions' ];

?>
<!-- Start Faq -->
<section id="faq" class="py-10 lg:py-20 <?php echo !empty($block["className"]) ?? $block["className"];; ?>">
    <div class="container">
        <?php if ( !empty($top_title) || !empty($title) ): ?>
        <div class="mb-10 flex items-end justify-between">
            <div class="mx-auto max-w-2xl text-center">
                <?php if ( !empty($top_title) || !empty($title) ): ?>
                <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $top_title; ?>
                </span>
                <?php endif; ?>
                <?php if ( !empty($top_title) || !empty($title) ): ?>
	                <?php print_heading($blocks_list, $block['name'],$title, 'my-4 text-3xl font-medium capitalize text-default-950' );?>
                <?php endif; ?>
            </div>
        </div><!-- flex End-->
        <?php endif; ?>

        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
            <?php if (!empty($image)): $image_data = get_image($image)?>
            <div>
                <img src="<?php echo $image_data['url'] ?>" alt="<?php echo $image_data['alt'] ?>" />
            </div><!-- col End-->
            <?php endif; ?>

            <div class="lg:pb-20">
                <div class="hs-accordion-group space-y-4">
                    <?php foreach ($questions as $index => $question) : ?>
                        <?php if ($index == 0): ?>
                        <div class="hs-accordion active overflow-hidden rounded-lg border border-default-200" id="faq-<?php echo $index?>">
                        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-accordion-<?php echo $index?>">
                            <h2 class="flex text-base font-medium">
                                <?php echo $question['questions']; ?>
                            </h2>
                            <i data-lucide="chevron-up"
                                class="size-4 transition-all duration-300 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-accordion-<?php echo $index?>"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1">
                            <div class="px-6 pb-4 pt-0">
                                <div class="text-sm"><?php echo apply_filters( 'the_content', $question['answer'] ); ?></div>
                            </div>
                        </div>
                    </div><!-- col End-->
                        <?php else: ?>
                        <div class="hs-accordion overflow-hidden rounded-lg border border-default-200" id="faq-<?php echo $index?>">
                            <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all" aria-controls="faq-<?php echo $index?>">
                                <h5 class="flex text-base font-medium">
                                    <?php echo $question['questions']; ?>
                                </h5>
                                <i data-lucide="chevron-up"
                                   class="size-4 transition-all duration-300 hs-accordion-active:-rotate-180"></i>
                            </button>
                            <div id="faq-<?php echo $index?>"
                                 class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="faq-<?php echo $index?>">
                                <div class="px-6 pb-4 pt-0 text-sm">
                                    <?php echo apply_filters( 'the_content', $question['answer'] ); ?>
                                </div>
                            </div>
                        </div><!-- col End-->
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- col End-->
        </div>
        <!-- grid End-->
    </div>
    <!-- container End-->
</section>
<!-- End faq -->
<?php endif; ?>