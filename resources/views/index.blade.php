<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thesisku</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
</head>

<body>
    @component('components.navbar')
    @endcomponent

    <div class="accordion horizontal">
        <ul>
            <li>
                <input type="radio" id="vert-1" name="vert-accordion" checked="checked" />
                <label for="vert-1"> EOQ </label>
                <div class="content">
                    <div class="col-md-7">
                        <img src="../gambar/big_thumb.jpg" />

                    </div>
                </div>
            </li>
            <li>
                <input type="radio" id="vert-2" name="vert-accordion" />
                <label for="vert-2">Buffer&nbsp; Stock</label>
                <div class="content">
                    <div class="col-md-8">
                        <img src="../gambar/Demand.gif" />
                    </div>


                </div>
            </li>
            <li>
                <input type="radio" id="vert-3" name="vert-accordion" />
                <label for="vert-3">ReOrder&nbsp; Point</label>
                <div class="content">
                    <div class="col-md-6">
                        <img src="../gambar/16fig11.jpg" />
                    </div>

                </div>
            </li>
        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
