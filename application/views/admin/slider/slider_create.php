<!DOCTYPE html>
<html>
<head>
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
                                <legend><span>Create Slider</span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/property_type"> Slider </a>
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

                                    <div class="col-lg-12" >
                                        <div class="fileinput-button btn btn-success sepH_b">
                                            <i class="fa fa-plus"></i>
                                            <span>Add files...</span>
                                            <input id="image_upload" type="file" name="userfile" multiple>
                                        </div>
                                        <small> image size 1024px * 400px  </small>
                                        <ul class="img-grid clearfix" id="img_grid_upload">
                                            <?php foreach ($result as $img): ?>
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
                                </div>
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
<!-- parsley.js validation -->
<script src="<?= base_url() ?>assets/lib/Parsley.js/dist/parsley.min.js"></script>
<!-- form validation functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_validation.js"></script>


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


<script>
    $(function () {
        wysiwg.init();
        image_upload.init();
        image_upload.default_image();
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
                            var upload_image_actions = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span> <input type="hidden" name="image[]" value="' + file.name + '" > ');
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

</script>


</body>

</html>
