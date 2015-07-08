@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-lg-9 main-chart">

        <div class="row mtbox">
            <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                <div class="box1">
                    <span class="li_heart"></span>
                    <h3>9 <small>Applicants</small></h3>
                </div>
                <p>9 Applicants! Whoohoo!</p>
            </div>
            <div class="col-md-2 col-sm-2 box0">
                <div class="box1">
                    <span class="li_cloud"></span>
                    <h3>2 <small>Listed</small></h3>
                </div>
                <p>2 Listed Properties.</p>
            </div>
            <div class="col-md-2 col-sm-2 box0">
                <div class="box1">
                    <span class="li_stack"></span>
                    <h3>5 <small>Messages</small></h3>
                </div>
                <p>You have 5 unread messages in your inbox.</p>
            </div>
            <div class="col-md-2 col-sm-2 box0">
                <div class="box1">
                    <span class="li_news"></span>
                    <h3>+10</h3>
                </div>
                <p>More than 10 news were added in your reader.</p>
            </div>
            <div class="col-md-2 col-sm-2 box0">
                <div class="box1">
                    <span class="li_data"></span>
                    <h3>OK!</h3>
                </div>
                <p>Your server is working perfectly. Relax & enjoy.</p>
            </div>

        </div>
        <!-- /row mt -->

        <div class="row">
            <!-- TWITTER PANEL -->
            <div class="col-md-4 mb">
                <div class="darkblue-panel pn">
                    <div class="darkblue-header">
                        <h5>Paid Ads</h5>
                    </div>

                </div>
                <! -- /darkblue panel -->
            </div>
            <!-- /col-md-4 -->


            <div class="col-md-4 mb">
                <!-- INSTAGRAM PANEL -->
                <div class="instagram-panel pn">
                    <i class="fa fa-instagram fa-4x"></i>
                    <p>@THISISYOU
                        <br/> 5 min. ago
                    </p>
                    <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                </div>
            </div>
            <!-- /col-md-4 -->

            <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="darkblue-panel pn">
                    <div class="darkblue-header">
                        <h5>REVENUE</h5>
                    </div>
                    <div class="chart mt">
                        <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                    </div>
                    <p class="mt"><b>$ 17,980</b>
                        <br/>Month Income</p>
                </div>
            </div>
            <!-- /col-md-4 -->

        </div>
        <!-- /row -->

    </div>

    <!-- Right Sidebar -->
    @include('dashboard.layouts.right-sidebar');
</div>
@endsection