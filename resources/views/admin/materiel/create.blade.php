<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-xl p-4 pb-1 text-gray-800 leading-tight">
                    {{ __(' Ajouter un nouvel Materiel') }}
                </h2>
                <div class="p-6 text-gray-900">
                    @if (@Session::has('error'))
                        <div class="succ" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    {{-- {{ __('Materiels') }} --}}
                    <form method="POST" action="{{ route('materiels.save') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- titre -->
                        <div>
                            <x-input-label for="titre" :value="__('Désigniation de l\'équipement')" />
                            <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre"
                                :value="old('titre')" required autofocus autocomplete="titre" />
                            <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                        </div>
                        <!-- localisation -->
                        <div class="mt-4">
                            <x-input-label for="localisation" :value="__('l\'oclisation de l\'équipement')" />
                            <x-text-input id="localisation" class="block mt-1 w-full" type="text" name="localisation"
                                :value="old('localisation')" required autofocus autocomplete="localisation" />
                            <x-input-error :messages="$errors->get('localisation')" class="mt-2" />
                        </div>
                        <!-- constructeur -->
                        <div class="mt-4">
                            <x-input-label for="constructeur" :value="__('Constructeur de l\'équipement')" />
                            <x-text-input id="constructeur" class="block mt-1 w-full" type="text" name="constructeur"
                                :value="old('constructeur')" required autofocus autocomplete="constructeur" />
                            <x-input-error :messages="$errors->get('constructeur')" class="mt-2" />
                        </div>
                        <!-- type -->
                        <div class="mt-4">
                            <x-input-label for="type" :value="__('type de l\'équipement')" />
                            <x-text-input id="type" class="block mt-1 w-full" type="text" name="type"
                                :value="old('type')" required autofocus autocomplete="type" />
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>
                        <!-- n_serie -->
                        <div class="mt-4">
                            <x-input-label for="n_serie" :value="__('N° de série de l\'équipement')" />
                            <x-text-input id="n_serie" class="block mt-1 w-full" type="text" name="n_serie"
                                :value="old('n_serie')" required autofocus autocomplete="n_serie" />
                            <x-input-error :messages="$errors->get('n_serie')" class="mt-2" />
                        </div>
                        <!-- n_inventaire -->
                        <div class="mt-4">
                            <x-input-label for="n_inventaire" :value="__('N° d\'inventaire de l\'équipement')" />
                            <x-text-input id="n_inventaire" class="block mt-1 w-full" type="text" name="n_inventaire"
                                :value="old('n_inventaire')" required autofocus autocomplete="n_inventaire" />
                            <x-input-error :messages="$errors->get('n_inventaire')" class="mt-2" />
                        </div>
                        <!-- n_marchee -->
                        <div class="mt-4">
                            <x-input-label for="n_marchee" :value="__('N° de marchée de l\'équipement')" />
                            <x-text-input id="n_marchee" class="block mt-1 w-full" type="text" name="n_marchee"
                                :value="old('n_marchee')" required autofocus autocomplete="n_marchee" />
                            <x-input-error :messages="$errors->get('n_marchee')" class="mt-2" />
                        </div>
                        <!-- date_mise_service -->
                        <div class="mt-4">
                            <x-input-label for="date_mise_service" :value="__('date de mise en service')" />
                            <x-text-input id="date_mise_service" class="block mt-1 w-full" type="date"
                                name="date_mise_service" :value="old('date_mise_service')" required autofocus
                                autocomplete="date_mise_service" />
                            <x-input-error :messages="$errors->get('date_mise_service')" class="mt-2" />
                        </div>

                        <!-- is_sensor -->
                        <div class="mt-4">
                            <x-input-label for="is_sensor" :value="__('Est-ce un capteur ?')" />
                            <input id="is_sensor" class="block mt-1" type="checkbox" name="is_sensor" value="1"
                                {{ old('is_sensor') ? 'checked' : '' }} />
                            <x-input-error :messages="$errors->get('is_sensor')" class="mt-2" />
                        </div>

                        <!-- calibration dates (conditionally displayed) -->
                        <div id="calibrationFields" style="display: none;">
                            <!-- date_calibrage -->
                            <div class="mt-4">
                                <x-input-label for="date_calibrage" :value="__('Date de calibrage')" />
                                <x-text-input id="date_calibrage" class="block mt-1 w-full" type="date"
                                    name="date_calibrage" :value="old('date_calibrage')" autocomplete="date_calibrage" />
                                <x-input-error :messages="$errors->get('date_calibrage')" class="mt-2" />
                            </div>
                            <!-- date_prochaine_calibrage -->
                            <div class="mt-4">
                                <x-input-label for="date_prochaine_calibrage" :value="__('Date de prochaine calibrage')" />
                                <x-text-input id="date_prochaine_calibrage" class="block mt-1 w-full" type="date"
                                    name="date_prochaine_calibrage" :value="old('date_prochaine_calibrage')"
                                    autocomplete="date_prochaine_calibrage" />
                                <x-input-error :messages="$errors->get('date_prochaine_calibrage')" class="mt-2" />
                            </div>
                            <!-- image -->
                        </div>
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Ajouter') }}
                            </x-primary-button>
                        </div>
                        <button type="button"
                            class="mt-4 flex items-center justify-center w-1/2 px-5 py-2 text-sm text-white transition-colors duration-200 border rounded-lg gap-x-2 sm:w-auto bg-blue-600 hover:bg-blue-500">
                            <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                            <a href="{{ route('materiels') }}">Retourner aux matériels</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('is_sensor').addEventListener('change', function() {
            var calibrationFields = document.getElementById('calibrationFields');
            if (this.checked) {
                calibrationFields.style.display = 'block';
            } else {
                calibrationFields.style.display = 'none';
            }
        });
        document.getElementById('is_sensor').dispatchEvent(new Event('change'));
    </script>
</x-app-layout>
