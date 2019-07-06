<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-28 05:31:20
         compiled from "C:\xampp\htdocs\newDemo\application\modules\project\views\templates\_common\html-head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13664347385d148484694d53-57908726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83cd85df676106dfde254bd9997cc8af02a35f3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\newDemo\\application\\modules\\project\\views\\templates\\_common\\html-head.tpl',
      1 => 1561692679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13664347385d148484694d53-57908726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d148484763e09_07309442',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d148484763e09_07309442')) {function content_5d148484763e09_07309442($_smarty_tpl) {?><head>
	<meta charset="UTF-8"/>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1" />
	<link rel="shortcut icon" href="../../images/icon.ico" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../../css/kc-st-import.css" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../../css/kc-myportal4.css" /> 
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../../css/sj-st-import.css" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../../css/kc-login-import.css" />
	
	<?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="../../js/import.js"><?php echo '</script'; ?>
>
	<noscript><META HTTP-EQUIV=Refresh CONTENT="0; URL=/js_ng.html"></noscript>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
</head><?php }} ?>
