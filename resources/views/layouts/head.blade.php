<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Grandeur Gardens Realtors Group | {{ Auth::user()->fullname }} Consultant Home</title>




 <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../vendor/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../vendor/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../vendor/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- NProgress -->
    <link href="{{asset('../front/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('../front/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">



    <!-- bootstrap-progressbar -->
    <link href="{{asset('../front/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">

<!-- iCheck -->
<link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">



<!-- bootstrap-progressbar -->
<link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
<!--<style>
.left_col {
background: #099;
}
</style>-->


<Style type="text/css">
  .left_col {
    background: #1D2547;
  }
  table.jambo_table thead {
    background: #1D2547;
  }
  .nav_title {

    background:#1D2547;
  }
  .sidebar-footer {
    background: #1D2547;
}

  body {

    background: #1D2547;
  }
  .sidebar-footer a {

    background: #1D2547;

  }

  .alert h3{
    font-weight: bold;
    font-family: Tahoma;
    font-size:1.4em;
    text-transform: uppercase;
    word-spacing: normal;

  }
  

  .alert{

    border-radius: 15px;
    border:1px solid #3c1e1a;

  }
</style>


<script language="javascript" type="text/javascript">
function capitaliseName()
{
var str = document.getElementById("fullname").value;
document.getElementById("fullname").value = str.charAt(0).toUpperCase() + str.slice(1);

}
</script>
