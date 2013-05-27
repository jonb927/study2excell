<!-- Breadcrumbs  -->

            <div id="bread">
                <ul class="breadcrumb">
                    <li><a href="http://localhost:8888/index.php/s2e">Home</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/contact">Contact</a>
                </ul>
            </div>

            <!-- Main content section is divided into main CTA and Sub CTA 
            Main CTA                                                       -->
            <div class="span12" id="contactus">
                <h2>Contact Us</h2>
                <p>Here at study2excell we value everyone's opinion and we welcome your feedback of Study2excell.  If you have suggestions for the site or see any bugs that need fixing please contact us.  We'll correct the information asap.</p>
            </div>  
            <div class="span12">
                <div class="row">
                    <div class="span8 offset2" id="contact">
                        <h5>Contact Us</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2e/contactValidation'); ?>
                            <ul>
                                <li><label>Subject<input type="text" id="emailsubject" name="subject" placeholder="More Tips" width="200"></label></li>
                                <li><label>From<input type="email" id="emailfrom" name="from" placeholder="example@site.com" ></label></li>
                                 <li><label>Message</label><textarea id="message" name="message" maxlength="200" placeholder="Message is only 200 characters long" rows="6" cols="200" ></textarea></li>
                            </ul>
                            <button type"submit" name="sendemail">Send</button>   
                        </form>
                    </div>
                </div>
            </div> 