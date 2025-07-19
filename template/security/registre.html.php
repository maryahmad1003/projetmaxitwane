
  <div class="min-h-screen flex items-center justify-start px-4 py-8">
    <div class="w-full max-w-7xl ml-8">
      <form  class="grid grid-cols-1 lg:grid-cols-2 gap-10" action="/compte/enregistrer">
        <div class="bg-white p-10 rounded-2xl border-2 border-black shadow-lg">
          <div class="space-y-6">
            <div>
              <label for="prenom" class="block text-black text-sm font-medium mb-2">
                Prénom
              </label>
              <input
                type="text"



                id="prenom"
                name="prenom"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Entrez votre prénom"
                required
                autocomplete="given-name"
                aria-describedby="prenom-error">
              <div id="prenom-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label for="nom" class="block text-black text-sm font-medium mb-2">
                Nom
              </label>
              <input
                type="text"
                id="nom"
                name="nom"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Entrez votre nom"
                required
                autocomplete="family-name"
                aria-describedby="nom-error">
              <div id="nom-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label for="adresse" class="block text-black text-sm font-medium mb-2">
                Adresse
              </label>
              <input
                type="text"
                id="adresse"
                name="adresse"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Entrez votre adresse"
                required
                autocomplete="street-address"
                aria-describedby="adresse-error">
              <div id="adresse-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label for="telephone" class="block text-black text-sm font-medium mb-2">
                Téléphone
              </label>
              <input
                type="tel"
                id="telephone"
                name="telephone"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Entrez votre numéro de téléphone"
                required
                autocomplete="tel"
                aria-describedby="telephone-error">
              <div id="telephone-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label for="password" class="block text-black text-sm font-medium mb-2">
                Mot de passe
              </label>
              <input
                type="password"
                id="password"
                name="password"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Créez un mot de passe"
                required
                autocomplete="new-password"
                aria-describedby="password-error">
              <div id="password-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label for="confirm-password" class="block text-black text-sm font-medium mb-2">
                Confirmer le mot de passe
              </label>
              <input
                type="password"
                id="confirm-password"
                name="confirm-password"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Confirmez votre mot de passe"
                required
                autocomplete="new-password"
                aria-describedby="confirm-password-error">
              <div id="confirm-password-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>
          </div>
        </div>

        <div class="bg-white p-10 rounded-2xl border-2 border-black shadow-lg">
          <div class="space-y-6">
            <div>
              <label for="nin" class="block text-black text-sm font-medium mb-2">
                NIN
              </label>
              <input
                type="text"
                id="nin"
                name="nin"
                class="w-full px-4 py-3 bg-white border-2 border-gray-300 rounded-lg text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                placeholder="Numéro d'identification national"
                required
                aria-describedby="nin-error">
              <div id="nin-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label class="block text-black text-sm font-medium mb-2">
                Photo recto CIN
              </label>
              <div class="upload-area bg-orange-50 border-2 border-dashed border-orange-400 rounded-lg p-6 text-center cursor-pointer hover:bg-orange-100 transition-colors duration-200"
                id="upload-recto"
                onclick="document.getElementById('photo-recto').click()">
                <svg class="w-12 h-12 mx-auto mb-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="text-black text-sm">Photo recto CIN</p>
                <input type="file" id="photo-recto" name="photo-recto" accept="image/*" class="hidden" aria-describedby="photo-recto-error">
              </div>
              <div id="photo-recto-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div>
              <label class="block text-black text-sm font-medium mb-2">
                Photo verso CIN
              </label>
              <div class="upload-area bg-orange-50 border-2 border-dashed border-orange-400 rounded-lg p-6 text-center cursor-pointer hover:bg-orange-100 transition-colors duration-200"
                id="upload-verso"
                onclick="document.getElementById('photo-verso').click()">
                <svg class="w-12 h-12 mx-auto mb-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="text-black text-sm">Photo verso CIN</p>
                <input type="file" id="photo-verso" name="photo-verso" accept="image/*" class="hidden" aria-describedby="photo-verso-error">
              </div>
              <div id="photo-verso-error" class="text-orange-600 text-xs mt-1 hidden" role="alert"></div>
            </div>

            <div class="lg:col-span-2 flex justify-center space-x-4 mt-6">
              <button
                type="button"
                id="cancelBtn"
                class="px-8 py-3 bg-black hover:bg-gray-800 text-white font-medium rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                Annuler
              </button>
              <button
                type="submit" 
                class="px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed">
                Valider
              </button>
            </div>

          </div>
        </div>

      </form>
    </div>
  </div>

  