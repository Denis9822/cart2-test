<?php

namespace App\Console\Commands;

use App\Services\ConcreteProductFactory;
use Illuminate\Console\Command;
use App\Contracts\ProductFactory;

class ShowProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';



    public function __construct(private readonly ProductFactory $factory)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        echo $this->factory->createTable()->make();
    }
}
