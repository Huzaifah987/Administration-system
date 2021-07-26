<head>
    <script src="/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
</head>
@extends('layouts.app')
@section('content')
    @include('layouts.headers.cards')
        <div class="container-fluid mt--6">
            <div class="row m-auto py-14 pt-14">
                <div class="col">
                    <div class="card">

                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Add User</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                        </div>


                        <form>
                            <div class="row m-auto">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" placeholder="Regular" class="form-control" disabled />
                                </div>
                              </div>
                            </div>
                            <div class="row m-auto">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Search" type="text">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group mb-4">
                                    <input class="form-control" placeholder="Birthday" type="text">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row m-auto">
                              <div class="col-md-6">
                                <div class="form-group has-success">
                                  <input type="text" placeholder="Success" class="form-control is-valid" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group has-danger">
                                  <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                                </div>
                              </div>
                            </div>
                            <div class="row m-auto">
                                <div class="col-md-6">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
                                    </div>
                                </div>
                            </div>
                          </form>
                          <div class="pb-4 pt-4 m-auto">
                            <button type="button" class="btn btn-default">Create</button>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footers.auth')
        </div>
@endsection
