<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Alert</title>
    <style>
    .button-group-alert {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }

    .button-group-alert button {
        padding: 10px 20px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        margin: 10px;
    }

    .button-group-alert button:hover {
        cursor: pointer;
        box-shadow: 0 0 10px 0 #ccc;
    }

    .dialog-container-alert {
        position: absolute;
        left: 50%;
        top: -30%;
        transform: translateX(-50%) translateY(-50%);
        width: 400px;
        background: #fff;
        padding: 10px;
        border: 2px solid #ddd;
        box-shadow: 1px 1px 5px 1px #ccc;
        border-radius: 10px;
        opacity: 0;
        transition: all 0.3s linear 0s;
    }

    .dialog-header-alert {
        padding: 10px;
        font-weight: bold;
        background: #575757;
        color: #f6f7f8;
    }

    .dialog-body-alert {
        padding: 10px;
        line-height: 30px;
    }

    .dialog-footer-alert {
        text-align: center;
        background: #f5f5f2;
        padding: 3px 0;
    }

    .dialog-footer-alert a {
        display: inline-block;
        width: 100px;
        padding: 5px 0;
        border: 1px solid #ccc;
        border-radius: 10px;
        background: #eee;
        cursor: pointer;
    }

    .dialog-footer-alert a:active {
        box-shadow: inset 2px 2px 4px 0 #ccc;
        color: #666;
    }
    </style>
</head>

<body>

    <div class="button-group-alert">
        <button onclick="alert('This is our alert dialog. Press \'Ok\' to close this.')">Default Button</button>
        <button onclick="CustomAlert.show('Alert','This is our alert dialog. Press \'Ok\' to close this.')">Custom
            Button</button>
    </div>
    <div id="dialog-container-alert" class="dialog-container-alert">
        <div id="dialog-header-alert" class="dialog-header-alert">Custom Alert Dialog</div>
        <div id="dialog-body-alert" class="dialog-body-alert">This is the custom alert message. Click Ok to close this.
        </div>
        <div class="dialog-footer-alert">
            <a onclick="CustomAlert.close()">Ok</a>
        </div>
    </div>


    <script>
    const container = document.getElementById('dialog-container-alert');
    const CustomAlert = new function(title, msg) {
        this.show = function(title, msg) {
            let content = document.getElementById('dialog-body-alert');
            let content2 = document.getElementById('dialog-header-alert');
            container.style.top = '30%';
            container.style.opacity = 1;
            content2.textContent = title;
            content.textContent = msg;
        }

        this.close = function() {
            container.style.top = '-30%';
            container.style.opacity = 0;
        }
    }
    </script>
</body>

</html>