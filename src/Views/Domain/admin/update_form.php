<html>
    <body>
        <form method="POST" action="/domains/<?php echo $data['domain']->id() ?>">
            <input value="<?php echo $data['domain']->name() ?>" type="text" name="name">
            <input value="<?php echo $data['domain']->code() ?>" type="text" name="code">
            <input type="submit">
        </form>
    </body>
</html>