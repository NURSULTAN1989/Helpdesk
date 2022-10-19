<!DOCTYPE html>
<html>

<head>
  <title>OfficeJs | Demos </title>
  <meta charset="utf-8">
  <link href="./layout/styles/layout.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./include/jquery_ui/themes/start/jquery-ui.min.css">
  <script src="include/jquery/jquery-1.12.4.min.js"></script>
  <script src="include/jquery_ui/jquery-ui.min.js"></script>
  <script src="jquery-3.5.0.min.js"></script>
  <!-- ################################ For files reder ###############################-->
  <!--PDF-->
  <!--Docs-->
  <script src="include/docx/jszip-utils.js"></script>
  <script src="include/docx/mammoth.browser.min.js"></script>
  <!--officeToHtml-->
  <script src="include/officeToHtml.js"></script>
  <link rel="stylesheet" href="include/officeToHtml.css">
</head>

<body id="top">
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
    </header>
  </div>
  <div class="wrapper row4">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <h3><a href="index.php">Главная</a></h3>
        <p id="resolte-text" style="display:none">Resolte:</p>
        <!--<div id="resolte-contaniner" style="display:none;"></div>-->
        <div style="overflow: hidden;width: 1200px;  margin-left: 40px; margin-right: 50px;">
          <div id="resolte-contaniner" style="width: 100%; height:550px; overflow: auto;"></div>
        </div>
        <script>
           $(document).ready(function(){
              $("#resolte-contaniner").html("");
              $("#resolte-contaniner").show();
              $("#resolte-text").show();
                var file_path = "include/NK.docx";
                $("#resolte-contaniner").officeToHtml({
                  url: file_path
                });
            });
        </script>
  <!-- / main body -->
  <div class="clear"></div>
  </main>
  </div>
</body>

</html>
