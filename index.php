<html>
<head>
    <script src="jquery-3.6.0.js"></script>
    <script>
        function get_detail() {
            var size = $('#file_upload')[0].files[0].size;
            var extension = $('#file_upload').val().replace(/^.*\./, '');

            $("#file_detail").html("File Size : " + size + " <br>Extension : " + extension + "");
        }
    </script>
    <style>
        body {
            text-align: center;
            width: 100%;
            margin-top: 25%;
            padding: 0px;
            background-color: #ffff;
        }

        #wrapper {
            text-align: center;
            margin: 0 auto;
            padding: 0px;
            width: 995px;
        }

        #file_detail {
            color: #086A87;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <input type="file" id="file_upload" name='file' onchange="get_detail();" ;>
        <p id="file_detail"></p>

    </div>
</body>

</html>