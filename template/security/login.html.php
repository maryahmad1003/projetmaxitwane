<div class="relative flex size-full min-h-screen flex-col bg-gray-100 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col items-center justify-center">
    <form action="/login" method="post">
      <div class="px-5 lg:px-20 flex flex-1 justify-center py-5">
        <div class="bg-[#000000] rounded-2xl shadow-2xl border-4 border-[#ff6600] p-8">
          <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
            <h2 class="text-[#FFFFFF] tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">Connectez-vous à <span class="text-[#ff6600]">MAXITSA</span></h2>


            <?php if (!empty($errors['global'])): ?>
            <div class="mb-4 text-[#ff6600] text-sm text-center">
              <?= htmlspecialchars($errors['global']) ?>
            </div>
            <?php endif; ?>


            <div class="flex max-w-[480px] flex-col px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1 mb-1">
                <p class="text-[#FFFFFF] text-base font-medium leading-normal pb-2">Numéro de téléphone</p>
                <input
                name="login" 
                type="text"
                  placeholder="Entrez votre numéro de téléphone"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#000000] focus:outline-0 focus:ring-0 border-2 border-[#ff6600] bg-[#FFFFFF] focus:border-[#ff8800] h-14 placeholder:text-[#999999] p-4 text-base font-normal leading-normal"
                  value="<?= htmlspecialchars($formData['login'] ?? '') ?>"
                  autocomplete="off" />
              </label>


              <?php if (!empty($errors['login'])): ?>
              <div class="text-[#ff6600] text-sm"><?= htmlspecialchars($errors['login']) ?></div>
              <?php endif; ?>


            </div>
            <div class="flex max-w-[480px] flex-col px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1 mb-1">
                <p class="text-[#FFFFFF] text-base font-medium leading-normal pb-2">Mot de passe</p>
                <input 
                name="password"
                  type="password"
                  placeholder="Entrez votre mot de passe"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#000000] focus:outline-0 focus:ring-0 border-2 border-[#ff6600] bg-[#FFFFFF] focus:border-[#ff8800] h-14 placeholder:text-[#999999] p-4 text-base font-normal leading-normal"
                  value=""
                  autocomplete="new-password" />
              </label>


              <?php if (!empty($errors['password'])): ?>
              <div class="text-[#ff6600] text-sm"><?= htmlspecialchars($errors['password']) ?></div>
              <?php endif; ?>
            </div>

            
            <p class="text-[#ff6600] text-xs text-right font-normal leading-normal pb-3 pt-1 px-4 underline cursor-pointer"><a href="#">Mot de passe oublié ?</a></p>
            <div class="flex px-4 py-3 justify-center">
              <button
                type="submit"
                class="flex min-w-[84px] max-w-[280px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 flex-1 bg-[#ff6600] text-[#FFFFFF] hover:bg-[#ff8800] text-base font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Se connecter</span>
              </button>
            </div>
            <p class="text-[#999999] text-sm font-normal leading-normal pb-3 pt-1 px-4 text-center underline"><a href="/account/create" class="text-[#ff6600]"> n'avez pas de compte ? Créer un compte</a></p>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>