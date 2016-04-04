<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <?php
    echo link_tag('assets/css/font-awesome/css/font-awesome.min.css');
    echo link_tag('assets/css/simple-line-icons/simple-line-icons.min.css');
    echo link_tag('assets/css/bootstrap/bootstrap.min.css');
    echo link_tag('assets/css/bootstrap-switch/bootstrap-switch.min.css');
    echo link_tag('assets/css/uniform/uniform.default.css');

    echo link_tag('assets/css/bootstrap-daterangepicker/daterangepicker.min.css');
    echo link_tag('assets/css/morris/morris.css');
    echo link_tag('assets/css/fullcalendar/fullcalendar.min.css');
    echo link_tag('assets/css/jqvmap/jqvmap.css');
    echo link_tag('assets/css/components/components.min.css');
    echo link_tag('assets/css/components/plugins.min.css');
    echo link_tag('assets/css/layout3/layout.min.css');
    echo link_tag('assets/css/layout3/themes/default.min.css');
    echo link_tag('assets/css/layout3/custom.min.css');
    echo link_tag('assets/css/sweet-alert.css');

    ?>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-boxed">
<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?php echo base_url(''); ?>">
                    <img src="<?php echo base_url('assets/img/layouts3/logo-default.jpg'); ?>" alt="logo"
                         class="logo-default">
                </a>
            </div>
            <a href="javascript:;" class="menu-toggler"></a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-extended dropdown-notification dropdown-dark"
                        id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-default">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have
                                    <strong>12 pending</strong> tasks</h3>
                                <a href="app_todo.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;"
                                    data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-success">
                                                <i class="fa fa-plus"></i>
                                            </span> New user registered. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-calendar"></i>
                            <span class="badge badge-default">3</span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li class="external">
                                <h3>You have
                                    <strong>12 pending</strong> tasks</h3>
                                <a href="app_todo_2.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                    data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;"
                                                              class="progress-bar progress-bar-success"
                                                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 65%;"
                                                              class="progress-bar progress-bar-danger"
                                                              aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 98%;"
                                                              class="progress-bar progress-bar-success"
                                                              aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 10%;"
                                                              class="progress-bar progress-bar-warning"
                                                              aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info"
                                                              aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 85%;"
                                                              class="progress-bar progress-bar-success"
                                                              aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                                    <span class="progress progress-striped">
                                                        <span style="width: 38%;"
                                                              class="progress-bar progress-bar-important"
                                                              aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <li class="droddown dropdown-separator">
                        <span class="separator"></span>
                    </li>
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle"
                                 src="<?php echo base_url('assets/img/layouts3/avatar9.jpg'); ?>"">
                            <span class="username username-hide-mobile">Nick</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="app_calendar.html">
                                    <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="app_inbox.html">
                                    <i class="icon-envelope-open"></i> My Inbox
                                    <span class="badge badge-danger"> 3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="app_todo_2.html">
                                    <i class="icon-rocket"></i> My Tasks
                                    <span class="badge badge-success"> 7 </span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_user_lock_1.html">
                                    <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="page_user_login_1.html">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown dropdown-extended quick-sidebar-toggler">
                        <span class="sr-only">Toggle Quick Sidebar</span>
                        <i class="icon-logout"></i>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <div class="page-header-menu">
        <div class="container">
            <div class="hor-menu  ">
                <ul class="nav navbar-nav">
                    <li class="menu-dropdown classic-menu-dropdown active">
                        <a href="javascript:;"> Manage
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left manage-menu-size">
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Manage Session
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a class="nav-link" href="#change_session_school" data-toggle="modal"> Change Session /School</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-link" href="#manage_default_session" data-toggle="modal"> Manage Default Session</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('manage-school');?>" class="nav-link"> Manage School </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('manage-admin-account');?>" class="nav-link"> Manage Admin Account </a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="<?php echo base_url('manage-codes?page=mng_codes');?>" class="nav-link  nav-toggle">
                                    Manage Codes
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo base_url('manage-codes?page=mng_codes');?>" class="nav-link"> Manage Code </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-codes?page=merge_codes');?>" class="nav-link"> Merge Codes </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="<?php echo base_url('manage-subject-class?page=mng_class');?>" class="nav-link  nav-toggle">
                                    Manage Subject &amp; Class
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo base_url('manage-subject-class?page=mng_class');?>" class="nav-link"> Manage Class </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-subject-class?page=mng_subject');?>" class="nav-link"> Manage Subject </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-subject-class?page=mng_sub_class_rel');?>" class="nav-link"> Subject Class Relation </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="<?php echo base_url('manage-csc?page=mng_city');?>" class="nav-link  nav-toggle">
                                    Manage Country, State, City
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo base_url('manage-csc?page=mng_city');?>" class="nav-link"> Manage City </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-csc?page=mng_state');?>" class="nav-link"> Manage State </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-csc?page=mng_country');?>" class="nav-link"> Manage Country </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href="<?php echo base_url('manage-receipts?page=manage_receipt');?>" class="nav-link  active"> Manage Receipt </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="<?php echo base_url('manage-receipts?page=manage_receipt');?>" class="nav-link  active">
                                            Manage Receipt Book
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-receipts?page=manage_duplicate_receipt');?>" class="nav-link "> Duplicate Receipt</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-receipts?page=manage_cancel_receipt');?>" class="nav-link "> Cancel Receipt</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-receipts?page=manage_delete_receipt');?>" class="nav-link"> Delete Receipt</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="<?php echo base_url('manage-calendar');?>" class="nav-link  active"> Calendar Planning </a>
                            </li>
                            <li class=" ">
                                <a href="<?php echo base_url('manage-company');?>" class="nav-link  active"> Manage Company </a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="<?php echo base_url('manage-accounts?page=student_account');?>" class="nav-link nav-toggle "> Manage Account <span class="arrow"></span> </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo base_url('manage-accounts?page=student_account');?>" class="nav-link"> Student Account</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-accounts?page=parents_account');?>" class="nav-link"> Parents Account</a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo base_url('manage-accounts?page=employee_account');?>" class="nav-link"> Employee Account</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="<?php echo base_url('manage-masters?page=prospectus_form_master');?>" class="nav-link nav-toggle "> Manage Master <span
                                        class="arrow"></span> </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo base_url('manage-masters?page=prospectus_form_master');?>" class="nav-link"> Prospectus/Form Master</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url('manage-masters?page=provisional_fee_master');?>" class="nav-link"> Provisional/Fee Master</a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo base_url('manage-masters?page=media_master');?>" class="nav-link"> Media Master</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown">
                        <a href="javascript:;"> Conveyance<span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left manage-menu-size">
                            <li class=" ">
                                <a href="index.html" class="nav-link"> Manage Vehicle</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link"> Manage Conveyance Fee Plan</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link"> Manage Conveyance Relation</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link"> Manage Conveyance Expenses</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link"> Manage Vehicle Stopage</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link  active"> Vehicle Report</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown">
                        <a href="javascript:;"> Fee
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left manage-menu-size">
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Manage Fee
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Fee Head</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Fee Installment</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Fee Group</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Fee Group Student Relation</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Fee Plan</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Fee Discount</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Late Fee</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Miscellneous Fee</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Advance Fee</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Deposit Fee
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Fee Deposit Manager</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Extra Fee Deposit Manager</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link  active">
                                    Manage Fee Refund
                                </a>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href="<?php echo base_url('manage-receipts');?>" class="nav-link  active"> Manage Receipt </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo base_url('manage-receipts');?>" class="nav-link  active">
                                            Manage Receipt Book
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link "> Duplicate Receipt</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link "> Cancel Receipt</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Delete Receipt</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Fee Reports
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Fee Collection Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Fee Due Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Fee Discount Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Student Fee Discount Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Receipt Report </a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Dynamic Receipt Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Fee Group Detail Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Fee Export Report Master</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown">
                        <a href="javascript:;"> Students
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left manage-menu-size">
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Admission
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Enquiry</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Follow Up</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Follow Up Assignment</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Reports</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Student</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Student Promotion</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Student Shifting</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Student Reports</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Dynamic Student Reports</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Import Students</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Generate Student Certificate</a>
                            </li>
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Attendance
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Attendance Order</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Daily Attendance</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Student Attendance Summary</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Attendance Report</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Manage T.C.
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Manage T.C. Values</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Generate T.C.</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown">
                        <a href="javascript:;"> Hostel
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left manage-menu-size">
                            <li class="">
                                <a href="" class="nav-link "> Manage Hostel</a>
                            </li>
                            <li class="">
                                <a href="" class="nav-link "> Manage Hostel Room Master</a>
                            </li>
                            <li class="">
                                <a href="" class="nav-link "> Create Hostel Fee Plan</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link  active"> Manage Hostel Fee Plan</a>
                            </li>
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Allocate Hostel Room
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Employee</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Student</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link  active"> Hostel Room Report</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown">
                        <a href="javascript:;"> Exam
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left manage-menu-size">
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Exam</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Exam Evaluation Process</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Grade</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Employee Class Relation</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Exam Pattern Academic Grade Relation</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Co-Scholastic Setting</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Student Indicator Settings</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Subject Grade Settings</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Generate Student Roll No.</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Medical Absent Settings</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Student Subject (Optional) Relation</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Student Marks Entry</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Manage Student Backs</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Student Exam Remarks Relation</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Student Direct Attendance</a>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Dynamic Exam Export</a>
                            </li>
                            <li class="dropdown-submenu active">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Exam Reports
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Marks Detail Reports</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Marksheet Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Marks Slip Report</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Marks Improvement Report</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="index.html" class="nav-link">Print Template Reports</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-dropdown mega-menu-dropdown  ">
                        <a href="javascript:;"> Exam
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 400px">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <a href="ui_colors.html"> Manage Exam </a>
                                                </li>
                                                <li>
                                                    <a href="ui_general.html"> Exam Evaluation Process </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons.html"> Manage Grade </a>
                                                </li>
                                                <li>
                                                    <a href="ui_confirmations.html"> Manage Employee Class Relation </a>
                                                </li>
                                                <li>
                                                    <a href="ui_icons.html"> Exam Pattern Academic Grade Relation </a>
                                                </li>
                                                <li>
                                                    <a href="ui_socicons.html"> Co-Scholastic Settings </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html"> Student Indicator Settings </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs_accordions_navs.html"> Subject Grade Settings </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html"> Generate Student Roll No. </a>
                                                </li>
                                                <li>
                                                    <a href="maps_google.html"> Medical Absent Settings </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <a href="maps_vector.html"> Student Subject (Optional) Relation </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Student Marks Entry </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_1.html"> Manage Student Backs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_2.html"> Student Exam Remarks
                                                        Relation </a>
                                                </li>
                                                <li>
                                                    <a href="ui_blockui.html"> Student Direct Attendance </a>
                                                </li>
                                                <li class="dropdown-submenu active">
                                                    <a href="javascript:;" class="nav-link nav-toggle ">
                                                        Exam Reports
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu manage-menu-size">
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marks Detail Reports</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marksheet Report</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marks Slip Report</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marks Improvement Report</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ui_notific8.html"> Dynamic Exam Export </a>
                                                </li>
                                                <li>
                                                    <a href="ui_toastr.html"> Print Template Reports </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown  ">
                        <a href="javascript:;"> HR
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 400px">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <a href="ui_colors.html"> Manage Employee </a>
                                                </li>
                                                <li>
                                                    <a href="ui_general.html"> Manage Departments </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons.html"> Employee Department Relation </a>
                                                </li>
                                                <li>
                                                    <a href="ui_confirmations.html"> Dynamic Employee Report </a>
                                                </li>
                                                <li>
                                                    <a href="ui_icons.html"> Employee Report </a>
                                                </li>
                                                <li>
                                                    <a href="ui_socicons.html"> Import Employees </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html"> Manage Candidates </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs_accordions_navs.html"> Employee TDS Setting </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html"> Manage Allowance/Deduction </a>
                                                </li>
                                                <li>
                                                    <a href="maps_google.html"> Manage Leave Scheme </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <a href="maps_vector.html"> Manage Salary Scheme </a>
                                                </li>
                                                <li>
                                                    <a href="ui_timeline.html"> Manage Employee Office Details </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_1.html"> Manage Student Backs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_2.html"> Student Exam Remarks
                                                        Relation </a>
                                                </li>
                                                <li>
                                                    <a href="ui_blockui.html"> Student Direct Attendance </a>
                                                </li>
                                                <li class="dropdown-submenu active">
                                                    <a href="javascript:;" class="nav-link nav-toggle ">
                                                        Exam Reports
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="dropdown-menu manage-menu-size">
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marks Detail Reports</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marksheet Report</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marks Slip Report</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="" class="nav-link"> Marks Improvement Report</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ui_notific8.html"> Dynamic Exam Export </a>
                                                </li>
                                                <li>
                                                    <a href="ui_toastr.html"> Print Template Reports </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a href="javascript:;"> Library
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" ">
                                <a href="layout_mega_menu_light.html" class="nav-link  "> Manage Library </a>
                            </li>
                            <li class=" ">
                                <a href="layout_top_bar_light.html" class="nav-link  "> Manage Library Member </a>
                            </li>
                            <li class=" ">
                                <a href="layout_fluid_page.html" class="nav-link  "> Manage Library Item </a>
                            </li>
                            <li class=" ">
                                <a href="layout_top_bar_fixed.html" class="nav-link  "> Manage Library Transaction </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Library Item Subscription </a>
                            </li>
                            <li class=" ">
                                <a href="layout_disabled_menu.html" class="nav-link  "> Library OPAC Search </a>
                            </li>
                            <li class=" ">
                                <a href="layout_blank_page.html" class="nav-link  "> Library Transaction Report </a>
                            </li>
                            <li class=" ">
                                <a href="layout_blank_page.html" class="nav-link  "> Library Valuation Report </a>
                            </li>
                            <li class=" ">
                                <a href="layout_blank_page.html" class="nav-link  "> Library Reports </a>
                            </li>
                            <li class=" ">
                                <a href="layout_blank_page.html" class="nav-link  "> Import Library Item </a>
                            </li>
                            <li class=" ">
                                <a href="layout_blank_page.html" class="nav-link  "> Barcode Generation </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a href="javascript:;"> Events
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" ">
                                <a href="layout_mega_menu_light.html" class="nav-link  "> Manage Event </a>
                            </li>
                            <li class=" ">
                                <a href="layout_top_bar_light.html" class="nav-link  "> Manage Event Details </a>
                            </li>
                            <li class=" ">
                                <a href="layout_fluid_page.html" class="nav-link  "> Manage Participant </a>
                            </li>
                            <li class=" ">
                                <a href="layout_top_bar_fixed.html" class="nav-link  "> Manage Winner </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Event Reports </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a href="javascript:;"> Store
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" ">
                                <a href="layout_mega_menu_light.html" class="nav-link  "> Manage Store Department </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Store Transfer </a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Manage Store Items
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Manage Store Items</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Store Item Grouping</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Item Numbering</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Import Store Items</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Return Store Items</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Manage Purchase
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Purchase Manager</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Create Purchase Order</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:;" class="nav-link nav-toggle ">
                                    Manage Customers
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu-size">
                                    <li class="">
                                        <a href="" class="nav-link"> Customer Credit Limit</a>
                                    </li>
                                    <li class="">
                                        <a href="" class="nav-link"> Customer Credit Statement</a>
                                    </li>
                                </ul>
                            </li>

                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Store Register </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Vendor Payment </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Issue/Sale Items </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Store Requisition
                                    Approval </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Store Write Off/Lost </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Reports </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a href="javascript:;"> Accounts
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" ">
                                <a href="layout_mega_menu_light.html" class="nav-link  "> Manage Group </a>
                            </li>
                            <li class=" ">
                                <a href="layout_top_bar_light.html" class="nav-link  "> Manage Ledger </a>
                            </li>
                            <li class=" ">
                                <a href="layout_fluid_page.html" class="nav-link  "> Voucher Creation </a>
                            </li>
                            <li class=" ">
                                <a href="layout_top_bar_fixed.html" class="nav-link  "> Accounts Reports </a>
                            </li>
                            <li class=" ">
                                <a href="layout_mega_menu_fixed.html" class="nav-link  "> Export to Xml </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Manage Receipts
                        <small>manage receipts book, duplicate, cancel amd delete</small>
                    </h1>
                </div>
                <div class="page-toolbar">
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Manage</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Manage Receipts</span>
                    </li>
                </ul>
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Manage Receipt Book
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_mng_school" data-toggle="tab"><i class="fa fa-building"></i> Create New Fee Receipt Book </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_mng_school">
                                                <div class="row">
                                                    <form role="form">
                                                        <div class="section-school-info">
                                                            <div class="form-body">
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <select class="form-control" name="drop_company_name" id="drop_company_name">
                                                                            <option value=""></option>
                                                                            <option value="">----Select----</option>
                                                                            <option value="Bhopal Nobles Public School">Bhopal Nobles Public School</option>
                                                                        </select>
                                                                        <label for="drop_company_name">Company Name</label>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <input type="text" class="form-control" name="receipt_book_name"id="receipt_book_name" value="">
                                                                        <label for="receipt_book_name">Receipt Book Name</label>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <input type="text" class="form-control" name="receipt_for" id="receipt_for" value="">
                                                                        <label for="receipt_for">Receipt For </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <input type="text" class="form-control" name="start_serial_no" id="start_serial_no" value="">
                                                                        <label for="start_serial_no">Start Serial No.</label>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <input type="text" class="form-control" name="end_serial_no" id="end_serial_no" value="">
                                                                        <label for="end_serial_no">End Serial No.</label>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input form-md-floating-label ">
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" name="chk_receipt_book_completed" id="chk_receipt_book_completed" class="md-check" value="IsCompleted">
                                                                            <label for="chk_receipt_book_completed">
                                                                                <span class="inc"></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> Completed
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 margin-top-80">
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <input type="text" class="form-control" name=" receipt_prefix" id="receipt_prefix" value="">
                                                                        <label for="receipt_prefix">Prefix</label>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                                        <input type="text" class="form-control" name=" receipt_suffix" id="receipt_suffix" value="">
                                                                        <label for="receipt_suffix">Suffix</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <br/><label for=" ">School Relation :</label><hr/>
                                                                        <div class="md-checkbox-list">
                                                                            <div class="md-checkbox">
                                                                                <input type="checkbox" name="chk_select_all_school" id="chk_select_all_school" class="md-check">
                                                                                <label for="chk_select_all_school">
                                                                                    <span class="inc"></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span> Select All
                                                                                </label>
                                                                            </div>
                                                                            <div class="md-checkbox">
                                                                                <input type="checkbox" name="chk_b_n_p_s" id="chk_b_n_p_s" class="md-check" value="Bhopal Nobles Public School">
                                                                                <label for="chk_b_n_p_s">
                                                                                    <span class="inc"></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span> Bhopal Nobles Public School
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="section-id-card-header">
                                                            <div class="col-md-12">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-8">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <button type="button" class="btn green" name="save_fee_receipt_book" id="save_fee_receipt_book"><i class="fa fa-save"></i>&nbsp;&nbsp;Save Fee Receipt Book </button>
                                                            <button type="button" id="hello" class="btn default">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>About</h2>

                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                <h2>Subscribe Email</h2>

                <div class="subscribe-form">
                    <form action="javascript:;">
                        <div class="input-group">
                            <input type="text" placeholder="mail@email.com" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Submit</button>
                                    </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>Follow Us On</h2>
                <ul class="social-icons">
                    <li>
                        <a href="javascript:;" data-original-title="rss" class="rss"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>Contacts</h2>
                <address class="margin-bottom-40"> Phone: 800 123 3456
                    <br> Email:
                    <a href="mailto:info@metronic.com">info@webkreators.in</a>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN INNER FOOTER -->
