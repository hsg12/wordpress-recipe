<?php

function bg_theme_opts_page() {
    
    $opts = get_option( 'bg_opts' );
?>

<div class="wrap">
    <div class="card app-card card-inverse card-success">
        <div class="card-header">
            <h3 class="card-title"><?php _e( 'Blog Theme Settings', 'blog' ); ?></h3>
        </div>
        <div class="card-body">

            <?php if ( isset($_GET['status']) && $_GET['status'] == 1 ) : ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Success!
                </div>
            <?php endif; ?>

            <form method="post" action="admin-post.php" id="bg_theme_options_form">
                <input type="hidden" name="action" value="bg_save_options">
                <?php wp_nonce_field( 'bg_options_verify' ); ?>
                
                <h4><?php _e( 'Favicon', 'blog' ); ?></h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Favicon Image" name="bg_inputFaviconImg" value="<?php echo $opts['favicon']; ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="bg_uploadFaviconBtn">
                            <?php _e( 'Upload Favicon', 'blog' ); ?>
                        </button>
                    </span>
                </div>
                <hr>
                
                <h4><?php _e( 'Social Icons', 'blog' ); ?></h4>
                <div class="form-group">
                    <label><?php _e( 'Twitter', 'blog' ); ?></label>
                    <input type="text" class="form-control" name="bg_inputTwitter" value="<?php echo $opts['twitter']; ?>">
                </div>
                <div class="form-group">
                    <label><?php _e( 'Facebook', 'blog' ); ?></label>
                    <input type="text" class="form-control" name="bg_inputFacebook" value="<?php echo $opts['facebook']; ?>">
                </div>
                <div class="form-group">
                    <label><?php _e( 'YouTube', 'blog' ); ?></label>
                    <input type="text" class="form-control" name="bg_inputYouTube" value="<?php echo $opts['youtube']; ?>">
                </div>
                <hr>
                
                <h4><?php _e( 'Logo', 'blog' ); ?></h4>
                <div class="form-group">
                    <label><?php _e( 'Logo Type', 'blog' ); ?></label>
                    <select class="form-control" name="bg_inputLogoType">
                        <option value="1"><?php _e( 'Site Name', 'blog' ); ?></option>
                        <option value="2" <?php echo $opts['logo_type'] == 2 ? 'selected' : ''; ?>><?php _e( 'Image', 'blog' ); ?></option>
                    </select>
                </div>
                <div class="input-group app-upload-image">
                    <input type="text" class="form-control" placeholder="Logo Image" name="bg_inputLogoImg" value="<?php echo $opts['logo_image']; ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="bg_uploadLogoImgBtn">
                            <?php _e( 'Upload', 'blog' ); ?>
                        </button>
                    </span>
                </div>
                <hr>
                
                <h4><?php _e( 'Footer', 'blog' ); ?></h4>
                <div class="form-group">
                    <label><?php _e( 'Footer Text (HTML Allowed)', 'blog' ); ?></label>
                    <textarea class="form-control" name="bg_inputFooter"><?php echo stripslashes_deep( $opts['footer'] ); ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        <?php _e( 'Update', 'blog' ); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
}
