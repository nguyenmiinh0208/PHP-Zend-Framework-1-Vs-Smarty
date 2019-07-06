<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1" />
	<link rel="shortcut icon" href="../images/icon.ico" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/kc-st-import.css" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/kc-myportal4.css" /> 
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/sj-st-import.css" />
	<link rel="stylesheet" type="text/css" charset="UTF-8" media="all" href="../css/kc-login-import.css" />
	<script type="text/javascript" charset="UTF-8" src="../js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="../js/import.js"></script>
	<noscript><META HTTP-EQUIV=Refresh CONTENT="0; URL=/js_ng.html"></noscript>
	<title> {if isset($titleLogin)}
				{$titleLogin}
			{else}
				{$titleUser}
			{/if}
	</title>
	
	{if isset($titleLogin)}
		<script type="text/javascript">
        var userIdWord="User ID";
        var passWdWord="Password";

        $(document).ready(function(){
            $('input#userId').attr('placeholder', userIdWord);
            $('input#userPass').attr('placeholder', passWdWord);
            document.getElementById('userId').focus();
        });
    </script> 
	{/if}
</head>