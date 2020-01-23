<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Natuna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="language" content="id" />
    <meta http-equiv="pragma" content="no cache">
    <meta name="author" content="Tempo.co">
    <meta name="keywords" content="lobster">
    <meta name="copyright" content="">
    <meta name="coverage" content="WorldWide">
    <meta name="creation date" content="2020-01-01">
    <meta name="rating" content="General">
    <meta name="robots" content="follow">
    <meta prperty="og:title" content="Data Wilayah Perairan Natuna"/>
    <meta property="og:description" content="Batas wilayah yang direbutkan di Natuna" />
    <meta property="og:image" content="https://interaktif.tempo.co/frontend/interaktif/images/T.png">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Data Wilayah Perairan Natuna" />
    <meta name="twitter:description" content="Batas wilayah yang direbutkan di Natuna" />
    <meta name="twitter:image:src" content="https://interaktif.tempo.co/frontend/interaktif/images/T.png">
    <meta name="twitter:image:width" content="650" />
    <meta name="twitter:image:height" content="433" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
        body {margin:0;font-family: 'Montserrat', sans-serif;overflow:hidden;background:#FFF}
        .Natuna{display:none}
        .filter-btn {position:fixed;top:10pt;left:10pt;display:flex}
        .filter-btn span {width: 40%;padding: 2px 2px;font-weight: 400;text-align: center;background-color: #999;color: #fff;float: left;}
        .filter-btn select {width: 60%;text-align: center;float: right;border-radius: 0;height: 100%;padding: 2px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;}
    </style>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://d3js.org/queue.v1.min.js"></script>
    <script src="https://d3js.org/topojson.v1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-23817453-1', 'auto', {'allowAnchor': true});
    ga('set', {
        page: '/'
    });

    ga('send', 'pageview', {
        hitType: 'pageview',
        page: location.pathname + location.search + location.hash
    });

</script>

<script type="text/javascript">
_atrk_opts = { atrk_acct:"yIXbf1a0Ix00UK", domain:"tempo.co",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
</head>
<body>
    <div class="content">
    <div class="filter-btn">
        <span>Negara</span>
        <select id="country" class="country" onchange="change(this)">
            <option>Pilih Negara</option>
            <option value="Brunei-Darusallam">Brunei Darusallam</option>
            <option value="China">China</option>
            <option value="Filipina">Filipina</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Semua">Semua</option>
        </select>      
    </div>
        <div id="geo-map-container"></div>
    </div>
<script src="js/map.js"></script>
</body>
</html>