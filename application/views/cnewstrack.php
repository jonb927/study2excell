<!-- Breadcrumbs  -->

            <div id="bread">
                <ul class="breadcrumb">
                    <li><a href="http://localhost:8888/index.php/s2e">Home</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/strack">sTrack</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/newstrack">New sTrak</a>
                </ul>
            </div>

            <!-- Main content section is divided into main CTA and Sub CTA 
            Main CTA                                                       -->
            
            <div class="span12">
                <div class="row">
                    <div class="span8 offset2" id="nstrack">
                        <h5>Create a new sTrack to track subjects.</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2e/newStrackValidation'); ?>
                            <ul>
                                <li><label>Date<input type="text" id="nstdate" name="date" placeholder="1/1/13" width="200"></label></li>
                                <li><label>Subject<input type="text" id="nstsubject" name="subject" placeholder="english"></label></li>
                                <li><label>Current Grade<input type="text" id="nstgrade" name="currentgrade" placeholder="92 use   Number is in percent"></label></li>
                                 <li><label>Study Goals <br />Techniques</label><textarea rows="6" name="goals" cols="200" placeholder="Raise grade from 80 to 90 in 4 weeks   This area has a limit of 120 characters" maxlength="100"></textarea></li>
                            </ul>
                            <button type"submit">Create Track</button>   
                        </form>
                    </div>
                </div>
            </div>