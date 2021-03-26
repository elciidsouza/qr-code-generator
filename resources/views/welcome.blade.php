<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QRCode Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <a href="/">
                    <div class="title m-b-md">
                        QRCode Generator
                    </div>
                </a>

                <div class="m-b-md">
                    <form action="" method="GET">

                        <div class="form__group">
                            <input type="text" class="form__input" name="text" placeholder="Enter your text or URL to generate" required="" autocomplete="off"/>
                            <label for="name" class="form__label">Enter your text or URL to generate</label>
                        </div>

                        <button type="submit" class="gradient-button gradient-button-1">Generate</button>

                    </form>
                </div>

                <div class="m-b-md">
                    {{\QrCode::size(140)->generate($_REQUEST['text'] ?? 'This is one QRCODE!')}}
                </div>

                <div class="links">
                    <a href="https://github.com/elciidsouza">Github</a>
                    <a href="https://www.linkedin.com/in/elciidsouza">Linkedin</a>
                </div>
            </div>
        </div>
    </body>
</html>
