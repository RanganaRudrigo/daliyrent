<!DOCTYPE >
<html  >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $this->load->view('admin/inc/head') ?>
    <!-- bootstrap switches -->
    <link href="<?= base_url() ?>assets/lib/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.css"
          rel="stylesheet">
    <!-- multiselect, tagging -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/select2/select2.css">
    <!-- main stylesheet -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" media="screen">

    <!-- date range picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">

    <style>
        .img-grid2 li {
            width: 50%;
        }
    </style>

</head>
<body class="side_nav_hover">
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
                                <legend><span>Create Property  </span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/property"> Property </a>
                                        &raquo; create
                                    </div>
                                </legend>

                            </fieldset>

                            <?php
                            $error = isset($error) ? $error : $this->session->flashdata('error');
                            $valid = $this->session->flashdata('valid');

                            if (isset($valid)) $error = $valid;

                            if (isset($error)) {
                                ?>
                                <div
                                    class="alert <?= isset($valid) ? 'alert-success' : 'alert-danger' ?> alert-dismissable fade in ">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                    <?= $error ?>
                                </div>
                                <?php
                            }


                            ?>

                            <form data-parsley-validate method="post">

                                <div class="tabbable ">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#prod_tab_general"
                                                              class="tab-default">General</a></li>
                                        <li><a data-toggle="tab" href="#prod_tab_room" class="tab-default">Rooms</a></li>
                                        <li><a data-toggle="tab" href="#prod_tab_data" class="tab-default">Data</a></li>
                                        <li><a data-toggle="tab" href="#prod_tab_images" class="tab-default">Images</a>  </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="prod_tab_general" class="tab-pane active">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="name">Property Name</label>
                                                        <input type="text" id="name" name="form[title]"
                                                               value="<?= $result->title ?>"
                                                               class="form-control" data-parsley-required="true">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="code">Property Code</label>
                                                        <input type="text" id="code" name="form[code]" disabled=""
                                                               value="<?= $result->code ?>"
                                                               class="form-control">
                                                        <small class="help-text"> It will auto generate after create
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix" ></div>
                                            <div class="col-lg-6" >
                                                <div class="fileinput-button btn btn-success sepH_b">
                                                    <i class="fa fa-plus"></i>
                                                    <span>Add files...</span>
                                                    <input id="default_image_upload" type="file" name="userfile"  >
                                                </div>
                                                <small> image size ( 770px * 386px ) </small>
                                                <ul  class="img-grid2 img-grid  clearfix" id="default_img_grid_upload" >
                                                    <?php if($result->image): ?>
                                                        <li   >
                                                            <div class="upload_img_single thumbnail">
                                                                <img src="<?= base_url() ?>uploads/thumbs/<?= $result->image ?>" class="thumbnail img-responsive" alt=""/>
                                                                <div class="upload_img_actions">
                                                                <span   class=" fa fa-times pull-right btn  btn-danger  "
                                                                        onclick="image_upload.remove($(this))"> </span> <input
                                                                        type="hidden" name="form[image]"
                                                                        value="<?= $result->image ?>"></div>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <div class="clearfix" ></div>


                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="short" class="req">Property Short Description (maximum text 150) </label>
                                                        <textarea name="form[short]" id="short" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->short ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="description" class="req">Property Description</label>
                                                        <textarea name="form[description]" id="description" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->description ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="property_type">Property Type </label>
                                                    <select    class="form-control" data-parsley-required="true"  id="property_type"  name="form[property_type]" >
                                                        <option value="" > ------------ </option>
                                                        <?php foreach($type as $t ): ?>
                                                            <option value="<?= $t->id ?>" <?= $result->property_type == $t->id ? "selected" : "" ?> ><?= $t->title ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="prod_tab_data" class="tab-pane">
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="location">Address</label>
                                                        <textarea id="location" name="form[location]" class="form-control" data-parsley-required="true"  ><?= $result->location ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="city"> City  </label>
                                                        <input type="text" id="city" name="form[city]" class="form-control" value="<?= $result->city ?>"  >
                                                    </div>
                                                </div>

                                                <div class="clearfix" ></div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="map">Phone  </label>
                                                        <input type="text" name="form[phone]" class="form-control" value="<?= $result->phone ?>"  >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email"> Email  </label>
                                                        <input type="email" name="form[email]" class="form-control" value="<?= $result->email ?>"  >
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="map">Map   <small> copy google map embed link  </small> </label>
                                                        <input type="text" name="form[map]" class="form-control" data-parsley-required="true" value="<?= $result->map ?>"  >
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="map"> Star   </label>
                                                        <label  ><input type="radio" name="form[star]" value="0" <?= $result->star == 0 || ! isset($result->star ) ? 'checked' : '' ?>  /> any &nbsp;</label>
                                                        <label  ><input type="radio" name="form[star]" value="1" <?= $result->star == 1 ? 'checked' : '' ?>   /> <?= repeater('<i class="fa fa-star" ></i>',1) ?> &nbsp;</label>
                                                        <label  ><input type="radio" name="form[star]" value="2" <?= $result->star == 2 ? 'checked' : '' ?>   /> <?= repeater('<i class="fa fa-star" ></i>',2) ?> &nbsp;</label>
                                                        <label  ><input type="radio" name="form[star]" value="3" <?= $result->star == 3 ? 'checked' : '' ?>   /> <?= repeater('<i class="fa fa-star" ></i>',3) ?> &nbsp;</label>
                                                        <label  ><input type="radio" name="form[star]" value="4" <?= $result->star == 4 ? 'checked' : '' ?>   /> <?= repeater('<i class="fa fa-star" ></i>',4) ?> &nbsp;</label>
                                                        <label  ><input type="radio" name="form[star]" value="5" <?= $result->star == 5 ? 'checked' : '' ?>   /> <?= repeater('<i class="fa fa-star" ></i>',5) ?> &nbsp;</label>

                                                    </div>
                                                </div>


                                                <!--<div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="square_feet">Square Feet</label>
                                                        <input type="text" id="square_feet" name="form[square_feet]"
                                                               value="<?/*= $result->square_feet */?>"
                                                               class="form-control" data-parsley-required="true">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="bedrooms">Bedrooms</label>
                                                        <input type="text" id="bedrooms" name="form[bedrooms]"
                                                               value="<?/*= $result->bedrooms */?>" data-parsley-required="true"
                                                               class="form-control">
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="bathrooms">Bathrooms</label>
                                                        <input type="text" id="bathrooms" name="form[bathrooms]"
                                                               value="<?/*= $result->bathrooms */?>"
                                                               class="form-control" data-parsley-required="true" >
                                                    </div>
                                                </div>-->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="garages">Garages</label>
                                                        <input type="text" id="garages" name="form[garages]"
                                                               value="<?= $result->garages ?>"
                                                               class="form-control"   >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="key">Search Key</label>
                                                        <input type="text" id="key" name="form[key]"
                                                               value="<?= $result->key ?>"
                                                               class="form-control key" data-parsley-required="true" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="feature">Status</label>
                                                        <select  class="form-control" name="form[status]"  id="status"  >
                                                            <option value="1" <?= $result->status == 1 ? 'selected' : '' ?>  >YES</option>
                                                            <option value="0" <?= is_object($result) && $result->status == 0 ? 'selected' : '' ?>  >NO</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="clearfix" ></div>
                                                <div class="col-lg-6" >
                                                    <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="form[home]" value="1" <?= $result->home == 1 ? 'checked' : '' ?>  >
                                                            <strong>View in Home Screen </strong>
                                                        </label>
                                                    </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="prod_tab_images" class="tab-pane">
                                            <div class="fileinput-button btn btn-success sepH_b">
                                                <i class="fa fa-plus"></i>
                                                <span>Add files...</span>
                                                <input id="image_upload" type="file" name="userfile" multiple>
                                            </div>
                                            <small> image size ( 770px * 386px ) </small>
                                            <ul class="img-grid clearfix" id="img_grid_upload">
                                                <?php foreach ($images as $img): ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img src="<?= base_url() ?>uploads/thumbs/<?= $img->image ?>" class="thumbnail img-responsive" alt=""/>
                                                            <div class="upload_img_actions">
                                                                <span   class=" fa fa-times pull-right btn  btn-danger  "
                                                                        onclick="image_upload.remove($(this))"> </span> <input
                                                                    type="hidden" name="image[]"
                                                                    value="<?= $img->image ?>"></div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div id="prod_tab_room" class="tab-pane" >

                                            <div class="form-group">
                                                <label for="single_property"> Single Property
                                                <input type="checkbox" id="single_property" name="form[single_property]"
                                                       value="1"  <?= $result->single_property == 1 ? 'checked' : '' ?> >
                                                </label> <small> If Single Property is enabled then please add only one record </small>
                                            </div>

                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th width="15%" >Title</th>
                                                    <th width="10%" >No of Room</th>
                                                    <th width="10%" >Room max Allowed</th>
                                                    <th width="15%" >Price</th>
                                                    <th width="35%" >Feature</th>
                                                    <th width="15%" >Disable Date start/end</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach( $rooms as $k => $r  ):
                                                    $feature = explode(',',$r->feature);
                                                      //  p($feature);
                                                    ?>
                                                    <tr  >
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control " name="room[title][<?=$k?>]"  value="<?= $r->title ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="room[id][<?=$k?>]" value="<?= $r->id ?>" >
                                                            <input type="number" class="form-control" name="room[no_of_room][<?=$k?>]" value="<?= $r->no_of_room ?>"></td>
                                                        <td><input type="number" class="form-control" name="room[max_allow][<?=$k?>]"  value="<?= $r->max_allow ?>"></td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control price" name="room[price][<?=$k?>]"  value="<?= $r->price ?>">
                                                                <span class="input-group-addon input-group-primary">/=</span>
                                                            </div>
                                                        </td>
                                                        <td> <select class="form-control feature" name="feature[<?=$k?>][]" multiple >
                                                                <?php foreach($font as $f ){ ?>
                                                                    <option value="<?= $f->id ?>"   <?= in_array($f->id , $feature )  ? "selected" : "" ?> >  <?= $f->image ?>~<?= $f->title ?>  </option>
                                                                <?php } ?>
                                                            </select> </td>
                                                        <td><input type="text" class="form-control discound_date_range " name="room[disable_date][<?=$k?>]" value="<?= $r->start_date ?> - <?= $r->end_date ?>" ></td>
                                                        <td><input type="number" class="form-control   " name="room[booked_room][<?=$k?>]" value="<?= $r->booked_room ?>" ></td>
                                                        <td><a href="#" class="btn btn-sm btn-default tr_remove">Remove</a></td>
                                                    </tr>
                                                <?php endforeach; ?>


                                                <tr id="tr_add">
                                                        <td colspan="6"></td>
                                                    <td><a href="#" class="btn btn-sm btn-primary" id="tr_add_btn">Add Room</a></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix" ></div>

                                <div class="form-sep">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
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
<!-- wysiwg editor -->
<script src="<?= base_url() ?>assets/lib/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/lib/ckeditor/adapters/jquery.js"></script>


