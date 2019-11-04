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
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff"
                                   data-loop="true"></i> Créer un utilisateur
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <!-- errors -->
                            <!--main content-->
                            <form id="adduser_form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token"/>
                                <div id="pager_wizard">
                                    <ul>
                                        <li>
                                            <a href="#tab1" data-toggle="tab">Infos 1</a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">Info 2</a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab">Infos 3</a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab">infos 4</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1">
                                            <h2 class="hidden">&nbsp;</h2></br></br>
                                            <div class="row" style="margin-left: 150px">
                                                    <div class="form-group">
                                                            <div class="col-md-5">
                                                                <input  name="nom" id="nom" type="text"
                                                                       placeholder="Nom" class="form-control"/>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input id="prenoms" name="prenoms" type="text" 
                                                                       placeholder="Prénoms" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="col-md-5">  
                                                            <select  class="form-control select2" >
                                                                <option value="">
                                                                   Sexe
                                                                </option>
                                                                    <option value="Masculin">Masculin</option>
                                                                    <option value="Feminin">Celibataire</option>
                                                            </select>
                                                        </div>
                                                                <div class="col-md-5">
                                                                 <select  class="form-control select2" >
                                                                    <option value="">
                                                                       Situation Matrimonial
                                                                    </option>
                                                                        <option value="Masculin">Marié</option>
                                                                        <option value="Feminin">Celibataire</option>
                                                                         <option value="Feminin">Veuve</option>
                                                                         <option value="Feminin">Divorce</option>
                                                                </select>
                                                            </div>                                               
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="col-md-5">
                                                                    <input id="email" name="" type="text"
                                                                           placeholder="Email" class="form-control required email"/>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input  name="profession" type="text"
                                                                           placeholder="Profession" class="form-control required"/>
                                                                </div>
                                                        </div>
                                                        
                                            </div>
                                            
                                                     </div>
                                        <div class="tab-pane" id="tab2">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group required">
                                                <label for="dob" class="  col-sm-3 control-label">Date de naissance</label>
                                                <div class="col-sm-9">
                                                    <input name="dateNaiss" type="date" class="form-control"
                                                           placeholder="dd/mm/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pic" class="  col-sm-3 control-label">Profile
                                                    picture</label>
                                                <div class="col-sm-6">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 150px; height: 150px;">
                                                            <img src="{{ asset('asset/img/original.jpg') }}" alt="profile pic holder">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                             style="max-width: 200px; max-height: 200px;"></div>
                                                        <div>
                                                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">Choisir image</span>
                                                                <span class="fileinput-exists">Changer</span>
                                                                <input id="pic" name="pic_file" type="file"
                                                                       class="form-control"/>
                                                                </span>
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                               data-dismiss="fileinput">Supprimer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                        <input   type="text" 
                                                        placeholder="Adresse" class="form-control required"/>
                                                        <input   type="text" 
                                                        placeholder="Adresse" class="form-control required"/>
                                                        <input   type="text" 
                                                        placeholder="Adresse" class="form-control required"/>
                                                        <input   type="text" 
                                                        placeholder="Adresse" class="form-control required"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                        <div class="row" style="margin-left: 150px"></br></br>
                                                <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select21" id="gender"
                                                                    title="Select Gender..." name="gender">
                                                                <option disabled selected>Choisir le sexe</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Femelle</option>
                                                                <option value="other">Autres</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                                <select class="select21 form-control" name="country" id="country">
                                                                        <option value="249">AZERBAIDJAN</option>
                                                                        <option value="250">ARMENIE</option>
                                                                        <option value="251">AUSTRALIE</option>
                                                                        <option value="252">AFGHANISTAN</option>
                                                                        <option value="253">ALBANIE</option>
                                                                        <option value="254">ALLEMAGNE</option>
                                                                        <option value="255">ANTIGUA-ET-BARBUDA</option>
                                                                        <option value="256">ANDORRE</option>
                                                                        <option value="257">ANGOLA</option>
                                                                        <option value="258">URUGUAY</option>
                                                                        <option value="259">OUZBEKISTAN</option>
                                                                        <option value="260">OUGANDA</option>
                                                                        <option value="261">UKRAINE</option>
                                                                        <option value="262">IRLANDE</option>
                                                                        <option value="263">ISLANDE</option>
                                                                        <option value="264">ETHIOPIE</option>
                                                                        <option value="265">ERYTHREE</option>
                                                                        <option value="266">ESPAGNE</option>
                                                                        <option value="267">ESTONIE</option>
                                                                        <option value="269">EQUATEUR</option>
                                                                        <option value="270">INDONESIE</option>
                                                                        <option value="271">IRAN</option>
                                                                        <option value="272">ITALIE</option>
                                                                        <option value="273">ARGENTINE</option>
                                                                        <option value="274">JORDANIE</option>
                                                                        <option value="275">EMIRATS ARABES UNIS</option>
                                                                        <option value="276">BAHREIN</option>
                                                                        <option value="277">BRESIL</option>
                                                                        <option value="278">PORTUGAL</option>
                                                                        <option value="279">BAHAMAS</option>
                                                                        <option value="280">BOSNIE-HERZEGOVINE</option>
                                                                        <option value="281">ALGERIE</option>
                                                                        <option value="282">MINOR OUTLYING ISLANDS UNITED STATES</option>
                                                                        <option value="283">ILES VI&#200;RGES AM&#201;RICAINES</option>
                                                                        <option value="284">ILES VI&#200;RGES BRIANNIQUES</option>
                                                                        <option value="285">DANEMARK</option>
                                                                        <option value="286">EL SALVADOR</option>
                                                                        <option value="287">SENEGAL</option>
                                                                        <option value="288">SOUDAN</option>
                                                                        <option value="289">SUEDE</option>
                                                                        <option value="290">SOMALIE</option>
                                                                        <option value="291">CHINE</option>
                                                                        <option value="292">IRAK</option>
                                                                        <option value="293">PHILIPPINES</option>
                                                                        <option value="294">POLE SUD</option>
                                                                        <option value="295">CAMEROUN</option>
                                                                        <option value="296">CONGO</option>
                                                                        <option value="297">KOWEIT</option>
                                                                        <option value="298">HONGRIE</option>
                                                                        <option value="299">FRANCE D&#39;OUTRE-MER</option>
                                                                        <option value="300">PROVINCES DE L&#39;INDE BRITANNIQUE</option>
                                                                        <option value="301">MEXIQUE</option>
                                                                        <option value="302">ARABIE SAOUDITE</option>
                                                                        <option value="303">NORVEGE</option>
                                                                        <option value="304">AUTRICHE</option>
                                                                        <option value="305">NIGER</option>
                                                                        <option value="306">INDE</option>
                                                                        <option value="307">ETATS-UNIS</option>
                                                                        <option value="308">JAPON</option>
                                                                        <option value="309">YEMEN</option>
                                                                        <option value="310">GRECE</option>
                                                                        <option value="311">PAPOUASIE- NOUVELLE- GUIN&#201;E</option>
                                                                        <option value="312">PARAGUAY</option>
                                                                        <option value="313">PAKISTAN </option>
                                                                        <option value="314">PALAOS</option>
                                                                        <option value="315">PITCAIRN</option>
                                                                        <option value="316">BARBADE</option>
                                                                        <option value="317">BERMUDES</option>
                                                                        <option value="318">BRUNEI DARUSSALAM</option>
                                                                        <option value="319">ROYAUME-UNIE</option>
                                                                        <option value="320">BELGIQUE</option>
                                                                        <option value="321">BULGARIE</option>
                                                                        <option value="322">BELIZE</option>
                                                                        <option value="323">BANGLADESH </option>
                                                                        <option value="324">PANAMA</option>
                                                                        <option value="325">BENIN</option>
                                                                        <option value="326">BHOUTAN</option>
                                                                        <option value="327">BOTSWANA</option>
                                                                        <option value="328">BURKINA-FASO</option>
                                                                        <option value="329">BURUNDI </option>
                                                                        <option value="330">POLOGNE</option>
                                                                        <option value="331">BOLIVIE</option>
                                                                        <option value="332">POLYN&#201;SIE FRAN&#199;AISE</option>
                                                                        <option value="333">PORTO RICO</option>
                                                                        <option value="334">PEROU</option>
                                                                        <option value="335">BIELORUSSIE</option>
                                                                        <option value="336">THA&#207;LANDE</option>
                                                                        <option value="337">TAIWAN</option>
                                                                        <option value="338">TURKMENISTAN</option>
                                                                        <option value="339">TURQUIE</option>
                                                                        <option value="340">TRINIDAD ET TOBAGO</option>
                                                                        <option value="341">TCHAD </option>
                                                                        <option value="342">CHILI </option>
                                                                        <option value="343">TANZANIE</option>
                                                                        <option value="344">TOGO</option>
                                                                        <option value="345">TUVALU</option>
                                                                        <option value="346">TOKELAU</option>
                                                                        <option value="347">TUNISIE</option>
                                                                        <option value="348">TONGA</option>
                                                                        <option value="349">TIMOR ORIENTAL</option>
                                                                        <option value="350">JAMAIQUE</option>
                                                                        <option value="351">GIBRALTAR </option>
                                                                        <option value="352">GROELAND</option>
                                                                        <option value="353">ANTILLES N&#201;ERLANDAISES</option>
                                                                        <option value="354">ILES TURQUES ET CA&#207;QUES</option>
                                                                        <option value="355">ILES COMORES</option>
                                                                        <option value="356">ILES CAIMAN</option>
                                                                        <option value="357">ILES MALDIVES </option>
                                                                        <option value="358">ILES SALOMON </option>
                                                                        <option value="359">ILES FEROE</option>
                                                                        <option value="360">ILES MALOUINES </option>
                                                                        <option value="361">ILES FIDJI</option>
                                                                        <option value="362">ILES COOK</option>
                                                                        <option value="363">CAP VERT </option>
                                                                        <option value="364">ILES MARSHALL</option>
                                                                        <option value="365">ILES MARIANNES DU NORD</option>
                                                                        <option value="366">ILES WALLIS ET FUTUNA</option>
                                                                        <option value="367">ILE CHRISTMAS</option>
                                                                        <option value="368">ILE BOUVET</option>
                                                                        <option value="369">ILES COCOS (KEELING)</option>
                                                                        <option value="370">ILE NORFOLK</option>
                                                                        <option value="371">ILE HEARD ET MACDONALD</option>
                                                                        <option value="372">REPUBLIQUE CENTRAFRICAINE</option>
                                                                        <option value="373">REPUBLIQUE TCHEQUE</option>
                                                                        <option value="374">REPUBLIQUE DOMINICAINE</option>
                                                                        <option value="375">REPUBLIQUE DEMOCRATIQUE DU CONGO</option>
                                                                        <option value="376">REPUBLIQUE DE MACEDOINE</option>
                                                                        <option value="377">AFRIQUE DU SUD</option>
                                                                        <option value="378">GUAM</option>
                                                                        <option value="379">GEORGIE </option>
                                                                        <option value="380">G&#201;ORGIE DU SUD-ET-LES &#206;LES SANDWICH DU SUD</option>
                                                                        <option value="381">DJIBOUTI</option>
                                                                        <option value="382">ETAT DE LA CIT&#201; DU VATICAN</option>
                                                                        <option value="383">DOMINIQUE</option>
                                                                        <option value="384">RWANDA</option>
                                                                        <option value="385">FEDERATION DE RUSSIE</option>
                                                                        <option value="386">ROUMANIE</option>
                                                                        <option value="387">LA REUNION</option>
                                                                        <option value="388">ZAMBIE</option>
                                                                        <option value="389">ZIMBABWE</option>
                                                                        <option value="390">COTE D&#39;IVOIRE</option>
                                                                        <option value="391">SAMOA</option>
                                                                        <option value="392">SAMOA AM&#201;RICAINES</option>
                                                                        <option value="393">SAINT-PIERRE ET MIQUELON</option>
                                                                        <option value="394">SAO TOM&#201; ET PRINCIPE</option>
                                                                        <option value="395">SAINT-VINCENT ET LES GRENADINES</option>
                                                                        <option value="396">SAINT CHRISTOPHE NEVIS ANGUILLA</option>
                                                                        <option value="397">SAINT KITTS ET NEVIS</option>
                                                                        <option value="398">SAINTE-LUCIE</option>
                                                                        <option value="399">SAINT-MARIN </option>
                                                                        <option value="400">SAINTE-HELENE</option>
                                                                        <option value="401">SRI LANKA</option>
                                                                        <option value="402">SVALBARD ET JAN MAYEN</option>
                                                                        <option value="403">SLOVAQUIE</option>
                                                                        <option value="404">SLOVENIE</option>
                                                                        <option value="405">SINGAPOUR</option>
                                                                        <option value="406">SWAZILAND</option>
                                                                        <option value="407">SYRIE</option>
                                                                        <option value="408">SURINAME</option>
                                                                        <option value="409">SUISSE</option>
                                                                        <option value="410">SIERRA LEONE</option>
                                                                        <option value="411">SEYCHELLES</option>
                                                                        <option value="412">TADJIKISTAN</option>
                                                                        <option value="413">OMAN </option>
                                                                        <option value="414">GABON </option>
                                                                        <option value="415">GAMBIE </option>
                                                                        <option value="416">GHANA </option>
                                                                        <option value="417">GRENADE </option>
                                                                        <option value="418">GUATEMALA</option>
                                                                        <option value="419">GUADELOUPE </option>
                                                                        <option value="420">AGUIANA</option>
                                                                        <option value="421">GUYANE</option>
                                                                        <option value="422">GUIN&#201;E </option>
                                                                        <option value="423">GUIN&#201;E EQUATORIALE</option>
                                                                        <option value="424">GUIN&#201;E BISSAU</option>
                                                                        <option value="425">VANUATU </option>
                                                                        <option value="426">FRANCE</option>
                                                                        <option value="427">VENEZUELA</option>
                                                                        <option value="428">FINLANDE </option>
                                                                        <option value="429">VIETNAM </option>
                                                                        <option value="430">CHYPRE </option>
                                                                        <option value="431">QATAR</option>
                                                                        <option value="432">KIRGHIZISTAN</option>
                                                                        <option value="433">KAZAKHSTAN</option>
                                                                        <option value="434">NOUVELLE-CAL&#201;DONIE</option>
                                                                        <option value="435">CROATIE</option>
                                                                        <option value="436">CAMBODGE </option>
                                                                        <option value="437">CANADA</option>
                                                                        <option value="438">CUBA</option>
                                                                        <option value="439">COR&#201;E DU SUD</option>
                                                                        <option value="440">COR&#201;E DU NORD</option>
                                                                        <option value="441">COSTA RICA </option>
                                                                        <option value="442">COLOMBIE</option>
                                                                        <option value="443">KIRIBATI</option>
                                                                        <option value="444">KENYA</option>
                                                                        <option value="445">LETTONIE </option>
                                                                        <option value="446">LAOS </option>
                                                                        <option value="447">LIBAN</option>
                                                                        <option value="448">LUXEMBOURG</option>
                                                                        <option value="449">LIBYE</option>
                                                                        <option value="450">LIB&#201;RIA </option>
                                                                        <option value="451">LITHUANIE </option>
                                                                        <option value="452">LESOTHO </option>
                                                                        <option value="453">LIECHTENSTEIN</option>
                                                                        <option value="454">MARTINIQUE</option>
                                                                        <option value="455">MACAO </option>
                                                                        <option value="456">MALTA </option>
                                                                        <option value="457">MALI </option>
                                                                        <option value="458">MALAISIE </option>
                                                                        <option value="459">MAYOTTE</option>
                                                                        <option value="460">MADAGASCAR </option>
                                                                        <option value="461">EGYPTE</option>
                                                                        <option value="462">MALAWI</option>
                                                                        <option value="463">MONGOLIE</option>
                                                                        <option value="464">MAURITANIE </option>
                                                                        <option value="465">ILE MAURICE</option>
                                                                        <option value="466">MOZAMBIQUE </option>
                                                                        <option value="467">MOLDAVIE </option>
                                                                        <option value="468">MONACO </option>
                                                                        <option value="469">MONTSERRAT </option>
                                                                        <option value="470">MYANMAR / BIRMANIE</option>
                                                                        <option value="471">MICRON&#201;SIE </option>
                                                                        <option value="472">NAMIBIE </option>
                                                                        <option value="473">NAURU </option>
                                                                        <option value="474">NEPAL </option>
                                                                        <option value="475">NIG&#201;RIA </option>
                                                                        <option value="476">NICARAGUA</option>
                                                                        <option value="477">NOUVELLE Z&#201;LANDE </option>
                                                                        <option value="478">NIUE</option>
                                                                        <option value="479">HA&#207;TI </option>
                                                                        <option value="480">HONDURAS</option>
                                                                        <option value="481">PAYS-BAS</option>
                                                                        <option value="482">HONG-KONG</option>
                                                                        <option value="483">YOUGOSLAVIE </option>
                                                                        <option value="484">PALESTINE </option>
                                                                        <option value="490">SOUDAN DU SUD</option>
                                                                        <option value="492">MONT&#201;N&#201;GRO</option>
                                                                        <option value="493">SERBIE</option>
                                                                        <option value="494">KOSOVO</option>
                                                                        <option value="248">ARUBA</option>
                                                        
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="col-md-5">
                                                                <input   type="text" 
                                                                       placeholder="Adresse" class="form-control required"/>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input  name="contact" type="number" maxlength="8" 
                                                                       placeholder="Contact" class="form-control required"/>
                                                            </div>
                                                </div>
                                        </div>
                                           
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <p class="text-danger"><strong>Be careful with group selection, if you give
                                                admin access.. they can access admin section</strong></p>
                                            <div class="form-group required">
                                                <label for="group" class="  col-sm-3 control-label">Group *</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control required select21"   name="group" id="group">
                                                        <option disabled selected>Select Group</option>
                                                        <option value="admin">admin</option>
                                                        <option value="user">user</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="activate" class="  col-sm-3 control-label"> Activate User
                                                </label>
                                                <div class="col-sm-9">
                                                    <label for="activate">
                                                        <input id="activate" name="activate" type="checkbox"
                                                               class="pos-rel p-l-30 custom-checkbox" value="1"> &nbsp;Activate
                                                        the user otherwise the user won't be able to access their
                                                        account.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="pager wizard">
                                            <li class="previous">
                                                <a href="#">Precedent</a>
                                            </li>
                                            <li class="next">
                                                <a href="#">Suivant</a>
                                            </li>
                                            <li class="next finish" style="display:none;">
                                                <a href="javascript:;">Valider</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">User Register</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Account Registered Successfully.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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