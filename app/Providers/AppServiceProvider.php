<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function ($app){
            if(request()->has('credit'))
            {
                return new CreditPaymentGateway('myr');
            }
            elseif (request()->has('m2upay')) 
            {
                return new M2UPay('myr');
            }
            else
                return new BankPaymentGateway('myr');
            
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
