<?php
defined('_JEXEC') or die;
unset($this->_scripts[JURI::root(true).'/media/system/js/caption.js']);
if (isset($this->_script['text/javascript']))
{ $this->_script['text/javascript'] = preg_replace('%window\.addEvent\    (\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%',     '', $this->_script['text/javascript']);
if (empty($this->_script['text/javascript']))
unset($this->_script['text/javascript']);}
?>
<?php
defined( '_JEXEC' ) or die( 'Access Denied.' );
// Remove mootools and other scripts from header
$this->_scripts = array();?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
  <head>
<jdoc:include type="head" />
<?php
// Remove all native Scripts
$doc = &JFactory::getDocument();
$doc->_scripts = array();
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 767px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/slimbox2.css" type="text/css" />
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/joomla/templates/blank_template/js/togglemenu.js"></script>
<script type="text/javascript" media="(min-width: 767px)" src="/joomla/templates/blank_template/js/slimbox2.js"></script>
</head>
<body>

<div class="container">

<header>

   <!-- Navigation Toggle Button -->
   <a href="#nav_main" class="nb mobile" title="Jump to the main navigation" role="button">Menu</a>

 <nav id="nav_main" class="nav" role="navigation">
 <jdoc:include type="modules" name="navigation" />
 </nav>

    <!-- Nav Closing Button -->
    <a href="#top" class="nc mobile" role="button" title="Jump back to the start of the document">X</a>

 <jdoc:include type="modules" name="top" />

</header>

<main>
   <jdoc:include type="modules" name="left" />
   <jdoc:include type="component" />
   <jdoc:include type="modules" name="right" />
</main>

<footer>
 <jdoc:include type="modules" name="footer" />
</footer>

</div><!-- /container -->

</body>
</html>
