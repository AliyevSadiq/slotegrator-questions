<?php
namespace App\Providers;

use App\Contract\TicketRepositoryInterface;
use App\Repositories\Ticket\ApiTicketRepositoryRepository;
use App\Repositories\Ticket\DbTicketRepositoryRepository;

class TicketServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(TicketRepositoryInterface::class, function ($app) {
            switch ($app->make('config')->get('services.ticket_repo')) {
                case 'database':
                    return new DbTicketRepositoryRepository;
                case 'api':
                    return new ApiTicketRepositoryRepository;
                default:
                    throw new \Exception("Unknown Ticket Repository");
            }
        });
    }
}