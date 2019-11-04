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
<div class="row">
    <div class="col-lg-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-list"></i> Liste des Clients
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
                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Profession</th>
                            <th>Contact</th>
                            <th>Adresse</th>
                            <th>Personnel de Reference</th>
                            <th>Agents</th>
                            <th>Editer</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($clients as $users)
                        <tr>                          
                            <td>{{ $users->nom }}</td>
                            <td>{{ $users->prenoms }}</td>
                            <td>{{ $users->profession }}</td>
                            <td>{{ $users->contact }}</td>
                            <td>{{ $users->adresse }}</td>
                            <td>{{ $users->PersReference }}</td>
                            <td>{{ $users->agent_id}}</td>
                            <td>{{ $users->created_at }}</td>
                            <td> 
                                <p>
                                    <button class="btn btn-primary btn-xs" data-toggle="modal"
                                        data-target="#edit" data-placement="top"><span
                                        class="fa fa-fw ti-pencil"></span>
                                    </button>
                                </p>
                            </td>
                            <td> 
                                <p>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal"
                                        data-target="#delete" data-placement="top"><span
                                        class="fa fa-fw ti-trash"></span>
                                    </button>
                                </p>
                            </td>                          
                        </tr>
                        @endforeach
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
  
@endsection