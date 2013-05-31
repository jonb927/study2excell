<div class="span12" id="contactus">
                <h2>Change Articles</h2>
                </div>  
            <div class="span12">
                <div class="row">
                    <div class="span8 offset2" id="articles">
                        <h5>Change Article</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2earchive/changeArticle'); ?>
                            <ul>
                                <li><label>Date<input type="text" id="admdate" name="date" placeholder="1/1/13" width="200"></label></li>
                                <li><label>Page<select id="adminpage" name="Adminpage"><option>HOME</option>
                                                          <option>TIP</option>
                                                          <option>MIDS</option>
                                                          <option>HS</option>
                                                          <option>COL</option>
                                                   </select>
                                    </label>
                                </li><li><label>Section<select id="adminsection" name="Adminsection"><option>Featured</option>
                                                          <option>Quick Look</option>
                                                          <option>Main</option>
                                                          <option>Sub1</option>
                                                          <option>Sub2</option>
                                                          <option>Sub3</option>
                                                   </select>
                                    </label>
                                </li>
                                <li><label>Title<input type="text" id="title" name="Title" placeholder="Five Ways To Save Time" width="200"></label></li>
                                 <li><label>Message</label><textarea id="message" name="Message" maxlength="1200" placeholder="Message is only 1200 characters long" rows="8" cols="800" ></textarea></li>
                            </ul>
                            <button type"submit" name="sendemail">Send</button>   
                        </form>
                    </div>
                </div>
            </div> 