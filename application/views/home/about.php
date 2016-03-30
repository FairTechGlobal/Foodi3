<!-- About Section -->
<section class="success" style="margin-left: 5%; margin-right: 5%; margin-top: 3%">
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo base_url()."assets/images/cv.jpg"?>" alt="...">
                <div class="caption">
                    <h3>CV</h3>
                    <p>Create your Cv, save it, print it in all the formats available and find a Job.</p>
                    <p><a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-primary" role="button">Create CV</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo base_url()."assets/images/learn.jpg"?>" alt="...">
                <div class="caption">
                    <h3>Learn Cooking</h3>
                    <p>Learn how to make your favourite meal, experiment and post your own recipes</p>
                    <p><a href="#" class="btn btn-primary" role="button">Learn</a> <a href="#" class="btn btn-default" role="button">Post Recipe</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo base_url()."assets/images/job2.jpg"?>" alt="...">
                <div class="caption">
                    <h3>Find Cooking Jobs</h3>
                    <p>You have the skill? We have the right people looking for that skill.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Find a job</a> <a href="#" class="btn btn-default" role="button">Post Job</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo base_url()."assets/images/meal.jpg"?>" alt="...">
                <div class="caption">
                    <h3>Enjoy Meals</h3>
                    <p>Don't know where to have a good time, a good meal? We know it all. Based on your recommendations and ratings you will never land in the wrong place</p>
                    <p><a href="#" class="btn btn-primary" role="button">Find a Restaurant</a> <a href="#" class="btn btn-default" role="button">Recommend</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; margin-top: 10%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center" style="background-color: #FE7F2D">
                <h2 style="text-align: center">Foodi3</h2>
                <!--                <img  id="img_logo" src="--><?php //echo base_url("assets/images/logo.gif"); ?><!--" alt="" >-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">


                <!-- Begin # Login Form -->
                <div id="login-form">
                    <?php echo form_open('index.php/login_controller/login');?>
                    <?php echo validation_errors();?>
                    <div class="modal-body" style="width: 70%; margin-left: 15%">
                        <div id="div-login-msg">
                        </div>
                        <input id="login_username" name="username" class="form-control" type="text" placeholder="Username..." required>
                        </br>
                        <input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>

                    </div>
                    <div class="modal-footer">
                        <div style="width: 50%; margin-left: 25%">
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login"/>
                        </div>
                        </br>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
                <!-- End # Login Form -->
                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->


                <!-- Begin | Register Form -->
                <div id="register-form" style="display:none;">
                    <?php echo form_open('index.php/login_controller/register');?>
                    <?php $this->load->helper('string');?>
                    <?php echo validation_errors();?>
                    <div class="modal-body">

                        <input id="register_firstname" name="first_name" class="form-control" type="text" placeholder="First name..." required>
                        </br>
                        <input id="register_surname" name="last_name" class="form-control" type="text" placeholder="Last Name..." required>
                        </br>
                        <input id="register_email" name="email" class="form-control" type="text" placeholder="email@domain.com" required>
                        </br>
                        <input id="register_password" name="password" class="form-control" type="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>

                        <div>
                            <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

                </div>
                <!--                --><?php //echo form_close(); ?>
                <!-- End | Register Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->
<script>
    /* #####################################################################
     #
     #   Project       : Modal Login with jQuery Effects
     #   Author        : Rodrigo Amarante (rodrigockamarante)
     #   Version       : 1.0
     #   Created       : 07/29/2015
     #   Last Change   : 08/04/2015
     #
     ##################################################################### */

    $(function() {

        var $formLogin = $('#login-form');
        var $formLost = $('#lost-form');
        var $formRegister = $('#register-form');
        var $divForms = $('#div-forms');
        var $modalAnimateTime = 300;
        var $msgAnimateTime = 150;
        var $msgShowTime = 2000;

//        $("form").submit(function () {
//            switch(this.id) {
//                case "login-form":
//                    var $lg_username=$('#login_username').val();
//                    var $lg_password=$('#login_password').val();
//                    if ($lg_username == "ERROR") {
//                        msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
//                    } else {
//                        msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
//                    }
//                    return false;
//                    break;
//                case "lost-form":
//                    var $ls_email=$('#lost_email').val();
//                    if ($ls_email == "ERROR") {
//                        msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
//                    } else {
//                        msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
//                    }
//                    return false;
//                    break;
//                case "register-form":
//                    var $rg_username=$('#register_username').val();
//                    var $rg_email=$('#register_email').val();
//                    var $rg_password=$('#register_password').val();
//                    if ($rg_username == "ERROR") {
//                        msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
//                    } else {
//                        msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
//                    }
//                    return false;
//                    break;
//                default:
//                    return false;
//            }
//            return false;
//        });

        $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
        $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
        $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
        $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
        $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
        $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

        function modalAnimate ($oldForm, $newForm) {
            var $oldH = $oldForm.height();
            var $newH = $newForm.height();
            $divForms.css("height",$oldH);
            $oldForm.fadeToggle($modalAnimateTime, function(){
                $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                    $newForm.fadeToggle($modalAnimateTime);
                });
            });
        }

        function msgFade ($msgId, $msgText) {
            $msgId.fadeOut($msgAnimateTime, function() {
                $(this).text($msgText).fadeIn($msgAnimateTime);
            });
        }

        function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
            var $msgOld = $divTag.text();
            msgFade($textTag, $msgText);
            $divTag.addClass($divClass);
            $iconTag.removeClass("glyphicon-chevron-right");
            $iconTag.addClass($iconClass + " " + $divClass);
            setTimeout(function() {
                msgFade($textTag, $msgOld);
                $divTag.removeClass($divClass);
                $iconTag.addClass("glyphicon-chevron-right");
                $iconTag.removeClass($iconClass + " " + $divClass);
            }, $msgShowTime);
        }
    });
</script>