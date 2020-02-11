<?php
    $token = 'YOUR_BOT_TOKEN';
    $chat_id = 'CHAT_ID';

    $message = $_POST['message'];
    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&parse_mode=Markdown&text='.$message;

    $response = file_get_contents($url);

    if($response){
      echo 'Message sent successfully';
      echo '<br><a href="index.php">back to main</a>';
    }
    else {
      echo 'Failed to send new message';
      echo '<br><a href="index.php">back to main</a>';
    }

