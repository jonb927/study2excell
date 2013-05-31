<!-- Breadcrumbs  -->

            <div id="bread">
                <ul class="breadcrumb">
                    <li><a href="http://localhost:8888/index.php/s2e">Home</a> <span class="divider">></span></li>
                    <li><a href="http://localhost:8888/index.php/s2e/tips">Tips</a>
                </ul>
            </div>

            <!-- Main content section is divided into main CTA and Sub CTA 
            Main CTA                                                       -->

            <div class="span12" >
                <div class="row">
                    <div class="span8" id="TOTD">
                       <h1><?php echo $MTitle?></h1>
                        <br />
                        <p><?php echo $MContent?></p>
                    </div>
                    <div class="span4" id="tiplist">
                        <h2>Tip Archive</h2>
                            <ul>
                                <li><a href="http://localhost:8888/index.php/s2e/tiplist">Tips for Auditory Learners</a></li>
                                <li><a href="http://localhost:8888/index.php/s2e/tiplist">Tips for Physical Learners</a></li>
                                <li><a href="http://localhost:8888/index.php/s2e/tiplist">Tips for Visual Learners</a></li>
                                <li>More to Come</li>
                            </ul>
                    </div>
                </div>
            </div>  

            <!-- Sub CTA -->

            <div class="span12" >
                <div class="row">
                    <div class="span4 tipsubcta" >
                        <h2><?php echo $S1Title?></h2>
                        <p><?php echo $S1Content?></p>
                    </div>
                    <div class="span4 tipsubcta" >
                        <h2><?php echo $S2Title?></h2>
                        <p><?php echo $S2Content?></p>
                    </div>
                    <div class="span4 tipsubcta" >
                        <h2><?php echo $S3Title?></h2>
                        <p><?php echo $S3Content?></p>
                    </div>
                </div>
            </div>