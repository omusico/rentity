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
                'url': "/ajax/create",
                success: function (resp) {
                    if (resp.status == 200) {
                        $('#addlist').modal('hide');
                        $('#thanks').modal('show');
                    }
                    else {
                        $('.errors').html(resp.message).fadeIn('slow');
                        $('#email').css({
                            'border-color' : 'red'
                        })
                    }

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    var error = JSON.parse(jqXHR.responseText);
                    $.each(error, function (i, v) {
                        $('.errors').append(v + '<br />').css({'color': 'red'});
                    });

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

    Login: function () {
        $('#LoginForm').on('submit', function(e){
            e.preventDefault();

            $.ajax({
               'type': 'POST',
                'data' : $(this).serialize(),
                'url' : '/ajax/login',
                success : function(resp) {
                    if (resp.status == 200 )
                    {
                        console.log("logged in");
                        $(location).attr('href', '/dashboard');
                    }
                    else
                    {
                        $('.errors').html(resp.message).fadeIn('slow');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                }

            });
        });
    }

};

(function ($) {
    riley.effects();
    // riley.formActions(); unused
    riley.GEO(); // to be removed
    riley.ListingForm();
    riley.StripePayments();
    riley.Login();
})(jQuery);
