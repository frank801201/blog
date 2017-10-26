<?php session_start(); ?>
<?php require_once('../../include/constant.php'); ?>
<?php 
include("../../db_class.php") ;
if($_SESSION['name'] != null)
{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Normal Tables | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <?php include('../view.php'); ?>

    <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                留言管理列表
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>編號</th>
                                        <th>日期</th>
                                        <th>暱稱</th>
                                        <th>電子郵件</th>
                                        <th>標題</th>
                                        <th>回復內文</th>
                                        <th>回復時間</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="" name="form1" method="Post">

                                        <?php
                                        require_once("../../db_class.php");
                                        $db = new DB();                                     
                                        $db->query("SELECT * FROM `message`");
                                        while($message = $db->fetch_array()) 
                                        {
                                        ?>
                                    
                                        <tr>
                                        <td width=5%><font face="DFKai-sb" size="5"> <?= $message['id'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $message['create_time'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $message['nickname'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $message['email'] ?></font></td>
                                        <td width=10%><font face="DFKai-sb" size="5"> <?= $message['title'] ?></font></td>
                                        <td width=10%><font face="DFKai-sb" size="5"> <?= ($message['reback'] != null) ? '已回覆' : '未回覆' ?></font></td> 
                                        <td><font face="DFKai-sb" size="5"> <?= $message['re_time'] ?></font></td>
                                        <td width=10%> 
                                            <input type='button' class="btn bg-indigo waves-effect" onclick="form1.action='../../reback.php?id=<?= $message['id'] ?>';form1.submit();"value='回覆留言'/>
                                        </td>
                                        </tr>
                                         <?php } ?>
                                        
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
<?php 
} 
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>