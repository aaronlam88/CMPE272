<?php
$TITLE="Products";
require_once "header.php";
?>

<div class="container">
  <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th>Images</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
    </thead>
    <tbody>
      <?php
        $dir = getcwd();
        $imgdir = "$dir/images/product_images/";
        $files=scandir($imgdir);

        foreach ($files as $fileName) {
          if(strcmp($fileName[0], ".") != 0) {
            $curDir="/CMPE-272/images/product_images/$fileName";
            echo "
              <tr>
                <td>
                  <img class=\"icon\" src=\"$curDir/01.png\">
                </td>
                <td> 
                " . 
                "<h3>" . strtoupper(str_replace('_', ' ', $fileName)) . "</h3>" .
                file_get_contents("$imgdir/$fileName/description.txt") .
                "
                </td>
                <td>" .
                file_get_contents("$imgdir/$fileName/price.txt") .
                "
                </td>
              <tr>";
          }
        }
      ?>
    </tbody>
  </table>
</div>

<?php require_once "footer.php"; ?>