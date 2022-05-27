<?php
  $city= [
    'name' => 'Frankfurt',
    'country' => 'Germany',
    'population' => 785000,
    'latitude' => 50.110924,
    'longitude' => 8.682127,
  ];

  //array_keys
  $keys = array_keys($city);
  echo $keys;

  //array_values
  $values = array_values($city);
  echo $values;

  //in_array -> retorna true ou false
  $in = in_array('Berlin',$city);
  echo $in;
  
  //array_keys_exists -> retorna true ou false comparando key
  $exists = array_key_exists('longitude',$city);
  echo $exists;

  //array_search -> retorna a key?
  $search = array_search('Germany', $city);
  echo $search;

  //array_count_values -> quantas instancias de um valor tem no array
  $numbers = [1,1,2,2,3,3,4,4,5]
  $valueCount = array_count_values($numbers);
  echo $valueCount;

  //array_unique -> verifica os valores mas não mostra dupluivacads
  $unique = array_unique($numbers);
  echo $unique;

  //array_column -> retorna os vcalores da key indicada
  //funciona para objetos 
  #(https://youtu.be/smzYBLTj3rg?t=325)
  $cities = [
    [
      'name' => 'Frankfurt',
      'country' => 'Germany',
      'population' => 785000,
      'latitude' => 50.110924,
      'longitude' => 8.682127,
    ],
    [
      'name' => 'Mumbai',
      'country' => 'India',
      'population' => 12785000,
      'latitude' => 10.110924,
      'longitude' => -28.682127,
    ],
  ];
  $column = array_column($cities, 'column');
  echo $country;





  //array_unshift adiciona no começo do arr
  array_unshift($column, 200, 30000 );

  //array_pop remove do fim do array
  $poppedItem = array_pop($column);
  echo $poppedItem;

  //array_shift coloca item no começo
  $shiftedItem = array_shift($column);

  //array_pus coloca item no fim
  array_pus($column, 123,13);

  //array_diff compara itens entre dois arrays
  $arrOne = [1,2,3,4];
  $arrTwo = [1,2,3,4,5];
  $diff = array_diff($arrTwo, $arrOne);

  //array_intersect intersecção de array
  $intersec = array_intersect($arrOne, $arrTwo);

  //array_slice um pedaço do array
  $slice = array_slice($arrTwo, 2, 2);
  
  //array_range preenche um array com valores sequenciais dentro do range
  $arrThree = range(0, 23)

  //array_map
  $squared = array_map(function($item){
    return $item ** 2
  }, $arrTwo);

  //array_filter filra
  $squaredFiltered = array_filter($squared, function($item){
    return $item > 8
  });

  //array_combine cria multidimensional
  $keys = ['name', 'country', 'population', 'latitude', 'longitude'];
  $citiesArray = [
    ['Frankfurt', 'Germany', 785000, 50.1123, 8.6523],
    ['Mumbai', 'India', 2092934, 19.1123, 72.6523],
  ];

  foreach ($citiesArray as $city){
    $keyValueCities = array_combine($keys, $city);
  };

  //array_merge mergeia um
  $mergeCities = array_merge($citiesArray, [
    ['Valencia', 'Spain', 834500, 54.3534154, 32.32123]
  ]);

  //array_replace
  #https://youtu.be/smzYBLTj3rg?t=852 pro fim

  
?>