<!-- parsley.js validation -->
<script src="<?= base_url() ?>assets/lib/Parsley.js/dist/parsley.min.js"></script>
<!-- form validation functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_validation.js"></script>

<!-- multiupload -->
<script src="<?= base_url() ?>assets/lib/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>

<!-- masked inputs -->
<script src="<?= base_url() ?>assets/lib/jquery.inputmask/dist/jquery.inputmask.bundle.min.js"></script>

<!-- multiselect, tagging -->
<script src="<?= base_url() ?>assets/lib/select2/select2.min.js"></script>

<!-- date range picker -->
<script src="<?= base_url() ?>assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
    $(function () {
        wysiwg.init();
        image_upload.init();
        image_upload.default_image();
        maskedInputs.init();
        enhanced_select.init();
        admin_table.row_add();
        admin_table.row_remove();
        date_range.discount_picker();
    });
    // wysiwg editor
    wysiwg = {
        init: function () {
            if ($('#description').length) {
                $('textarea#description').ckeditor();
            }
        }
    }

    // image upload
    image_upload = {
        init: function () {
            if ($('#image_upload').length) {
                var uploadButton = $('<button/>')
                    .addClass('btn btn-success btn-block')
                    .prop('disabled', true)
                    .text('Processing...')
                    .on('click', function (e) {
                        var $this = $(this),
                            data = $this.data();
                        $this
                            .off('click')
                            .text('Abort')
                            .on('click', function () {
                                $this.remove();
                                data.abort();
                            });
                        data.submit().always(function () {
                            $this.remove();
                        });
                        e.preventDefault();
                    });

                $('#image_upload').fileupload({
                    url: '<?= base_url() ?>admin/property/do_upload',
                    dataType: 'json',
                    autoUpload: false,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 5000000, // 5 MB
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                        .test(window.navigator.userAgent),
                    previewMaxWidth: 220,
                    previewMaxHeight: 220,
                    previewCrop: true
                })
                    .on('fileuploadsubmit', function (e, data) {
                        var input = $('#image_upload');
                        data.formData = {
                            files: input.data(data)
                        };
                        if (!data.formData.files) {
                            input.focus();
                            return false;
                        }
                    })
                    .on('fileuploadadd', function (e, data) {
                        data.context = $('<li/>').appendTo('#img_grid_upload');
                        if (!$('#upload_progress').length) {
                            $('body').append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>');
                        }
                        $.each(data.files, function (index, file) {
                            var upload_image_actions = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  ');
                            var node = $('<div class="upload_img_single thumbnail" />').append(upload_image_actions);
                            if (!index) {
                                upload_image_actions.append(uploadButton.clone(true).data(data));
                            }
                            node.appendTo(data.context);
                        });
                    })
                    .on('fileuploadprocessalways', function (e, data) {
                        var index = data.index,
                            file = data.files[index],
                            node = $(data.context.children()[index]);
                        if (file.preview) {
                            node.prepend(file.preview);
                        }
                        if (file.error) {
                            node.find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                        }
                        if (index + 1 === data.files.length) {
                            data.context.find('button').text('Upload').prop('disabled', !!data.files.error);
                        }
                    })
                    .on('fileuploadprogressall', function (e, data) {
                        $('#upload_progress').addClass('show_progress');
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        if (progress == 100) {
                            setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                        }
                    })
                    .on('fileuploaddone', function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            if (file.url) {
                                $(data.context.children()[index]).find('.upload_img_actions').append('<div class="alert alert-success">Upload success <br/><a class="alert-link" target="_blank" href=' + file.url + '>show  image</a> <input type="hidden" name="image[]" value="' + file.name + '" > </div>');
                            } else if (file.error) {
                                $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                            }
                        });
                    })
                    .on('fileuploadfail', function (e, data) {
                        $('#upload_progress').addClass('show_progress');
                        $.each(data.files, function (index, file) {
                            $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text('File upload failed.'));
                        });
                        setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                    }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled')
                ;
            }
        },
        remove: function (self) {
            if (confirm("Do you want to remove this file ")) {
                self.closest('li').remove();
            }
        } ,
        default_image : function(){
                var uploadButton = $('<button/>')
                    .addClass('btn btn-success btn-block')
                    .prop('disabled', true)
                    .text('Processing...')
                    .on('click', function (e) {
                        var $this = $(this),
                            data = $this.data();
                        $this
                            .off('click')
                            .text('Abort')
                            .on('click', function () {
                                $this.remove();
                                data.abort();
                            });
                        data.submit().always(function () {
                            $this.remove();
                        });
                        e.preventDefault();
                    });

                $('#default_image_upload').fileupload({
                    url: '<?= base_url() ?>admin/property/do_upload',
                    dataType: 'json',
                    autoUpload: false,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 5000000, // 5 MB
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                        .test(window.navigator.userAgent),
                    previewMaxWidth: 220,
                    previewMaxHeight: 220,
                    previewCrop: true
                })
                    .on('fileuploadsubmit', function (e, data) {
                        var input = $('#default_image_upload');
                        data.formData = {
                            files: input.data(data)
                        };
                        if (!data.formData.files) {
                            input.focus();
                            return false;
                        }
                    })
                    .on('fileuploadadd', function (e, data) {
                        $('#default_img_grid_upload').html(" ");
                        data.context = $('<li/>').appendTo('#default_img_grid_upload');
                        if (!$('#upload_progress').length) {
                            $('body').append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>');
                        }
                        $.each(data.files, function (index, file) {
                            var upload_image_actions = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span> <input type="hidden" name="form[image]" value="' + file.name + '" > ');
                            var node = $('<div class="upload_img_single thumbnail" />').append(upload_image_actions);
                            if (!index) {
                                upload_image_actions.append(uploadButton.clone(true).data(data));
                            }
                            node.appendTo(data.context);
                        });
                    })
                    .on('fileuploadprocessalways', function (e, data) {
                        var index = data.index,
                            file = data.files[index],
                            node = $(data.context.children()[index]);
                        if (file.preview) {
                            node.prepend(file.preview);
                        }
                        if (file.error) {
                            node.find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                        }
                        if (index + 1 === data.files.length) {
                            data.context.find('button').text('Upload').prop('disabled', !!data.files.error);
                        }
                    })
                    .on('fileuploadprogressall', function (e, data) {
                        $('#upload_progress').addClass('show_progress');
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        if (progress == 100) {
                            setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                        }
                    })
                    .on('fileuploaddone', function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            if (file.url) {
                                $(data.context.children()[index]).find('.upload_img_actions').append('<div class="alert alert-success">Upload success <br/><a class="alert-link" target="_blank" href=' + file.url + '>show  image</a></div>');
                            } else if (file.error) {
                                $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                            }
                        });
                    })
                    .on('fileuploadfail', function (e, data) {
                        $('#upload_progress').addClass('show_progress');
                        $.each(data.files, function (index, file) {
                            $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text('File upload failed.'));
                        });
                        setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                    }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled')
                ;

        }
    }


    //* masked inputs
    maskedInputs = {
        val:null,
        init: function () {
            if ($('.price').length) {
                $(".price").inputmask("decimal", {
                    radixPoint: ".",
                    groupSeparator: ",",
                    digits: 2,
                    autoGroup: true
                }).on('keydown',function(e){
                    this.val =$(this).val();
                }).on('keyup',function(){
                    v = $(this).val().replace(",", "");
                    if($(this).data('max-value') < v  )
                        $(this).val($(this).data('max-value'));
                });
            }
        }
    }


    enhanced_select = {
        init: function() {
            $('#key').select2({
                placeholder: "Select...",
                tags:[<?='"'. implode('","',$key).'"' ?>],
                tokenSeparators: [",", "\n"]
            });
            $('#city').select2({
                placeholder: "Select...",
                maximumSelectionSize: 1 ,
                tags:[<?='"'. implode('","',$city).'"' ?>],
                tokenSeparators: [",", "\n"]
            });
            $('#feature,.feature').select2({
                placeholder: "Type New Feature...",
                formatResult: this.format,
                formatSelection: this.format,
                escapeMarkup: function(markup) { return markup; }
            });

        },
        feature : function(id){
            $(id).select2({
                placeholder: "Type New Feature...",
                formatResult: this.format,
                formatSelection: this.format,
                escapeMarkup: function(markup) { return markup; }
            });
        }

        ,format :function (state) {
            console.log(state);
            if (!state.id) return state.text;
            t = state.text.split("~");
            return '<i class="' + t[0]+ '"></i> &nbsp; ' + t[1];
        }
    }

    // add table row
    admin_table = {
        row_add: function() {
            if($('#tr_add').length) {
                var $tr_id = <?= count($rooms) -1 ?>;
                $('#tr_add_btn').on('click', function(e) {
                    $tr_id = $tr_id+1;
                    e.preventDefault();
                    var $cloned_tr = $('#tr_clone').clone(true),
                        random_id = Math.random().toString(36).substr(2, 9);

                    $cloned_tr.attr({
                        id: 'discount_row_' + $tr_id
                    }).removeAttr('style').find('select').attr({
                        id : 'feature_' + $tr_id ,
                        name : $cloned_tr.find('select').attr('name').replace('$',$tr_id)
                    }).removeClass('feature');
                    $cloned_tr.find('input').each(function(){
                        $(this).attr({
                            name : $(this).attr('name').replace('$',$tr_id)
                        });
                    });
                    $cloned_tr.insertBefore($('#tr_add'));
                    date_range.discount_picker();
                    maskedInputs.init();
                    enhanced_select.feature('#feature_' + $tr_id);
                })
            }
        },
        row_remove: function() {
            if($('.tr_remove').length) {
                $('.tr_remove').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('tr').remove();
                })
            }
        }
    }
    date_range = {
        discount_picker: function() {
            if($('.discound_date_range').length) {
                $('.discound_date_range').daterangepicker({
                    ranges: {
                        'Next 7 Days': [moment().add('days', 1), moment().add('days', 7)],
                        'Next 14 Days': [moment().add('days', 1), moment().add('days', 14)],
                        'Next Month': [moment().add('month', 1).startOf('month'), moment().add('month', 1).endOf('month')]
                    },
                    opens: 'left',
                    format: 'YYYY-MM-DD'
                });
            }
        }
    }

</script>
<table><tr id="tr_clone" style="display:none">

        <td><input type="text" class="form-control" name="room[title][$]" value=""></td>
        <td><input type="number" class="form-control" name="room[no_of_room][$]" value=""></td>
        <td><input type="number" class="form-control" name="room[max_allow][$]"  value=""></td>
        <td>
            <div class="input-group">
                <input type="text" class="form-control price" name="room[price][$]"  value="">
                <span class="input-group-addon input-group-primary">/=</span>
            </div>
        </td>
        <td><select class="form-control" name="feature[$][]" multiple >
                <?php foreach($font as $f ): ?>
                    <option value="<?= $f->id ?>"     > <?= $f->image ?>~<?= $f->title ?> </option>
                <?php endforeach; ?>
            </select> </td>
        <td><input type="text" class="form-control discound_date_range " name="room[disable_date][$]" ></td>
        <td><input type="number" class="form-control   " name="room[booked_room][$]" ></td>
        <td><a href="#" class="btn btn-sm btn-default tr_remove">Remove</a></td>
    </tr></table>

</body>


</html>
