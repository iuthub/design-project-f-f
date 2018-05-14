<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adding student</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>


<body style="background-image: url("blur-back.jpg")">
<div id="wrapper">
    <?php
    include("header1.php");
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <section class="content-header">
                <h1>Add student
                </h1>
                <ol class="breadcrumb">
                    <li><a href="?mod=main"><i class="fa fa-dashboard"></i> Main</a></li>
                    <li><a href="?mod=students&op=mnmgt"><i class="fa fa-flag"></i> students</a></li>
                    <li class="active">Adding student</li>
                </ol>
            </section>


            <section class="content">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                    <form action="" method="post" class="validate-form form bt-space15">
                        <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Contact Info</h3>
                                </div>

                                <div class="box-body">
                                    <div class="form-group col-xs-5 nopadding">
                                        <label for="lastname">Lastname<span class="text-red">*</span> :</label>
                                        <input type="text" class="form-control required" id="lastname" name="form[lastname]" value="" />
                                    </div>
                                    <div class="form-group col-xs-5 " style="padding-right:0">
                                        <label for="name">Name<span class="text-red">*</span> :</label>
                                        <input type="text" class="form-control required" id="name" name="form[name]" value="" />
                                    </div>
                                    <div class="form-group col-xs-2 ">
                                        <label for="age">age <span class="text-red">*</span>:</label>
                                        <input type="text" class="form-control required" id="age" maxlength="2" name="form[age]" value="" />
                                    </div>
                                    <div class="form-group col-xs-4" style="padding:0">
                                        <label id="phone1">phone 1:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control required" rel="phone" data-inputmask='"mask": "(99) 999-99-99"' data-mask id="phone1" name="form[phone1]" value=""/>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-4" style="padding:0 5px">
                                        <label for="phone2">phone 2:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask='"mask": "(99) 999-99-99"' data-mask id="phone2" name="form[phone2]" value=""/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label id="phone3">homePhone:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask='"mask": "(99) 999-99-99"' data-mask id="phone3" name="form[phone3]" value=""/>
                                        </div>
                                    </div>
                                    <div class="clear"><label id="error-phone"></label></div>
                                    <div class="form-group">
                                        <label>email:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="text" class="form-control" name="form[email]" value=""/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>address:</label>
                                        <textarea class="form-control" rows="3" name="form[address]" id="note"></textarea>
                                    </div>
                                    <div class="form-group col-xs-6 nopadding hidden">
                                        <label for="where" >where:</label>
                                        <select class="form-control " id="where" name="form[where]" >
                                            <option value="">choose</option>
                                            {foreach from=$page.where item=where name=where}
                                            <option {if $page.form.where == $where.group_id} selected="selected" {/if} value="{$where.group_id}">{$where.name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-6 hidden" style="padding-right:0">
                                        <label for="filial" >Choose filial:</label>
                                        <select class="form-control " id="filial" name="form[filial]" >
                                            <option value="">choose</option>
                                            {foreach from=$page.filial item=filial name=filial}
                                            <option  {if $page.form.filial == $filial.group_id} selected="selected" {/if}  value="{$filial.group_id}">{$filial.name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="clear"></div>

                                </div><!-- /.box-body -->

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Purpose</h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group  col-xs-6" style="padding:0">
                                        <label for="destinations">Destinations<span class="text-red">*</span>:</label>
                                        <select class="form-control required" id="destinations" name="form[destinations]" >
                                            <option value="">choose</option>
                                            {foreach from=$page.destinations item=destinations name=destinations}
                                            <option {if $page.form.destinations == $destinations.group_id} selected="selected" {/if} value="{$destinations.group_id}">{$destinations.name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="form-group  col-xs-6">
                                        <label for="subject" >Subject<span class="text-red">*</span>:</label>
                                        <select class="form-control required" id="subject" name="form[subject]" >
                                            <option value="">choose</option>
                                            {foreach from=$page.subject item=subject name=subject}
                                            <option {if $page.form.subject == $subject.group_id} selected="selected" {/if} value="{$subject.group_id}">{$subject.name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="form-group  col-xs-6 nopadding">
                                        <label for="level" >level<span class="text-red">*</span>:</label>
                                        <select class="form-control required" id="level" name="form[level]" >
                                            <option value="">choose</option>
                                            {foreach from=$page.level item=level name=level}
                                            <option {if $page.form.level == $level.group_id} selected="selected" {/if} value="{$level.group_id}">{$level.name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="form-group  col-xs-6">
                                        <label for="mtongue" >mtongue<span class="text-red">*</span>:</label>
                                        <select class="form-control required" id="mtongue" name="form[mtongue]" >
                                            <option value="">choose</option>
                                            {foreach from=$page.mtongue item=mtongue name=mtongue}
                                            <option {if $page.form.mtongue == $mtongue.group_id} selected="selected" {/if} value="{$mtongue.group_id}">{$mtongue.text}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h3>method</h3>
                                    </div>
                                    <div class="form-group">
                                        {foreach from=$page.method item=method name=method}
                                        <label>
                                            <input type="checkbox" value="{$method.group_id}" rel="method" class="flat-red required" name="method[]"/>
                                            name&nbsp;&nbsp;
                                        </label>
                                        {/foreach}
                                        <label id="error-method"></label>
                                    </div>
                                    <div class="form-group">
                                        <h3>Расписание</h3>
                                    </div>
                                    <div class="form-group col-xs-2 nopadding" style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="mon" name="days[]" />
                                            mon
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-2 " style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="вт" name="days[]" />
                                            Tue
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-2" style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="ср" name="days[]" />
                                            Wen
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-2" style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="чт" name="days[]" />
                                            Thu
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-2" style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="пт" name="days[]" />
                                            Fri
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-2" style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="сб" name="days[]" />
                                            Sat
                                        </label>
                                    </div>
                                    <div class="form-group col-xs-2" style="width:14%">
                                        <label>
                                            <input type="checkbox" class="flat-red required" rel="days" value="вс" name="days[]" />
                                            Sun
                                        </label>
                                    </div>
                                    <div class="form-group"><label id="error-days"></label></div>
                                    <div class="clear"></div>
                                    <div class="form-group  col-xs-6 nopadding">
                                        <label for="day" >TimeGroup<span class="text-red">*</span>:</label>
                                        <select class="form-control required" id="day" name="form[day]" >
                                            <option value="">choose</option>
                                            <option value="1">morning</option>
                                            <option value="2">afternoon</option>
                                            <option value="3">night</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-xs-6 nopadding">
                                        <label for="time" >hour<span class="text-red">*</span>:</label>
                                        <select class="form-control required" id="time" name="form[time]" >
                                            <option value="">choose</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>
                                        </select>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="form-group">
                                        <label for="note">note:</label>
                                        <textarea class="form-control" rows="2" name="form[note]" id="note"></textarea>
                                    </div>

                                </div>
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-primary" value="Add" /><input type="hidden" name="form[status]" value="ok" />
                                    <a href="?mod=students&op=mgmnt" class="btn btn-default">Cancel</a>
                                </div>

                            </div>
                        </div>

                    </form>

            </section>

        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
