<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing...</title>
</head>
<body>
    <h1>Processing...</h1>
    <script>
        const req = new XMLHttpRequest()
        req.open('POST', "<?= $_POST['webhookUrl']; ?>");
        req.addEventListener('load', () => {
            window.location.replace("/");
        });
        req.send({
            @type: 'MessageCard',
            @context: 'https://schema.org/extensions',
            text: "<?= $_POST['text'] ?>",
            summary: "<?= $_POST['summary'] ?>",
            title: "<?= $_POST['title'] ?>"
        });
    </script>
</body>
</html>