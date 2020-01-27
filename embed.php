<?php
if (!empty($_GET['id']) && isset($_GET['id'])) {
    include('gp.php');
   
 {
// exit("No direct linking!");
}
$getGP = getPhotoGoogle($_GET['id']); //id is full photos url
$ik = json_decode($getGP, true);
$sourcesx = "";
$posterimg = posterImg($_GET['id']);
 foreach ($ik as $v) {
$lablx = str_replace("p","",$v['label']);
$sourcesx .= '<source src="'.$v['file'].'" type="'.$v['type'].'" res="'.$lablx.'" label="'.$lablx.'" />';
}
} else {
    exit('No Id provided!');
}
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
?>

	<style>
/*! normalize.css v2.1.3 | MIT License | git.io/normalize */a.logo,img,legend{border:0}a,h1,h2{color:#3498db}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,small,summary{display:block}body,figure,li,ul{margin:0}[hidden],template{display:none}li,nav ul,ul{list-style:none;padding:0}legend,li,nav ul,ul{padding:0}.btn__bar,sub,sup{position:relative}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}a{background:0 0;text-decoration:none;border-bottom:1px dotted currentColor;transition:background .3s ease,color .3s ease,border .3s ease}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}hr{box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}.btn__bar,nav li{white-space:nowrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}sub,sup{font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}svg:not(:root){overflow:hidden}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}@font-face{font-family:Avenir;src:url(//cdn.plyr.io/fonts/avenir-medium.woff2) format("woff2"),url(//cdn.plyr.io/fonts/avenir-medium.woff) format("woff");font-style:normal;font-weight:500}@font-face{font-family:Avenir;src:url(//cdn.plyr.io/fonts/avenir-bold.woff2) format("woff2"),url(//cdn.plyr.io/fonts/avenir-bold.woff) format("woff");font-style:normal;font-weight:700}html{font-size:100%;height:100%;background:fixed #f2f5f7}body{font-family:Avenir,"Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;text-align:center;color:#55646b;font-weight:500;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;padding:0px}h1,h2{letter-spacing:-.025em;margin:0 0 10px;line-height:1.2;font-weight:700}h1{font-size:64px;font-size:4rem}p,small{margin:0 0 20px}small{padding:0 10px;font-size:14px;font-size:.875rem}a:focus,a:hover{color:#343f4a;border-bottom-color:transparent}a:focus{outline:#343f4a dotted thin;outline-offset:1px}.color--vimeo{color:#19b7ed}.color--youtube{color:#cc181e}*,::after,::before{box-sizing:border-box}.btn__bar ul,nav li{display:inline-block}header{padding:20px;margin-bottom:20px}header p{font-size:18px;font-size:1.125rem}section{max-width:1200px;margin:0 auto 20px}@media (min-width:480px){header{padding-top:60px;padding-bottom:60px}section{margin-bottom:40px}}.icon{fill:currentColor;width:18px;height:18px;vertical-align:-3px}.btn,.btn__count,.error main,video{vertical-align:middle}a svg,button svg,label svg{pointer-events:none}.btn .icon,a .icon{margin-right:10px}.btn:not(.btn-large) .icon{width:16px;height:16px}nav ul{margin:0;font-size:0}nav li{margin-top:10px;font-size:16px;font-size:1rem}nav li+li{margin-left:20px}.btn__bar{margin:0 auto 20px;max-width:1200px}.btn__bar::before{content:"";position:absolute;top:50%;left:0;right:0;height:1px;background:#dbe3e8}.btn__bar ul{position:relative;z-index:1;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn__bar li{margin:0}.btn__bar li:first-child .btn{border-radius:4px 0 0 4px}.btn__bar li:last-child .btn{border-radius:0 4px 4px 0}.btn__bar li+li .btn{margin-left:-1px}.btn__bar li.active .btn{position:relative;z-index:1}.btn__bar li.active .btn .icon{color:inherit}.btn__bar li.active+li .btn:hover{z-index:0}.btn__bar .btn{position:relative;display:block;border-radius:0}.btn__bar .btn:focus,.btn__bar .btn:hover{z-index:1}@media (min-width:560px){.btn__bar{margin-bottom:40px}}.btn,.btn__count{display:inline-block;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;font-weight:700}.btn{padding:10px 12px;background:linear-gradient(#f8fafb,#e9eef1);border:1px solid #cbd0d3;box-shadow:0 1px 1px rgba(0,0,0,.05);text-shadow:0 1px 1px #fff;color:#55646b;transition:background .1s ease,color .1s ease;font-size:14px;font-size:.875rem}.btn:focus,.btn:hover{border-color:#b5bcc0;color:#55646b;outline:0}.btn--large{padding:10px 20px;font-size:16px;font-size:1rem}.btn--primary,.btn__bar li.active .btn{background-image:linear-gradient(#3498db,#258cd1);background-color:#3498db;border-color:#217dbb;box-shadow:0 1px 1px rgba(0,0,0,.15);text-shadow:0 1px 1px rgba(0,0,0,.1);color:#fff}.btn--primary:focus,.btn--primary:hover{color:#fff;border-color:#196090}.btn--youtube .icon{color:#cc181e}.btn--vimeo .icon{color:#19b7ed}.btn--twitter .icon{color:#4BAAF4}.btn__count{position:relative;margin-left:10px;padding:10px 15px;background:#fff;border:1px solid #cbd0d3}.btn__count::before,.plyr__video-wrapper::after{content:"";position:absolute}.btn__count::before{display:block;width:8px;height:8px;left:1px;top:50%;margin-top:-4px;background:inherit;border:inherit;border-width:1px 0 0 1px;transform:rotate(-45deg) translate(-50%,-50%)}.error body,html.error{height:100%}.error body{width:100%;display:table;table-layout:fixed}.error main{display:table-cell;width:100%}video{max-width:100%}.plyr{margin:0 auto;border-radius:6px}.plyr--audio{max-width:520px}.plyr__video-wrapper::after{pointer-events:none;top:0;bottom:0;left:0;right:0;border:1px solid rgba(0,0,0,.15);border-radius:inherit}.plyr__cite{display:none;margin-top:20px}.plyr__cite .icon{margin-right:5px}.plyr--audio~ul .plyr__cite--audio,.plyr--video:not(.plyr--youtube):not(.plyr--vimeo)~ul .plyr__cite--video,.plyr--vimeo~ul .plyr__cite--vimeo,.plyr--youtube~ul .plyr__cite--youtube{display:block}
	</style>


		<div id="video" ></div>

	<script src="https://cdn.jwplayer.com/libraries/v9qNpZwI.js"></script>
	<script type="text/javascript">
		jwplayer("video").setup({
			playlist: [{
				"sources":<?php echo $getGP?>
			}],
    width: "100%",
    height: "100%",
responsive: true,
		});
	</script>