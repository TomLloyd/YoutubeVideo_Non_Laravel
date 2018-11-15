

<!doctype html>
<html>
<head>
    <title>YouTube Search</title>


    <style>

        body {
            font-family: Arial;
            width: 900px;
            padding: 10px;
        }
        .search-form-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;
        }
        .input-row {
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            border-radius: 2px;
            padding: 10px;
            border: #e0dfdf 1px solid;
        }
        .btn-submit {
            padding: 10px 20px;
            background: #333;
            border: #1d1d1d 1px solid;
            color: #f0f0f0;
            font-size: 0.9em;
            width: 100px;
            border-radius: 2px;
            cursor:pointer;
        }
        .videos-data-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;
        }

        .response {
            padding: 10px;
            margin-top: 10px;
            border-radius: 2px;
        }

        .error {
            background: #fdcdcd;
            border: #ecc0c1 1px solid;
        }

        .success {
            background: #c5f3c3;
            border: #bbe6ba 1px solid;
        }
        .result-heading {
            margin: 20px 0px;
            padding: 20px 10px 5px 0px;
            border-bottom: #e0dfdf 1px solid;
        }
        iframe {
            border: 0px;
        }
        .video-tile {
            display: inline-block;
            margin: 10px 10px 20px 10px;
        }

        .videoDiv {
            width: 250px;
            height: 150px;
            display: inline-block;
        }
        .videoTitle {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .videoDesc {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        .videoInfo {
            width: 250px;
        }
    </style>

</head>

<?php

$params = $_GET;

for ($i = 0; $i < $params['number']; $i++) {
    $videoId = $params['value']['items'][$i]['id']['videoId'];
    $title = $params['value'] ['items'][$i]['snippet']['title'];
    $description = $params['value']['items'][$i]['snippet']['description'];

?>

<div class="video-tile">
    <div  class="videoDiv">
        <iframe id="iframe" style="width:100%;height:100%" src="//www.youtube.com/embed/<?php echo $videoId; ?>"
                data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe>
    </div>
    <div class="videoInfo">
        <div class="videoTitle"><b><?php echo $title; ?></b></div>
        <div class="videoDesc"><?php echo $description; ?></div>
    </div>
</div>
<?php
}
?>

<body>

</body>
</html>