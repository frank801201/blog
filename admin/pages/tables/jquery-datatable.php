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
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>
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

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
  <?php include('../view.php'); ?>

    <section class="content">
        <div class="container-fluid">
        
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                文章管理列表
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <a href="../../insert_front.php"> 
                                        <div class="btn btn-success waves-effect">新增文章</div>
                                    </a>
                                    <thead>
                                        <tr>
                                            <th>編號</th>
                                            <th>日期</th>
                                            <th>標題</th>
                                            <th>新增時間</th>
                                            <th>最後修改時間</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>編號</th>
                                            <th>日期</th>
                                            <th>標題</th>
                                            <th>新增時間</th>
                                            <th>最後修改時間</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <form action="" name="form1" method="Post">

                                        <?php
                                        require_once("../../db_class.php");
                                        $db = new DB();                                     
                                        $db->query("SELECT * FROM `article`");
                                        while($article = $db->fetch_array()) 
                                        {
                                        ?>
                                    
                                        <tr>
                                        <td><font face="DFKai-sb" size="5"> <?= $article['id'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $article['date'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $article['title'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $article['create_at'] ?></font></td>
                                        <td><font face="DFKai-sb" size="5"> <?= $article['update_at'] ?></font></td>
                                        <td width=20%> 
                                            <input type='button' class="btn btn-primary waves-effect" onclick="form1.action='../../update_front.php?id=<?= $article['id'] ?>';form1.submit();"value='修改'/> 
                                            <input type='button' class="btn btn-danger waves-effect" onclick="form1.action='../../delete.php?id=<?= $article['id'] ?>';form1.submit();"value='删除'/>
                                            <input type='button' class="btn bg-indigo waves-effect" onclick="form1.action='../../content.php?id=<?= $article['id'] ?>';form1.submit();"value='文章內容'/>
                                        </td>
                                        </tr>
                                         <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

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