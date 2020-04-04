<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>




<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>




    <!-- =====================================
            ==== Start account -->
    <div class="page-account">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="account-wrapper">



                        <ul class="account-tab-list nav">
                            <li class="active"><a data-toggle="tab" href="#login"><?php esc_html_e( 'Login', 'woocommerce' ); ?></a></li>
                            <li><a data-toggle="tab" href="#register"><?php esc_html_e( 'Register', 'woocommerce' ); ?></a></li>
                        </ul>

                        <div class="tab-content">


                            <div id="login" class="tab-pane fade in active">

                                <div class="account-form-container login-form">
                                    <div class="account-form">



                                        <form class="woocommerce-form woocommerce-form-login login" method="post">

                                            <?php do_action( 'woocommerce_login_form_start' ); ?>

                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<!--                                                <label for="username">--><?php //esc_html_e( 'Username or email address', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
                                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<!--                                                <label for="password">--><?php //esc_html_e( 'Password', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
                                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" autocomplete="current-password" />
                                            </p>

                                            <?php do_action( 'woocommerce_login_form' ); ?>


                                            <div class="button-box">
                                                <div class="login-toggle-btn d-flex justify-content-between">
                                                    <div class="remember d-flex">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                                                        </label>


                                                    </div>
                                                    <div class="forgot">
                                                        <p class="woocommerce-LostPassword lost_password">
                                                            <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Forgot Password?', 'woocommerce' ); ?></a>
                                                        </p>


                                                    </div>
                                                </div>
                                                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                                <button type="submit" class="btn btn-default btn-normal woocommerce-button  woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Log in', 'woocommerce' ); ?></span></button>
<!--                                                <button type="submit" class="btn btn-default btn-normal"><span>Login</span></button>-->
                                            </div>



                                            <?php do_action( 'woocommerce_login_form_end' ); ?>

                                        </form>
                                    </div>
                                </div>
                            </div>


                            <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
                            <div id="register" class="tab-pane fade">
                                <div class="account-form-container register-form">
                                    <div class="account-form">

<!--                                        <form action="#" method="post">-->
<!--                                            <input type="text" required="" name="first-name" placeholder="First Name">-->
<!--                                            <input type="text" required="" name="last-name" placeholder="Last Name">-->
<!--                                            <input name="user-email" required="" type="email" placeholder="Email">-->
<!--                                            <input type="password" required="" placeholder="Password">-->
<!--                                            <div class="button-box">-->
<!--                                                <button type="submit" class="btn btn-default btn-normal"><span>Register</span></button>-->
<!--                                            </div>-->
<!--                                        </form>-->


                                        <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

                                            <?php do_action( 'woocommerce_register_form_start' ); ?>

                                            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<!--                                                    <label for="reg_username">&nbsp;<span class="required">*</span></label>-->
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                                </p>

                                            <?php endif; ?>

                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<!--                                                <label for="reg_email">&nbsp;<span class="required">*</span></label>-->
                                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                            </p>

                                            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<!--                                                    <label for="reg_password">&nbsp;<span class="required">*</span></label>-->
                                                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" autocomplete="new-password" />
                                                </p>

                                            <?php else : ?>

                                                <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

                                            <?php endif; ?>

                                            <?php do_action( 'woocommerce_register_form' ); ?>

<!--                                            <div class="button-box">-->
<!--                                                <button type="submit" class="btn btn-default btn-normal"><span>Register</span></button>-->
<!--                                            </div>-->

                                            <p class="woocommerce-FormRow form-row">
                                                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                                                <button type="submit" class="btn btn-default btn-normal woocommerce-Button woocommerce-button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Register', 'woocommerce' ); ?></span></button>
                                            </p>

                                            <?php do_action( 'woocommerce_register_form_end' ); ?>

                                        </form>




                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
<?php endif; ?>
<!-- =====================================
    ==== End account -->
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>









