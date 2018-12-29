<?php
include('.' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'config.php');
include('.' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'demo.list.php');
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $config->titlu_casual; ?></title>
<link rel='stylesheet prefetch' href='media/style.css?1234'>
</head>
<body>
<h1 style="text-align:center;"><?php echo $config->titlu_casual; ?></h1>
<table>
  <thead>
    <tr>
      <th style="text-align: center;">#</th>
      <th style="text-align: center;">Map</th>
      <th style="text-align: center;">Date</th>
      <th style="text-align: center;">Download</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $k = 0;
  foreach($files as $file) {
  $k++;
  if($k == 1) continue;
  ?>
    <tr>
      <td style="text-align: center;"><strong><?php echo ($k-1); ?></strong></td>
      <td style="text-align: center;"><strong><?php echo $file->map; ?></strong></td>
      <td style="text-align: center;"><?php echo date("d - M - Y H:i:s", strtotime($file->date)); ?></td>
      <td style="text-align: center;"><a class="button add" href="download.php?demo=<?php echo $file->file; ?>">Download</a></td>
    </tr>
   <?php
   
   }
   ?>
  </tbody>
</table>

</body>
</html>
