<?php
/**
 * Created by PhpStorm.
 * User: graph
 * Date: 2019/11/19
 * Time: 14:45
 */

namespace yii\feiyu\commands;


use GuzzleHttp\Client;
use yii\console\Controller;
use yii\feiyu\models\Message;

class MessageController extends Controller
{
    public function actionDownload(){
        $client = new Client();
        $time = time();
        $hostInfo = 'https://feiyu.oceanengine.com';
        $start_time = strtotime('2019-01-01');
        $end_time = $time;
        $path = '/crm/v2/openapi/pull-clues/?start_time='.$start_time.'&end_time='.$end_time;
        $response = $client->get($hostInfo.$path,[
            'headers' => [
                'Signature' => base64_encode(hash_hmac('sha256', sprintf('%s %s',$path,$time),'UUdZRks2SEU3MFNX')),
                'Timestamp' => $time,
                'Access-Token' => '036c670feeabe16a8e2dbd026bd6b2f0058ae432',
            ]
        ]);
        $result = \GuzzleHttp\json_decode($response->getBody()->getContents());
        foreach($result['data'] as $item){
            $message = new Message();
            $message->setAttributes([

            ]);
            $message->save();
        }

    }
}