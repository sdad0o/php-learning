<section>
    <h2>Leave a Public Note/Qustion</h2>
    <form method="POST">
        <!-- CSRF -->
        <input type="hidden" name="csrfToken" value="<?= $data['csrf_token'] ?>" />

        <label>Name</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">

        <label>Message</label>
        <textarea rows="4" name="message"></textarea>

        <button type="submit">Send message !</button>
    </form>
</section>