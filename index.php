<html>
<head>

<?php
if (isset($_POST['R1101']))
{
  exec("sudo python /var/www/html/R110.py");
} 
if (isset($_POST['R111']))
{
  exec("sudo python /var/www/html/R111.py");
}
if (isset($_POST['R130']))
{
  exec("sudo python /var/www/html/R130.py");
}
if (isset($_POST['R131']))
{
  exec("sudo python /var/www/html/R131.py");
}
if (isset($_POST['R150']))
{
  exec("sudo python /var/www/html/R150.py");
}
if (isset($_POST['R151']))
{
  exec("sudo python /var/www/html/R151.py");
}
?>

  <title>AKILLI EV</title>
</head>
<body>
<form method="post">
  <table
 style="width: 75%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="text-align: center;">SISTEM ELEKTRIGI</td>
        <td style="text-align: center;">GECE LAMBASI</td>
        <td style="text-align: center;">AYDINLATMA LAMBASI</td>
  </tr>
  <tr>
    <td style="text-align: center;"><button name="R110">ACIK</button></td>
    <td style="text-align: center;"><button name='R130'>ACIK</button></td>
    <td style="text-align: center;"><button name='R150'>ACIK</button></td>
  </tr>
  <tr>
    <td style="text-align: center;"><button name='R111'>KAPALI</button></td>
    <td style="text-align: center;"><button name='R131'>KAPALI</button></td>
    <td style="text-align: center;"><button name='R151'>KAPALI</button></td>
  </tr>
 
</tbody>
  </table>
</form>
</body>
</html>