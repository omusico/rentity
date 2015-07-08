@extends('core.master')
@section('content')
<section class="sub-header">
    <div class="overlay">
        <div class="container">

            <div class="intro">
                <h1>Find tenants today. </h1>

                <p>Riley is your platform to post an apartment listing to a targeted audience of renters anywhere in the world.
                </p>

                <p><span class="fa fa-check fa-2x"></span> We’ll text ALL renters in our database who match your criteria.</p>
                <p><span class="fa fa-check fa-2x"></span> Only qualified renters can see and apply for your listing.</p>
                <p><span class="fa fa-check fa-2x"></span> Pay per lead. No contract. 100% money back guarantee.</p>
            </div>
            <div class="action">
                <div class="btn-group">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addlist" id="btn-modal-list">
                        <span class="fa fa-list"></span> List it!
                    </button>
                    <button class="btn btn-success" data-toggle="modal" data-target="#pricing">
                        <span class="fa fa-dollar"></span> Pricing
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="as-seen">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>As seen in</h1>
            </div>
            <div class="col-md-3">
                <a href="" target="_blank">
                    <img src="assets/img/logos/inman.png" class="image-responsive" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.producthunt.com/posts/riley" target="_blank">
                    <img src="assets/img/logos/product-hunt-logo.jpg" class="image-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="listing-works">
    <div class="container">
        <h1 class="text-center">How it works</h1>
        <hr>
          <div class="features">
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <div class="icon">
                            <span class="fa fa-bullhorn fa-4x"></span>
                        </div>
                        <div class="title">
                            Step 1

                        </div>
                        <hr>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#addlist">Sign up for access to Riley</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <div class="icon">
                            <span class="fa fa-bullseye fa-4x"></span>
                        </div>
                        <div class="title">
                            Step 2
                        </div>
                        <hr>
                        <p>
                            Post an apartment and specify who you want to see the listing. We’ll notify every renter
                            that meets your requirements.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <div class="icon">
                            <span class="fa fa-thumbs-up fa-4x"></span>
                        </div>
                        <div class="title">
                            Step 3
                        </div>
                        <hr>
                        <p>
                            Once your listing is approved, we will notify you as renters apply.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item" style="border-right: none;">
                        <div class="icon">
                            <span class="fa fa-heart fa-4x"></span>
                        </div>
                        <div class="title">
                            Step 4
                        </div>
                        <hr>
                        <p>
                            You’ve got leads! You’ll only get charged when renters who match your criteria apply.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--
<div class="modal fade" id="playvideo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Watch Video</h2>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9" id="player">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/FNkIlXa3YzY?version=3&enablejsapi=1" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="modal fade" id="thanks">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Thank You!</h2>
            </div>
            <div class="modal-body">
                We have just emailed you with a link to sign up for Riley (use promo code INMAN for a 20% discount this
                week!). If you have any additional questions, please feel free to contact us!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pricing">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h1>Pay Per Qualified Applicant</h1>
                <hr>
                <p>
                    Only pay when an applicant who matches your filters applies to your listing.
                    You can put a cap on the total number of applicants you receive,
                    so that you're never charged more than an amount you're comfortable with.
                </p>

                <div class="separator"></div>
                <h4>Price per applicant = base + $1 per filter</h4>

                <p class="small">(Filters are optional and include lease length, minimum salary, pets, and more)
                </p>

                <div class="separator"></div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="item">
                            <h4>Sublets</h4>
                            <hr>
                            <h5>(less than one year commitment)</h5>

                            <p>$3 base </p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h4>Off-Campus Housing</h4>
                        <hr>
                        <h5>(two academic semesters)</h5>

                        <p>$4 base</p>

                    </div>
                    <div class="col-sm-4">
                        <h4>Long-term stay</h4>
                        <hr>
                        <h5>(at least one year commitment)</h5>

                        <p>$5 base</p>
                    </div>

                </div>

                <h5>There is a one-time $25 fee to register for Riley. If you are less than 100% happy with Riley within
                    the first 30 days, we will give you your money back. No questions asked.</h5>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="#" data-target="#addlist" data-toggle="modal">Post a listing</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="addlist">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <!-- Modal Title -->
                <h2>Sign up to get started</h2>
            </div>

            <!-- Modal Content -->
            <div class="modal-body">
                <div class="result"></div>
                <form id="listing-form" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="pad-details">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-md-6">
                                    <label for="firstname">First Name</label>
                                    <input name="firstname" class="form-control" id="firstname"
                                           placeholder="First Name"
                                           type="text" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname">Last Name</label>
                                    <input name="lastname" class="form-control" id="lastname"
                                           placeholder="Last Name"
                                           type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-md-12">
                                    <label for="email">Email Address</label>
                                    <input name="email" class="form-control" id="email"
                                           placeholder="Your Email Address"
                                           type="email" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input name="password" class="form-control" id="password"
                                           placeholder="Your Password"
                                           type="password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger errors"></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Send
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection