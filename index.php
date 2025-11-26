<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCP Terraform and Ansible Automation Platform: Better Together!</title>
    <link rel="icon" type="image/x-icon" href="./resources/favicon.ico">
    <style>
        @font-face {
            font-family: 'HashiCorp Sans Light';
            src: url('./resources/HashiCorp_Sans_Light.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'HashiCorp Sans';
            src: url('./resources/HashiCorp_Sans_Regular.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html {
            height: 100%;
        }

        body {
            font-family: 'HashiCorp Sans', sans-serif;
            background-color: #1D1E1F;
            height: 100%;
            padding: 10px;
        }

        a {
            color: #EE4B5E !important;
            text-decoration: none;
        }

        a:hover {
            color: #FFFFFF !important;
            text-decoration: none;
        }

        .text-wrapper {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .title {
            font-size: 5em;
            font-weight: 700;
            color: #EE4B5E;
        }

        .subtitle {
            font-size: 30px;
            text-align: center;
            font-weight: 700;
            color: #ffffff;
        }

        .isi {
            font-family: 'HashiCorp Sans Light', sans-serif;
            position: absolute;
            bottom: 0;
            font-size: 18px;
            text-align: center;
            margin: 30px;
            padding: 20px;
            color: white;
        }

        .buttons {
            margin: 30px;
            font-weight: 700;
            border: 2px solid #EE4B5E;
            text-decoration: none;
            padding: 15px;
            text-transform: uppercase;
            color: #EE4B5E;
            border-radius: 26px;
            transition: all 0.2s ease-in-out;
            display: inline-block;

            .buttons:hover {
                background-color: #EE4B5E;
                color: white;
                transition: all 0.2s ease-in-out;
            }
        }
    </style>
</head>
<body>
     <div class="text-wrapper">
        <div class="title" data-content="404">
            <img src="./resources/logo.png" alt="HashiCorp" style="width: 300px;">
        </div>

        <div class="subtitle">
            Deployed using HCP Terraform and Ansible Automation Platform. <br /> <a
                href="https://www.hashicorp.com/en/blog/hashicorp-and-red-hat-better-together/" target="_blank">HashiCorp and RedHat: Better Together!</a>
        </div>
  <?php
    header("Refresh: 1; url=$page");
    $website_config = parse_ini_file("/etc/ansible/facts.d/webserver.fact");
    $fqdn = gethostname();
    $version = $website_config['version'];
    $serial = $website_config['serial'];
    $colors = ["red","green","blue","purple","teal","fuchsia","coral","olive","navy"];
    $color = $colors[ ($version * $serial * 2) % 8 ];
    echo '<div style="color:', $color, ';">';

    echo '<h1>Welcome Dreamteam!!</h1>';

    echo '<h2>Website deployed using Ansible Automation Platform and Hashicorp Terraform Cloud</h2>';

    echo '<h3>Served to you from webserver: <span>', $fqdn, ' (config version: ', $version, ')</span></h3>';

    echo '</div>';
  ?>
        <div class="isi">
            Made with <img src="./resources/heart.png" alt="HashiCorp" style="width: 18px;"> by HashiCorp Value Engineering
        </div>
     </div>
</body>
</html>
