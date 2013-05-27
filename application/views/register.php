
            <!-- Breadcrumbs  -->

            <div id="bread">
                <ul class="breadcrumb">
                    <li><a href="http://localhost:8888/index.php/s2e">Home</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/register">Register</a> 
                </ul>
            </div>

            <!-- Main content section is divided into main CTA and Sub CTA 
            Main CTA                                                       -->

            <div class="span12">
                <div class="row">
                    <div class="span8 offset2"id="register">
                        <h5>Register</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2e/registerValidation'); ?>
                            <ul>
                                <li><label>Username<input type="text" id="rusername" name="username" placeholder="JonD123" width="200"></label></li>
                                <li><label>Email<input type="text" id="email" name="email" placeholder="example@site.com" width="200"></label></li>
                                <li><label>Password<input type="password" id="password" name="password" ></label></li>
                                <li><label> Confirm <br />Password<input type="password" id="cpassword" name="cpassword" ></label></li>
                            </ul>
                            <button type"submit" name="Sign Up">Sign Up</button>   
                        </form>
                    </div>
                </div>
            </div> 