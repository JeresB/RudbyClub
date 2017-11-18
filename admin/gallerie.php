<!doctype html>
<html lang="fr">
  <?php include_once('../templates/head.html'); ?>

  <link href="../css/dropzone.css" type="text/css" rel="stylesheet" />
  <link href="../css/custom.css" type="text/css" rel="stylesheet" />

  <body>
    <?php include_once('../templates/navbar.php'); ?>
    <?php //include_once('templates/message.php'); ?>
    <div class="ui container">
      <div class="ui piled segment">
        <form action="../upload.php" class="dropzone" id="my-dropzone"></form>
      </div>
    </div>

    <?php include_once('../templates/footer.html'); ?>
    <script src="../js/dropzone.js"></script>
    <script>
      Dropzone.options.myDropzone = {
        init: function() {
          thisDropzone = this;

          $.get('../upload.php', function(data) {
            $.each(data, function(key,value){
              var mockFile = { name: value.name, size: value.size };
              thisDropzone.options.addedfile.call(thisDropzone, mockFile);
              thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "../images/"+value.name);
            });
          });
        }
      };
    </script>
  </body>
</html>
