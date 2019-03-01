define ('url',"https://api.telegram.org/bot<your_bot_code/");

$update = json_decode(file_get_contents('php://input') ,true);

$chat_id = $update['message']['chat']['id'];

$name = $update['message']['from']['first_name'];

$message = 'Hi '.$name;

file_get_contents(url."sendmessage?text=".$received_message."&chat_id=".$chat_id.");
