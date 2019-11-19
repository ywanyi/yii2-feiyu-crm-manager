<?php
/**
 * Created by PhpStorm.
 * User: graph
 * Date: 2019/11/19
 * Time: 14:41
 */

namespace yii\feiyu\jobs;


use GuzzleHttp\Client;
use yii\queue\JobInterface;
use yii\queue\Queue;

class SendMessageJob implements JobInterface
{
    public $message;

    /**
     * @param Queue $queue which pushed and is handling the job
     * @return void|mixed result of the job execution
     */
    public function execute($queue)
    {
        if ($this->message) {
            $client = new Client();
            $time = time();
            $hostInfo = 'https://feiyu.oceanengine.com';
            $path = 'crm/v2/openapi/clue/callback/';
            $response = $client->post($hostInfo . $path, [
                'headers' => [
                    'Signature' => base64_encode(hash_hmac('sha256', sprintf('%s %s', $path, $time), 'UUdZRks2SEU3MFNX')),
                    'Timestamp' => $time,
                    'Access-Token' => '036c670feeabe16a8e2dbd026bd6b2f0058ae432',
                ],

            ]);
            $result = \GuzzleHttp\json_decode($response->getBody()->getContents());
            if ($result['status'] == 0) {
                echo $result['msg'];
            } else if ($result['status'] == -1) {
                if ($result['msg'] == 'missing params') {

                }
                if ($result['msg'] == 'clue_convert_state error') {

                }
            } else {
                echo $result['msg'];
            }
        }
    }
}