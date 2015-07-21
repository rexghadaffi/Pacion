<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title></title>
   <?php 
    include '../Thesis/shared-scripts/_css.php';
    include '../Thesis/shared-scripts/_js.php';
   ?>
   <script type="text/javascript" class="init">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script type="text/javascript">
        function NotifySuccess() {
            $.Notify({
                caption: 'Success!',
                content: 'Yikee.',
                type: 'success'
            });
        }

        function NotifyError() {
            $.Notify({
                caption: 'Opss!',
                content: 'There\'s something wrong.',
                type: 'alert'
            });
        }
    </script>
  </head>
  <body>
    <!-- Nav Header Goes Here... -->
    <?php include '_AdminNavBar.php'; ?>     
    <!-- END Nav Header -->
    
    <!-- Container Goes Here -->
    <div class="grid padding20">
      <div class="row padding20">
        <!-- Body Goes Here -->

        <div id="body">
          <?php include '_Table.php'; ?>
        </div>
      </div>
    </div>
    <!-- END Container -->
  </body>
</html>