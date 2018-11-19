<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.11.2018
 * Time: 12:36
 */


function banner_post_type() {
	$labels = array(
		'name'               => 'Баннеры',
		'singular_name'      => 'Баннер',
		'add_new'            => 'Добавить новый баннер',
		'add_new_item'       => 'Добавить новый баннер',
		'edit_item'          => 'Редактировать баннер',
		'view_item'          => 'Показать баннер',
		'search_items'       => 'Поиск баннеров',
		'not_found'          => 'Не найдено ни одного баннера',
		'not_found_in_trash' => 'Баннеров в корзине нет',
		'menu_name'          => 'Баннеры',
		'parent_item_colon'  => '',
		'all_items'          => 'Все баннеры'
	);

	$args = array(
		'labels'      => $labels,
		'supports'    => array(),
		'public'      => false,
		'show_ui'     => true,
		'menu_icon'   => 'dashicons-awards',
		'has_archive' => false
	);
	register_post_type( 'banner', $args );
}

add_action( 'init', 'banner_post_type' );


add_action('init', 'banner_remove_support',100);
function banner_remove_support(){
	remove_post_type_support( 'banner', 'editor');
}


add_action( 'add_meta_boxes', 'banner_metabox_register' );
function banner_metabox_register() {
	add_meta_box( 'banner_metabox', 'Banner images', 'banner_metabox_frontend', 'banner' );
}

function banner_metabox_frontend( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'banner_metabox_nonce' );
	wp_enqueue_media();
	$banner = get_post_meta( $post->ID, 'banner', true );
	?>

    <table class="metabox-table">
        <tr class="js-img-loader-container">
            <td>
                <label for="ll-banner-xl">XL banner pic</label>
                <input class="js-input" id="ll-banner-xl" type="text" name="banner[xl]"
                       value="<?php echo isset($banner['xl']) ? $banner['xl'] : '' ?>" hidden>
            </td>
            <td>
                <div class="tax-img">
	                <?php
                    $preview = "";
	                if ( isset($banner['xl']) ) {
		                $preview = 'background-image: url(' . $banner['xl'] . ')';
	                }
	                ?>
                    <div class="tax-img__preview js-img-preview" style="<?php echo $preview?>"></div>
                    <div class="tax-img__buttons">
                        <div class="tax-img__button-upload">
                            <button class="js-upload-btn button">Upload image</button>
                        </div>
                        <div class="tax-img__button-remove">
                            <button class="tax-img__button-remove js-remove-btn button">Remove image</button>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr class="js-img-loader-container">
            <td>
                <label for="ll-banner-md">MD banner pic</label>
                <input class="js-input" id="ll-banner-md" type="text" name="banner[md]"
                       value="<?php echo isset($banner['md']) ? $banner['md'] : '' ?>" hidden>
            </td>
            <td>
                <div class="tax-img">
	                <?php
	                $preview = "";
	                if ( isset($banner['md']) ) {
		                $preview = 'background-image: url(' . $banner['md'] . ')';
	                }
	                ?>
                    <div class="tax-img__preview js-img-preview" style="<?php echo $preview?>"></div>
                    <div class="tax-img__buttons">
                        <div class="tax-img__button-upload">
                            <button class="js-upload-btn button">Upload image</button>
                        </div>
                        <div class="tax-img__button-remove">
                            <button class="tax-img__button-remove js-remove-btn button">Remove image</button>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr class="js-img-loader-container">
            <td>
                <label for="ll-banner-sm">SM banner pic</label>
                <input class="js-input" id="ll-banner-sm" type="text" name="banner[sm]"
                       value="<?php echo isset($banner['sm']) ? $banner['sm'] : '' ?>" hidden>
            </td>
            <td>
                <div class="tax-img">
	                <?php
	                $preview = "";
	                if ( isset($banner['sm']) ) {
		                $preview = 'background-image: url(' . $banner['sm'] . ')';
	                }
	                ?>
                    <div class="tax-img__preview js-img-preview" style="<?php echo $preview?>"></div>
                    <div class="tax-img__buttons">
                        <div class="tax-img__button-upload">
                            <button class="js-upload-btn button">Upload image</button>
                        </div>
                        <div class="tax-img__button-remove">
                            <button class="tax-img__button-remove js-remove-btn button">Remove image</button>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label for="ll-banner-bgc">Banner background color</label>
            </td>
            <td>
                <input id="ll-banner-bgc" type="text" name="banner[bgc]"
                       value="<?php echo isset($banner['bgc']) ? $banner['bgc'] : '' ?>">
            </td>
        </tr>

    </table>

    <style>
        .metabox-table td {
            padding: 5px;
        }

        .metabox-table input {
            width: 100%;
        }

        .tax-img {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .tax-img__button-remove {
            margin-top: 20px;
        }

        .tax-img__preview {
            height: 150px;
            width: 150px;
            border: 1px solid #ddd;
            margin-right: 15px;
            background: no-repeat center;
            background-size: contain;
        }
    </style>

    <script>
        jQuery(document).ready(function ($) {
            $('.js-img-loader-container').click(function (event) {
                event.preventDefault();

                const imgPreview = $(this).find('.js-img-preview');
                const input = $(this).find('.js-input');

                if (event.target.classList.contains('js-upload-btn')) {
                    let frame;
                    if (frame) {
                        frame.open();
                        return;
                    }

                    frame = wp.media();
                    frame.on("select", function () {
                        const attachment = frame.state().get("selection").first();
                        frame.close();
                        imgPreview.css({
                            backgroundImage: 'url(' + attachment.attributes.url + ')'
                        });
                        input.val(attachment.attributes.url);
                    });
                    frame.open();
                } else if (event.target.classList.contains('js-remove-btn')) {
                    imgPreview.css({
                        backgroundImage: 'none'
                    });
                    input.val('');
                }
            });
        });
    </script>
	<?php
}

add_action( 'save_post', 'banner_metabox_save' );
function banner_metabox_save( $post_id ) {
	if ( ! isset( $_POST['banner_metabox_nonce'] )
	     || ! wp_verify_nonce( $_POST['banner_metabox_nonce'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	if ( isset( $_POST['banner'] ) ) {
		update_post_meta( $post_id, 'banner', $_POST['banner'] );
	}

	return $post_id;
}








