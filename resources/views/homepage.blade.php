@section('canonical', 'https://sureowncompany.com')
<x-Layout :isHomepage="true" title="La Référence en Transport de Carburant & Logistique Industrielle"
    image="{{ asset('assets/images/logo.png') }}"
    description="Votre partenaire de solution sur mesure pour optimiser vos opérations."
    keywords="transport carburant sécurisé,Transport de carburant,carburant, logistique industrielle de pointe, livraison hydrocarbures B2B, flotte camions citernes, approvisionnement industriel traçable, expert logistique SureOwnCompany, transport matières critiques,transport,de carburant,logistique,de,vos opérations,vos,nous,partenaire,pour,vos,nous,partenaire,pour,sureowncompany,opérations,votre partenaire,votre,en transport de carburant,de vos opérations,partenaire de,fiabilité et,et">
    <x-Homepage.Hero />
    <x-Homepage.About />
    <x-Homepage.Services />
    <x-Homepage.WhyChooseUs />
    <x-Homepage.Partners />
    <x-Homepage.BecomePartner />
    <x-Homepage.Footer />
</x-Layout>