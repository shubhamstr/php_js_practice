<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- JS & CSS library of MultiSelect plugin -->
    <link rel="stylesheet" href="./multi-select.css">
</head>

<body>

    <h2>jQuery MultiSelect Basic Uses</h2>
    <select name="langOpt[]" multiple id="langOpt">
        <option value="C++"> C++</option>
        <option value="C#">C#</option>
        <option value="Java">Java</option>
        <option value="Objective-C">Objective-C</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Perl">Perl</option>
        <option value="PHP">PHP</option>
        <option value="Ruby on Rails">Ruby on Rails</option>
        <option value="Android">Android</option>
        <option value="iOS">iOS</option>
        <option value="HTML">HTML</option>
        <option value="XML">XML</option>
    </select>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="./jquery.multi-select.js"></script>

    <script>
    $('#langOpt').multiselect({
        columns: 1,
        placeholder: 'Select Languages',
        search: true,
        selectAll: true
    });
    </script>
</body>

</html>