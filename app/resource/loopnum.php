<?php// liner array/Single array$listnum2 = array("name1 ", "name2 ", "");$length = count($listnum2);    for ($j = 0; $j<= $length-1; $j++){        echo $listnum2[$j]."\n";    }// search array using loop$listnum = array("name 1", "name2 ","name3 ");    for($i = 0; $i <= count($listnum) -1; $i++){        echo $listnum[$i];        if($listnum[$i] =="name3 "){            echo " Yes I found ".$listnum[$i]."\n";            continue;        }        else        echo " match not found \n ";    }function myFunction(){    if (7>2){        echo 5+2 ."\n";    }    else    echo 50+2 ."\n";}myFunction();myFunction();function familyName($fname) {    echo $fname ."Refsnes.\n";}familyName("Jani");familyName("Hege");familyName("Stale");familyName("Kai Jim");familyName("Borge");//indexed array$cars = ["bmv","wagen","toyota",];$lenthCar = count($cars);for ($b = 0; $b<=$lenthCar -1 ; $b++){    echo $cars[$b]."\n";}//Associative array$bestCarss = array(    'US'=>'Hammer',    'Sweden'=>'Volvo',    'GERMAN'=>'BMV');$val = array_values($bestCarss);$key = array_keys($bestCarss);//foreach($bestCarss as $key => $val){//echo "Country: ". $key." Car name: ".$val."\n";//echo "\n";//}for($tempcars = 0; $tempcars < count($val) ; $tempcars++){  for($tempcars2 = 0; $tempcars2 < count($key) ;$tempcars2++){       echo "the car key: ".$key[$tempcars2]." Value :".$bestCarss[$key[$tempcars2]];                echo "\n";   }   echo "search not found\n";   break;}// printing the Multidimensional  array$CarManufacturers = array(    'US'=> array(        'US-No1' =>   array(            'US-model-101'=> array(                '0' => array(                   'CarName' => 'HammerV',                    'Model' => 'Hammer2015-001',                    'Power' => '10 Celinder'                ),                '1' => array(                    'CarName' => 'HammerX',                    'Model' => 'Hammer2015-002',                    'Power' => '10 Celinder'                )            ),            'US-model-202'=> array(                '0' => array(                    'CarName' => 'Geep',                    'Model' => 'Geep2011-002',                    'Power' => '18 Celinder'                )            )        ),        'US-No2' => array(            'US-model-101'=> array(                 '0' => array(                    'CarName' => 'Chevrolet',                     'Model' => 'Chevrolet-01',                     'Power' => '10 CC'              )            )        ),    ),    'SW'=> array(        'SW-No1' => array(            'SW-Model2-01'=> array(                '0' => array(                    'CarName' => 'Volvo',                    'Model' => 'Volvo-01',                    'Power' => '11 CC'                        )                    )        ),        'SW-No2' =>  array(            'SW-Model3-01'=>array(                '0' => array(                    'CarName'=> 'VolvoTrack',                    'CarModel' => 'Vo-001',                    'Power' => '10CC'                         )                     )        ),        'SW-No3' =>  array(            'SW-Model3-01'=>array(                '0' => array(                    'CarName'=> 'VolvoTrack',                    'CarModel' => 'Vo-001',                    'Power' => '10CC'                )            )        )    ),    'DE'=> array(        'DE-No1' => array(               'DE-Model3-01'=> array(                   '0' => array(                       'CarName'=>'BMW',                      'CarModel'=> 'BMW-200',                       'Power'=> '5CC'                   )               )        ),    ));$carManufArrayKey = array_keys($CarManufacturers);$carsManufArrayVal = array_values($CarManufacturers);$CountryName = $carManufArrayKey;$CarsModelsNames = $carsManufArrayVal;$countArraykey = count($CarManufacturers);$countArrayVal = count($CarManufacturers);$carsModeleKey = array_keys($CarsModelsNames);$CarsListValue = array_values($CarsModelsNames);$CarsList = $CarsListValue;$carsModel = $carsModeleKey;$mpdelValuKey= array_keys($carsModel);$mpdelValuValue = array_values($carsModel);//$modelListkey = $mpdelValuKey;$modelListValue = $mpdelValuValue;//$CellValTbl = array_values($modelListkey);$CellAttrib = array_keys($modelListkey);//$CellsAttrib= $CellAttrib;$cellValuesTbl =$CellValTbl;//$listCarsInDetail = array_values($cellValuesTbl);$listKeyCarsInDetail =array_keys($cellValuesTbl);//$listCarsInDetDec =$listCarsInDetail;$listKeyCarsInDetailDec = $listKeyCarsInDetail;foreach($CarManufacturers as $carManufArrayKey => $CountryName){    foreach ( $CarsModelsNames as $carsModeleKey =>$carsModel){      foreach($carsModel as $mpdelValuKey=>$modelListkey ){            foreach ($modelListkey as $CellAttrib => $CellValTbl){                foreach ($CellValTbl as $listKeyCarsInDetail=>$cellValuesTbl){                    foreach ($cellValuesTbl as$listKeyCarsInDetailDec =>$listCarsInDetDec ){                        echo $listKeyCarsInDetailDec. ":".mb_strtolower($listCarsInDetDec).","."\n";                    }                   echo "\n";               }            }         echo $CellAttrib."\n";       }}break;}