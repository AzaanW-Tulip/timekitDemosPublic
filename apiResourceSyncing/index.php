<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbers</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
    <?php
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.timekit.io/v2/resources');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, ":YOUR API KEY");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        ));
    
        $output = curl_exec($ch);
    
        if ($output === FALSE) {
            echo "cURL Error: " . curl_error($ch);
        } else {
            $output_json = json_decode($output, true);
            foreach ($output_json['data'] as $resource) {
                if (strcmp(substr($resource['email'],0,9),"resource+")!=0) {
                    echo "<div class='barber'>".
                        "<div class='barberText'>".
                            "<h1 class='barberName'>".$resource['name']."</h1>".
                            "<button class='barberButton'><a href='https://book.timekit.io/".$resource['last_name']."-companyname'>Book with ".$resource['first_name']."</a></button>".
                        "</div>".
                        "<image src=".$resource['image'].">".
                        "</div>";
                }
            }
        }

        curl_close();
    ?>
</body>
</html>