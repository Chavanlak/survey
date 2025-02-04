<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    body{
        background-color: #000080;
    }
</style>

<body>
    <div>


        <div style="color: aliceblue">
            <h1>Satisfaction Survey</h1>
        </div>
        <div class="btn-group">
            {{-- <p>กรุณาเลือกสาขาที่คุณใช้บริการในครั้งนี้</p> --}}

            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                data-bs-display="static" aria-expanded="false">
                กรุณาเลือกสาขาที่คุณใช้บริการในครั้งนี้
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><button class="dropdown-item" type="button">สาขา1</button></li>
                <li><button class="dropdown-item" type="button">สาขา2</button></li>
                <li><button class="dropdown-item" type="button">สาขา3</button></li>
            </ul>

        </div>
        <div style="color: aliceblue">
            <p>คุณภาพอาหาร(Food Quality)</p>
        </div>
        <div style="color: aliceblue">
            <p>รสชาติอาหาร(Taste)</p>
        </div>
        <div style="color: aliceblue">
            <p>ความรวดเร็วในการให้บริการ(Speed of Service)</p>
        </div>
    </div>

</body>

</html>
