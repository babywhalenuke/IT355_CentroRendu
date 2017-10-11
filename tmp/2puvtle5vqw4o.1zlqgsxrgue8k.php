<!- CRO Home Page />
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRO</title>
  
  <!- All of the header information that is the same between pages />
  <?php echo $this->render('view/includes/header.inc.html',NULL,get_defined_vars(),0); ?>
  
</head>
<body>
  <!- Include for the top nav bar />
  <?php echo $this->render('view/includes/nav-top.inc.html',NULL,get_defined_vars(),0); ?>
  
  <!- Body of the page />
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php echo $this->render('view/includes/volunteerinfo.inc.html',NULL,get_defined_vars(),0); ?>
      </div>
      <div class=col-md-8">
        <h1>YAY IT'S CRO</h1>
      </div>
    </div>
  </div>
  <!- End of body />
  
  <!- Include for the footer />
  <?php echo $this->render('view/includes/footer.inc.html',NULL,get_defined_vars(),0); ?>

</body>
</html>
