<?php
$data = get_field( 'feature_3' );
if ( ! empty( $data ) ):
	?>
    <section class="py-10 lg:py-20 <?php echo ! empty( $block["className"] ) ?? $block["className"];; ?>">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                            <?php echo $data['top_title'] ?>
                        </span>
					<?php endif; ?>
					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
							<?php echo $data['title'] ?>
                        </h2>
					<?php endif; ?>

					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="mt-5 text-base">
							<?php echo apply_filters( 'the_content', $data['content'] ); ?>
                        </div>

					<?php endif; ?>

					<?php if ( ! empty( $data['link'] ) ): ?>
                        <div class="group mt-5">
                            <a
                                    href="<?php echo $data['link']['url'] ?>"
                                    class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                            >
								<?php echo $data['link']['title'] ?>

                                <i data-lucide="move-right" class="inline-block size-6"></i>
                            </a>
                        </div>

					<?php endif; ?>
                </div>

                <div class="relative">
					<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ) ?>
                        <img
                                src="<?php echo $image['url'] ?>"
                                srcset="<?php echo $image['srcset'] ?>"
                                class="rounded-xl"
                                alt="<?php echo $image['alt'] ?>"
                        />
					<?php endif; ?>
                    <div class="hidden lg:block">

						<?php if ( ! empty( $data['top_section'] ) ): ?>
                            <div class="absolute -end-20 -top-20">
                                <div class="max-w-md">
                                    <div class="rounded-xl border border-default-200 bg-white p-6 dark:bg-default-50">

										<?php if ( ! empty( $data['top_section']['title'] ) ): ?>
                                            <h2 class="text-xl font-medium text-default-950">
												<?php echo $data['top_section']['title'] ?>
                                            </h2>
										<?php endif; ?>
										<?php if ( ! empty( $data['top_section']['content'] ) ): ?>
                                            <div class="mt-4 text-base">
												<?php echo apply_filters( 'the_content', $data['top_section']['title'] ); ?>
                                            </div>
										<?php endif; ?>
                                    </div>
                                </div>
                            </div>

						<?php endif; ?>
						<?php if ( ! empty( $data['bottom_section'] ) ): ?>
                            <div class="absolute -bottom-8 -start-20">
                                <div class="inline-block">
                                    <div
                                            class="rounded-xl border border-default-200 bg-white p-5 dark:bg-default-50"
                                    >
                                        <h4 class="text-xl font-medium text-default-950">
											<?php echo $data['bottom_section']['title'] ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>

						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>