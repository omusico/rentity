// dashboard scripts
// going to merge with main.js

var AppMaster = {
    GeoComplete: function () {
        if (jQuery().geocomplete) {
            $('#address').geocomplete({
                map: '#map',
                blur: true,
                restoreValueAfterBlur: true
            })
        }
    },


    // Form Steps [listing property]
    FormSteps: function () {
        $("#AddListForm").steps({
            headerTag: "h1",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (e, currentIndex, newIndex) {
                var fv = $('#AddListForm').data('formValidation'), // FormValidation instance
                // The current step container
                    $container = $('#AddListForm').find('section[data-step="' + currentIndex + '"]');

                // Validate the container
                fv.validateContainer($container);

                var isValidStep = fv.isValidContainer($container);
                if (isValidStep == false || isValidStep == null) {
                    // Do not jump to the next step
                    return false;
                }

                return true;
            },
            // Triggered when clicking the Finish button
            onFinishing: function (e, currentIndex) {
                var fv = $('#AddListForm').data('formValidation'),
                    $container = $('#AddListForm').find('section[data-step="' + currentIndex + '"]');

                // Validate the last step container
                fv.validateContainer($container);

                var isValidStep = fv.isValidContainer($container);
                if (isValidStep === false || isValidStep === null) {
                    return false;
                }

                return true;
            },
            onFinished: function (e, currentIndex) {
               // Submit form Ajax
                $.ajax({
                    type: 'post',
                    data: new FormData(this),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    url: '/dashboard/listing',
                    beforeSend: function () {
                        $('#loading').modal('toggle');
                    },
                    success: function (response) {
                        $('#loading').modal('toggle');
                       if (response.status == 200)
                       {
                           $('#AddListH1, #AddListForm').fadeOut();
                           $('#result').append('<h2>Successfully Added</h2>');
                       }
                        else
                       {
                           console.log(response.error);
                       }
                    }
                });
            }
        }).formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            // This option will not ignore invisible fields which belong to inactive panels
            excluded: ':disabled',
            fields: {
                address: {
                    validators: {
                        notEmpty: {
                            message: 'Address is required'
                        }
                    }
                },
                description: {
                    validators: {
                        stringLength: {
                            min: 10,
                            message: 'Description is too short'
                        },
                        notEmpty: {
                            message: 'Description is required'
                        }
                    }
                },
                price: {
                    validators: {
                        notEmpty: {
                            message: 'Price is required'
                        },
                        numeric: {
                            message: 'Price must be a number'
                        }

                    }
                },
                available: {
                    validators: {
                        notEmpty: {
                            message: 'Date must be set'
                        },
                        date: {
                            message: 'Invalid date'
                        }
                    }
                },
                title: {
                    validators: {
                        stringLength: {
                            min: 3,
                            message: 'Title is too short'
                        },
                        notEmpty: {
                            message: 'Title is required'
                        }

                    }
                }
            }

        });
    },

    saveProfile : function () {
        $('#saveProfile').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '/dashboard/profile',
                data: new FormData(this),
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#loading').modal('toggle');
                },
                success: function (response) {
                    $('#loading').modal('toggle');
                    delay(1000);
                    location.reload();
                },
                error: function(responseText, errorThrown)
                {
                    console.log(responseText);
                }
            });
        });
    },

    // Other dashboard scripts
    Dashboard: function () {
        var MaxQuestions = 3;
        var x = 0;
        $('#AddQuestion').on('click', function () {
            console.log("add question");
            var newTextArea = '<div class="input-group"><div class="col-sm-12">' +
                '<textarea name="question[]" id="question" cols="30" rows="3" placeholder="More Question" class="form-control">' +
                '</textarea>' +
                '<button type="button" class="btn btn-danger btn-sm" id="removeQuestion"><span class="fa fa-remove"></span> Delete</button>' +
                '</div></div> ';

            if (x < MaxQuestions) {
                x++;
                $('.addquestion').append(newTextArea);

            } else {
                $(this).prop('disabled', true);
            }
        });
    },

    FileUpload : function() {
        $("#input-dim-1").fileinput({
            showUpload: false,
            allowedFileExtensions: ["jpg", "png", "gif"],
            minImageWidth: 50,
            minImageHeight: 50,
            maxFileCount: 1,
            maxFileSize: 1000 // 1 mb file size
        });
    },

    avatarUpload: function() {
        $('#avatarUpload').fileinput({
            showUpload: false,
            allowedFileExtensions: ["jpg", "png", "gif"],
            minImageWidth: 50,
            minImageHeight: 50,
            maxFileCount: 1,
            maxFileSize: 1000 // 1 mb file size
        });
    }

};

