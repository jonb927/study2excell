<!-- Breadcrumbs  -->

            <div id="bread">
                <ul class="breadcrumb">
                    <li><a href="http://localhost:8888/index.php/s2e">Home</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/login">Login</a>
                </ul>
            </div>

            <!-- Main content section is divided into main CTA and Sub CTA 
            Main CTA                                                       -->

            <div class="span12">
                <div class="row">
                    <div class="span8 offset2"id="login">
                        <h5>Login to your account</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2e/loginValidation'); ?>
                            <ul>
                                <li><label>Email<input type="text" id="email" name="email" placeholder="example@site.com" width="200"></label></li>
                                <li><label>Password<input type="password" id="password" name="password" ></label></li>
                            </ul>
                            <button type"submit" name="login">Login</button>   
                        </form>
                       <p>Not a Member?<a href="http://localhost:8888/index.php/s2e/register">Signup for a free account</a></p>
                    </div>
                </div>
            </div>