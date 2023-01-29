<div class="md:hidden py-8 border-b">
    <div x-data="{ open: false }" class="flex items-center space-x-5 justify-center">
        <button class="hover:text-primary" @click="open= !open"> AZIENDA </button>
        <div x-show="open" class="absolute -left-5 text-center mt-[250px] bg-white w-full flex flex-col">
            <a href="#">Chi siamo</a>
            <a href="#">Codice condotta</a>
            <a href="#">Modelo 231</a>
            <a href="#">Condizione di vendita</a>
            <a href="#">condizioni d'uso</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Privacy Lista Nascita</a>
            <a href="#">Cookies</a>
            <a href="#">Recycle Me</a>
        </div>

    </div>
    <div x-data="{ open: false }" class="flex items-center space-x-5 justify-center">
        <button class="hover:text-primary" @click="open= !open"> SUPORTO </button>
        <div x-show="open" class="absolute -left-5 text-center mt-[250px] bg-white w-full flex flex-col">
            <a href="#">Contattaci</a>
            <a href="#">Metodi di pagamento</a>
            <a href="#">metodi di spedizione</a>
            <a href="#">Tempi di Spedizione</a>
            <a href="#">Risoluzione Controversie</a>
            <a href="#">Resi & Rimborsi</a>
            <a href="#">Regolamento Prenatal Vip CArd</a>
            <a href="#">Regolamente Lista nascita</a>
            <a href="#">Faq</a>
        </div>

    </div>
</div>

<div class="hidden md:grid grid-cols-4 justify-center px-28 py-14">
    <div class="flex flex-col uppercase  text-sm">
        <span class="font-bold mb-5">Categorie</span>
        @foreach ($categories as $category)
            <a class="hover:font-bold" href="/category/{{ $category->id }}">{{ $category->name }}</a>
        @endforeach
    </div>
    <div class="flex flex-col uppercase text-sm">
        <span class="mb-5 font-bold">Tu e prenatal</span>
        <a href="#">Mommypedia</a>
        <a href="#">Lista Nascita</a>
        <a href="#">Vip Card</a>
        <a href="#">Avvisi sulla sicurezza dei prodotti</a>
        <a href="#">Informazioni Utili</a>
    </div>
    <div class="flex flex-col uppercase  text-sm">
        <span class="font-bold mb-5">Azienda</span>
        <a href="#">Chi siamo</a>
        <a href="#">Codice condotta</a>
        <a href="#">Modelo 231</a>
        <a href="#">Condizione di vendita</a>
        <a href="#">condizioni d'uso</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Privacy Lista Nascita</a>
        <a href="#">Cookies</a>
        <a href="#">Recycle Me</a>
    </div>
    <div class="flex flex-col uppercase text-sm">
        <span class="font-bold mb-5">Supporto</span>
        <a href="#">Contattaci</a>
        <a href="#">Metodi di pagamento</a>
        <a href="#">metodi di spedizione</a>
        <a href="#">Tempi di Spedizione</a>
        <a href="#">Risoluzione Controversie</a>
        <a href="#">Resi & Rimborsi</a>
        <a href="#">Regolamento Prenatal Vip CArd</a>
        <a href="#">Regolamente Lista nascita</a>
        <a href="#">Faq</a>
    </div>
</div>
