<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-27 10:55:32
         compiled from "C:\xampp\htdocs\newDemo\application\modules\project\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19092327425d1484841aeda2-81413414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0e252dafd92f8472ba549a9354e1a5e21b18e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\newDemo\\application\\modules\\project\\views\\templates\\error\\error.tpl',
      1 => 1561537453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19092327425d1484841aeda2-81413414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d14848447da57_53181334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d14848447da57_53181334')) {function content_5d14848447da57_53181334($_smarty_tpl) {?><div class="content">
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
