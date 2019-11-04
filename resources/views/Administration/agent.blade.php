@extends('layouts.design_layout')

@section('stylesheets.header')
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/app.css') }}"/>
    <link href="{{ asset('asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('asset/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('asset/vendors/select2/css/select2-bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/datetime/css/jquery.datetimepicker.css') }}">
    <link href="{{ asset('asset/vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('asset/vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('asset/css/custom_css/dashboard1.css') }}" rel="stylesheet" type="text/css"/>      
@stop

@section('content')
     <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <!--image upload -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel ">
                                <div class="panel-heading">
                                    <h3 class="panel-title" style="text-align: center">
                                        <i class="fa fa-fw ti-pencil"></i> Enregistrer un agent
                                    </h3>
                                    <span class="pull-right">
                                </span>
                                </div>
                                <div class="panel-body">
                                <form method="post" action="{{route('agents-store')}}">
                                     {{csrf_field()}}
                                        <div class="row" >      
                                                <div class="col-sm-2">
                                                </div>                  
                                                <div class="col-sm-4">
                                                        <div class="form-group">
                                                                <input type="text" name="nom" id="nom"
                                                                       class="form-control input-md"
                                                                       placeholder="Nom du client" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                                        <input type="text" name="contact" id="contact"
                                                                               class="form-control input-md"
                                                                               placeholder="Contact"  required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email"
                                                                                           class="form-control input-md"
                                                                                           placeholder="Email"  >
                                                        </div>                           
                                                </div>                    
                                                <div class="col-sm-4">
                                                            <div class="form-group">
                                                                    <input type="text" name="prenoms" id="prenoms"
                                                                           class="form-control input-md"
                                                                           placeholder="Prenoms"  required="required"></div>
                          
                                                                    <div class="form-group">
                                                                     <input type="text" name="adresse" id="adresse"
                                                                               class="form-control input-md"
                                                                                   placeholder="Adresse"  required="required">
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <input type="text" name="profession" id="profession"
                                                                                        class="form-control input-md"
                                                                                        placeholder="Profession"  required="required">
                                                                    </div>

                                                </div>
                                                <div class="col-sm-2">

                                                </div>     
                                            </div>
                                            <div class="row" style="margin-left: 160px;">
                                                        <div class="col-md-2 col-md-offset-3">
                                                            <input type="submit" id="btncheck1" value="Enregistrer"
                                                                   class="btn btn-primary btn-block btn-md btn-responsive">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="reset" value="Annuler"
                                                                   class="btn btn-success btn-block btn-md btn-responsive">
                                                        </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-md-6 -->
                </div>
            </div>  
       <div class="background-overlay"></div>
        </section>
@endsection

@section('scripts.footer')
    <script src="{{ asset('asset/js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('asset/vendors/flip/js/jquery.flip.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/vendors/datetime/js/jquery.datetimepicker.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/vendors/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('asset/vendors/lcswitch/js/lc_switch.min.js') }}"></script>

    <script src="{{ asset('asset/vendors/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('asset/js/custom_js/adduser.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
      
@stop