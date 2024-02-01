<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blueprint::macro('auditable', function () {
            $this->string('remark')->nullable();
            $this->unsignedInteger('status')->default(1)->nullable();
            $this->timestamp('deleted_at')->nullable();
            $this->unsignedInteger('deleted_by')->nullable();
            $this->timestamp('created_at')->nullable();
            $this->unsignedInteger('created_by')->nullable();
            $this->timestamp('updated_at')->nullable();
            $this->unsignedInteger('updated_by')->nullable();

            $this->foreign('deleted_by')->references('id')->on('users');
            $this->foreign('created_by')->references('id')->on('users');
            $this->foreign('updated_by')->references('id')->on('users');
        });
    }
}
