<?php /* Smarty version 2.6.27, created on 2013-08-14 16:14:08
         compiled from CRM/Contribute/Page/DashBoard.hlp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'htxt', 'CRM/Contribute/Page/DashBoard.hlp', 26, false),array('block', 'ts', 'CRM/Contribute/Page/DashBoard.hlp', 27, false),array('function', 'crmURL', 'CRM/Contribute/Page/DashBoard.hlp', 30, false),)), $this); ?>
<?php $this->_tag_stack[] = array('htxt', array('id' => "id-contribute-intro-title")); $_block_repeat=true;smarty_block_htxt($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_htxt($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('htxt', array('id' => "id-contribute-intro")); $_block_repeat=true;smarty_block_htxt($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/basic",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findContactURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contribute/import",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('importURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findContactURL'],'2' => $this->_tpl_vars['importURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviContribute allows you to create customized page(s) for collecting online contributions. You can also input and track offline contributions. To enter contributions manually for individual contacts, use <a href='%1'>Find Contacts</a> to locate the contact. Then click <strong>View</strong> to go to their summary page and click on the <strong>New Contribution</strong> link. You can also <a href='%2'>import batches of offline contributions</a> from other sources.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contribute/search/basic",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findContribsURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findContribsURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The <strong>Contribution Summary</strong> table provides a summary of month and year-to-date contribution totals, and includes shortcuts to view the contribution details for these commonly used search periods. To run your own customized searches - click <a href='%1'>Find Contributions</a>. You can search by Contributor Name, Amount Range, and a variety of other criteria.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_htxt($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>