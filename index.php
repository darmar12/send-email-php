<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="smtp.php" class="form">
            <div class="form__option">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            
            <div class="form__option">
                <label for="email">Subject:</label>
                <input type="text" name="subject" id="subject" required>
            </div>

            <div class="form__option">
                <label for="email">Message:</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>

            <button type="submit" id="send" name="send" class="form__btn">Send email</button>
        </form>
    </div>
</body>
</html>