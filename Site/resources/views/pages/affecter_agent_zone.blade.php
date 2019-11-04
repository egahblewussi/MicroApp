@extends('layouts.design_layout')

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
                                    <i class="fa fa-fw ti-pencil"></i> Créer un compte
                                </h3>
                                <span class="pull-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removepanel clickable"></i>
                            </span>
                            </div>
                            <div class="panel-body">
                                <form method="post" name="frmOnline" onsubmit="return Validation()"
                                      enctype="multipart/form-data">
                                    <div class="row" style="margin-left: 270px">
                                            <div class="row">  
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" name="txtName" id="txtName"
                                                       class="form-control input-md"
                                                       placeholder="Numero de compte"></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                    <select class="form-control select21" id="gender"
                                                    title="Select Gender..." name="gender">
                                                <option disabled selected>Choisir le client</option>
                                                <option value="male"></option>

                                            </select>
                                            </div>
                                        </div>
                                            </div>
                                        <div class="row">
                                        <div class="col-sm-8">
                                                <div class="form-group">
                                                        <select  class="form-control select2" >
                                                                <option value="">
                                                                   Nature du compte
                                                                </option>
                                                                    <option value="Masculin">Tontine</option>
                                                                    <option value="Feminin">Compte</option>
                                                            </select>
                                                 </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="txtlastname"
                                                           class="form-control input-md"
                                                           placeholder="Versement"></div>
                                        </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" name="txtName" id="txtName"
                                                           class="form-control input-md"
                                                           placeholder="Solde"></div>
                                            </div>   
                                        </div> 
                                    </div>                                 
                                        <div class="col-sm-10">
                                            <div class="row" style="margin-left: 130px">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <input type="submit" id="btncheck1" value="Enregistrer"
                                                           class="btn btn-primary btn-block btn-md btn-responsive"
                                                           tabindex="7">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="reset" value="Annuler"
                                                           class="btn btn-success btn-block btn-md btn-responsive">
                                                </div>
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
