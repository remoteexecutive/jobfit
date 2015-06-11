/* 
 JobFit Custom Javascript Functions
 Author: Jexter Dean Buenaventura
 */
(function ($) {

    //Plugin for Switching active tab content
    $.fn.toggleTabs = function () {

        this.click(function () {
            var tab_id = $(this).attr('href');

            $('.dashboard-tabs li a').addClass('inactive'); // gets all <a> in the tab container
            $(this).removeClass('inactive'); //sets inactive to current clicked tab
            $('.dashboard-tab-pane').removeClass('active'); //removes active from all dashboard tab panels

            $(this).addClass('active'); //Sets clicked tab to active
            $(tab_id).addClass('active'); //Sets dashboard tab panel associated with clicked tab to active
        });


        //Plugin for pop up windows
        $.fn.popUp = function () {



        }

        //Plugin for emailing references
        $.fn.emailReference = function () {


        }



    }



}(jQuery));

//Initialize Toggling Tabs For tabbed content
$('.dashboard-tabs li a').toggleTabs();
//For Quiz
$("#slickQuiz").slickQuiz({perQuestionResponseMessaging: false, preventUnanswered: true});
$("#slickQuiz2").slickQuiz({json: quizJSON2});

//For Text Editor
tinymce.init({selector: 'textarea'});

//For Create Test
$(".create-test").click(function () {
    BootstrapDialog.show({
        title: 'Create Test',
        size: 'size-normal',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Create',
                action: function (dialog) {
                    dialog.close();
                }
            }, {
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-dashboards/create-test-form.php'
        }
    });
});

//Add Question
$(".add-question").click(function () {
    BootstrapDialog.show({
        title: 'Add Question',
        size: 'size-wide',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Add',
                action: function (dialog) {
                    dialog.close();
                }
            }, {
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-dashboards/add-question-form.php'
        },
        onshown: function () {
            $.getScript('http://tinymce.cachefly.net/4.1/tinymce.min.js');
            tinymce.init({selector: 'textarea'});
            $('.add-question textarea').fadeToggle();
            //For Button Dropdowns
            $('.selectpicker').selectpicker();
        }
    });
});

//Edit Test

$(".edit-test").click(function () {
    BootstrapDialog.show({
       title: 'Edit Test',
       size: 'size-default',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Save',
                action: function (dialog) {
                    dialog.close();
                }
            }, {
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-dashboards/edit-test-form.php'
        }
        
    });
});

//Preview Test
$(".preview-test").click(function () {
    BootstrapDialog.show({
       title: 'Preview Test',
       size: 'size-default',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-dashboards/preview-test-form.php'
        }
        
    });
});

//Link Test to Job
$(".link-to-job").click(function(){
    BootstrapDialog.show({
       title: 'Link Test to a Job',
       size: 'size-default',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-dashboards/link-to-job-form.php'
        }
        
    });
});

//Send Test to Applicants
$(".send-to-applicants").click(function(){
     BootstrapDialog.show({
       title: 'Send Test to Applicants',
       size: 'size-default',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-dashboards/send-to-applicants-form.php'
        }
        
    });
});


//Delete Test
$(".delete-test").click(function(){
    
});

//Duplicate Test
$(".duplicate-test").click(function(){
    
});


$(".edit-resume").click(function () {

    BootstrapDialog.show({
        title: 'Edit Resume',
        size: 'size-wide',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Save',
                action: function (dialog) {
                    dialog.close();
                }
            }, {
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-resume/edit-resume-form.php'
        }
    });

});

$(".email-reference").on("click", function () {

    BootstrapDialog.show({
        title: 'Request Reference',
        size: 'size-wide',
        message: function (dialog) {
            var $message = $('<div></div>');
            var pageToLoad = dialog.getData('pageToLoad');
            $message.load(pageToLoad);

            return $message;
        },
        buttons: [{
                label: 'Send',
                action: function (dialog) {
                    dialog.close();
                }
            }, {
                label: 'Close',
                action: function (dialog) {
                    dialog.close();
                }
            }],
        data: {
            'pageToLoad': 'jobtc-resume/email-reference.php'
        }
    });
});

// Prevent bootstrap dialog from blocking focusing
$(document).on('focusin', function (e) {
    if ($(e.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});

