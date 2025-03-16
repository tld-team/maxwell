<?php
global $blocks_list;
$data = get_field( 'feature_creative' );
if ( ! empty( $data ) ):
	?>
    <section id="features" class="py-10 lg:py-20 <?php echo ! empty( $block["className"] ) ?? $block["className"];; ?>">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
				<?php if ( ! empty( $data['top_title'] ) || ! empty( $data['title'] ) || ! empty( $data['description'] ) ): ?>
                    <div class="mx-auto max-w-2xl text-center">
						<?php if ( ! empty( $data['top_title'] ) ): ?>
                            <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $data['top_title']; ?>
                </span>
						<?php endif ?>
						<?php if ( ! empty( $data['title'] ) ): ?>
							<?php print_heading( $blocks_list, $block['name'], $data['title'], 'mt-4 text-4xl font-medium capitalize text-default-950' ); ?>
						<?php endif ?>
						<?php if ( ! empty( $data['description'] ) ): ?>
							<?php echo $data['description']; ?>
						<?php endif ?>
                    </div>
				<?php endif; ?>
            </div>
            <!-- flex End -->
			<?php if ( ! empty( $data['features'] ) ): ?>
                <div class="grid grid-cols-1 items-center overflow-hidden rounded-md gap-3 md:grid-cols-2 xl:grid-cols-3">
					<?php foreach ( $data['features'] as $index => $feature ) : ?>
                        <div class="group p-10 h-full border border-default-200">
                            <div class="p-8 sm:p-10">
								<?php if ( ! empty( $feature['icon'] ) ): ?>
                                    <span class=""><i data-lucide="<?php echo $feature['icon'] ?>"
                                                      class="size-14 text-default-950"></i></span>
								<?php endif; ?>
								<?php if ( ! empty( $feature['title'] ) ): ?>
                                    <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
										<?php echo $feature['title'] ?>
                                    </h2>
								<?php endif; ?>
								<?php if ( ! empty( $feature['description'] ) ): ?>
                                    <div class="mb-6 text-base">
										<?php echo apply_filters( 'the_content', $feature['description'] ); ?>
                                    </div>
								<?php endif; ?>
								<?php if ( ! empty( $feature['link'] ) ): ?>
                                    <?php $icon_svg = '
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100">
                                        <path d="M18 8L22 12L18 16"/>
                                        <path d="M2 12H22"/>
                                    </svg>' ?>
									<?php parse_link($feature['link'], $icon=$icon_svg, 'text-lg font-medium text-default-900'); ?>
								<?php endif; ?>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
			<?php endif; ?>


			<?php if ( ! empty( $data['link'] ) ): ?>
                <div class="mt-4 flex justify-center">
	                <?php parse_link($data['link'], $icon='yes'); ?>
                </div>
			<?php endif; ?>
        </div>
        <!-- container End -->
    </section>
<?php endif; ?>