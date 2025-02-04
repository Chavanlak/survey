<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Feedback Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            padding: 30px;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
            box-sizing: border-box;
            resize: none;
        }

        textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .emoji {
            font-size: 3rem;
            cursor: pointer;
            transition: transform 0.2s;
            margin: 0 10px;
        }

        .emoji:hover {
            /* transform: scale(1.2) rotate(5deg); */
            transform: scale(1.2) ;
        }

        .selected {
            transform: scale(1.5);
        }

        button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Food Feedback Survey</h2>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="/survey" method="POST">
        @csrf
        <textarea name="feedback" placeholder="Your feedback" required></textarea>
        <br>
        <div class="emoji" data-value="1">😡
           
            {{-- <span class="emoji" data-value="1">😡</span>
            <span class="emoji" data-value="2">😞</span>
            <span class="emoji" data-value="3">😐</span>
            <span class="emoji" data-value="4">😊</span>
            <span class="emoji" data-value="5">😍</span> --}}
        </div>
        <div class="emoji" data-value="2">😞</div>
        <div class="emoji" data-value="3">😐</div>
        <div class="emoji" data-value="4">😊</div>
        <div class="emoji" data-value="5">😍</div>
        <input type="hidden" name="rating" id="rating" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <script>
        document.querySelectorAll('.emoji').forEach(emoji => {
            emoji.addEventListener('click', function() {
                document.querySelectorAll('.emoji').forEach(e => e.classList.remove('selected'));
                this.classList.add('selected');
                document.getElementById('rating').value = this.dataset.value;
            });
        });
    </script>
</body>
</html>