$(function () {

    // geocomplete
    if (jQuery().geocomplete) {
        AppMaster.GeoComplete();
    }

    // form steps
    if (jQuery().steps) {
        AppMaster.FormSteps();
    }


    if (jQuery().fileinput) {
        // form steps cover upload
        AppMaster.FileUpload();

        // profile avatar upload
        AppMaster.avatarUpload();
    }




    // save profile
    AppMaster.saveProfile();

    AppMaster.Dashboard();

    $('#nav-accordion').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: 'slow',
        showCount: false,
        autoExpand: true,
//        cookie: 'dcjq-accordion-1',
        classExpand: 'dcjq-current-parent'
    });


});

var Script = function () {


//    sidebar dropdown menu auto scrolling

    jQuery('#sidebar .sub-menu > a').click(function () {
        var o = ($(this).offset());
        diff = 250 - o.top;
        if (diff > 0)
            $("#sidebar").scrollTo("-=" + Math.abs(diff), 500);
        else
            $("#sidebar").scrollTo("+=" + Math.abs(diff), 500);
    });


//    sidebar toggle

    $(function () {
        function responsiveView() {
            var wSize = $(window).width();
            if (wSize <= 768) {
                $('#container').addClass('sidebar-close');
                $('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                $('#container').removeClass('sidebar-close');
                $('#sidebar > ul').show();
            }
        }

        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);
    });

    $('.fa-bars').click(function () {
        if ($('#sidebar > ul').is(":visible") === true) {
            $('#main-content').css({
                'margin-left': '0px'
            });
            $('#sidebar').css({
                'margin-left': '-210px'
            });
            $('#sidebar > ul').hide();
            $("#container").addClass("sidebar-closed");
        } else {
            $('#main-content').css({
                'margin-left': '210px'
            });
            $('#sidebar > ul').show();
            $('#sidebar').css({
                'margin-left': '0'
            });
            $("#container").removeClass("sidebar-closed");
        }
    });

// custom scrollbar
    $("#sidebar").niceScroll({
        styler: "fb",
        cursorcolor: "#4ECDC4",
        cursorwidth: '3',
        cursorborderradius: '10px',
        background: '#404040',
        spacebarenabled: false,
        cursorborder: ''
    });

    $("html").niceScroll({
        styler: "fb",
        cursorcolor: "#4ECDC4",
        cursorwidth: '6',
        cursorborderradius: '10px',
        background: '#404040',
        spacebarenabled: false,
        cursorborder: '',
        zindex: '1000'
    });

// widget tools

    jQuery('.panel .tools .fa-chevron-down').click(function () {
        var el = jQuery(this).parents(".panel").children(".panel-body");
        if (jQuery(this).hasClass("fa-chevron-down")) {
            jQuery(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
            el.slideUp(200);
        } else {
            jQuery(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
            el.slideDown(200);
        }
    });

    jQuery('.panel .tools .fa-times').click(function () {
        jQuery(this).parents(".panel").parent().remove();
    });


//    tool tips

    $('.tooltips').tooltip();

//    popovers

    $('.popovers').popover();


// custom bar chart

    if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }


}();