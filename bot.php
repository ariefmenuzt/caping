<?php date_default_timezone_set("Asia/Jakarta");@system("clear");@system("rm -rf user");@system("git clone https://github.com/caz7L/user");system("clear");require"modul.php";require"config.php";$t="
";error_reporting(0);require __DIR__."/user/user.php";echo$figlet.$t;$akun=count($config);if($akun>30){$delay=1;}else{$delay=30/$akun;}$load=5;echo$msgcp.$t;echo$ijo."[--] loading ".$putih;loading($load);for($i=0;$i<$akun;$i++){$coki=$config[$i];invite($coki);}echo$t.$putih."[--] total account: ".$turkis.$akun.$t;echo$putih."[------------] opsi [------------]".$t;echo$putih."[--] 1 ".$ijo."claim".$putih."        [--] 3 ".$ijo."cek akun ".$t;echo$putih."[--] 2 ".$ijo."redem".$putih."        [--] 4 ".$ijo."caping run".$t;if($stat_cp){$opsi=readline($turkis."[--]=] ".$ijo);if($opsi=="1"OR$opsi=="claim"){$claim=true;}elseif($opsi=="2"OR$opsi=="redeem"){$redem=true;}elseif($opsi=="3"){$cekakun=true;}elseif($opsi=="4"){$caping=true;}else{echo$putih."[---] ".$kuning."pilihan tidak ada".$t;@system("rm -rf user");exit;}}else{echo$red."[----] ".$kuning."oops fitur lock".$t;echo$msgcp.$t;@system("rm -rf user");exit;}if($cekakun){for($i=0;$i<$akun;$i++){$coki=$config[$i];$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih."[--] user ".$turkis.$uid.$putih." [-] coin: ".$ijo.$coin.$putih."	 [-] money: Rp.".$ijo.$money.$t;}else{echo$putih."[--] ".$kuning.$msg.$t;}}@system("rm -rf user");}elseif($claim){echo$t;echo$putih."[-------]".$ijo." cek absen".$putih." [-------]".$t.$t;for($i=0;$i<$akun;$i++){$coki=$config[$i];$absen=json_decode(absen($coki),true);$login=json_decode(login($coki),true);$lcode=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$code=$absen["code"];$msg=$absen["message"];$poin=$absen["data"]["get_coin"];$data=$absen["data"];$next_day=$absen["continue_count"];if($code=="0"){if($data!=null){echo$putih."[--] user ".$turkis.$uid." ".$ijo.$msg.$putih."	 [-] claim ".$ijo.$poin.$putih." coin".$t;}else{echo$putih."[--] user ".$turkis.$uid.$ijo." ".$msg.$putih."	 [-] coin: ".$ijo.$coin.$t;}}else{echo$putih."[--] user ".$uid.$red." ".$msg.$t;}sleep($delay);}echo$t;echo$putih."[-------]".$ijo." open box diamon".$putih." [-------]".$t.$t;for($i=0;$i<$akun;$i++){$coki=$config[$i];$diamon=json_decode(diamon($coki),true);$login=json_decode(login($coki),true);$lcode=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$code=$diamon["code"];$msg=$diamon["message"];if($code=="0"){echo$putih."[--] user ".$turkis.$uid." ".$ijo.$msg.$putih."	 [-] coin: ".$ijo.$coin.$t;}else{echo$putih."[--] user ".$turkis.$uid." ".$red.$msg.$t;}sleep($delay);}echo$t.$putih."[-------]".$ijo." push notifikasi".$putih." [-------]".$t;for($i=0;$i<5;$i++){echo$t;for($a=0;$a<$akun;$a++){$coki=$config[$a];$push=json_decode(push($coki),true);$login=json_decode(login($coki),true);$lcode=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$code=$push["code"];$msg=$push["message"];if($code=="0"){echo$putih."[--] user ".$turkis.$uid." ".$ijo.$msg.$putih."	 [-] coin: ".$ijo.$coin.$t;}else{echo$putih."[--] user ".$turkis.$uid." ".$red.$msg.$t;}sleep(1);}echo$putih."[------] ".$ijo."loading ".$putih;loading($load);sleep($delay);}echo$t.$t.$putih."[-------] ".$ijo."share invite code ".$putih."[-------]".$t.$t;$exe=5;for($i=0;$i<$exe;$i++){for($a=0;$a<$akun;$a++){$coki=$config[$a];$rand=rand(1,9999);$share=json_decode(share($coki,$rand),true);$login=json_decode(login($coki),true);$lcode=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$code=$share["code"];$msg=$share["message"];if($code=="0"){echo$putih."[--] user ".$turkis.$uid.$putih."	 [-] coin: ".$ijo.$coin.$t;}else{echo$putih."[--] ".$red.$msg.$t;}sleep($delay);}echo$putih."[------] sleep ".$ijo.substr($delay,0,4).$putih." sec ".$ijo."loading ".$putih;loading($load);echo$t;}$exe=10;echo$t.$putih."[-------]".$ijo." watch video".$putih." [-------]".$t;for($i=0;$i<$exe;$i++){echo$t;for($a=0;$a<$akun;$a++){$coki=$config[$a];$rand=rand(1,9999);$video=json_decode(video($coki,$rand),true);$login=json_decode(login($coki),true);$lcode=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$code=$video["code"];$msg=$video["message"];if($code=="0"){echo$putih."[--] user ".$turkis.$uid.$putih."	 [-] coin: ".$ijo.$coin.$t;}else{echo$putih."[--] ".$red.$msg.$t;}sleep($delay);}echo$putih."[------] sleep ".$ijo.substr($delay,0,4).$putih." sec ".$ijo."loading ".$putih;loading($load);}echo$t.$t.$putih."[-------] ".$ijo."reading news".$putih." [-------]".$t;$exe=20;for($i=0;$i<$exe;$i++){echo$t;for($a=0;$a<$akun;$a++){$coki=$config[$a];$rand=rand(1,9999);$news=json_decode(news($coki,$rand),true);$login=json_decode(login($coki),true);$lcode=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$code=$news["code"];$msg=$news["message"];if($code=="0"){echo$putih."[--] user ".$ijo.$uid.$putih."	 [-] coin: ".$ijo.$coin.$t;}else{echo$putih."[--] ".$red.$msg.$t;}sleep($delay);}echo$putih."[------] sleep ".$ijo.substr($delay,0,4).$putih." sec ".$ijo."loading ".$putih;loading($load);}system("clear");echo$figlet;@system("rm -rf user");echo$t.$t.$putih."[-------] ".$ijo."claim result".$putih." [-------]".$t.$t;for($i=0;$i<$akun;$i++){$coki=$config[$i];$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih."[--] user ".$turkis.$uid.$putih." [-] coin: ".$ijo.$coin.$putih." [-] money: Rp.".$ijo.$money.$t;}else{echo"[--] ".$msg.$t;}}sleep($delay);}elseif($redem){for($i=0;$i<$akun;$i++){$coki=$config[$i];$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih."[".$i."]	 user ".$turkis.$uid.$putih." [-] money: Rp.".$ijo.$money.$t;}else{echo$putih."[--] ".$red.$msg.$t;}}$x=readline($putih."[--] pilih akun: ");system("clear");echo$figlet.$t;$coki=$config[$x];$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih."[--] user ".$turkis.$uid.$putih." [-] coin: ".$ijo.$coin.$putih." [-] money: Rp.".$ijo.$money.$t;}else{echo$putih."[--] ".$red.$msg.$t;}$produk=json_decode(produk($coki),true);$code=$produk["code"];$msg=$produk["message"];$data=$produk["data"]["list"];$list=count($data);if($code=="0"){$ids=$data[0]["id"];$name=$data[0]["name"];$total=$data[0]["total"];$stok=$data[0]["current"];echo$putih."[--] ".$name.$t;echo$putih."[--] stok : ".$ijo.$stok.$putih."/".$ijo.$total.$t;sleep(1);}if($stok>1){$id=$data[0]["id"];$no=readline($putih."[--] masukan no hp: +62");echo top($no,$ijo,$red,$uid,$coki,$id);}else{echo$putih."[--] mohon maaf stok vocher kosong".$t;@system("rm -rf user");exit;}}elseif($caping){echo$putih."[--] ini adalah game keberuntungan ".$t;echo"[--] kamu bisa meningkatkan income dengan cepat".$t;echo"[--] tapi ingat kamu juga dapat kehilangan semuanya".$t;echo"[--] berani mengambil resiko ?".$t;$con=readline($turkis."[ tekan y untuk melanjutkan ]=] ");if($con=="y"OR$con=="Y"){sleep(1);}else{system("clear");echo$figlet;@system("rm -rf user");exit;}for($i=0;$i<$akun;$i++){$coki=$config[$i];$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih."[".$i."]	 user ".$turkis.$uid.$putih." [-] money: Rp.".$ijo.$money.$t;}else{echo$putih."[--] ".$red.$msg.$t;}}$x=readline($turkis."[--] pilih akun: ");system("clear");echo$figlet.$t;$coki=$config[$x];$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih."[--] user ".$turkis.$uid.$putih." [-] coin: ".$ijo.$coin.$putih." [-] money: Rp.".$ijo.$money.$t;}else{echo$putih."[--] ".$red.$msg.$t;}$level=["1"=>"pembukaan sesion -Rp.400","2"=>"pembukaan sesion -Rp.2000","3"=>"pembukaan sesion -Rp.3500",];$dev=readline($turkis."[--] masukan device id akun(n): ");if($dev==null){echo$kuning."[--] device id tidak boleh kosong".$t;@system("rm -rf user");exit;}else{foreach($level as $key=>$val){echo$putih."[--] level ".$key." (".$val.")".$t;}}$lv=readline($turkis."[--] pilih level : ");if($lv==null OR$lv>count($level)){echo$kuning."[--] pilih level dengan benar".$t;@system("rm -rf user");exit;}else{echo$putih."[--] kamu memilih level ".$lv.$t;}$m=readline($putih."[--] berapa kali kamu ingin bermain ?".$t.$turkis."[-----] =] ");for($i=0;$i<$m;$i++){$coki=$config[$x];buy($coki,$d,$lv)."
";sleep(1);$open=json_decode(open($coki,$d,$lv),true);$code=$open["code"];$msg=$open["msg"];$claim=$open["data"]["item"];if($code=="0"){echo$putih."[--] ".$kuning.$level[$lv].$t;echo$putih."[--] ".$msg." +Rp.".$ijo.$claim;$login=json_decode(login($coki),true);$code=$login["code"];$uid=$login["data"]["uid"];$coin=$login["data"]["coin"];$msg=$login["message"];$money=$login["data"]["money"];if($msg=="OK"){echo$putih." [--] money: Rp.".$ijo.$money.$t;}}else{echo$t.$putih."[--] ".$kuning."device id tidak sinkron".$t;@system("rm -rf user");exit;}sleep(3);}}
?>