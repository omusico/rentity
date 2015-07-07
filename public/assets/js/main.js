/*
 Client: textriley.com
 Developer: Jeffrey Valdehueza (www.dyeprey.com)
 Date: 06.19.2015
 */


var riley = {
    effects: function () {
        if (jQuery().waypoint) {
            $('.move.effect1').waypoint(function () {
                $(this).toggleClass('active');
                $(this).toggleClass('animated fadeInLeft');
            }, {offset: '100%'});
            $('.move.effect2').waypoint(function () {
                $(this).toggleClass('active');
                $(this).toggleClass('animated fadeInRight');
            }, {offset: '100%'});
            $('.move.effect3').waypoint(function () {
                $(this).toggleClass('active');
                $(this).toggleClass('animated fadeInDown');
            }, {offset: '100%'});
            $('.move.effect4').waypoint(function () {
                $(this).toggleClass('active');
                $(this).toggleClass('animated fadeIn');
            }, {offset: '100%'});
            $('.move.effect5').waypoint(function () {
                $(this).toggleClass('active');
                $(this).toggleClass('animated fadeInUp');
            }, {offset: '100%'});
        }
    },
    formActions: function () {
        $('#the-form').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                'type': 'POST',
                'data': data,
                'dataType': 'json',
                'url': "handler.php",
                beforeSend: function () {
                    // Prevent double send
                    $(":submit").attr("disabled", true);
                },
                success: function (resp) {
                    if (resp.status == 200 || resp.status == 400) {
                        console.log('Sent');
                        $('#the-form').toggleClass('animated fadeOutLeft');
                        $('.mail-result').html('<div><h2>' + resp.message + '</h2></div><div><a href="index.html" class="btn btn-success btn-lg">Go back home</a></div>').toggleClass('animated fadeInRight').delay(1500);
                    }
                    if (resp.status == 401) {
                        $(":submit").attr("disabled", false);
                        $('#email').css("border", "1px solid red");
                        $('.error-message').html(resp.message).fadeIn('slow');
                    }
                    if (resp.status == 402) {
                        $(":submit").attr("disabled", false);
                        $('#name').css("border", "1px solid red");
                        $('.error-message').html(resp.message).fadeIn('slow');
                    }
                    if (resp.status == 403) {
                        $(":submit").attr("disabled", false);
                        $('#subject').css("border", "1px solid red");
                        $('.error-message').html(resp.message).fadeIn('slow');
                    }
                    if (resp.status == 406) {
                        $(":submit").attr("disabled", false);
                        $('#message').css("border", "1px solid red");
                        $('.error-message').html(resp.message).fadeIn('slow');
                    }
                }
            });

        });
    },

    GEO: function () {
        if (jQuery().geocomplete) {
            $('#address').geocomplete({
                map: '#map'
            });
        }
    },
    ListingForm: function () {
        $('#listing-form').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                'type': 'POST',
                'data': data,
                'dataType': 'json',
                'url': "/ajax",
                beforeSend: function () {
                    // Prevent double send
                    $("#btn-modal-list").attr("disabled", true);
                },
                success: function (resp) {
                    if (resp.status == 200 || resp.status == 400) {
                        $('#addlist').modal('hide');
                        $('#thanks').modal('show');
                    }
                    else {
                        console.log("error");
                        $('.result').html('<div><h2>' + resp.message + '</h2></div><div><a href="index.html" class="btn btn-success btn-lg">Go back home</a></div>').toggleClass('animated fadeInRight').delay(1500);
                    }

                },
                error: function () {
                    console.log("errorsss");
                }
            });
        });
    },

    StripePayments: function () {
        if ($('#stripeButton').length) {
            var handler = StripeCheckout.configure({
                key: 'pk_live_zNfku1a5VeeknC1bvbzKU8SA',
                image: 'img/logo.png',
                token: function (token) {
                    $('.thanks').modal().on('hidden.bs.modal', function (e) {
                        $(location).attr('href', 'http://www.textriley.com/');
                    })
                }
            });

            $('#stripeButton').on('click', function (e) {
                handler.open({
                    name: 'Riley Payments',
                    description: 'Unlocks a Property',
                    amount: 2500
                });
                e.preventDefault();
            });

            $(window).on('popstate', function () {
                handler.close();
            });
        }
    },

    RegisterForm: function () {
        $('#register-form').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                'type': 'POST',
                'data': data,
                'dataType': 'json',
                'url': "ajax.php",
                beforeSend: function () {
                    // Prevent double send
                    $(":submit").attr("disabled", true);
                },
                success: function (resp) {
                    if (resp.status == 200 || resp.status == 400) {
                        console.log('Sent');
                        $('#register-form').toggleClass('animated fadeOutLeft');
                        $('#form-h1').toggleClass('animated fadeOutRight');
                        $('.result').html('<div><h2>' + resp.message + '</h2></div>').toggleClass('animated fadeInRight').delay(1500);
                    }
                    else {
                        console.log("error");
                        $('.result').html('<div><h2>' + resp.message + '</h2></div>').toggleClass('animated fadeInRight').delay(1500);
                    }

                },
                error: function () {
                    console.log("errorsss");
                }
            });
        });
    }

};

(function ($) {
    riley.effects();
    riley.formActions();
    riley.GEO();
    riley.ListingForm();
    riley.StripePayments();
    riley.RegisterForm();
})(jQuery);
