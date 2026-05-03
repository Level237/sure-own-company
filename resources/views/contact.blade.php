<x-Layout>
    <x-Contact.Hero />

    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <div class="flex flex-col max-sm:flex-col-reverse lg:flex-row gap-16 lg:gap-20">

                <!-- Left Side: Map & Info -->
                <div class="lg:w-5/12 space-y-12">
                    <div class="space-y-8">
                        <div
                            class="rounded-[3rem] overflow-hidden shadow-2xl border border-slate-300 h-[500px] relative group">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8671331267215!2d9.747367376143744!3d4.047518346971275!2m3!1f0!2f0!3f0!3m2!i1024!2i768!4f13.1!3m3!1m2!1s0x1061135afc60a1b5%3A0xa6f777a6bacfaf2c!2sSURE%20OWN%20COMPANY!5e0!3m2!1sfr!2scm!4v1777817863201!5m2!1sfr!2scm"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                class=" transition-all duration-1000"></iframe>

                            <div
                                class="absolute bottom-6 left-6 right-6 p-6 bg-white/90 backdrop-blur-md rounded-2xl shadow-xl border border-white/20 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                <p class="text-slate-900 font-bold flex items-center gap-2">
                                    <x-lucide-map-pin class="w-5 h-5 text-primary" />
                                    SURE OWN COMPANY, Ndogbong, Douala
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
                            <div class="flex items-center gap-6 p-6 rounded-3xl bg-slate-50 border border-slate-100">
                                <div
                                    class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-xl bg-primary text-white shadow-lg shadow-primary/20">
                                    <x-lucide-phone class="w-6 h-6" />
                                </div>
                                <div>
                                    <span
                                        class="block text-slate-400 text-xs font-bold uppercase mb-1 ">Téléphone</span>
                                    <p class="text-slate-900 font-black">+237
                                        670 99 99 16</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-6 p-6 rounded-3xl bg-slate-50 border border-slate-100 ">
                                <div
                                    class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-xl bg-primary text-white shadow-lg shadow-primary/20">
                                    <x-lucide-mail class="w-6 h-6" />
                                </div>
                                <div class="overflow-hidden">
                                    <span
                                        class="block text-slate-400 text-xs font-bold uppercase tracking-widest mb-1 group-hover:text-white/50">Email</span>
                                    <p
                                        class="text-slate-900 font-black group-hover:text-white transition-colors truncate">
                                        DIRECTION@SUREOWNCOMPANY.COM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="lg:w-7/12">
                    <div class="space-y-10">
                        <div class="space-y-4">
                            <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">Parlons de <span
                                    class="text-primary">vous</span></h2>
                            <p class="text-slate-500 text-lg max-w-xl leading-relaxed">
                                Remplissez ce formulaire pour nous faire part de vos besoins. Un expert SureOwn
                                reviendra vers vous avec une approche personnalisée.
                            </p>
                        </div>

                        <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                            <!-- Prénom -->
                            <div class="space-y-2">
                                <label for="first_name"
                                    class="block text-slate-800 font-bold text-sm ml-1 uppercase">Prénom</label>
                                <input type="text" id="first_name" name="first_name" placeholder="Votre prénom"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-300 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
                            </div>
                            <!-- Nom -->
                            <div class="space-y-2">
                                <label for="last_name"
                                    class="block text-slate-800 font-bold text-sm ml-1 uppercase">Nom</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Votre nom"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-300 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
                            </div>
                            <!-- Email -->
                            <div class="space-y-2">
                                <label for="email" class="block text-slate-800 font-bold text-sm ml-1 uppercase">Email
                                    Professionnel</label>
                                <input type="email" id="email" name="email" placeholder="Votre adresse email"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-300 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
                            </div>
                            <!-- Téléphone -->
                            <div class="space-y-2">
                                <label for="phone"
                                    class="block text-slate-800 font-bold text-sm ml-1 uppercase">Téléphone</label>
                                <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-300 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
                            </div>
                            <!-- Pays -->
                            <div class="md:col-span-2 space-y-2">
                                <label for="country" class="block text-slate-800 font-bold text-sm ml-1 uppercase">Pays
                                    /
                                    Région</label>
                                <input type="text" id="country" name="country" placeholder="Votre pays de résidence"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-300 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
                            </div>
                            <!-- Message -->
                            <div class="md:col-span-2 space-y-2">
                                <label for="message"
                                    class="block text-slate-800 font-bold text-sm ml-1 uppercase">Message</label>
                                <textarea id="message" name="message" rows="5"
                                    placeholder="En quoi pouvons-nous vous aider ?"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-300 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 font-medium resize-none placeholder:text-slate-300"></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="md:col-span-2 pt-4">
                                <button type="submit"
                                    class="group w-full md:w-auto px-12 py-5 rounded-2xl bg-slate-900 text-white font-black text-lg hover:bg-primary hover:-translate-y-1 transition-all duration-300 shadow-xl shadow-slate-900/10 flex items-center justify-center gap-4">
                                    Envoyer ma demande
                                    <x-lucide-arrow-right
                                        class="w-6 h-6 group-hover:translate-x-2 transition-transform" />
                                </button>
                                <p class="mt-4 text-slate-400 text-xs italic">Nous respectons la confidentialité de vos
                                    données personnelles.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <x-Homepage.Footer />
</x-Layout>