<?php

namespace Aldhix\BreezeBootstrapUi\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * Nama command artisan
     */
    protected $signature = 'breeze-bootstrap-ui:install {--force : Overwrite any existing files}';

    /**
     * Deskripsi command
     */
    protected $description = 'Install Breeze Bootstrap UI into the Laravel project';

    /**
     * Eksekusi command
     */
    public function handle()
    {
        $this->info('Installing Breeze Bootstrap UI...');

        // Publish views
        $this->call('vendor:publish', [
            '--provider' => "Aldhix\BreezeBootstrapUi\BreezeBootstrapUiServiceProvider",
            '--tag'      => "views",
            '--force'    => $this->option('force'),
        ]);

        $this->info('Breeze Bootstrap UI installed successfully!');
    }
}
