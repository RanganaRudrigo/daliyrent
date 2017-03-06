<!DOCTYPE html>
<html>
<head>
    <!-- multiselect, tagging -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/select2/select2.css">
    <?php $this->load->view('admin/inc/head') ?>

</head>
<body class="side_nav_hover" >
<!-- top bar -->
<?php $this->load->view('admin/inc/header') ?>
<!-- main content -->
<div id="main_wrapper">
    <div class="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <fieldset>
                                <legend><span>Create Facilities</span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/facilities"> Facilities </a>
                                        &raquo; create
                                    </div>
                                </legend>

                            </fieldset>

                            <?php
                            $error= isset($error)? $error : $this->session->flashdata('error');
                            $valid= $this->session->flashdata('valid');

                            if(isset($valid)) $error = $valid;

                            if(isset($error)){
                                ?>
                                <div class="alert <?=isset($valid)?  'alert-success' : 'alert-danger'?> alert-dismissable fade in ">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?=$error?>
                                </div>
                                <?php
                            }

                            ?>

                            <form data-parsley-validate method="post">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="reg_Facilities_code">Facilities Code</label>
                                            <input type="text" id="reg_Facilities_code" name="form[code]" disabled=""  value="<?= $result->code ?>"
                                                   class="form-control" >
                                                   <small class="help-text" > It will auto generate after create  </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_Facilities_name">Facilities Name</label>
                                            <input type="text" id="reg_Facilities_name" name="form[title]" value="<?= $result->title ?>"
                                                   class="form-control" data-parsley-required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_Facilities_name">Facilities Image</label>
                                            <select id="s2_ext_value"  name="form[image]" class="icon-list clearfix form-control ">
                                                <?php foreach($font as $f ): ?>
                                                   <option value="<?= $f->image ?>"  <?= $f->image == $result->image ? "selected" : "" ?> > <?= $f->image ?> </option>
                                               <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-sep">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Font Awesome</div>
                        <div class="panel-body">
                            <ul id="fontawesome_list" class="icon-list clearfix">
                                <?php foreach($font as $f ): ?>
                                    <li><span class="<?=$f->image ?>"></span><code><?=$f->image ?></code></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

 
                </div>
            </div>
        </div>
    </div>

    <!-- side navigation -->
    <?php $this->load->view('admin/inc/nav') ?>

    <!-- right slidebar -->
    <div id="slidebar">
        <div id="slidebar_content">

        </div>
    </div>
</div>
<?php $this->load->view('admin/inc/foot') ?>
<!-- parsley.js validation -->
<script src="<?= base_url() ?>assets/lib/Parsley.js/dist/parsley.min.js"></script>
<!-- form validation functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_validation.js"></script>
<!-- multiselect, tagging -->
<script src="<?= base_url() ?>assets/lib/select2/select2.min.js"></script>
<script>
    if($('#s2_ext_value').length) {

        function format(state) {
            if (!state.id) return state.text;
            return '<i class="' + state.id + '"></i> &nbsp; ' + state.text;
        }

        $('#s2_ext_value').select2({
            placeholder: "Select Image ",
            formatResult: format,
            formatSelection: format,
            escapeMarkup: function(markup) { return markup; }
        }) ;

    }
</script>

</body>

</html>
