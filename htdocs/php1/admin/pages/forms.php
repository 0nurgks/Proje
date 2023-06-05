<!DOCTYPE html>
<html lang="en">

<head>
<?php 
if(@$_POST["submit"]){
    require_once "functions.php"; 
    $baslik = htmlspecialchars($_POST["btext"], ENT_QUOTES,"UTF-8");
    $altbaslik = htmlspecialchars($_POST["atext"], ENT_QUOTES,"UTF-8");
    $aciklama = htmlspecialchars($_POST["text"], ENT_QUOTES,"UTF-8");


    $ekle = $db->prepare("INSERT INTO blog (baslik, altbaslik, aciklama)
    VALUES (:altbaslik, :altbaslik, :aciklama)");
    $ekle->bindValue(":baslik" , $baslik);
    $ekle->bindValue(":altbaslik" , $altbaslik);
    $ekle->bindValue(":aciklama", $aciklama);
    
    if($ekle -> execute()){
        header("Location: tables.php?i=ekle");
    }
    else{
        $ekle->bindValue(":baslik , $baslik");
        header("Location: blog.php?i=error");    }
    }
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once "nav.php"; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog Ekle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                Blog Ekleme Alanı                       </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Başlık Girin</label>
                                            <input class="form-control" name="btext">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Alt Başlık Girin</label>
                                            <input class="form-control" placeholder="Enter text" name="atext">
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <label> Metin </label>
                                            <textarea  name="text">Yazmaya Başla</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Aktiflik</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="evet" name="evet">Evet
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="hayir" name="hayir">Hayır                                                </label>
                                            </div>
                                        </div>
                                       
                                        
                                        
                                      
                                        
                                        <input type="submit" class="btn btn-default" name="submit" value="Ekle">  </input> 
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</body>

</html>
