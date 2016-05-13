<div class="row">

    <!-- Side Navigation -->
    <?php echo $_sidenavigation; ?>

    <!-- Content -->
    <div class="col-md-9">
        <h1 style="margin-top:0px;">My Representatives</h1>

        <hr>

        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default serviceCard">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="serviceName">Albert Wilson<br><span class="lead">240-123-5555</span></p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left: 31px;">
                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-xs-6 col-md-4"><strong>Date of Birth:</strong><br> 08/12/1955</div>
                                        <div class="col-xs-6 col-md-4"><strong>Relationship:</strong><br> Friend</div>
                                        <div class="col-xs-6 col-md-4"><strong>Guardian of:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>Power of Attorney:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>Representative Payee:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>Primary Caregiver:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>CFC Representative:</strong><br> No</div>

                                    </div>


                                        <div class="row">
                                            <div class="col-xs-12"><strong>Comments:</strong>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                                            </div>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="panel panel-default serviceCard">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="serviceName">John Snow<br><span class="lead">240-123-5555</span></p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left: 31px;">
                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-xs-6 col-md-4"><strong>Date of Birth:</strong><br> 01/27/1135</div>
                                        <div class="col-xs-6 col-md-4"><strong>Relationship:</strong><br> </div>
                                        <div class="col-xs-6 col-md-4"><strong>Guardian of:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>Power of Attorney:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>Representative Payee:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>Primary Caregiver:</strong><br> No</div>
                                        <div class="col-xs-6 col-md-4"><strong>CFC Representative:</strong><br> No</div>

                                    </div>

                                        <div class="row">
                                            <div class="col-xs-12"><strong>Comments:</strong>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                                            </div>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div
        <!-- /Content -->
</div><!--/row-->

<!-- Modals -->

<!-- Modal - Contact -->
<?php echo $_edit_mycontact_modal;?>

<!-- Modal - Delete -->
<?php echo $_deleteconfirmation_modal;?>


<!-- Scripts -->

<script type="text/javascript">
    $(document).ready(function(){

        function showHideFamilyRelationship() {
            if ($('#importantcontactrelationship').val() == 'Representative' && $('#isfamilymember').prop('checked') == true ||
                $('#importantcontactrelationship').val() == 'Doctor' && $('#isfamilymember').prop('checked') == true
            ) {
                $('#familyrelationship-group2').show();
            } else {
                $('#familyrelationship-group2').hide();
            }
        }
        function showHideSpecifySpecialty() {
            if ($('#importantcontactrelationship').val() == 'Representative' && $('#isdoctor').prop('checked') == true ||
                $('#importantcontactrelationship').val() == 'Friend' && $('#isdoctor').prop('checked') == true ||
                $('#importantcontactrelationship').val() == 'Family Member' && $('#isdoctor').prop('checked') == true
            ) {
                $('#specifyspecialiaty-group2').show();
            } else {
                $('#specifyspecialiaty-group2').hide();
            }
        }
        $('#importantcontactrelationship').change(function(){
            if ($('#importantcontactrelationship').val() == 'Representative') {
                $('#isrepresentative-group').hide();
                $('#isdoctor-group').show();
                $('#isfamilymember-group').show();
                $('#clarifyother-group').hide();
                $('#checkall-group').show();
                $('#familyrelationship-group1').hide();
                $('#specifyspecialiaty-group1').hide();
            } else if ($('#importantcontactrelationship').val() == 'Doctor') {
                $('#isrepresentative-group').show();
                $('#isdoctor-group').hide();
                $('#isfamilymember-group').show();
                $('#clarifyother-group').hide();
                $('#checkall-group').show();
                $('#familyrelationship-group1').hide();
                $('#specifyspecialiaty-group1').show();
            } else if ($('#importantcontactrelationship').val() == 'Family Member') {
                $('#isrepresentative-group').show();
                $('#isdoctor-group').show();
                $('#isfamilymember-group').hide();
                $('#clarifyother-group').hide();
                $('#checkall-group').show();
                $('#familyrelationship-group1').show();
                $('#specifyspecialiaty-group1').hide();
            } else if ($('#importantcontactrelationship').val() == 'Friend') {
                $('#isrepresentative-group').show();
                $('#isdoctor-group').show();
                $('#isfamilymember-group').hide();
                $('#clarifyother-group').hide();
                $('#checkall-group').show();
                $('#familyrelationship-group1').hide();
                $('#specifyspecialiaty-group1').hide();
            } else if ($('#importantcontactrelationship').val() == 'Other') {
                $('#isrepresentative-group').hide();
                $('#isdoctor-group').hide();
                $('#isfamilymember-group').hide();
                $('#clarifyother-group').show();
                $('#checkall-group').hide();
                $('#familyrelationship-group1').hide();
                $('#specifyspecialiaty-group1').hide();
            } else {
                $('#isrepresentative-group').hide();
                $('#isdoctor-group').hide();
                $('#isfamilymember-group').hide();
                $('#clarifyother-group').hide();
                $('#checkall-group').hide();
                $('#familyrelationship-group1').hide();
                $('#specifyspecialiaty-group1').hide();
            }

            showHideFamilyRelationship();
            showHideSpecifySpecialty()
        });


        $('#isfamilymember').change(function(){
            showHideFamilyRelationship()
        });;
        $('#isdoctor').change(function(){
            showHideSpecifySpecialty()
        });

        $('#importantcontactrelationship').change();
        $('#isfamilymember').change()
        $('#isdoctor').change();

    });
</script>
