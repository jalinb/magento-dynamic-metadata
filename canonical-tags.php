<!-- Dynamic Canonical Tags -->
<?php
$canonicalCurrentUrl = Mage::helper('core/url')->getCurrentUrl();

// Strips parameters from the URL starting at the questionmark
if(strpos($canonicalCurrentUrl, "?")):
	$canonicalUrl = substr($canonicalCurrentUrl, 0, strpos($canonicalCurrentUrl, "?"));
else:
	$canonicalUrl = $canonicalCurrentUrl;
endif;

// Strips tags from the URL starting at tag/
if(strpos($canonicalUrl, "tag/")):
	$canonicalUrlFull = substr($canonicalUrl, 0, strpos($canonicalUrl, "tag/"));
else:
	$canonicalUrlFull = $canonicalUrl;
endif;


if($this->getRequest()->getControllerModule()=='AW_Shopbybrand'):
	if($this->getRequest()->getRouteName()=='brands.html'): ?>
		<!-- Brand Page -->
		<link rel="canonical" href="<?php echo $canonicalUrlFull; ?>?limit=all" />
<?php endif; endif;


if($this->getRequest()->getControllerModule()=='AW_Blog'):
	if($this->getRequest()->getActionName()=='list'): ?>
		<!-- Root Blog Category -->
		<link rel="canonical" href="<?php echo $canonicalUrlFull; ?>?limit=1000" />
<?php endif; endif;

if(Mage::getSingleton('blog/cat')->getCatId() == 4):
	if($this->getRequest()->getControllerName()=='cat'): ?>
		<!-- Blog Category -->
		<link rel="canonical" href="<?php echo $canonicalUrlFull; ?>?limit=1000" />
<?php endif; endif;

if(Mage::getSingleton('blog/cat')->getCatId() == 2):
	if($this->getRequest()->getControllerName()=='cat'): ?>
		<!-- Press Category -->
		<link rel="canonical" href="<?php echo $canonicalUrlFull; ?>?limit=1000" />
<?php endif; endif; 

if($this->getRequest()->getControllerName()=='category'): ?>
	<!-- Catalog Category -->
	<link rel="canonical" href="<?php echo $canonicalUrlFull; ?>?limit=all" />
<?php endif; ?>
<!-- END Dynamic Canonical Tags -->