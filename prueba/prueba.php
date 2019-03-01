define ('url',"https://api.telegram.org/botturradorbot);

$update = json_decode(file_get_contents('php://input') ,true);

$chat_id = $update['message']['chat']['id'];

$name = $update['message']['from']['first_name'];

$message = 'Hola '.$name;

file_get_contents(url."sendmessage?text=".$received_message."&chat_id=".$chat_id.");
