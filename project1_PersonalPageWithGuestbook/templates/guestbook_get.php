<?php
$messages = $data['messages'];
// var_dump($messages);
?>
<section>
    <h2>Guest Messages</h2>
    <hr>

    <?php if (empty($messages)) : ?>
        <p>No messages yet. Be the first one !</p>
    <?php else : ?>
        <?php foreach ($messages as $message) : ?>
            <h3><?= htmlspecialchars($message['name']) ?></h3>
            <p><?= htmlspecialchars($message['email']) ?></p>
            <p><?= nl2br(htmlspecialchars($message['message'])) ?></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>
</section>