<!--<div class="u-columns col2-set" id="customer_login">-->
<!---->
<!--	<div class="u-column1 col-1">-->
<!---->
<?php //endif; ?>
<!---->
<!--		<h2>--><?php //esc_html_e( 'Login', 'woocommerce' ); ?><!--</h2>-->
<!---->
<!--		<form class="woocommerce-form woocommerce-form-login login" method="post">-->
<!---->
<!--			--><?php //do_action( 'woocommerce_login_form_start' ); ?>
<!---->
<!--			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
<!--				<label for="username">--><?php //esc_html_e( 'Username or email address', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
<!--				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="--><?php //echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?><!--" />--><?php //// @codingStandardsIgnoreLine ?>
<!--			</p>-->
<!--			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
<!--				<label for="password">--><?php //esc_html_e( 'Password', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
<!--				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />-->
<!--			</p>-->
<!---->
<!--			--><?php //do_action( 'woocommerce_login_form' ); ?>
<!---->
<!--			<p class="form-row">-->
<!--				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">-->
<!--					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>--><?php //esc_html_e( 'Remember me', 'woocommerce' ); ?><!--</span>-->
<!--				</label>-->
<!--				--><?php //wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
<!--				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="--><?php //esc_attr_e( 'Log in', 'woocommerce' ); ?><!--">--><?php //esc_html_e( 'Log in', 'woocommerce' ); ?><!--</button>-->
<!--			</p>-->
<!--			<p class="woocommerce-LostPassword lost_password">-->
<!--				<a href="--><?php //echo esc_url( wp_lostpassword_url() ); ?><!--">--><?php //esc_html_e( 'Lost your password?', 'woocommerce' ); ?><!--</a>-->
<!--			</p>-->
<!---->
<!--			--><?php //do_action( 'woocommerce_login_form_end' ); ?>
<!---->
<!--		</form>-->
<!---->
<?php //if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
<!---->
<!--	</div>-->
<!---->
<!--	<div class="u-column2 col-2">-->
<!---->
<!--		<h2>--><?php //esc_html_e( 'Register', 'woocommerce' ); ?><!--</h2>-->
<!---->
<!--		<form method="post" class="woocommerce-form woocommerce-form-register register" --><?php //do_action( 'woocommerce_register_form_tag' ); ?><!-- >-->
<!---->
<!--			--><?php //do_action( 'woocommerce_register_form_start' ); ?>
<!---->
<!--			--><?php //if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
<!---->
<!--				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
<!--					<label for="reg_username">--><?php //esc_html_e( 'Username', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
<!--					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="--><?php //echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?><!--" />--><?php //// @codingStandardsIgnoreLine ?>
<!--				</p>-->
<!---->
<!--			--><?php //endif; ?>
<!---->
<!--			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
<!--				<label for="reg_email">--><?php //esc_html_e( 'Email address', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
<!--				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="--><?php //echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?><!--" />--><?php //// @codingStandardsIgnoreLine ?>
<!--			</p>-->
<!---->
<!--			--><?php //if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
<!---->
<!--				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
<!--					<label for="reg_password">--><?php //esc_html_e( 'Password', 'woocommerce' ); ?><!--&nbsp;<span class="required">*</span></label>-->
<!--					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />-->
<!--				</p>-->
<!---->
<!--			--><?php //else : ?>
<!---->
<!--				<p>--><?php //esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?><!--</p>-->
<!---->
<!--			--><?php //endif; ?>
<!---->
<!--			--><?php //do_action( 'woocommerce_register_form' ); ?>
<!---->
<!--			<p class="woocommerce-FormRow form-row">-->
<!--				--><?php //wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
<!--				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="--><?php //esc_attr_e( 'Register', 'woocommerce' ); ?><!--">--><?php //esc_html_e( 'Register', 'woocommerce' ); ?><!--</button>-->
<!--			</p>-->
<!---->
<!--			--><?php //do_action( 'woocommerce_register_form_end' ); ?>
<!---->
<!--		</form>-->
<!---->
<!--	</div>-->
<!---->
<!--</div>-->
<?php //endif; ?>
<!---->
<?php //do_action( 'woocommerce_after_customer_login_form' ); ?>
