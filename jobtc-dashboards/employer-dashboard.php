<?php
/*
 * Employer Dashboard 
 * Updated 4/23/2015
 * */
?>

<div class="section myjobs">

    <div class="section_content">

        <!--Dashboard Tabs-->
        <ul class="nav dashboard-tabs">

            <li id="myjobs_tab_evaluation"><a data-toggle="tab" href="#employer-evaluation" class="active noscroll">Applicants</a></li>
            <li id="myjobs_tab_jobs"><a data-toggle="tab" href="#employer-jobs" class="inactive noscroll">Jobs</a></li>
            <li id="myjobs_tab_applicant_discussions"><a data-toggle="tab" href="#discussions" class="inactive noscroll">Discussions</a></li>
            <li id="myjobs_tab_employer_test"><a data-toggle="tab" href="#employer-test-tab" class="inactive noscroll">Tests</a></li>
            <li id="myjobs_tab_employer_statuses"><a data-toggle="tab" href="#employer-statuses" class="inactive noscroll">Statuses</a></li>
            <li id="myjobs_tab_employer_skills"><a data-toggle="tab" href="#employer-skills" class="inactive noscroll">Skills</a></li>
        </ul>

        <div class="tab-content">

            <div id="employer-statuses" class="tab-pane fade in dashboard-tab-pane">
                <ol class="resume-statuses">
                    <li><a href="http://vidhire.net/resume/group/2nd-highest-rated/">2nd Highest Rated</a></li>
                    <li><a href="http://vidhire.net/resume/group/check-for-red-flags/">Check For Red Flags</a></li>
                    <li><a href="http://vidhire.net/resume/group/check-reference/">Check Reference</a></li>
                    <li><a href="http://vidhire.net/resume/group/completed-evaluation/">Completed Evaluation</a></li>
                    <li><a href="http://vidhire.net/resume/group/evaluate/">Evaluate</a></li>
                    <li><a href="http://vidhire.net/resume/group/fast-tracked/">Fast Tracked</a></li>
                    <li><a href="http://vidhire.net/resume/group/highest-rated/">Highest Rated</a></li>
                    <li><a href="http://vidhire.net/resume/group/no-red-flags/">No Red Flags</a></li>
                    <li><a href="http://vidhire.net/resume/group/no-video/">No Video</a></li>
                    <li><a href="http://vidhire.net/resume/group/pick/">Pick</a></li>
                    <li><a href="http://vidhire.net/resume/group/references-checked/">References Checked</a></li>
                    <li><a href="http://vidhire.net/resume/group/standard-tracked/">Standard Tracked</a></li>
                    <li><a href="http://vidhire.net/resume/group/video-evaluated/">Video Evaluated</a></li>
                </ol>            
            </div>

            <div id="employer-skills" class="tab-pane fade in dashboard-tab-pane">

                <ol class="job-tags">
                    <li><a href="http://vidhire.net/resume/speciality/access/">access</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/c/">c++</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/c-c/">c++.C#</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/editor/">Editor</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/excel/">excel</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/flash/">flash</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/html/">HTML</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/illustrator/">Illustrator</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/java/">java</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/jquery/">JQuery</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/linux/">linux</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/oracle/">oracle</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/photoshop/">Photoshop</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/php/">PHP</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/programming/">Programming</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/public-speaking/">Public Speaking</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/red-hat/">red hat</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/researcher/">Researcher</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/sales-manager/">Sales Manager</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/sql/">SQL</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/team-management/">Team Management</a></li>
                    <li><a href="http://vidhire.net/resume/speciality/test/">Test</a></li>
                </ol>

            </div>


            <div id="employer-test-tab" class="tab-pane fade in dashboard-tab-pane">
                <div class="space"></div>
                <div class="row create-test-field">
                    <div class="col-md-5">
                        <div class="input-group">
                            <span  class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input class="form-control" placeholder="Search" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-primary create-test">Create Test</a>
                    </div>
                </div>
                <div class="space"></div>
                <!--Test List-->
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">PHP Basic Questions</h3>
                            </div>
                            <div class="test-options">
                                <ul class="nav nav-pills">
                                    <li role="presentation"><a class="edit-test" href="#">Edit</a></li>
                                    <li role="presentation"><a class="preview-test" href="#">Preview</a></li>
                                    <li role="presentation"><a class="delete-test" href="#">Delete</a></li>
                                    <li role="presentation"><a class="duplicate-test" href="#">Duplicate</a></li>
                                    <li role="presentation"><a class="options" href="#">Options</a></li>
                                    <li role="presentation"><a class="add-question" href="#">Add Question</a></li>
                                    <li role="presentation"><a class="link-to-job" href="#">Link to Jobs</a></li>
                                    <li role="presentation"><a class="send-to-applicants" href="#">Send to Applicants</a></li>
                                    <li role="presentation"><a class="change-test-color" href="#">Color</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <ol class="question-list">
                                    <li>
                                        <label>What is PHP?</label>
                                        <div class="test-options">
                                            <ul class="nav nav-pills">
                                                <li role="presentation"><a href="#">Edit</a></li>
                                                <li role="presentation"><a href="#">Preview</a></li>
                                                <li role="presentation"><a href="#">Delete</a></li>
                                                <li role="presentation"><a href="#">Duplicate</a></li>
                                                <li role="presentation"><a href="#">Options</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <ul class="pager">
                                <li><a href="#">Previous</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div id="employer-jobs" class="tab-pane fade in dashboard-tab-pane">

                <ol class="jobs">
                    <li class="job">

                        <div class="job-details-title">
                            <div class="title">
                                <strong>
                                    <a target="_blank" class="job-title-color" href="http://vidhire.net/jobs/program-development-leader/">Program Development – Test Job</a>
                                </strong>
                                <span class="jtype full-time">Full-Time</span>              
                            </div><!--title-->  

                        </div> <!--job-details-title-->

                        <div class="job-details">
                            <div>
                                <a href="" rel="nofollow"></a>
                                <div class="location">
                                    <strong></strong>
                                </div>        
                                <div>
                                    <a href="http://fasting.ws" rel="nofollow">Better Teck Inc.</a>
                                    <div class="location">
                                        <strong>Toronto, Ontario, Canada</strong>
                                    </div>        
                                    <div class="posted-by">Posted by: <a style="font-weight: normal;" href="http://vidhire.net/author/tom/">tom</a>
                                        on Dec 26,&nbsp;2014
                                    </div>                                        </div>               

                            </div><!--job-details-->

                            <div class="actions">
                                <a class="job-edit-link" href="http://vidhire.net/edit-job/?job_edit=246">Edit</a>                                        <a class="end" href="http://vidhire.net/?job_end=246">End</a>                                        <input type="hidden" class="actions_job_id" value="246">
                            </div>
                        </div>

                        <div class="total_applicants_jobs"><strong>Total Applicants: <span>3</span></strong></div>                       

                    </li>

                    <li class="job">

                        <div class="job-details-title">
                            <div class="title">
                                <strong>
                                    <a target="_blank" class="job-title-color" href="http://vidhire.net/jobs/program-development-tester/">Program Development (Test Job)</a>
                                </strong>
                                <span class="jtype full-time">Full-Time</span>              
                            </div><!--title-->  

                        </div> <!--job-details-title-->

                        <div class="job-details">
                            <div>
                                <a href="" rel="nofollow"></a>
                                <div class="location">
                                    <strong></strong>
                                </div>        
                                <div>
                                    <a href="http://vidhire.net/author/tom/">tom</a>                                        </div>               

                            </div><!--job-details-->

                            <div class="actions">
                                <a class="job-edit-link" href="http://vidhire.net/edit-job/?job_edit=244">Edit</a>                                        <a class="end" href="http://vidhire.net/?job_end=244">End</a>                                        <input type="hidden" class="actions_job_id" value="244">
                            </div>
                        </div>

                        <div class="total_applicants_jobs"><strong>Total Applicants: <span>2</span></strong></div>                       

                    </li>

                    <li class="job">

                        <div class="job-details-title">
                            <div class="title">
                                <strong>
                                    <a target="_blank" class="job-title-color" href="http://vidhire.net/jobs/software-developer/">Software Developer</a>
                                </strong>
                                <span class="jtype freelance">Freelance</span>              
                            </div><!--title-->  

                        </div> <!--job-details-title-->

                        <div class="job-details">
                            <div>
                                <a href="" rel="nofollow"></a>
                                <div class="location">
                                    <strong></strong>
                                </div>        
                                <div>
                                    <a href="http://singularityteam.com" rel="nofollow">Singularity</a>
                                    <div class="location">
                                        <strong>Baguio, Cordillera Administrative Region, Philippines</strong>
                                    </div>        
                                    <div class="posted-by">Posted by: <a style="font-weight: normal;" href="http://vidhire.net/author/tom/">tom</a>
                                        on Dec 16,&nbsp;2014
                                    </div>                                        </div>               

                            </div><!--job-details-->

                            <div class="actions">
                                <a class="job-edit-link" href="http://vidhire.net/edit-job/?job_edit=64">Edit</a>                                        <a class="end" href="http://vidhire.net/?job_end=64">End</a>                                        <input type="hidden" class="actions_job_id" value="64">
                            </div>
                        </div>

                    </li>

                </ol>

            </div>

            <div id="discussions" class="tab-pane fade in dashboard-tab-pane">
                <ol class="comments">
                    <li>
                        <div class="comment_container">
                            <div class="avatar-container">
                                <img src="//0.gravatar.com/avatar/a06c1e7cdc988bded1c9a78619cde357?s=48&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D48&amp;r=G" width="48" height="48" alt="" class="avatar avatar-48 wp-user-avatar wp-user-avatar-48 photo avatar-default">
                                <div class="comment-text">
                                    <p>need to be able to create a short url for jobs ..... created after the job is submitted</p>
                                    <text>
                                    <span class="comment-author-link"><text>By:</text> <strong>tom </strong>&nbsp;Regarding:</span>
                                    <a href="http://vidhire.net/resumes/4685544fae4564f5b/#comment-120">Roy Al Pane</a>
                                    </text>     
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <a class="reply" href="#">Reply</a>
                            <a class="delete" href="#">Delete</a>
                        </div>
                        <br>
                    </li>

                    <li>
                        <div class="comment_container">
                            <div class="avatar-container">
                                <img src="//0.gravatar.com/avatar/a06c1e7cdc988bded1c9a78619cde357?s=48&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D48&amp;r=G" width="48" height="48" alt="" class="avatar avatar-48 wp-user-avatar wp-user-avatar-48 photo avatar-default"> 
                                <div class="comment-text">
                                    <p>notes plugin for dash https://wordpress.org/plugins/wp-dashboard-notes/screenshots/</p>
                                    <text>
                                    <span class="comment-author-link"><text>By:</text> <strong>tom </strong>&nbsp;Regarding:</span>
                                    <a href="http://vidhire.net/resumes/4685544fae4564f5b/#comment-119">Roy Al Pane</a>
                                    </text>
                                </div>
                            </div>

                        </div>
                        <div class="actions">    
                            <a class="reply" href="#">Reply</a>
                            <a class="delete" href="#">Delete</a>
                        </div>
                        <br>
                    </li>
                    <li>
                        <div class="comment_container">
                            <div class="avatar-container">
                                <img src="//vidhire.net/wp-content/uploads/2014/10/man-1-48x48.jpg" width="48" height="48" alt="testemployee" class="avatar avatar-48 wp-user-avatar wp-user-avatar-48 alignnone photo">
                                <div class="comment-text">
                                    <p>posted by test emloyee to see if the pic shows in comments</p>
                                    <text>
                                    <span class="comment-author-link"><text>By:</text> <strong>testemployee </strong>&nbsp;Regarding:</span>
                                    <a href="http://vidhire.net/resumes/4685544fae4564f5b/#comment-118">Roy Al Pane</a>
                                    </text>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <a class="reply" href="#">Reply</a>
                            <a class="delete" href="#">Delete</a>
                        </div>
                        <br>
                    </li>
                </ol>
            </div>

            <div id="employer-evaluation" class="tab-pane fade in active dashboard-tab-pane">
                <ol class="resumes">

                    <li class="resume">
                        <div class="row">
                            <div class="column-md-3 col-sm-3 col-xs-12 ">
                                <div class="photo">
                                    <a href="http://vidhire.net/resumes/4685544fae4564f5b/">
                                        <img width="97" height="95" src="//vidhire.net/wp-content/uploads/2014/10/man-3.jpg" class="attachment-thumbnail wp-post-image" alt="man 3">
                                    </a>
                                </div>    
                            </div>
                            <div class="column-md-9 hidden-xs">
                                <div class="container">
                                    <strong><a target="_blank" href="http://vidhire.net/resumes/4685544fae4564f5b/">Roy Al Pane</a></strong>             

                                    <div class="location">
                                        Oshawa, Ontario, Canada                                
                                    </div>

                                    <div class="applying-for">  
                                        Applying for: 
                                        <a target="_blank" class="job_applying_for_link" href="/jobs/program-development-tester">Program Development Tester</a>
                                        <br>
                                        <span class="resume_date">Submitted: 28 Oct,&nbsp;
                                            <span class="resume_year">2014</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-sm hidden-md hidden-lg">
                            <div class="column-xs-12">
                                <div class="space"></div>
                                <div class="container">
                                    <strong><a target="_blank" href="http://vidhire.net/resumes/4685544fae4564f5b/">Roy Al Pane</a></strong>             

                                    <div class="location">
                                        Oshawa, Ontario, Canada                                
                                    </div>

                                    <div class="applying-for">  
                                        Applying for: 
                                        <a target="_blank" class="job_applying_for_link" href="/jobs/program-development-tester">Program Development Tester</a>
                                        <br>
                                        <span class="resume_date">Submitted: 28 Oct,&nbsp;
                                            <span class="resume_year">2014</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?fast-track=insufficient&amp;resume_id=57" class="fast-track"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Fast Tracked</a></li>
                                            <li><a  href="?reference-checked=false&amp;resume_id=57" class="reference-checked"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">References Checked</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?video-interview-evaluated=false&amp;resume_id=57" class="video-interview-evaluated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Video Evaluated</a></li>
                                            <li><a href="?no-red-flags=checking&amp;resume_id=57" class="no-red-flags"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">No Red Flags</a></li>
                                        </ul><!--toggle-processing-status-->
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?star-resume=unrated&amp;resume_id=57" class="highest-rated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Highest Rated</a></li>
                                            <li><a href="?completed-evaluation=false&amp;resume_id=57" class="completed-evaluation"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Completed Evaluation</a></li>
                                        </ul><!--toggle-processing-status-->
                                    </div>
                                </div>
                                <div class="row hidden-md hidden-lg">
                                    <div class="col-xs-12">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?fast-track=insufficient&amp;resume_id=57" class="fast-track"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Fast Tracked</a></li>
                                            <li><a  href="?reference-checked=false&amp;resume_id=57" class="reference-checked"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">References Checked</a></li>
                                            <li><a href="?video-interview-evaluated=false&amp;resume_id=57" class="video-interview-evaluated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Video Evaluated</a></li>
                                            <li><a href="?no-red-flags=checking&amp;resume_id=57" class="no-red-flags"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">No Red Flags</a></li>
                                            <li><a href="?star-resume=unrated&amp;resume_id=57" class="highest-rated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Highest Rated</a></li>
                                            <li><a href="?completed-evaluation=false&amp;resume_id=57" class="completed-evaluation"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Completed Evaluation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </li>
                    <li class="resume">
                        <div class="row">
                            <div class="column-md-3 col-sm-3 col-xs-12 ">
                                <div class="photo">
                                    <a href="http://vidhire.net/resumes/4685544fae4564f5b/">
                                        <img width="97" height="95" src="//vidhire.net/wp-content/uploads/2014/10/man-3.jpg" class="attachment-thumbnail wp-post-image" alt="man 3">
                                    </a>
                                </div>    
                            </div>
                            <div class="column-md-9 hidden-xs">
                                <div class="container">
                                    <strong><a target="_blank" href="http://vidhire.net/resumes/4685544fae4564f5b/">Roy Al Pane</a></strong>             

                                    <div class="location">
                                        Oshawa, Ontario, Canada                                
                                    </div>

                                    <div class="applying-for">  
                                        Applying for: 
                                        <a target="_blank" class="job_applying_for_link" href="/jobs/program-development-tester">Program Development Tester</a>
                                        <br>
                                        <span class="resume_date">Submitted: 28 Oct,&nbsp;
                                            <span class="resume_year">2014</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-sm hidden-md hidden-lg">
                            <div class="column-xs-12">
                                <div class="space"></div>
                                <div class="container">
                                    <strong><a target="_blank" href="http://vidhire.net/resumes/4685544fae4564f5b/">Roy Al Pane</a></strong>             

                                    <div class="location">
                                        Oshawa, Ontario, Canada                                
                                    </div>

                                    <div class="applying-for">  
                                        Applying for: 
                                        <a target="_blank" class="job_applying_for_link" href="/jobs/program-development-tester">Program Development Tester</a>
                                        <br>
                                        <span class="resume_date">Submitted: 28 Oct,&nbsp;
                                            <span class="resume_year">2014</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?fast-track=insufficient&amp;resume_id=57" class="fast-track"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Fast Tracked</a></li>
                                            <li><a  href="?reference-checked=false&amp;resume_id=57" class="reference-checked"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">References Checked</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?video-interview-evaluated=false&amp;resume_id=57" class="video-interview-evaluated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Video Evaluated</a></li>
                                            <li><a href="?no-red-flags=checking&amp;resume_id=57" class="no-red-flags"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">No Red Flags</a></li>
                                        </ul><!--toggle-processing-status-->
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?star-resume=unrated&amp;resume_id=57" class="highest-rated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Highest Rated</a></li>
                                            <li><a href="?completed-evaluation=false&amp;resume_id=57" class="completed-evaluation"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Completed Evaluation</a></li>
                                        </ul><!--toggle-processing-status-->
                                    </div>
                                </div>
                                <div class="row hidden-md hidden-lg">
                                    <div class="col-xs-12">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?fast-track=insufficient&amp;resume_id=57" class="fast-track"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Fast Tracked</a></li>
                                            <li><a  href="?reference-checked=false&amp;resume_id=57" class="reference-checked"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">References Checked</a></li>
                                            <li><a href="?video-interview-evaluated=false&amp;resume_id=57" class="video-interview-evaluated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Video Evaluated</a></li>
                                            <li><a href="?no-red-flags=checking&amp;resume_id=57" class="no-red-flags"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">No Red Flags</a></li>
                                            <li><a href="?star-resume=unrated&amp;resume_id=57" class="highest-rated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Highest Rated</a></li>
                                            <li><a href="?completed-evaluation=false&amp;resume_id=57" class="completed-evaluation"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Completed Evaluation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </li>
                    <li class="resume">
                        <div class="row">
                            <div class="column-md-3 col-sm-3 col-xs-12 ">
                                <div class="photo">
                                    <a href="http://vidhire.net/resumes/4685544fae4564f5b/">
                                        <img width="97" height="95" src="//vidhire.net/wp-content/uploads/2014/10/man-3.jpg" class="attachment-thumbnail wp-post-image" alt="man 3">
                                    </a>
                                </div>    
                            </div>
                            <div class="column-md-9 hidden-xs">
                                <div class="container">
                                    <strong><a target="_blank" href="http://vidhire.net/resumes/4685544fae4564f5b/">Roy Al Pane</a></strong>             

                                    <div class="location">
                                        Oshawa, Ontario, Canada                                
                                    </div>

                                    <div class="applying-for">  
                                        Applying for: 
                                        <a target="_blank" class="job_applying_for_link" href="/jobs/program-development-tester">Program Development Tester</a>
                                        <br>
                                        <span class="resume_date">Submitted: 28 Oct,&nbsp;
                                            <span class="resume_year">2014</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row hidden-sm hidden-md hidden-lg">
                            <div class="column-xs-12">
                                <div class="space"></div>
                                <div class="container">
                                    <strong><a target="_blank" href="http://vidhire.net/resumes/4685544fae4564f5b/">Roy Al Pane</a></strong>             

                                    <div class="location">
                                        Oshawa, Ontario, Canada                                
                                    </div>

                                    <div class="applying-for">  
                                        Applying for: 
                                        <a target="_blank" class="job_applying_for_link" href="/jobs/program-development-tester">Program Development Tester</a>
                                        <br>
                                        <span class="resume_date">Submitted: 28 Oct,&nbsp;
                                            <span class="resume_year">2014</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?fast-track=insufficient&amp;resume_id=57" class="fast-track"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Fast Tracked</a></li>
                                            <li><a  href="?reference-checked=false&amp;resume_id=57" class="reference-checked"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">References Checked</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?video-interview-evaluated=false&amp;resume_id=57" class="video-interview-evaluated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Video Evaluated</a></li>
                                            <li><a href="?no-red-flags=checking&amp;resume_id=57" class="no-red-flags"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">No Red Flags</a></li>
                                        </ul><!--toggle-processing-status-->
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?star-resume=unrated&amp;resume_id=57" class="highest-rated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Highest Rated</a></li>
                                            <li><a href="?completed-evaluation=false&amp;resume_id=57" class="completed-evaluation"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Completed Evaluation</a></li>
                                        </ul><!--toggle-processing-status-->
                                    </div>
                                </div>
                                <div class="row hidden-md hidden-lg">
                                    <div class="col-xs-12">
                                        <ul class="list-inline toggle-processing-status">
                                            <li><a href="?fast-track=insufficient&amp;resume_id=57" class="fast-track"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Fast Tracked</a></li>
                                            <li><a  href="?reference-checked=false&amp;resume_id=57" class="reference-checked"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">References Checked</a></li>
                                            <li><a href="?video-interview-evaluated=false&amp;resume_id=57" class="video-interview-evaluated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Video Evaluated</a></li>
                                            <li><a href="?no-red-flags=checking&amp;resume_id=57" class="no-red-flags"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">No Red Flags</a></li>
                                            <li><a href="?star-resume=unrated&amp;resume_id=57" class="highest-rated"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Highest Rated</a></li>
                                            <li><a href="?completed-evaluation=false&amp;resume_id=57" class="completed-evaluation"><img class="green-checked" height="16" width="16" src="//vidhire.net/wp-content/themes/vidhire/images/green-check-mark.png">Completed Evaluation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </li>

                </ol>
            </div>

        </div>


    </div><!-- end section_content -->

</div><!-- end section -->



