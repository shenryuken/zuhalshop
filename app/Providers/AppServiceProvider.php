<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\PaymentGatewayContract;
use App\Billing\ToyyibPaymentGateway;
use App\Billing\PaypalPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function($app) {
            if(request()->payment_method === 'toyyibpay')
            {
                return new ToyyibPaymentGateway('myr');
                //return new PaypalPaymentGateway('usd');
            }

            return new PaypalPaymentGateway('myr');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
