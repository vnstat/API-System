<?PHP
#New Improved API System

if(!isset($_GET['user'])) { $user = crypt(time()); } else{
  $user = escapeshellcmd($_GET['user']); }
  $keyy = escapeshellcmd($_GET['key']);
  $host = escapeshellcmd($_GET['host']);
  $port = escapeshellcmd($_GET['port']);
  $time = escapeshellcmd($_GET['time']);
  $method = escapeshellcmd($_GET['method']);
  $key = "1234";
  if ($keyy == $key) {
    echo "Info Set<br>";
    if($method == "stop"){
      echo exec("perl client.pl {$_GET['user']} stop");
      echo "Stopped";
    } else{
      echo exec("perl client.pl {$_GET['user']} {$_GET['method']} {$_GET['host']} {$_GET['port']} {$_GET['time']}");
      echo "Sent; Ran ''";
    }
  } else {
}
?>
