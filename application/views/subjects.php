<!-- Breadcrumbs  -->

            <div id="bread">
                <ul class="breadcrumb">
                    <li><a href="http://localhost:8888/index.php/s2e">Home</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/strack">sTrack</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/subjects">Subjects</a>
                </ul>
            </div>

            <!-- Main content section is divided into main CTA and Sub CTA 
            Main CTA                                                       -->
            <div class="span6 offset3" id="graph">
                <script type="text/javascript">
                    $(function(){ 
                        var myData = new Array(['<?php echo $graph[0]['aStudyDate']?>', <?php echo $graph[0]['aStudyTime']?>,<?php echo $graph[0]['aCurrentGrade']?>], ['<?php echo $graph[1]['aStudyDate']?>', <?php echo $graph[1]['aStudyTime']?>,<?php echo $graph[1]['aCurrentGrade']?>], ['<?php echo $graph[2]['aStudyDate']?>', <?php echo $graph[2]['aStudyTime']?>,<?php echo $graph[2]['aCurrentGrade']?>], ['<?php echo $graph[3]['aStudyDate']?>', <?php echo $graph[3]['aStudyTime']?>,<?php echo $graph[3]['aCurrentGrade']?>], ['<?php echo $graph[4]['aStudyDate']?>', <?php echo $graph[4]['aStudyTime']?>,<?php echo $graph[4]['aCurrentGrade']?>]);
                        //var myData2 = new Array(['unit', 60], ['unit two', 70], ['unit three', 65], ['other unit', 62], ['last unit', 71]);
                        var myChart = new JSChart('chartcontainer', 'bar');
                        myChart.setDataArray(myData);//, 'bar_1');
                        //myChart.setDataArray(myData2, 'bar_2');
                        myChart.setBackgroundColor('#000');
                        myChart.setBackgroundImage('http://localhost:8888/images/chartBGV003.jpg');
                        myChart.setBarColor('#ff8400', 1);
                        myChart.setBarColor('#40c1e5', 2);
                        myChart.setBarValuesColor('#fff');
                        myChart.setBarValuesFontSize(10);
                        myChart.setGrid(false);
                        myChart.setLegendShow(true);
                        myChart.setLegendColor('#fff');
                        myChart.setLegendFontSize(12);
                        myChart.setLegendForBar(1,'Study Time(min)');
                        myChart.setLegendForBar(2,'Current Grade(%)');
                        myChart.setBarOpacity(.7);
                        myChart.setSize(500, 400);
                        myChart.setTitle('<?php echo $subname?>');
                        myChart.setTitleColor('#fff');
                        myChart.setAxisColor('#aaa');
                        myChart.setAxisValuesColor('#fff');
                        myChart.setAxisNameColor('#fff');
                        myChart.setAxisNameY('Time(min)/Grades(%)', true);
                        myChart.setAxisNameX('Study Date');
                        myChart.set3D(true);
                        myChart.setTitleFontSize(15);
                        myChart.draw();
                    });
                </script>
                <div class="row">
                    <!-- Placeholder for graph -->
                    <div id="chartcontainer"></div>
                    <!--<img src="http://localhost:8888/images/graphPHV001.png">-->
                    <div class="span6 offset3" id="goals">
                        <h6><a href="http://localhost:8888/index.php/s2e/newstrack">Create new sTrack</a></h6>
                        <h3>Study Goals</h3>
                        <ul>
                            <li><h6><?php echo $graph[0]['aStudyDate']?></h6><p><?php echo $graph[0]['aStudyGoal']?></p></li>
                            <li><h6><?php echo $graph[1]['aStudyDate']?></h6><p><?php echo $graph[1]['aStudyGoal']?></p></li>
                            <li><h6><?php echo $graph[2]['aStudyDate']?></h6><p><?php echo $graph[2]['aStudyGoal']?></p></li>
                            <li><h6><?php echo $graph[3]['aStudyDate']?></h6><p><?php echo $graph[3]['aStudyGoal']?></p></li>
                            <li><h6><?php echo $graph[4]['aStudyDate']?></h6><p><?php echo $graph[4]['aStudyGoal']?></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="span12">
                <div class="row">
                    <div class="span10 offset1" id="subject">
                        <h5>Update Subject</h5>
                      
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('s2e/subjectUpdateValidation'); ?>
                        <select id="sub" name="sub">
                            <?php  for ($i = 0; $i < count($subjects);$i++) {
                                echo '<option>';
                                echo $subjects[$i]['aSubjectName'];
                                echo '</option>';
                            };
                            ?>
                       </select>
                            <ul>
                                <li><label>Date<input type="text" id="date" name="date" width="200"></label></li>
                                <li><label>Study Duration<input type="text" id="studytime" name="studytime" placeholder="45 List time as minutes" ></label></li>
                                <li><label>Update Grade<input type="text" id="grade" name="grade" placeholder="92   Number is in percent"></label></li>
                                 <li><label>Study Goals <br />Techniques</label><textarea rows="6" cols="200" name="goals" maxlength="120" placeholder="Raise grade from 80 to 90 in 4 weeks  This area has a limit of 120 characters"></textarea></li>
                            </ul>
                            <button type"submit" >Update Subject</button>   
                        </form>
                    </div>
                </div>
            </div>