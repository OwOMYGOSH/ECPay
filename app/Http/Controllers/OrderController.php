<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Services\UrlService;
use Ecpay\Sdk\Services\CheckMacValueService;
use Ecpay\Sdk\Response\VerifiedArrayResponse;

class OrderController extends Controller
{
    function Order(Request $request)
    {
        require 'E:\xampp\htdocs\ECPay\vendor\autoload.php';

        $factory = new Factory([
            'hashKey' => '5294y06JbISpM5x9',
            'hashIv' => 'v77hoKGq4kWxNNIS',
        ]);
        $autoSubmitFormService = $factory->create('AutoSubmitFormWithCmvService');

        $input = [
            'MerchantID' => '2000132',
            'MerchantTradeNo' => 'Test' . time(),
            'MerchantTradeDate' => date('Y/m/d H:i:s'),
            'PaymentType' => 'aio',
            'TotalAmount' => 100,
            'TradeDesc' => UrlService::ecpayUrlEncode('交易描述範例'),
            'ItemName' => '範例商品一批 100 TWD x 1',
            'ChoosePayment' => 'Credit',
            'EncryptType' => 1,

            // 請參考 example/Payment/GetCheckoutResponse.php 範例開發
            'ReturnURL' => 'https://8e38-114-33-38-102.ngrok-free.app/success',
            'ClientBackURL' => 'https://8e38-114-33-38-102.ngrok-free.app/callback',
            // 'OrderResultURL' => 'https://8e38-114-33-38-102.ngrok-free.app/success',
        ];

        // 綠界測試用網址
        $action = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5';
        // 綠界正式用網址
        // $action = 'https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5';
        echo $autoSubmitFormService->generate($input, $action);
    }

    function callback(Request $request)
    {
        dd($request->all());
    }
}
