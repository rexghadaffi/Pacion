<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>Hey</title>
   <?php 
    include '/shared-scripts/_css.php';
    include '/shared-scripts/_js.php';
   ?>
   
   <script type="text/javascript" class="init">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>   
  </head>
  <body>
    <!-- Nav Header Goes Here... -->
    <?php include '_AdminNavBar.php'; ?>     
    <!-- END Nav Header -->
    
    <!-- Container Goes Here -->
   
        <!-- Body Goes Here -->
			 
				      <?php include '_Table.php'; ?>				  
			  
    <!-- END Container -->
  </body>
</html>