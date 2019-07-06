<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-28 14:01:31
         compiled from "C:\xampp\htdocs\newDemo\application\views\scripts\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10136413905d15bb4b34d5f3-75369052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f89fe4bb08c55a9ac68f05dfaeac513a2e12f83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\newDemo\\application\\views\\scripts\\login\\index.tpl',
      1 => 1561696329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10136413905d15bb4b34d5f3-75369052',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d15bb4b380287_54849112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d15bb4b380287_54849112')) {function content_5d15bb4b380287_54849112($_smarty_tpl) {?><body class="kc-login-page">
    <div class="kc-login-wrap">
        <div id="kc-login-container">
    <div class="kc-login-header-wrap">
        <div class="kc-login-header kc-co-clearfix">
            <div class="kc-login-logo-area"><a href="/FLMAA"><img  width="293" height="52" alt="logo" src="../images/logo.gif" /></a></div>
        <div class="kc-login-status kc-co-pull-right">
            <a href="javascript:void(0);" class="kc-co-link" onclick="openWindow('http://status.kcc.knowledgewing.com/', 'SystemStatus'); return false;">
                <p class="kc-login-system-state">System status</p>
            </a>
        </div>
        </div>
        <div class="kc-login-s-menu-area-wrap">
            <div class="kc-login-s-menu-area">
            </div>
        </div>
    </div>               
        <div class="kc-login-maincontainer">
            <div class="kc-login-login-wrap">
                
                <form  name="parentsForm" method="post" id="parentsForm">
                    <input type="hidden" id="hash" value="" name="hash" /> <input type="hidden" id="headerAuth" name="headerAuth" />
                    <div class="kc-login-content-box">  
                        <div class="kc-login-form-area">
                            <div style='display:none' class="kc-login-alert-area">
                                <ul>
                                                                    </ul>
                            </div>

                            <input type="text" id="userId" class="kc-login-user-input" maxlength="254" style="ime-mode: disabled;" onkeydown="preSubmitForm(event.keyCode, &#039;/FLMAA/login/login&#039;);" name="userId" />
                            <input type="password" id="userPass" class="kc-login-password-input" maxlength="100" style="ime-mode: disabled;" autocomplete="off" onkeydown="preSubmitForm(event.keyCode, &#039;/FLMAA/login/login&#039;);" name="userPass" />
                            <div class="kc-co-align-center">
                                <button class="kc-login-btn-login" type="submit" id="submit" name="submit">Login</button>
                            </div>
                        </div>
                        <div class="kc-login-info-change">
                            <table class="kc-login-links">
                                <tr>
                                    <td class="kc-login-left-column"></td>
                                    <td class="kc-login-right-column kc-login-blue-link"><a class="kc-login-link" href="/FLMAA/login/init-reissue-password">Forgot Your Password?</a></td>
                                </tr>
                                <tr>
                                    <td class="kc-login-left-column"></td>
                                    <td class="kc-login-right-column kc-login-blue-link"><a class="kc-login-link" href="/FLMAA/login/init-inquiry-password">Forgot Your User ID?</a></td>
                                </tr>
                                                                <tr>
                                    <td colspan="2" class="kc-login-break-column"><div class="kc-login-break-line"><hr></div></td>
                                </tr>
                                <tr>
                                    <td class="kc-login-left-column"></td>
                                    <td class="kc-login-right-column kc-login-blue-link"><a class="kc-login-link" href="/FLMAA/user/init-disclaimer">Register New User</a></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                    <h4 class="kc-login-h4">What's new</h4>
                    <div class="kc-login-content-box">
                        <div class="kc-login-notice-wrap">
                                                                                                                                                        There are no notices.
                                                                                    </div>
                    </div>
                </form>
                
                <div class="kc-login-show-smart-phone kc-co-align-center kc-co-mt10">
                    <a class="kc-login-blue-link" href="javascript:void(0);" onclick="submitForm('/sd/FLMAA/login/init-login');return false;">To smartphone</a>
                </div>
                            </div>
        </div>

        </div>
<div class="kc-login-footer">
    <p class="kc-login-copyright">Powered by KnowledgeC@fe</p>
</div>

    </div>
</body><?php }} ?>
