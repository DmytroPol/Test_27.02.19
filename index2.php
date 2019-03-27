<?php
/**
 * data comes to the server after the request
 * the script is processing it
 * doTable //for create table and return code
 * echo //response
 *
 * ==================================================
 */
function d($var)
{
    echo "<pre>";
    print_r($var);
    die;
}
/*
 * @param array $columnName //table column name
 * @param array $dataArray //data for columns
 * @return string
 */
function doTable(array $columnName,array $dataArray)
{
    $table="<table class='table table-hover table_response' border='2'><thead><tr>";
    // header for the result table
    foreach ($columnName as $th)
      {
          $table.="<th>{$th}</th>";
      }
      $table.="</tr></thead><tbody>";
    // body of the table
    foreach ($dataArray as $items )
    {
        $table.="<tr>";
        foreach ($items as $item)
        {
            $table.="<td>{$item}</td>";
        }
        $table.="</tr>";
    }
    return $table.=" </tbody></table>";
}
// connect the database
$db=new mysqli('localhost','root','','yii2basic');
$db->set_charset('utf8');
// query and $ result variable for response
$request=$_POST['type'];
$result='';

switch ($request)
{
    case 1:
        $products=$db->query("SELECT * FROM `offers`")->fetch_all(MYSQLI_ASSOC);
        $result=doTable(['ID товара','Имя товара'],$products);
        break;
    case 2:
        $orderId=$_POST['order'];
        $order=$db->query('SELECT requests.id, offers.name
        FROM requests
        LEFT JOIN offers
        ON requests.offer_id=offers.id
        WHERE requests.id='.$orderId)->fetch_all(MYSQLI_ASSOC);
        $result=(!is_null($order) && !empty($order))?doTable(['№','Название товара'],$order):"<h1>Заказ №{$orderId} не найден </h1>";
        break;
    case 3:
        $orderList=$db->query("SELECT requests.id, offers.name,requests.price,requests.count,operators.fio
        FROM requests
        LEFT JOIN offers
        ON requests.offer_id=offers.id
        LEFT JOIN operators
        ON requests.operator_id=operators.id
        WHERE requests.count>2 AND (requests.operator_id=10 OR requests.operator_id=12);")->fetch_all(MYSQLI_ASSOC);
        $result=doTable(['№ order','Name of product','The price of the product','Cost of goods','Surname of the manager'],$orderList);
        break;
    case 4:
        $itemOffers=$db->query("
        SELECT  offers.name AS product, SUM(requests.price*requests.count) AS 'the total amount of goods'
        FROM requests
        LEFT JOIN offers
        ON requests.offer_id=offers.id
        GROUP BY offers.name;")->fetch_all(MYSQLI_ASSOC);
        $result=doTable(['Name of product','The total amount of goods'],$itemOffers);
}
echo $result;
