<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-28 13:36:04
         compiled from "C:\xampp\htdocs\newDemo\application\views\templates\_common\html-head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2273682225d158b756de933-60532443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfdc36e9e7cffc077d58eed4f26998a2afa6a472' => 
    array (
      0 => 'C:\\xampp\\htdocs\\newDemo\\application\\views\\templates\\_common\\html-head.tpl',
      1 => 1561703744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2273682225d158b756de933-60532443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d158b756e27b7_23166844',
  'variables' => 
  array (
    'titleLogin' => 0,
    'titleUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d158b756e27b7_23166844')) {function content_5d158b756e27b7_23166844($_smarty_tpl) {?><head>
	<meta charset="UTF-8"/>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1" />
	<link rel="shortcut icon" href="../images/icon.ico" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/kc-st-import.css" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/kc-myportal4.css" /> 
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/sj-st-import.css" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/kc-login-import.css" />
	<?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="../js/jquery-3.1.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="../js/import.js"><?php echo '</script'; ?>
>
	<noscript><META HTTP-EQUIV=Refresh CONTENT="0; URL=/js_ng.html"></noscript>
	<title> <?php if (isset($_smarty_tpl->tpl_vars['titleLogin']->value)) {?>
				<?php echo $_smarty_tpl->tpl_vars['titleLogin']->value;?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['titleUser']->value;?>

			<?php }?>
	</title>
	
	<?php if (isset($_smarty_tpl->tpl_vars['titleLogin']->value)) {?>
		<?php echo '<script'; ?>
 type="text/javascript">
        var userIdWord="User ID";
        var passWdWord="Password";

        $(document).ready(function(){
            $('input#userId').attr('placeholder', userIdWord);
            $('input#userPass').attr('placeholder', passWdWord);
            document.getElementById('userId').focus();
        });
    <?php echo '</script'; ?>
> 
	<?php }?>
</head><?php }} ?>
