<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Perpustakaan PPMKP | Dashboard</title>

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/morris.js/morris.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</script><script src="<?= base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<script nonce="a180dc75-ecd4-451d-a1d2-6f790eba8f0c">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">

<a href="" class="logo">

<span class="logo-mini"><b>PPMKP</b>Ciawi</span>

<span class="logo-lg"><b>Perpus</b>PPMKP</span>
</a>

<nav class="navbar navbar-static-top">

<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
<span class="sr-only">Toggle navigation</span>
</a>

</nav>
</header>

<!-- Awal Menu -->

<?php $this->load->view('v_menu');?>

<!-- Akhir Menu -->

<div class="content-wrapper">

<section class="content-header">
<h1>
<?= $judul;?>
</h1>
</section>

<section class="content">
<?php $this->load->view($content);?>
</section>

</div>


<div class="control-sidebar-bg"></div>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

<script src="<?= base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="<?= base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?= base_url()?>assets/dist/js/pages/dashboard.js"></script>
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>
<script src="./ad.js"></script>
<script src="<?= base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
