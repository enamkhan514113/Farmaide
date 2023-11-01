<?php 
require_once('auth.php');
?>
<head class="">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="http://localhost/farmaide/omps/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="http://localhost/farmaide/omps/uploads/568436.png?v=1649727378">

<title>ফার্মেইড মার্কেটপ্লেইস</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="http://localhost/farmaidecopy/omps/assets/font-awesome/css/all.min.css">

<!-- Font Awesome Icons -->
<script src="http://localhost/farmaide/omps/assets/font-awesome/js/all.min.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<script src="http://localhost/farmaide/omps/assets/bootstrap/js/popper.min.js" type="text/javascript"></script>

<script src="http://localhost/farmaide/omps/assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<!-- CSS Files -->
<link href="http://localhost/farmaide/omps/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/css/material-kit.css?v=3.0.2" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/summernote/summernote-lite.min.css" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/DataTables/datatables.min.css" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/DataTables/RowReorder-1.2.8/css/dataTables.rowReorder.min.css" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/DataTables/Responsive-2.2.9/css/dataTables.responsive.min.css" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="http://localhost/farmaide/omps/assets/css/custom.css" rel="stylesheet">

<script>
        var loader = $('<div id="pre-loader">')
        loader.html('<div class="lds-ring"><div></div><div></div><div></div><div></div></div>')
        function start_loader(){
            $('body').find('#pre-loader').remove()
            $('body').prepend(loader)
        }
        function end_loader(){
            $('body').find('#pre-loader').remove()
        }
        $(function(){
            setTimeout(() => {
                end_loader()
            }, 500);
        })
</script>

<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/53/4a/intl/en_gb/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/53/4a/intl/en_gb/util.js"></script><style id="__web-inspector-hide-shortcut-style__">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
visibility: hidden !important;
}
</style></head>