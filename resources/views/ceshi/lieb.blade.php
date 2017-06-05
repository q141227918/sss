<!DOCTYPE html>
<html>

<head>
    <title>Tables</title>
    <!-- Bootstrap -->
    <link href="ceshi/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="ceshi/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="ceshi/assets/styles.css" rel="stylesheet" media="screen">
    <link href="ceshi/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="ceshi/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
@include('ceshi.top')
        <!--/span-->
        <div class="span9" id="content">





            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">用户列表页</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div class="table-toolbar">
                                <div class="btn-group">
                                    <a href="#"><button class="btn btn-success">添加 <i class="icon-plus icon-white"></i></button></a>
                                </div>

                            </div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>姓名</th>
                                    <th>年龄</th>
                                    <th>性别</th>
                                    <th>手机</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>张三</td>
                                    <td>14</td>
                                    <td class="center"> 女</td>
                                    <td class="center">15295565784</td>
                                    <td class="center">



                                        <span  class="icon-wrench"> </span >
                                        <span class="icon-trash"> </span>

                                    </td>
                                </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <p>&copy; Vincent Gabriel 2013</p>
    </footer>
</div>
<!--/.fluid-container-->

<script src="ceshi/vendors/jquery-1.9.1.js"></script>
<script src="ceshi/bootstrap/js/bootstrap.min.js"></script>
<script src="ceshi/vendors/datatables/js/jquery.dataTables.min.js"></script>


<script src="ceshi/assets/scripts.js"></script>
<script src="ceshi/assets/DT_bootstrap.js"></script>
<script>
    $(function() {

    });
</script>
</body>

</html>