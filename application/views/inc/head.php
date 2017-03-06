
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="LimpidThemes">

<title><?= PROJECT_TITLE ?></title>
<link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.png" />
<!-- STYLES -->
<link href="<?=base_url()?>css/animate.min.css" rel="stylesheet">
<link href="<?=base_url()?>css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?=base_url()?>css/owl.carousel.css" rel="stylesheet">
<link href="<?=base_url()?>css/owl-carousel-theme.css" rel="stylesheet">
<link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=base_url()?>css/flexslider.css" rel="stylesheet" media="screen">
<link href="<?=base_url()?>css/style1.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/dummy.css" id="select-style">
<link href="<?=base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=base_url()?>css/light.css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
<style>
    .ui-datepicker {
        background-color: #fff;
        border: 1px solid #66AFE9;
        border-radius: 4px;
        box-shadow: 0 0 8px rgba(102,175,233,.6);
        display: none;
        margin-top: 4px;
        padding: 10px;
        width: 240px;
    }
    .ui-datepicker a,
    .ui-datepicker a:hover {
        text-decoration: none;
    }
    .ui-datepicker a:hover,
    .ui-datepicker td:hover a {
        color: #2A6496;
        -webkit-transition: color 0.1s ease-in-out;
        -moz-transition: color 0.1s ease-in-out;
        -o-transition: color 0.1s ease-in-out;
        transition: color 0.1s ease-in-out;
    }
    .ui-datepicker .ui-datepicker-header {
        margin-bottom: 4px;
        text-align: center;
    }
    .ui-datepicker .ui-datepicker-title {
        font-weight: 700;
    }
    .ui-datepicker .ui-datepicker-prev,
    .ui-datepicker .ui-datepicker-next {
        cursor: default;
        font-family: 'FontAwesome';
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-weight: normal;
        height: 20px;
        line-height: 1;
        margin-top: 2px;
        width: 30px;
    }
    .ui-datepicker .ui-datepicker-prev {
        float: left;
        text-align: left;
    }
    .ui-datepicker .ui-datepicker-next {
        float: right;
        text-align: right;
    }
    .ui-datepicker .ui-datepicker-prev:before {
        content: "\f053";
    }
    .ui-datepicker .ui-datepicker-next:before {
        content: "\f054";
    }
    .ui-datepicker .ui-icon {
        display: none;
    }
    .ui-datepicker .ui-datepicker-calendar {
        table-layout: fixed;
        width: 100%;
    }
    .ui-datepicker .ui-datepicker-calendar th,
    .ui-datepicker .ui-datepicker-calendar td {
        text-align: center;
        padding: 4px 0;
    }
    .ui-datepicker .ui-datepicker-calendar td {
        border-radius: 4px;
        -webkit-transition: background-color 0.1s ease-in-out, color 0.1s ease-in-out;
        -moz-transition: background-color 0.1s ease-in-out, color 0.1s ease-in-out;
        -o-transition: background-color 0.1s ease-in-out, color 0.1s ease-in-out;
        transition: background-color 0.1s ease-in-out, color 0.1s ease-in-out;
    }
    .ui-datepicker .ui-datepicker-calendar td:hover {
        background-color: #eee;
        cursor: pointer;
    }
    .ui-datepicker .ui-datepicker-calendar td a {
        text-decoration: none;
    }
    .ui-datepicker .ui-datepicker-current-day {
        background-color: #4289cc;
    }
    .ui-datepicker .ui-datepicker-current-day a {
        color: #fff
    }
    .ui-datepicker .ui-datepicker-calendar .ui-datepicker-unselectable:hover {
        background-color: #fff;
        cursor: default;
    }
    .ui-state-disabled .ui-state-default{
        color: #939393;
    }
    .ui-datepicker-group{
        width: 48%;
        float: left;
        margin-left: 2px;
    }
    .ui-datepicker-calendar th {
        border: 1px solid #00ADEF;
        background-color: #00ADEF;
    }
    .ui-datepicker-calendar td {
        border: 1px solid #00ADEF;
    }
</style>