<?php include '../shared-layouts/_Layout.php'; ?>

<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 class="pull-left"><span class="fa fa-users"></span>&nbsp;<strong>This is Home</strong></h5>
			<div class="btn-group pull-left">
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="fa fa-wrench fa-fw"></span>&nbsp;notify <span class="caret"></span>
                </button>              
            </div>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-wrench fa-fw"></span>&nbsp;Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#userModal">Add Record</a></li>
                    <li><a href="#">Import Records</a></li>
                    <li><a href="#">Export Records</a></li>                   
                </ul>
            </div>
        </div>
        <div class="panel-body">        
           <!-- Body Goes Here .. -->
        </div>
    </div>
</div>
<?php
 include '/modals/client_user.php';
?>
<script src="../shared-resources/notifyme-master/assets/js/notifyme.js"></script>
<script type="text/javascript">
$('.btn-primary').on('click', function(){
   $(this).notifyMe(
        'bottom', // Position
        'error', // Type
        'Lorem Ipsum Text', // Title
        'Lorem Ipsum is simply dummy text of the printing', // Description
        200 // Velocity of notification
	2000 // (optional) Time of delay to close automatically
    );
});
</script>
</body>

</html>