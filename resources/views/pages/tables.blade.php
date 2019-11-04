@extends('layouts.design_layout')

@section('content')
 <section class="content">
           
            <!-- First Basic Table Ends Here-->
            <!-- Second Data Table Starts Here-->
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
                                        <td>Hoyt Franecki</td>
                                        <td>Hoyt.Franecki@yahoo.com</td>
                                        <td>648-323-5530</td>
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
                                        <td>Kianna Lockman</td>
                                        <td>Kianna.Lockman@gmail.com</td>
                                        <td>551-834-3163</td>
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
                                        <td>Sheldon Howe</td>
                                        <td>Sheldon_Howe94@yahoo.com</td>
                                        <td>704-582-5580</td>
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
            <!-- second row ends here -->
         
            <!-- row span table ends here-->
            <!-- Fourth Basic Table Starts Here-->
          
            <!--rightside bar -->
       
            <div class="background-overlay"></div>
        </section>

@endsection