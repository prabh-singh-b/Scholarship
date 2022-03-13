<?php

    class db{
        
        public function insertdoc($arr){

            $post_var= $arr;

            $url = 'https://scholarship-e205.restdb.io/rest/scholarship';
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','x-apikey: 04876681381b713dec5e951816707f13b7d17'));
            curl_setopt($ch,CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($post_var));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $return_data = curl_exec($ch);
            curl_close($ch);

            print "<pre>";
            print_r($return_data);
            print "</pre>";

        }

      /*  public function select(){
            $url = 'https://scholarship-e205.restdb.io/rest/scholarship';
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','x-apikey: 04876681381b713dec5e951816707f13b7d17'));
            curl_setopt($ch, CURLOPT_RETURNTR5ANSFER, TRUE);
            $return_data = curl_exec($ch);
            curl_close($ch);

            print "<pre>";
            print_r($retuenr_data);
            print "</pre>"
        }*/
    }
  
  if (($open = fopen("abroad.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }

    $obj = new db();

    $i = 1;
    $sql = "";
    for($i = 1; $i < count($array); $i++){

      //  $sql = "{'name':'". $array[$i][0]."', 'deadline': '". $array[$i][1]. "', 'eligible': '". $array[$i][2]. "', 'about': '". array[$i][3]. "', 'link': '". array[$i][4]. "'}";
        $sql = ['name'=>$array[$i][0], 'deadline'=> $array[$i][1], 'eligible'=>$array[$i][2], 'about'=>$array[$i][3], 'link'=>$array[$i][4]];
        $results = $obj->insertdoc($sql);

        print "<pre>";
        print_r($results);
        print "</pre>";

    }

    

  /*  setUrl('https://scholarship-e205.restdb.io/rest/scholarship');
    $request->setMethod(HTTP_METH_POST);

    $request->setHeaders(array(
        'cache-control' => 'no-cache',
        'x-apikey' => '04876681381b713dec5e951816707f13b7d17',
        'content-type' => 'application/json'
      ));
      


    $i = 1;
    $sql = "";
    for($i = 1; $i < count($array); $i++){


        echo $array[1][0];
      //  $sql = "{'name':'". $array[$i][0]."', 'deadline': '". $array[$i][1]. "', 'eligible': '". $array[$i][2]. "', 'about': '". array[$i][3]. "', 'link': '". array[$i][4]. "'}";
        $sql = "{'name':'prabh', 'deadline': '15', 'eligible': 'yes', 'about': 'thissdfasld', 'link': 'abcd'}";
        
        $request->setBody($sql);

        try {
            $response = $request->send();
          
            echo $response->getBody();
          } catch (HttpException $ex) {
            echo $ex;
          }
   
    }*/



?>