<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="shortcut icon" href="favicon.ico" type="image/png">
  <link rel="apple-touch-icon" href="favicon.ico">
  <meta name="description" content="ForexBriefly is your ultimate destination for everything related to Forex, stocks, crypto, and finance in South Africa. Stay updated with the latest financial news and find the best Forex brokers in the country. Learn about online trading and make informed investment decisions in the South African market.">
  <meta name="keywords" content="Forex trading South Africa, Stock market South Africa, Crypto investment South Africa, Financial news South Africa, Forex brokers South Africa, Online trading South Africa">
  <meta property="og:url" content="http://forexbriefly.com">
  <meta property="og:image" content="http://www.forexbriefly.com/image-name.jpg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="author" content="forexbriefly@gmail.com">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="style.css">
  <meta name="msapplication-navbutton-color" content="#ffffff">
  <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Forexbriefly">

  <title>ForexBrifly | Your Guide to Forex, Stock, Crypto, and Finance in South Africa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FPBJQ8WL8T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FPBJQ8WL8T');
</script>
</head>


  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='terms';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Terms</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    

<!-- Sidebar Widgets Column -->
<?php include('includes/sidebar.php');?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
