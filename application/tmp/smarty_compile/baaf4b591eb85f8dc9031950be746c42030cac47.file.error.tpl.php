<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-28 13:43:13
         compiled from "C:\xampp\htdocs\newDemo\application\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:970265865d158bc3394948-71282463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baaf4b591eb85f8dc9031950be746c42030cac47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\newDemo\\application\\views\\templates\\error\\error.tpl',
      1 => 1561704153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '970265865d158bc3394948-71282463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d158bc3419665_53096795',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d158bc3419665_53096795')) {function content_5d158bc3419665_53096795($_smarty_tpl) {?><div class="content">
	<h1>An error occurred</h1>
	<h2><?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['this']->value->exception) {?>
		<h3>Exception information:</h3>
		<p>
			<b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getMessage();?>

		</p>
		<h3>Stack trace:</h3>
		<pre><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getTraceAsString();?>
</pre>
	
		<h3>Request Parameters:</h3>
		<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>
</pre>
	<?php }?>
</div><?php }} ?>
