<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12小時內天氣預報</title>
    <link rel="stylesheet" href=" {{ asset('css/weather.css') }} ">

</head>

<body>
    <nav>
        <div class="btn radius" onclick="filter1('all')">全臺</div>
        <div class="btn radius" onclick="filter1(north)">北部地區</div>
        <div class="btn radius" onclick="filter1(center)">中部地區</div>
        <div class="btn radius" onclick="filter1(south)">南部地區</div>
        <div class="btn radius" onclick="filter1(east)">東部地區</div>
        <div class="btn radius" onclick="filter1(island)">離島地區</div>
    </nav>
    <main>
        <div class="container">

            <!-- <div class="card radius">
                <img src="./img/rain.gif" alt="" class="radius">
                <h2>台北市</h2>
                <p>溫度: 39~40℃</p>
                <p>降雨機率: 60%</p>
                <p>舒適度: 熱爆</p>
            </div>
            <div class="card radius">
                <img src="./img/sun.gif" alt="" class="radius">
                <h2>高雄市</h2>
                <p>溫度: 39~40℃</p>
                <p>降雨機率: 20%</p>
                <p>舒適度: 熱爆 </p>
            </div>  -->
        </div>
    </main>
    <footer>
        此網站為教育用 This webside is for education only <br>
        勞動部中彰投分屬-前端UI與JS框架(Vue)工程師培訓班
    </footer>

    <script>
        const container = document.querySelector('.container')
        const btn = document.querySelectorAll('.btn')
        const north = ['臺北市', '新北市', '基隆市', '新竹市', '桃園市', '新竹縣', '宜蘭縣']
        const center = ['苗栗縣', '臺中市', '彰化縣', '南投縣', '雲林縣']
        const south = ['嘉義市', '嘉義縣', '臺南市', '高雄市', '屏東縣', '澎湖縣']
        const east = ['花蓮縣', '臺東縣']
        const island = ['金門縣', '連江縣']

        var locations

        function render(citydata) {
            let location = citydata.locationName
            let minTemp = citydata.weatherElement[2].time[0].parameter.parameterName
            let maxTemp = citydata.weatherElement[4].time[0].parameter.parameterName
            let rain = citydata.weatherElement[1].time[0].parameter.parameterName
            let feel = citydata.weatherElement[3].time[0].parameter.parameterName
            // 如果降雨機率小於25% 就是晴天, 如果小於等於50% 陰天, 如果大於50% 就是下雨天
            let imgPath
            if (rain < 25) {
                imgPath = './img/sun.gif'
            } else if (rain <= 50) {
                imgPath = './img/cloud.gif'
            } else {
                imgPath = './img/rain.gif'
            }
            container.innerHTML += `
            <div class="card radius" data-city="${location}">
                <img src="${imgPath}" alt="" class="radius">
                <h2>${location}</h2>
                <p>溫度: ${minTemp}℃ ~ ${maxTemp}℃</p>
                <p>降雨機率: ${rain}%</p>
                <p>舒適度: ${feel}</p>
            </div>
            `
        }

        fetch('https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-AA300EC1-31BA-465E-B669-6CA2C320A195')
            .then(function (response) {
                // console.log(response)
                return response.json();
            })
            .then(function (weather) {
                locations = weather.records.location
                locations.forEach(element => {
                    render(element)
                });
            });


        // 我把所有縣市印出來, 然後把不想看到的加上display:none  ->

        function filter1(areas) {
            var allcity = document.querySelectorAll('.card.radius')

            //將所有城市一筆一筆叫出來
            allcity.forEach(city => {
                //如果條件是all(全部), 就直接給block
                if (areas == 'all') {
                    city.style.display = 'block'
                } else {
                    //先假設所有城市都不顯示
                    city.style.display = 'none'
                    areas.forEach(area => {
                        //將條件拿出來比較, 如果條件中的任何一個縣市有符合就加上block顯示出來
                        if (city.dataset.city == area) {
                            city.style.display = 'block'
                        }
                    })
                }
            });
        }

        // 根據按下的按鈕選定條件, 只將符合條件的縣市做出卡片
        function filter2(areas) {
            //清空上次的搜尋結果
            container.innerHTML = ''

            // 必須要取得 原始的資料  跟 條件做比較
            locations.forEach(citydata => {
                if (areas == 'all') {
                    render(citydata)
                } else {
                    areas.forEach(target => {
                        if (citydata.locationName == target) {
                            render(citydata)
                        }
                    })
                }
            })
        }


    </script>
</body>

</html>
