﻿<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    
    <title>Shine Locally</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <script src='https://8x8.vc/external_api.js' async></script>
        <style>html, body, #jaas-container { height: 100%; }</style>
        <script type="text/javascript">
          window.onload = () => {
            const api = new JitsiMeetExternalAPI("8x8.vc", {
              roomName: "vpaas-magic-cookie-a314da0b95d54d0cb82db72c4da889ed/SampleAppProgressiveSaysAchieveIndeed",
              parentNode: document.querySelector('#jaas-container'),
              jwt: "eyJraWQiOiJ2cGFhcy1tYWdpYy1jb29raWUtYTMxNGRhMGI5NWQ1NGQwY2I4MmRiNzJjNGRhODg5ZWQvM2NkNDhiLVNBTVBMRV9BUFAiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJqaXRzaSIsImV4cCI6MTYxOTcwMjA2MiwibmJmIjoxNjE5Njk0ODU3LCJpc3MiOiJjaGF0Iiwicm9vbSI6IioiLCJzdWIiOiJ2cGFhcy1tYWdpYy1jb29raWUtYTMxNGRhMGI5NWQ1NGQwY2I4MmRiNzJjNGRhODg5ZWQiLCJjb250ZXh0Ijp7ImZlYXR1cmVzIjp7ImxpdmVzdHJlYW1pbmciOmZhbHNlLCJvdXRib3VuZC1jYWxsIjpmYWxzZSwidHJhbnNjcmlwdGlvbiI6ZmFsc2UsInJlY29yZGluZyI6ZmFsc2V9LCJ1c2VyIjp7Im1vZGVyYXRvciI6dHJ1ZSwibmFtZSI6IlRlc3QgVXNlciIsImlkIjoiZ29vZ2xlLW9hdXRoMnwxMDM0Mjk0ODYzMTc2MjY1NDI2ODYiLCJhdmF0YXIiOiIiLCJlbWFpbCI6InRlc3QudXNlckBjb21wYW55LmNvbSJ9fX0.NY7pWWG3caJA3MWTH3GwdxKy2WJzTKaTxHDX2LFMs31ZOE-W6MUQKWHr3--rxq5blSNy9cckpqFcpAaWv3qjkdVBvK5a17fGU9Pa7aHqUXh_Q7AQGY8LJeSw33yKe2NPz179C6OOxGOM7Y4D4GgeNlp90RpAQr672_h4CurV-rWoKVHRG1PYvcn7cxcERgRMccyyK6fDf6gVkDySgWmejX9jcYbFIh2T5IGRPeSiTQTdyEG3g1ZQn905teXhZXVPoEvF9LVtWIsjCKHlC9YK0MNpD99ky6X2XLP0jvLehz51C4rcC3q-LPCLx2A6cuCjEbdTKOgYhltZeTOaKLE-TQ"
            });
          }
        </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Shine Locally</span>
                </a>
            </div>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
											<span class="avatar">
												<img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
                                            <p class="noti-details"><span class="noti-title">You</span> missed a call from <span class="noti-title">Asim Farooq</span></p>
											<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">0</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                     <?php echo htmlspecialchars($_SESSION["username"]); ?>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
            
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.php"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                        </li>
                        <li class="menu-title">Direct Chats <a href="#" class="add-user-icon" data-toggle="modal" data-target="#add_chat_user"><i class="fa fa-plus"></i></a></li>
                        <li>
                            <a href="chat.php"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status online"></span></span> Asim Farooq <span class="badge badge-pill bg-danger float-right">1</span></a>
                        </li>
                        <li>
                            <a href="chat.php"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status offline"></span></span> Siraj Munir <span class="badge badge-pill bg-danger float-right">18</span></a>
                        </li>
                        <li>
                            <a href="chat.php"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status away"></span></span> Anns Ali</a>
                        </li>
                        <li class="active">
                            <a href="chat.php"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status online"></span></span> Asad Bin Khalid <span class="badge badge-pill bg-danger float-right">50</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view chat-view">
                        <div class="chat-window">
                            <div class="fixed-header">
								<div class="navbar">
                                    <div class="user-details mr-auto">
                                        <div class="float-left user-img m-r-10">
                                            <a href="profile.php" title="Asad Bin Khalid"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                        </div>
                                        <div class="user-info float-left">
                                            <a href="profile.php" title="Asad Bin Khalid"><span class="font-bold">Asad Bin Khalid</span></a>
                                            <span class="last-seen">Online</span>
                                        </div>
                                    </div>
                                    <ul class="nav custom-menu">
                                        <li class="nav-item">
                                            <a class="task-chat profile-rightbar float-right" href="#chat_sidebar" id="task_chat"><i aria-hidden="true" class="fa fa-comments"></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-action">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="javascript:void(0)" class="dropdown-item">Settings</a>
											</div>
                                        </li>
                                    </ul>
								</div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="user-video">
                                    <div id="jaas-container">
                                    </div>
                                    </div>
                                    <div class="my-video">
                                        <ul>
                                            <li>
                                                <video autoplay="true" id="videoElement2">
                                            
                                                </video>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="call-icons">
                                 
                                    <div class="end-call">
                                        <a href="index.php">
												End Call
											</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="chat_sidebar">
                        <div class="chat-window video-window">
                            <div class="fixed-header">
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item"><a class="nav-link active" href="#calls_tab" data-toggle="tab">Calls</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#chats_tab" data-toggle="tab">Chats</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#profile_tab" data-toggle="tab">Profile</a></li>
                                </ul>
                            </div>
                            <div class="tab-content chat-contents">
                                <div class="content-full tab-pane show active" id="calls_tab">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.php" class="avatar">
                                                            <img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">Asim Farooq missed the call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.php" class="avatar">
                                                            <img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">Asim Farooq</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">call_end</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details"><span class="call-description">This call has ended</span></div>
                                                                        <div class="call-timing">Duration: <strong>5 min 57 sec</strong></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">January 29th, 2015</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.php" class="avatar">
                                                            <img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">Siraj Munir</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">You missed the call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.php" class="avatar">
                                                            <img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">ring_volume</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Calling Anns Ali ...</a>
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
                                <div class="content-full tab-pane" id="chats_tab">
                                    <div class="chat-window">
                                        <div class="chat-contents">
                                            <div class="chat-content-wrap">
                                                <div class="chat-wrap-inner">
                                                    <div class="chat-box">
                                                        <div class="chats">
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.php" class="avatar">
                                                                        <img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="chat-user">Asim Farooq</span> <span class="chat-time">8:35 am</span>
                                                                            <p>I'm just looking around.</p>
                                                                            <p>Will you tell me something about yourself? </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.php" class="avatar">
                                                                        <img alt="Asim Farooq" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="chat-user">Asim Farooq</span> <span class="file-attached">attached 3 files <i class="fa fa-paperclip"></i></span> <span class="chat-time">Dec 17, 2014 at 4:32am</span>
                                                                            <ul class="attach-list">
                                                                                <li><i class="fa fa-file"></i> <a href="#">project_document.avi</a></li>
                                                                                <li><i class="fa fa-file"></i> <a href="#">video_conferencing.psd</a></li>
                                                                                <li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-line">
                                                                <span class="chat-date">January 29th, 2017</span>
                                                            </div>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.php" class="avatar">
                                                                        <img alt="Siraj Munir" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="chat-user">Siraj Munir</span> <span class="file-attached">attached file <i class="fa fa-paperclip"></i></span> <span class="chat-time">Yesterday at 9:16pm</span>
                                                                            <ul class="attach-list">
                                                                                <li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.php" class="avatar">
                                                                        <img alt="Siraj Munir" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="chat-user">Siraj Munir</span> <span class="file-attached">attached file <i class="fa fa-paperclip"></i></span> <span class="chat-time">Today at 12:42pm</span>
                                                                            <ul class="attach-list">
                                                                                <li class="img-file">
                                                                                    <div class="attach-img-download"><a href="#">avatar-1.jpg</a></div>
                                                                                    <div class="attach-img"><img src="assets/img/user.jpg" alt=""></div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-footer">
                                            <div class="message-bar">
                                                <div class="message-inner">
                                                    <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
                                                    <div class="message-area">
                                                        <div class="input-group">
                                                            <textarea class="form-control" placeholder="Type message..."></textarea>
                                                            <span class="input-group-append">
																<button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
															</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-full tab-pane" id="profile_tab">
                                    <div class="display-table">
                                        <div class="table-row">
                                            <div class="table-body">
                                                <div class="table-content">
                                                    <div class="chat-profile-img">
                                                        <div class="edit-profile-img">
                                                            <img src="assets/img/user.jpg" alt="">
                                                            <span class="change-img">Change Image</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0">Asad Bin Khalid</h3>
                                                        <small class="text-muted">Software Engineer</small>
                                                        <a href="#" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li>
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted">@mak_614</span>
                                                            </li>
                                                            <li>
                                                                <span>DOB:</span>
                                                                <span class="float-right text-muted">20th April</span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-right text-muted"><a href="http://cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a293823393e23242b2d38253c2f390a2f322b273a262f64292527">[email&#160;protected]</a></span>
                                                            </li>
                                                            <li>
                                                                <span>Phone:</span>
                                                                <span class="float-right text-muted"> 111-222-3344</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
                                                            <li class="nav-item"><a class="nav-link active" href="#all_files" data-toggle="tab">All Files</a></li>
                                                            <li class="nav-item"><a class="nav-link" href="#my_files" data-toggle="tab">My Files</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="all_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                                                                <span class="file-author"><a href="#">Loren Gatlin</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane" id="my_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                                                                <span class="file-author"><a href="#">Asim Farooq</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
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
                </div>
            </div>
            <div id="drag_files" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Drag and drop files upload</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="js-upload-form">
                                <div class="upload-drop-zone" id="drop-zone">
                                    <i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
                                </div>
                                <h4>Uploading</h4>
                                <ul class="upload-list">
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-photo"></i> photo.png
                                            </div>
                                            <div class="file-size">1.07 gb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-file"></i> task.doc
                                            </div>
                                            <div class="file-size">5.8 kb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-photo"></i> dashboard.png
                                            </div>
                                            <div class="file-size">2.1 mb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">Completed</div>
                                    </li>
                                </ul>
                            </form>
                            <div class="m-t-30 text-center">
                                <button class="btn btn-primary submit-btn">Add to upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_group" class="modal fade">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create a group</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
                            <form>
                                <div class="form-group">
                                    <label>Group Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="m-t-50 text-center">
                                    <button class="btn btn-primary submit-btn">Create Group</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_chat_user" class="modal fade " role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create Chat Group</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group m-b-30">
                                <input placeholder="Search to start a chat" class="form-control search-input" id="btn-input" type="text">
                                <span class="input-group-append">
									<button class="btn btn-primary">Search</button>
								</span>
                            </div>
                            <div>
                                <h5>Recent Conversations</h5>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="media">
												<span class="avatar align-self-center">J</span>
												<div class="media-body align-self-center text-nowrap">
													<div class="user-name">Siraj Munir</div>
													<span class="designation">Team Leader</span>
												</div>
												<div class="text-nowrap align-self-center">
													<div class="online-date">1 day ago</div>
												</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media ">
												<span class="avatar align-self-center">B</span>
												<div class="media-body align-self-center text-nowrap">
													<div class="user-name">Bernardo Galaviz</div>
													<span class="designation">MBBS, MD</span>
												</div>
												<div class="align-self-center text-nowrap">
													<div class="online-date">3 days ago</div>
												</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
												<span class="avatar align-self-center">
													<img src="assets/img/user.jpg" alt="Asim Farooq">
												</span>
												<div class="media-body text-nowrap align-self-center">
													<div class="user-name">Asim Farooq</div>
													<span class="designation">MBBS, MD</span>
												</div>
												<div class="align-self-center text-nowrap">
													<div class="online-date">7 months ago</div>
												</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="m-t-50 text-center">
                                <button class="btn btn-primary submit-btn">Create Group</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="share_files" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Share File</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="files-share-list">
                                <div class="files-cont">
                                    <div class="file-type">
                                        <span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
                                    </div>
                                    <div class="files-info">
                                        <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                        <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Share With</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="m-t-50 text-center">
                                <button class="btn btn-primary submit-btn">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
    <script>var video = document.querySelector("#videoElement2");

        if (navigator.mediaDevices.getUserMedia) {
          navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
              video.srcObject = stream;
            })
            .catch(function (err0r) {
              console.log("Something went wrong!");
            });
        }
        </script>
        
</body>

</html>