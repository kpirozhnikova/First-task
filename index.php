<html>
  <head>
    <meta charset ="UTF-8"><link rel = "stylesheet" href = "style.css">
    <title>Страны и города</title>
  </head>
  <body div class="background">
      <?php
        $countries = [
          [
            'name' => 'Россия',
            'capital' => 'Москва',
            'population' => 146000000,
            'area' => 17000000,
            'region' => ['Европа', 'Азия'],
            'description' => 'государство в Восточной Европе и Северной Азии. Население — 146 544 710 чел. Территория России, определяемая её Конституцией, составляет 17 125 191 км². Занимает первое место в мире по территории, шестое — по объёму ВВП по ППС и девятое — по численности населения.',
            'topCities' => [
              [
                'name' => 'Москва',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Moscow_State_University_crop.jpg/1920px-Moscow_State_University_crop.jpg'
              ],
              [
                'name' => 'Санкт-Петербург',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Peter_%26_Paul_fortress_in_SPB_03.jpg/1920px-Peter_%26_Paul_fortress_in_SPB_03.jpg'
              ],
              [
                'name' => 'Новосибирск',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/%D0%92%D0%BE%D0%BA%D0%B7%D0%B0%D0%BB_%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B0.jpg'
              ],
              [
                'name' => 'Екатеринбург',
                'photo' => 'http://city-my.ru/ekaterinburg/img/05084002.png'
              ],
              [
        'name' => 'Нижний Новгород',
                'photo' => 'http://www.farfrommoscow.com/wp-content/uploads/2015/02/imya-fajla_909.jpg'
              ],
              [
                'name' => 'Казань',
                'photo' => 'http://polyaris.tomsk.ru/orgs/1/images/news/228/092eb6006f5823c861009e124ea6d270.jpg'
              ]
            ]
          ],
          [
            'name' => 'Канада',
            'capital' => 'Оттава',
            'region' => ['Америка'],
            'description' => 'государство в Северной Америке, занимает второе место в мире по площади. Омывается Атлантическим, Тихим и Северным Ледовитым океанами, граничит с США на юге и на северо-западе, также имеет морские границы с Данией (Гренландия) на северо-востоке и Францией (Сен-Пьер и Микелон) на востоке. Граница Канады и США является самой протяжённой общей границей в мире.',
            'population' => 36000000,
            'area' => 9984000,
            'topCities' => [
              [
                'name' => 'Торонто',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/2/2a/TorontoMCC.jpg'
              ],
              [
                'name' => 'Монреаль',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/%D0%9C%D0%BE%D0%BD%D1%80%D0%B5%D0%B0%D0%BB%D1%8C_%D0%A1%D0%B2.%D0%9A%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B0.jpg'
              ]
            ]
          ],
          [
            'name' => 'Китай',
            'description' => 'государство в Восточной Азии. Крупнейшее по численности населения государство мира (свыше 1,36 млрд, большинство населения — этнические китайцы, самоназвание — хань); занимает третье место в мире по территории, уступая России и Канаде. Является великой державой — кандидатом-сверхдержавой, экономической сверхдержавой, постоянный член Совета безопасности ООН. Одна из ведущих космических держав мира, обладает ядерным оружием и крупнейшей в мире армией по численности военнослужащих.',
            'region' => ['Азия'],
            'capital' => 'Пекин',
            'population' => 1373000000,
            'area' => 9958000,
            'topCities' => [
              [
                'name' => 'Пекин',
                'photo' => 'http://images.spasibovsem.ru/catalog/original/park-bejhaj-kitaj-pekin-otzyvy-1386867456.jpg'
              ]
            ]
          ]
        ];    
      ?>
    <div class="countries-list">
    <?php
      foreach ($countries as $key_country => $country){
        if (isset($country['name'])) {
          echo "<div class='country-name'> Название: ".htmlspecialchars($country['name'])."</div>";
        }
        if (isset($country['capital']))  {
          echo "<div class='country-capital'> Столица: ".htmlspecialchars($country['capital'])."</div>";
        }
        if (isset($country['population'])) {
          echo "<div class='country-population'> Население: ".htmlspecialchars($country['population'])."</div>";
        }
        if (isset($country['region'])) {
          foreach($country['region'] as $key_region => $region){
            $comma = implode(", ", $country['region']);
          }
           echo "<div class='country-region'> Регион: ".htmlspecialchars($comma)."</div>";
        } 
        if (isset($country['description'])) {
          echo "<div class='country-description'> Описание: ".htmlspecialchars($country['description'])."</div>";
        }     
        if (isset($country['topCities'])) {
          foreach($country['topCities'] as $key_topCity => $topCity) {
            if (isset($topCity['name'])) {
              echo "<div class='city-name'> Город: ".htmlspecialchars($topCity['name'])."</div>";}
            if (isset($topCity['photo'])) {
                echo "<div class='city-photo'> <img src='".htmlspecialchars($topCity['photo'])."'></div>";}  
          }
        }
      }            
    ?>
    </div>
    </div>        
  </body>
</html>