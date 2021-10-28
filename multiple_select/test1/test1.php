<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <select class="select_tag1" style="width:300px" multiple name="select_tag1[]">
        <option value="WY1">Wyoming1</option>
        <option value="WY2">Wyoming2</option>
        <option value="WY3">Wyoming3</option>
        <option value="WY4">Wyoming4</option>
        <option value="WY5">Wyoming5</option>
        <option value="WY6">Wyoming6</option>
    </select>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
    $(document).ready(function() {
        $('.select_tag1').select2({
            placeholder: "Select"
        });
    });
    </script>

</body>

</html>