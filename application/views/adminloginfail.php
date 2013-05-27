<div class="span12">
                <div class="row">
                    <div class="span8 offset2"id="login">
                        <h5>Admin Access Login Failed</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2earchive/adminLoginValidation'); ?>
                            <ul>
                                <li><label>Username<input type="username" id="username" name="username" ></label></li>
                                <li><label>Password<input type="password" id="password" name="password" ></label></li>
                            </ul>
                            <button type"submit" name="Admin login">Login</button>   
                        </form>
                    </div>
                </div>
            </div>