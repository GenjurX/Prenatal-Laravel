@extends('components.layout')
@section('content')
    @include('components.sub-categories')
    <div class=" relative w-11/12 bg-primary mx-auto px-5 py-7 md:px-12 text-white lg:hidden z-20">
        <span class="text-sm">Passeggini</span>
        <p class="font-bold my-1">I MIGLIORI PASSEGGINI PER LE VOSTRE PASSEGGIATE</p>
        <p class="text-sm">La nostra esperienza al tuo servizio. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quis, illo!
        </p>
    </div>
    <x-section />
    <x-filter :brands="$brands" :colors="$colors" />
    <x-products :products="$products" />
    <x-other-categories />
    <div class="text-center mx-10">
        <span class="font-bold text-lg">Passeggini classici e leggeri</span>
        <p class="text-sm ">Anche fuori casa, il tempo speso insieme è importante: è in questi momenti che si rafforza
            il
            rapporto tra
            genitori e figli. Attimi di divertimento, scoperta e crescita che vanno vissuti al meglio, con il giusto
            supporto dei grandi marchi per la famiglia che Prénatal ha selezionato per te. Per affrontare nel modo migliore
            gli spostamenti insieme al tuo piccolo hai bisogno di un passeggino leggero, pratico e maneggevole, in grado di
            rendere più semplice la quotidianità della tua famiglia. Comodi ed estremamente robusti, i passeggini classici
            di questa tipologia sono un valido aiuto per i tuoi spostamenti in città, in quanto caratterizzati da un peso
            ridotto, che li rende facili da spingere, perfetti per differenti tipologie di strada e terreno. Inoltre, sono
            progettati per essere apribili e richiudibili con una sola mano, per essere trasportati e riposti in auto con
            grande rapidità, rivelandosi fondamentali quando si ha poco tempo a disposizione. Partire per il fine settimana
            con il tuo bimbo sarà davvero semplice con i modelli compatti, una soluzione ideale per i viaggi e per muoversi
            con destrezza anche nelle strade più trafficate.</p>

        <div x-data="{ open: false }">
            <div x-show="open">
                <span class="font-bold text-lg">Passeggino leggero: modelli e caratteristiche</span>
                <p class="text-sm ">Per rendere ancora più funzionale il tuo modello, all’interno della sezione dedicata
                    agli
                    <a>
                        accessori per passeggino</a> potrai trovare tanti utili prodotti, come i coloratissimi ombrelli con
                    i quali proteggere il tuo piccolo dai raggi solari, i parapioggia per andare a spasso anche nelle
                    giornate nuvolose, e le praticissime borse organiser, che dotate di porta biberon e ampie tasche
                    ti consentiranno di essere sempre pronta a tutto, anche se fuori casa. Prénatal propone un vasto
                    assortimento di passeggini ultraleggeri: all’interno della selezione troverai numerosi modelli
                    progettati da brand leader nei prodotti per l’infanzia, come Bogaboo, Baby Jogger, Cam e tanti
                    altri, tra i quali scegliere l’articolo più adatto alle tue necessità, e a quelle del tuo bambino.
                    Tra i tanti troverai anche quelli del <a>catalogo Giordani</a>: colorati e innovativi, sono realizzati
                    con chiusura a libro, perfetti per sia per bebè di pochi mesi che per bimbi fino ai 3 anni. Dotati di
                    maniglione unito, ruote piroettanti e schienale reclinabile in 3 posizioni, sono confortevoli e
                    facilmente
                    trasportabili a tracolla, come una borsa. Nelle versioni di passeggino leggero reclinabile anche le
                    proposte
                    Foppapedretti, caratterizzate da imbracatura a 5 punti con protezioni pettorali, regolabili in base alla
                    corporatura del bambino, e dotate di struttura in alluminio e cappottina richiudibile e amovibile, con
                    protezione solare UPF50+.
                </p>
                <span class="font-bold text-lg">Il modello perfetto per le tue esigenze</span>
                <p class="text-sm ">Pratici, completi e contraddistinti da un’ottima manovrabilità, i modelli ultraleggeri
                    riescono a unire a un design ricercato e fashion la funzionalità e la versatilità di cui hanno bisogno
                    le
                    famiglie contemporanee. La struttura e l’ingombro ridotto consentono a questi articoli di occupare poco
                    spazio anche quando riposti all’interno della casa, e allo stesso modo, sono l’ideale per vivere a pieno
                    la
                    città con i tuoi bimbi, anche nel caso di utilizzo sui mezzi pubblici. I passeggini compatti possono
                    essere
                    personalizzati con numerosi <a>trillini e sonagli</a>, con i quali rendere gli spostamenti col tuo bimbo
                    ancora più gioiosi: su Prénatal puoi trovare diversi giocattoli da agganciare facilmente alla barra
                    protettiva della seduta, composti da specchietti, palline colorate e pupazzi sonori con cui intrattenere
                    il
                    piccolo, rendendo le uscite all’aria aperta un vero divertimento. Scopri i passeggini leggeri e compatti
                    di
                    Prénatal e seleziona i tuoi preferiti tra le offerte, per acquistare prodotti sicuri, durevoli e di
                    qualità
                    a un prezzo davvero conveniente. Scegli sempre il meglio per il benessere e la quotidianità della tua
                    famiglia.</p>
            </div>
            <button x-on:click="open =! open" class="text-primary text-sm"
                x-text="open ? '{{ __('Mostra di meno') }}' : '{{ __('Mostra di piú') }}'"></button>
        </div>
    </div>
@endsection
