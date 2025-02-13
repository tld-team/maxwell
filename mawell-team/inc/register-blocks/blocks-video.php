<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_video' );
function acf_blocks_init_video(): void {
    if ( function_exists( 'acf_register_block_type' ) ) {
        /** ==============================
         * WatchVideo Charity
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'watchVideo-charity',
            'title'           => 'WatchVideo Charity',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/video/watchVideo-charity/watchVideo-charity.php',
        ) );


        /** ==============================
         * WatchVideo Finance
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'watchVideo-finance',
            'title'           => 'WatchVideo Finance',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/video/watchVideo-finance/watchVideo-finance.php',
        ) );
    }
}
