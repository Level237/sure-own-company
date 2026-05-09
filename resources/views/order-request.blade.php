<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passer une commande | SureOwnCompany</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-white font-sans selection:bg-primary selection:text-white min-h-screen flex flex-col">

    <!-- Short Full-Width Header Banner -->

    <x-Loader />
    <x-Homepage.Header />
    <section class="relative h-[35vh] w-full overflow-hidden bg-black">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('assets/images/why-choose-us.png') }}');"></div>
            <!-- Primary (Orangey) Overlay -->
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-primary/20 to-black/80"></div>
        </div>

        <!-- Content -->
        <div
            class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col items-center justify-center text-center max-w-7xl">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-7xl font-extrabold text-white animate-fade-in-up">
                    Espace Commande</span>
                </h1>
                <div class="w-24 h-1.5 bg-white mx-auto rounded-full animate-width-grow"></div>

            </div>
        </div>
    </section>

    <main class="flex-1 flex flex-col items-center py-16 px-6 relative z-10">

        <div class="w-full max-w-5xl">

            <!-- STEP 1: CHOICE -->
            <div id="step-1" class="space-y-12 transition-all duration-700">
                <div class="space-y-2 border-l-4 border-primary pl-6">
                    <h2 class="text-3xl font-black text-slate-900">Soumettre une demande</h2>
                    <p class="text-slate-500 font-medium">Choisissez le type de demande afin de continuer votre
                        soumission.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Choice Card 1 -->
                    <button type="button" onclick="selectType('existing_order')"
                        class="group bg-white p-10 rounded-3xl border border-slate-300 hover:border-primary hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500 text-center flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 rounded-2xl bg-slate-50 text-slate-400 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-500">
                            <x-lucide-file-text class="w-10 h-10" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-black text-slate-900 group-hover:text-primary transition-colors">
                                J'ai déjà un bon de commande</h3>
                            <p class="text-slate-500 text-sm font-medium leading-relaxed max-w-[250px] mx-auto">
                                Transmettez directement votre document et les informations complémentaires.</p>
                        </div>
                    </button>

                    <!-- Choice Card 2 -->
                    <button type="button" onclick="selectType('new_request')"
                        class="group bg-white p-10 rounded-3xl border border-slate-300 hover:border-primary hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500 text-center flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 rounded-2xl bg-slate-50 text-slate-400 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-500">
                            <x-lucide-edit-3 class="w-10 h-10" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-black text-slate-900 group-hover:text-primary transition-colors">Je
                                souhaite faire une demande</h3>
                            <p class="text-slate-500 text-sm font-medium leading-relaxed max-w-[250px] mx-auto">Décrivez
                                votre besoin même sans bon de commande.</p>
                        </div>
                    </button>
                </div>
            </div>

            <!-- STEP 2: FORM -->
            <div id="step-2" class="hidden opacity-0 translate-y-10 transition-all duration-700">
                <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="request_type_selection" id="request-type-input">

                    <div
                        class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/50 overflow-hidden">
                        <!-- Form Header -->
                        <div class="p-8 md:p-12 bg-slate-50/50 border-b border-slate-100">
                            <h2 id="form-title" class="text-2xl font-black text-slate-900">Informations de la demande
                            </h2>
                            <p id="form-desc" class="text-slate-500 font-medium mt-1">Configurez les détails de votre
                                soumission</p>
                        </div>

                        <div class="p-8 md:p-12 space-y-12">
                            <!-- Section 1: Coordonnées -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                <div class="space-y-3">
                                    <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Nom
                                        de
                                        l'entreprise</label>
                                    <input type="text" name="company_name" placeholder="Ma Société" required
                                        class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold placeholder:text-slate-300">
                                </div>
                                <div class="space-y-3">
                                    <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Personne
                                        de contact</label>
                                    <input type="text" name="contact_person" placeholder="Nom complet" required
                                        class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold placeholder:text-slate-300">
                                </div>
                                <div class="space-y-3">
                                    <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Email
                                        Professionnel</label>
                                    <input type="email" name="email" placeholder="contact@domaine.com" required
                                        class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold placeholder:text-slate-300">
                                </div>
                                <div class="space-y-3">
                                    <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Téléphone</label>
                                    <input type="tel" name="phone" placeholder="Numéro de téléphone" required
                                        class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold placeholder:text-slate-300">
                                </div>
                            </div>

                            <!-- Section 2: Details Dynamiques -->
                            <div id="section-existing"
                                class="hidden animate-fade-in space-y-10 pt-6 border-t border-slate-100">
                                <div class="space-y-3">
                                    <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Type de
                                        service concerné</label>
                                    <select name="service_type"
                                        class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold appearance-none">
                                        <option value="">Choisir un type</option>
                                        <option value="Transport de Carburant">Transport de Carburant</option>
                                        <option value="Logistique Internationale">Logistique Internationale</option>
                                        <option value="Approvisionnement Industriel">Approvisionnement Industriel
                                        </option>
                                        <option value="Produits d'entretien">Produits d'entretien</option>
                                        <option value="Fournitures de consommables">Fournitures de consommables</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                </div>

                                <div class="space-y-3">
                                    <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Transmettez
                                        votre bon de commande</label>
                                    <div
                                        class="relative group border-2 border-dashed border-slate-200 rounded-3xl p-12 text-center hover:bg-slate-50 hover:border-primary transition-all duration-300 cursor-pointer">
                                        <input type="file" name="order_file" id="order_file"
                                            class="absolute mt-4 inset-0 opacity-0 cursor-pointer"
                                            accept=".pdf,.docx,.jpg,.png">
                                        <div class="space-y-4">
                                            <div
                                                class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto transition-transform group-hover:scale-110">
                                                <x-lucide-upload-cloud class="w-8 h-8" />
                                            </div>
                                            <div class="space-y-1">
                                                <p class="text-slate-900 font-black" id="file-name">Cliquez pour ajouter
                                                    le document</p>
                                                <p class="text-slate-400 text-xs font-bold uppercase">PDF, DOCX, JPG,
                                                    PNG (Max 5MB)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="section-new"
                                class="hidden animate-fade-in space-y-10 pt-6 border-t border-slate-100">
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-10">
                                    <div class="space-y-3">
                                        <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Type
                                            de demande</label>
                                        <input type="text" name="type_of_request"
                                            placeholder="Ex: Devis, Consultation..."
                                            class="w-full px-6 py-4 mt-4 rounded-xl bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold">
                                    </div>

                                    <div class="md:col-span-2 space-y-3">
                                        <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Date
                                            souhaitée</label>
                                        <input type="date" name="desired_date"
                                            class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold">
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-3 pt-8 border-t border-slate-100">
                                <label class="text-slate-900 font-bold  text-sm ml-1 uppercase ">Précisions
                                    supplémentaires</label>
                                <textarea name="message" rows="5"
                                    placeholder="Dites-nous en plus sur vos besoins logistiques..."
                                    class="w-full px-6 py-4 rounded-xl mt-4 bg-slate-50 border-2 border-slate-200 focus:bg-white focus:border-primary transition-all outline-none text-slate-900 font-bold resize-none"></textarea>
                            </div>
                        </div>

                        <!-- Form Footer -->
                        <div
                            class="p-8 bg-slate-50 max-sm:flex-col-reverse max-sm:gap-6 flex justify-between items-center">
                            <button type="button" onclick="prevStep()"
                                class="px-8 py-3.5 rounded-xl bg-slate-200 text-slate-600 font-black text-sm  hover:bg-slate-300 transition-all">Précédent</button>
                            <button type="submit"
                                class="px-12 py-3.5 rounded-xl bg-primary text-white font-black text-sm  hover:bg-primary/90 hover:-translate-y-1 transition-all shadow-xl shadow-primary/20">Soumettre
                                ma demande</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        .animate-fade-in {
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');
        const inputType = document.getElementById('request-type-input');
        const formTitle = document.getElementById('form-title');
        const sectionExisting = document.getElementById('section-existing');
        const sectionNew = document.getElementById('section-new');

        function selectType(type) {
            inputType.value = type;
            if (type === 'existing_order') {
                formTitle.textContent = "Détails du Bon de Commande";
                sectionExisting.classList.remove('hidden');
                sectionNew.classList.add('hidden');
            } else {
                formTitle.textContent = "Détails de votre Besoin";
                sectionExisting.classList.add('hidden');
                sectionNew.classList.remove('hidden');
            }
            nextStep();
        }

        function nextStep() {
            step1.classList.add('opacity-0', '-translate-x-10');
            setTimeout(() => {
                step1.classList.add('hidden');
                step2.classList.remove('hidden');
                setTimeout(() => {
                    step2.classList.remove('opacity-0', 'translate-y-10');
                    step2.classList.add('opacity-100', 'translate-y-0');
                }, 50);
            }, 300);
        }

        function prevStep() {
            step2.classList.add('opacity-0', 'translate-y-10');
            setTimeout(() => {
                step2.classList.add('hidden');
                step1.classList.remove('hidden');
                setTimeout(() => {
                    step1.classList.remove('opacity-0', '-translate-x-10');
                    step1.classList.add('opacity-100', 'translate-x-0');
                }, 50);
            }, 300);
        }

        // File name preview
        const fileInput = document.getElementById('order_file');
        const fileNameLabel = document.getElementById('file-name');
        if (fileInput) {
            fileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    fileNameLabel.textContent = e.target.files[0].name;
                    fileNameLabel.classList.add('text-primary');
                }
            });
        }
    </script>
</body>

</html>