<div class="page-footer">
    <div class="container"> 2016 &copy; Web Kreators Infotech.
        <!--                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>-->
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!--    Modal Placements-->
<div class="modal fade " id="manage_default_session" tabindex="-1" role="basic" aria-hidden="true">
    <!--            <div class="modal-dialog modal-sm">-->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Manage Default Session</h4>
            </div>
            <div class="modal-body">
                <div class="portlet-body form">
                    <form role="form">
                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <input type="text" class="form-control" disabled="" value="2015-2016"
                                       id="form_control_1">
                                <label for="form_control_1">Default Session</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <select class="form-control edited" id="form_control_1">
                                    <option value=""></option>
                                    <option value="1" selected="">Select Session</option>
                                    <option value="2">2015-2016</option>
                                    <option value="3">2014-2015</option>
                                    <option value="4">2013-2014</option>
                                </select>
                                <label for="form_control_1">Change Default Session</label>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="change_session_school" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Change Session/ School</h4>
            </div>
            <div class="modal-body">
                <div class="portlet-body form">
                    <form role="form">
                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <input type="text" class="form-control" disabled="" value="2015-2016"
                                       id="form_control_1">
                                <label for="form_control_1">Default Session</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <select class="form-control edited" id="form_control_1">
                                    <option value=""></option>
                                    <option value="1" selected="">Select Session</option>
                                    <option value="2">2015-2016</option>
                                    <option value="3">2014-2015</option>
                                    <option value="4">2013-2014</option>
                                </select>
                                <label for="form_control_1">Change Default Session</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</body>
