<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="motsniy.yar@gmail.com";  // e-mail админа 
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="http://site.ru/index.html";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$name=$_POST['name_first']; 
 
$email=$_POST['phone']; 
 
$msg=$_POST['message']; 
 
  
 

 
$msg=" 
 
 
<p>Имя: $name_first</p> 
 
 
<p>E-mail: $phone</p> 
 
 
<p>Сообщение: $msg</p> 
 
 
"; 
 
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Сообщение 
от $name_first", "$msg"); 

 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 200); 
//--></script> 
 
$msg 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
exit; 
 

 
?>
