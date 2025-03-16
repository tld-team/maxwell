<?php
global $blocks_list;
$data = get_field( 'feature_1' );
if ( ! empty( $data ) ):
	?>
    <section id="features" class="pt-10 lg:pt-20 <?php echo !empty($block["className"]) ?? $block["className"];; ?>">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $data['top_title']; ?>
                </span>
					<?php endif; ?>
					<?php if ( ! empty( $data['title'] ) ): ?>
                        <?php print_heading( $blocks_list, $block['name'], $data['title'], 'mt-4' ); ?>
					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="mt-5 text-base text-default-900">
							<?php echo apply_filters( 'the_content', $data['content'] ); ?>
                        </div>
					<?php endif; ?>
					<?php if ( ! empty( $data['link'] ) ): ?>
                        <div class="group mt-5">
	                        <?php parse_link($data['link'], $icon='yes'); ?>
                        </div>
					<?php endif; ?>
                </div>

				<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ); ?>
                    <div>
                        <img
                                src="<?php echo $image['url']; ?>"
                                class="h-full w-full rounded-lg"
                                alt="<?php echo $image['alt']; ?>"
                        />
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>