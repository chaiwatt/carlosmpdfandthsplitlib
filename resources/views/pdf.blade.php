<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        .myfixed {
            position: absolute;
            overflow: visible;
            line-height: 30px;
            top:20;
            left: 0;
            right: 0;
            width: 200mm;   /* you must specify a width */
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
</head>
<body>
    <div class="myfixed">
        {!!$body!!}
    </div>
</body>
</html>
