<div id="watchvideomodal"
     class="hs-overlay pointer-events-none fixed start-0 top-0 z-[80] hidden h-full w-full overflow-y-auto overflow-x-hidden">
    <div
        class="m-3 mt-0 flex min-h-[calc(100%-3.5rem)] items-center opacity-0 transition-all ease-out hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:mx-auto sm:w-full sm:max-w-xl">
        <div class="pointer-events-auto flex w-full flex-col overflow-x-hidden rounded-xl">
            <iframe class="w-full" height="400" src="https://www.youtube.com/embed/NbR-wVOpJwA?si=OlR2e-UItbGilVlu"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
    </div>
</div>

<section id="join" class="py-10 lg:py-20">
    <div class="container">
        <div class="mx-auto max-w-2xl text-center">
            <span
                    class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">Starting
                with a Child</span>
            <h2 class="mt-4 text-3xl/snug font-medium text-default-950">
                Starting with a Child
            </h2>
            <p class="mt-5 text-base">
                Children growing up in poverty encounter significant challenges
                education and healthcare, social discrimination, and isolation.
            </p>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-3 gap-6">
                <div class="col-span-2">
                    <div class="group relative h-full">
                        <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/img-4.jpg' ?>" class="h-full w-full rounded-xl"
                             alt="" />

                        <div class="opacity-0 transition-all duration-700 group-hover:opacity-100">
                            <div
                                    class="absolute inset-0 flex h-full items-center justify-center rounded-xl bg-black/50">
                                <button
                                        class="relative flex size-20 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-default-950 ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                        data-hs-overlay="#watchvideomodal">
                                    <i data-lucide="play" class="size-7 fill-white stroke-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-span-2 End -->

                <div class="space-y-5">
                    <div class="group relative">
                        <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/img-5.jpg' ?>" class="rounded-xl" alt="" />

                        <div class="opacity-0 transition-all duration-700 group-hover:opacity-100">
                            <div
                                    class="absolute inset-0 flex h-full items-center justify-center rounded-xl bg-black/50">
                                <button
                                        class="relative flex size-14 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-default-950 ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                        data-hs-overlay="#watchvideomodal">
                                    <i data-lucide="play" class="size-5 fill-white stroke-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- col End -->

                    <div class="group relative">
                        <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/img-2.jpg' ?>" class="rounded-xl" alt="" />

                        <div class="opacity-0 transition-all duration-700 group-hover:opacity-100">
                            <div
                                    class="absolute inset-0 flex h-full items-center justify-center rounded-xl bg-black/50">
                                <button
                                        class="relative flex size-14 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-default-950 ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                        data-hs-overlay="#watchvideomodal">
                                    <i data-lucide="play" class="size-5 fill-white stroke-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- col End -->
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
    </div>
    <!-- Container End -->
</section>