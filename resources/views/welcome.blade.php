<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            var map;
var marker;
var infoWindow;
var center = {
   lat: 34.7019399, // 緯度
  lng: 135.51002519999997 // 経度
};
function initMap() {
 map = new google.maps.Map(document.getElementById('map'), { // #sampleに地図を埋め込む
     center: center, // 地図の中心を指定
     zoom: 19 // 地図のズームを指定
   });
 
 marker = new google.maps.Marker({ // マーカーの追加
        position: center, // マーカーを立てる位置を指定
      map: map // マーカーを立てる地図を指定
   });
 
 infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
        content: '<div class="sample">TAM 大阪</div>' // 吹き出しに表示する内容
  });
 marker.addListener('click', function() { // マーカーをクリックしたとき
     infoWindow.open(map, marker); // 吹き出しの表示
    });
}
        </script>
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="map" style="height:500px"> 
	    </div>
	     <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPs0gCLxO7_IeDfIYLwY3fidPg4tk38pc&callback=initMap&v=weekly"
          async
         ></script>
    </body>
</html>