<?php
echo script_tag('assets/js/plugins/respond.min.js');
echo script_tag('assets/js/plugins/excanvas.min.js');
echo script_tag('assets/js/plugins/jquery.min.js');
echo script_tag('assets/js/bootstrap/bootstrap.min.js');
echo script_tag('assets/js/plugins/js.cookie.min.js');
echo script_tag('assets/js/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');
echo script_tag('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js');
echo script_tag('assets/js/plugins/jquery.blockui.min.js');
echo script_tag('assets/js/uniform/jquery.uniform.min.js');
echo script_tag('assets/js/bootstrap-switch/bootstrap-switch.min.js');
echo script_tag('assets/js/plugins/moment.min.js');
echo script_tag('assets/js/morris/morris.min.js');
echo script_tag('assets/js/morris/raphael-min.js');
echo script_tag('assets/js/plugins/counterup/jquery.waypoints.min.js');
echo script_tag('assets/js/plugins/counterup/jquery.counterup.min.js');
echo script_tag('assets/js/fullcalendar/fullcalendar.min.js');
echo script_tag('assets/js/plugins/flot/jquery.flot.min.js');
echo script_tag('assets/js/plugins/flot/jquery.flot.resize.min.js');
echo script_tag('assets/js/plugins/flot/jquery.flot.categories.min.js');
echo script_tag('assets/js/plugins/jquery.sparkline.min.js');
echo script_tag('assets/js/scripts/app.min.js');
echo script_tag('assets/js/pages/scripts/dashboard.min.js');
echo script_tag('assets/js/layout3/layout.min.js');
echo script_tag('assets/js/layout3/demo.min.js');
echo script_tag('assets/js/bootstrap/bootstrap-growl.min.js');
echo script_tag('assets/js/bootstrap/sweet-alert.min.js');
//    echo script_tag('assets/js/global/scripts/quick-sidebar.min.js');
echo script_tag('assets/js/app-js/manage/manage-receipts/manage-receipt-book.js');
?>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        new WKISCHOOL.ManageReceiptBook("<?php echo base_url(); ?>");
    });
</script>