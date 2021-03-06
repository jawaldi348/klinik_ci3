<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?= assets() ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?= assets() ?>icomoon/styles.css">
<link rel="stylesheet" href="<?= assets() ?>font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="<?= assets() ?>css/fonts.googleapis.com.css" />
<link rel="stylesheet" href="<?= assets() ?>css/ace-fonts.css" />

<!-- ace styles -->
<link rel="stylesheet" href="<?= assets() ?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
<link rel="stylesheet" href="<?= assets() ?>css/ace-skins.min.css" />
<link rel="stylesheet" href="<?= assets() ?>css/ace-rtl.min.css" />

<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="<?= assets() ?>js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
<![endif]-->



<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?= assets() ?>js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->
<script src="<?= assets() ?>js/jquery.dataTables.min.js"></script>
<script src="<?= assets() ?>js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?= assets() ?>js/dataTables.buttons.min.js"></script>
<!--[if IE]>
<script src="<?= assets() ?>js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='<?= assets() ?>js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?= assets() ?>js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
    <script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="<?= assets() ?>js/jquery-ui.custom.min.js"></script>
<script src="<?= assets() ?>js/jquery.ui.touch-punch.min.js"></script>
<script src="<?= assets() ?>js/jquery.sparkline.index.min.js"></script>

<!-- ace scripts -->
<script src="<?= assets() ?>js/ace-elements.min.js"></script>
<script src="<?= assets() ?>js/ace.min.js"></script>

<script src="<?= assets() ?>sweetalert2/dist/sweetalert2.all.min.js"></script>
<link href="<?= assets() ?>sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
<script>
    $(function() {
        $('#data-tabel').DataTable({
            ordering: false
        })
    });
</script>