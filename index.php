<?php defined( '_JEXEC' ) or die( 'Restricted access' );

// storing the path to requested document 
$doc = JFactory::getDocument();
// template installation path
$tpath = $this->baseurl.'/templates/'.$this->template;

$doc->addStyleSheet($this->baseurl . '/templates/system/css/system.css');
$doc->addStyleSheet($this->baseurl . '/templates/system/css/general.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
// loading the template's css file
$doc->addStyleSheet($tpath . '/css/template.css');
// loading the template's js file
$doc->addScript($tpath . '/js/main.js');
// loading bootstrap.min.js
JHtml::_('bootstrap.framework');

// removing generator tag from source code
$this->setGenerator(null);
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" />
</head>

<body>
<div class="container">
  <!-- navigation start -->
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>             
          <!--<a class="navbar-brand" href="#">Home</a>-->
    </div>  
          <div class="navbar-collapse collapse">
          <!-- dynamically creating the system's menu -->
          	<jdoc:include type="modules" name="menu" />
    	</div>
  </nav>
  <!-- navigation end -->
  
  <header class="jumbotron"> 
    <!-- header start -->
    <jdoc:include type="modules" name="top" />
    <p>Mobile first, fully responsive page layout using the new Bootstrap 3.1 classes</p>
    <a href="http://getbootstrap.com/getting-started/#migration" class="btn btn-large btn-success">What's new?</a> </header>
  <!-- header end -->
  <!-- starting bootstrap's grid layout (2 columns in this case) -->
  <div class="row">
    <div class="col-sm-4">
      <h3>Sidebar left</h3>
    </div>
    <div class="col-sm-8"> 
      <!-- type component is responisble for displaying content -->
      <jdoc:include type="component" />
    </div>
  </div>
  <div class="modal-content">
    <footer class="modal-footer"><jdoc:include type="modules" name="footer" /></footer>
</div>
  
</div>

</body>
</html>