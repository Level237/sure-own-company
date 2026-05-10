<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Génère le fichier sitemap.xml complet pour la plateforme';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $baseUrl = config('app.url') ?? 'https://sureowncompany.com';
        
        $sitemap = Sitemap::create();

        // Pages Statiques
        $staticPages = [
            '/',
            '/a-propos-de-nous',
            '/nos-services',
            '/contactez-nous',
            '/devenir-partenaire',
            '/passer-une-commande',
            '/commande-reussie',
        ];

        foreach ($staticPages as $page) {
            $sitemap->add(
                Url::create($page)
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        // Services Dynamiques
        $services = ['transport', 'logistique', 'approvisionnement', 'securite'];
        foreach ($services as $slug) {
            $sitemap->add(
                Url::create("/nos-services/{$slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap.xml a été généré avec succès dans le dossier public !');
    }
}
