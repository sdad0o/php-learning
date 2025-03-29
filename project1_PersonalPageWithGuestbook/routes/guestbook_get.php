<?php
$messages = getMessages(connectDb());
// throw new RuntimeException('Whoops!');
// echo $sdad;
renderView(
    template: 'guestbook_get',
    data: ['messages' => $messages]
);
