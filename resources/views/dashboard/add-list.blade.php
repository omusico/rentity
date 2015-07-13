@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-md-9">

        <div class="form-panel">
            <h1 id="AddListH1">Add Listing</h1>
            <hr>
            <div id="map"></div>
            <div id="result"></div>
            <form id="AddListForm" class="form-horizontal" method="POST" action="#">

                <!-- hidden fields -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="manager_id" value="{{ Auth::user()->id }}">
                <!-- end hidden fields -->

                <!-- step 1 -->

                <h1>Property Basic</h1>
                <section data-step="0">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="address" class="control-label">Address</label>
                            </div>
                            <div class="col-sm-11">
                                <input name="address" class="form-control" type="text" id="address">
                            </div>
                            <div class="map"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="type">Type</label>
                            </div>
                            <div class="col-sm-11">
                                <div class="btn-group btn-group-sm" data-toggle="buttons">
                                  <label class="btn btn-primary active">
                                    <input type="radio" name="type" autocomplete="off" value="apartment" checked>  Apartment
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="type" autocomplete="off" value="condo"> Condo
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="type" autocomplete="off" value="house"> House
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="price" class="control-label">Price</label>
                            </div>
                            <div class="col-md-4">
                                <input name="price" id="price" class="form-control" type="number">
                            </div>
                            <div class="col-sm-2">
                                <label for="available" class="control-label">Available</label>
                            </div>
                            <div class="col-sm-5">
                                <input name="available" id="available" class="form-control" type="date" placeholder="MM/DD/YYYY">
                            </div>
                        </div>
                    </div>

                    <!-- lease terms -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-2">
                                <label for="type">Lease Terms</label>
                            </div>
                            <div class="col-sm-10">
                                <div class="btn-group btn-group-sm" data-toggle="buttons">
                                  <label class="btn btn-primary active">
                                    <input type="radio" name="LeaseTerm" autocomplete="off" value="1 month" checked>  1 Month
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="LeaseTerm" autocomplete="off" value="6 months"> 6 Months
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="LeaseTerm" autocomplete="off" value="Yearly"> Yearly
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end lease terms -->

                    <!-- contact info for this property -->

                </section>
                <!-- end step 1 -->

                <!-- step 2 -->
                <h1>Propery Details</h1>
                <section data-step="1">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-sm-11">
                                <input name="title" id="title" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="description" class="sr-only">Description</label>
                            </div>
                            <div class="col-md-11">
                                <textarea
                                class="form-control"
                                name="description"
                                id="description"
                                cols="30"
                                rows="5"
                                placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="baths">Baths</label>
                            </div>
                            <div class="col-sm-4">
                                <select id="baths" name="baths" class="form-control">
                                    <option value="1">1 Bath</option>
                                    <option value="2">2 Bath</option>
                                    <option value="3">3 Bath</option>
                                    <option value="4">4 Bath</option>
                                    <option value="5">5 Bath</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label for="beds">Bedroom</label>
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" name="beds" id="beds">
                                    <option value="1">1 Bed</option>
                                    <option value="2">2 Bed</option>
                                    <option value="3">3 Bed</option>
                                    <option value="4">4 Bed</option>
                                    <option value="5">5 Bed</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-1">
                                <label for="pets">Pets</label>
                            </div>
                            <div class="col-sm-3">
                                <div class="btn-group-sm btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                    <input name="pets[]" type="checkbox" autocomplete="off" value="dogs"> Dogs
                                  </label>
                                  <label class="btn btn-primary">
                                    <input name="pets[]" type="checkbox" autocomplete="off" value="cats"> Cats
                                  </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label for="amenities">Amenities</label>
                            </div>
                            <div class="col-sm-5">
                                <div class="btn-group btn-group-sm" data-toggle="buttons">
                                    <label class="btn btn-primary">
                                        <input name="amenities[]" type="checkbox" autocomplete="off" value="pool"> Pool
                                    </label>
                                    <label class="btn btn-primary">
                                        <input name="amenities[]" type="checkbox" autocomplete="off" value="beer"> Free Beer
                                    </label>
                                    <label class="btn btn-primary">
                                        <input name="amenities[]" type="checkbox" autocomplete="off" value="women"> Free Women
                                    </label>
                                    <label class="btn btn-primary">
                                        <input name="amenities[]" type="checkbox" autocomplete="off" value="cod"> COD
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- end step 2 -->

                <!-- step 3 -->
                <h1>Media</h1>
                <section data-step="2">
                    <h3>Now, lets upload the cover</h3>

                    <input name="file" id="input-dim-1" type="file" class="file-loading" accept="image/*">

                </section>
                <!-- end step 3 -->

            </form>

        </div>
    </div>

    <!-- RIGHT SIDEBAR -->
    @include('dashboard.layouts.right-sidebar')

</div>
@endsection
@section('load_to_header')
{!! Html::style('assets/vendors/jquery.steps-1.1.0/jquery.steps.css') !!}
{!! Html::style('assets/vendors/formValidation/formValidation.css') !!}
{!! Html::style('assets/vendors/fileinput/fileinput.min.css') !!}
@endsection
@section('load_to_footer')
{!! Html::script('//maps.googleapis.com/maps/api/js?sensor=false&libraries=places') !!}
{!! Html::script('//cdn.jsdelivr.net/jquery.geocomplete/1.6.4/jquery.geocomplete.min.js') !!}
{!! Html::script('assets/vendors/jquery.steps-1.1.0/jquery.steps.js') !!}
{!! Html::script('assets/vendors/fileinput/fileinput.min.js') !!}
{!! Html::script('assets/vendors/formValidation/formValidation.js') !!}
{!! Html::script('assets/vendors/formValidation/framework/bootstrap.js') !!}

@endsection
