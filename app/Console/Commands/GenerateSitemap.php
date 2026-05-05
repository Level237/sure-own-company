<?php

namespace App\Console\Commands;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:generate-sitemap')]
#[Description('Command description')]
class GenerateSitemap extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::create('https://sureowncompany.com')
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap généré avec succès !');
    }
}
