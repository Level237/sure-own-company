<x-Layout title="SureOwnCompany | Devenir partenaire" image="{{ asset('assets/images/become-partener.png') }}"
    description="Découvrez l'étendue de nos services conçus pour répondre aux défis les plus complexes de l'industrie
                    énergétique."
    keywords="transport carburant sécurisé,Partenaires, logistique industrielle de pointe, livraison hydrocarbures B2B, flotte camions citernes, approvisionnement industriel traçable, expert logistique SureOwnCompany, transport matières critiques">
    <x-Partner.Hero />



    <!-- Main Content: Form & Why Us -->
    <section id="form" class="py-24 bg-white relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -left-24 w-72 h-72 bg-slate-100 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6  md:px-10 max-w-7xl relative z-10">
            <div class="max-w-5xl max-sm:mx-0  mx-auto">

                <!-- Form Header -->
                <div class="text-center mb-16 space-y-4 animate-on-scroll opacity-0 translate-y-10">
                    <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight">
                        Devenez <span class="text-primary">Partenaire</span>
                    </h2>
                    <p class="text-slate-500 text-lg md:text-xl max-w-2xl mx-auto font-medium">
                        Rejoignez l'écosystème SureOwn et développons ensemble des solutions logistiques innovantes pour
                        l'industrie.
                    </p>
                </div>

                <!-- Form Card -->
                <div
                    class="bg-white p-8 max-sm:p-0 md:p-16 rounded-[4rem] shadow-2xl shadow-slate-200 border border-slate-100 animate-on-scroll opacity-0 translate-y-10 delay-300">
                    
                    @if(session('success'))
                        <div class="mb-8 p-6 bg-emerald-50 border border-emerald-100 rounded-3xl flex items-center gap-4 text-emerald-800 animate-on-scroll">
                            <x-lucide-check-circle class="w-8 h-8 text-emerald-500" />
                            <p class="font-bold">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('partner.send') }}" method="POST" class="space-y-12">
                        @csrf

                        <!-- Step 1: Company Info -->
                        <div class="space-y-8">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm">
                                    01</div>
                                <h3 class="text-xl font-black text-slate-900 uppercase tracking-widest">Informations
                                    Société</h3>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <label class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Raison
                                        Sociale</label>
                                    <div class="relative group">
                                        <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Ex: LogiCam SA"
                                            class="w-full pl-14 pr-6 py-5 rounded-2xl bg-slate-50 border-2 @error('company_name') border-red-300 @else border-slate-200 @enderror mt-3 focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300 shadow-inner">
                                        @error('company_name')
                                            <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                        @enderror
                                        <x-lucide-building-2
                                            class="absolute left-5 top-1/2 -translate-y-1/2 w-6 h-6 text-slate-300 group-focus-within:text-primary transition-colors" />
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <label
                                        class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Secteur
                                        d'activité</label>
                                    <div class="relative group">
                                        <select name="industry"
                                            class="w-full pl-14 pr-12 py-5 rounded-2xl bg-slate-50 border-2 @error('industry') border-red-300 @else border-slate-200 @enderror mt-3 focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium appearance-none shadow-inner">
                                            <option value="">Sélectionnez un secteur</option>
                                            <option value="Transport & Logistique" {{ old('industry') == 'Transport & Logistique' ? 'selected' : '' }}>Transport & Logistique</option>
                                            <option value="Fourniture Industrielle" {{ old('industry') == 'Fourniture Industrielle' ? 'selected' : '' }}>Fourniture Industrielle</option>
                                            <option value="Maintenance & Services" {{ old('industry') == 'Maintenance & Services' ? 'selected' : '' }}>Maintenance & Services</option>
                                            <option value="Autre" {{ old('industry') == 'Autre' ? 'selected' : '' }}>Autre</option>
                                        </select>
                                        @error('industry')
                                            <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                        @enderror
                                        <x-lucide-layers
                                            class="absolute left-5 top-1/2 -translate-y-1/2 w-6 h-6 text-slate-300 group-focus-within:text-primary transition-colors" />
                                        <x-lucide-chevron-down
                                            class="absolute right-5 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400 pointer-events-none" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Personal Info -->
                        <div class="space-y-8 pt-12 border-t border-slate-100">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm">
                                    02</div>
                                <h3 class="text-xl font-black text-slate-900 uppercase tracking-widest">Coordonnées du
                                    Responsable</h3>
                            </div>

                            <div class="space-y-8">
                                <div class="space-y-3">
                                    <label class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Nom
                                        Complet</label>
                                    <div class="relative group">
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Ex: Marc Ndjoli"
                                            class="w-full pl-14 pr-6 py-5 rounded-2xl bg-slate-50 border-2 @error('full_name') border-red-300 @else border-slate-200 @enderror mt-3 focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300 shadow-inner">
                                        @error('full_name')
                                            <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                        @enderror
                                        <x-lucide-user
                                            class="absolute left-5 top-1/2 -translate-y-1/2 w-6 h-6 text-slate-300 group-focus-within:text-primary transition-colors" />
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <label class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Poste occupé</label>
                                    <div class="relative group">
                                        <input type="text" name="job_title" value="{{ old('job_title') }}" placeholder="Ex: Directeur Général"
                                            class="w-full pl-14 pr-6 py-5 rounded-2xl bg-slate-50 border-2 @error('job_title') border-red-300 @else border-slate-200 @enderror mt-3 focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300 shadow-inner">
                                        @error('job_title')
                                            <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                        @enderror
                                        <x-lucide-briefcase
                                            class="absolute left-5 top-1/2 -translate-y-1/2 w-6 h-6 text-slate-300 group-focus-within:text-primary transition-colors" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <label
                                            class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Email
                                            Professionnel</label>
                                        <div class="relative group">
                                            <input type="email" name="email" value="{{ old('email') }}" placeholder="contact@entreprise.com"
                                                class="w-full pl-14 pr-6 py-5 rounded-2xl bg-slate-50 border-2 @error('email') border-red-300 @else border-slate-200 @enderror mt-3 focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300 shadow-inner">
                                            @error('email')
                                                <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                            @enderror
                                            <x-lucide-mail
                                                class="absolute left-5 top-1/2 mt-2 -translate-y-1/2 w-6 h-6 text-slate-300 group-focus-within:text-primary transition-colors" />
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <label
                                            class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Téléphone</label>
                                        <div class="relative group">
                                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Votre numéro de téléphone"
                                                class="w-full pl-14 pr-6 py-5 rounded-2xl bg-slate-50 border-2 @error('phone') border-red-300 @else border-slate-200 @enderror mt-3 focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300 shadow-inner">
                                            @error('phone')
                                                <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                            @enderror
                                            <x-lucide-phone
                                                class="absolute left-5 top-1/2 mt-2 -translate-y-1/2 w-6 h-6 text-slate-300 group-focus-within:text-primary transition-colors" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Message -->
                        <div class="space-y-8 pt-12 border-t border-slate-100">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm">
                                    03</div>
                                <h3 class="text-xl font-black text-slate-900 uppercase tracking-widest">Motivation &
                                    Projets</h3>
                            </div>

                            <div class="space-y-3">
                                <label class="text-slate-700 font-bold text-sm ml-1 uppercase tracking-wider">Pourquoi
                                    nous rejoindre ?</label>
                                <textarea rows="6" name="message"
                                    placeholder="Dites-nous en quelques mots comment nous pourrions collaborer pour créer de la valeur..."
                                    class="w-full px-8 py-6 mt-2 rounded-[2rem] bg-slate-50 border-2 @error('message') border-red-300 @else border-slate-200 @enderror focus:border-primary focus:bg-white transition-all outline-none text-slate-900 font-medium resize-none placeholder:text-slate-300 shadow-inner">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-xs mt-1 ml-1 font-bold italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Section -->
                        <div class="pt-10 flex flex-col items-center space-y-6">
                            <button type="submit"
                                class="group w-full max-sm:text-sm max-sm:px-8 md:w-auto px-16 py-6 rounded-2xl bg-slate-900 text-white font-black text-xl hover:bg-primary hover:-translate-y-2 transition-all duration-500 shadow-2xl shadow-slate-900/10 flex items-center justify-center gap-4">
                                Envoyer ma candidature
                                <x-lucide-rocket
                                    class="w-7 h-7 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <x-Homepage.Partners />

    <x-Homepage.Footer />

    <style>
        .animate-on-scroll {
            transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-10', '-translate-x-10', 'translate-x-10');
                        entry.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
        });
    </script>
</x-Layout>