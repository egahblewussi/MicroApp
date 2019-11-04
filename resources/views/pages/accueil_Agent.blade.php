@extends('layouts.design_layout')


@section('stylesheets.header')
        <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/app.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assetvendors/swiper/css/swiper.min.css') }}">
        <link href="{{ asset('assetvendors/nvd3/css/nv.d3.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('asset/vendors/lcswitch/css/lc_switch.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/custom.css') }}">
        <link href="{{ asset('asset/css/custom_css/dashboard1.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

<section class="content">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip" style="position: relative; perspective: 598px; transform-style: preserve-3d;">
                        <div class="widget-bg-color-icon card-box front" style="transition:0.5s ease-out; width: 100%; height: 100%; position: absolute; z-index: 1; transform: rotateY(0deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="bg-icon pull-left" style="backface-visibility: hidden;">
                                <i class="ti-eye text-warning" style="backface-visibility: hidden;"></i>
                            </div>
                            <div class="text-right" style="backface-visibility: hidden;">
                                <h3 class="text-dark" style="backface-visibility: hidden;"><b style="backface-visibility: hidden;">3752</b></h3>
                                <p style="backface-visibility: hidden;">Daily Visits</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back" style="transition:0.5s ease-out; width: 100%; height: 100%; position: relative; z-index: 0; transform: rotateY(-180deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="text-center" style="backface-visibility: hidden;">
                                <span id="loadspark-chart" style="backface-visibility: hidden;"><canvas width="310" height="55" style="width: 310px; height: 55px; vertical-align: top; display: inline-block;"></canvas></span>
                                <hr style="backface-visibility: hidden;">
                                <p style="backface-visibility: hidden;">Check summary</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip" style="position: relative; perspective: 598px; transform-style: preserve-3d;">
                        <div class="widget-bg-color-icon card-box front" style="transition:0.5s ease-out; width: 100%; height: 100%; position: absolute; z-index: 1; transform: rotateY(0deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="bg-icon pull-left" style="backface-visibility: hidden;">
                                    <i class="fa fa-fw fa-columns">
                            </div>
                            <div class="text-right" style="backface-visibility: hidden;">
                                <h3 style="backface-visibility: hidden;"><b id="widget_count3" style="backface-visibility: hidden;">3251</b></h3>
                                <p style="backface-visibility: hidden;">Comptes actifs</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back" style="transition:0.5s ease-out; width: 100%; height: 100%; position: relative; z-index: 0; transform: rotateY(-180deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="text-center" style="backface-visibility: hidden;">
                                <span class="linechart" id="salesspark-chart" style="backface-visibility: hidden;"><canvas width="304" height="55" style="width: 304px; height: 55px; vertical-align: top; display: inline-block;"></canvas></span>
                                <hr style="backface-visibility: hidden;">
                                <p style="backface-visibility: hidden;">Check summary</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip" style="position: relative; perspective: 598px; transform-style: preserve-3d;">
                        <div class="widget-bg-color-icon card-box front" style="transition:0.5s ease-out; width: 100%; height: 100%; position: absolute; z-index: 1; transform: rotateY(0deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="bg-icon pull-left" style="backface-visibility: hidden;">
                                <i class="ti-thumb-up text-danger" style="backface-visibility: hidden;"></i>
                            </div>
                            <div class="text-right" style="backface-visibility: hidden;">
                                <h3 class="text-dark" style="backface-visibility: hidden;"><b style="backface-visibility: hidden;">1532</b></h3>
                                <p style="backface-visibility: hidden;">Comptes inactifs</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back" style="transition:0.5s ease-out; width: 100%; height: 100%; position: relative; z-index: 0; transform: rotateY(-180deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="text-center" style="backface-visibility: hidden;">
                                <span id="visitsspark-chart" style="backface-visibility: hidden;"><canvas width="310" height="55" style="width: 310px; height: 55px; vertical-align: top; display: inline-block;"></canvas></span>
                                <hr style="backface-visibility: hidden;">
                                <p style="backface-visibility: hidden;">Check summary</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip" style="position: relative; perspective: 598px; transform-style: preserve-3d;">
                        <div class="widget-bg-color-icon card-box front" style="transition:0.5s ease-out; width: 100%; height: 100%; position: absolute; z-index: 1; transform: rotateY(0deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="bg-icon pull-left" style="backface-visibility: hidden;">
                                <i class="ti-user text-info" style="backface-visibility: hidden;"></i>
                            </div>
                            <div class="text-right" style="backface-visibility: hidden;">
                                <h3 class="text-dark" style="backface-visibility: hidden;"><b style="backface-visibility: hidden;">1252</b></h3>
                                <p style="backface-visibility: hidden;">Clients</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back" style="transition:0.5s ease-out; width: 100%; height: 100%; position: relative; z-index: 0; transform: rotateY(-180deg); transform-style: preserve-3d; backface-visibility: hidden;">
                            <div class="text-center" style="backface-visibility: hidden;">
                                <span id="subscribers-chart" style="backface-visibility: hidden;"><canvas width="55" height="55" style="width: 55px; height: 55px; vertical-align: top; display: inline-block;"></canvas></span>
                                <hr style="backface-visibility: hidden;">
                                <p style="backface-visibility: hidden;">Check summary</p>
                            </div>
                            <div class="clearfix" style="backface-visibility: hidden;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel ">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="ti-list"></i> Data Table with Action buttons
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Ambrose Schulist</td>
                                        <td>Ambrose.Schulist@hotmail.com</td>
                                        <td>098-354-8863</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bernadette Medhurst</td>
                                        <td>Bernadette.Medhurst75@hotmail.com</td>
                                        <td>258-452-3348</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timmothy Mertz</td>
                                        <td>Timmothy72@gmail.com</td>
                                        <td>641-915-3609</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Faye Mayer</td>
                                        <td>Faye34@gmail.com</td>
                                        <td>786-093-2620</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alfred Watsica</td>
                                        <td>Alfred34@gmail.com</td>
                                        <td>294-242-3621</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vella Hammes</td>
                                        <td>Vella.Hammes40@hotmail.com</td>
                                        <td>063-136-5606</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Evans Trantow</td>
                                        <td>Evans90@yahoo.com</td>
                                        <td>171-105-6990</td>
                                        <td>
                                            <p>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#edit" data-placement="top"><span
                                                        class="fa fa-fw ti-pencil"></span></button>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#delete" data-placement="top"><span
                                                        class="fa fa-fw ti-trash"></span></button>
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="Joseph Lynch">
                            </div>
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="joseph34@testmail.com">
                            </div>
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="456-632-5687">
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-success" data-dismiss="modal">
                                <span class="glyphicon glyphicon-ok-sign"></span> Update
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading5">Delete this entry</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                <span class="glyphicon glyphicon-info-sign"></span>&nbsp; Are you sure you want to
                                delete this record ?
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <span class="glyphicon glyphicon-ok-sign"></span> Yes
                            </button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> No
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="background-overlay"></div>
        </section>





@endsection

@section('scripts.footer')
        <script src="{{ asset('asset/js/app.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('asset/js/nvd3/d3.v3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/vendors/nvd3/js/nv.d3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/vendors/advanced_newsTicker/js/newsTicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/dashboard1.js') }}"></script>
@stop

