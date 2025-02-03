<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* .emoji {
  padding: 50px;
  background-color: green;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            padding: 30px;
        } */
        .emoji {
            font-size: 3rem;
            cursor: pointer;
            transition: transform .2s;
            margin: 0 auto;
        }

        .emoji:hover {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.5);
        }
    </style>
</head>

<body>

    <h1>Zoom on Hover</h1>
    <p>Hover over the div element.</p>

    {{-- <div class="zoom"></div> --}}
    {{-- <span class="emoji" >😡</span> --}}
    <div class="emoji">😡</div>
</body>

</html>
