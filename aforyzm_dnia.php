<HTML><HEAD><META CHARSET="utf-8" /> 
<TITLE>PHP - Aforyzm dnia</TITLE> 
</HEAD> 
<?php 
  function tAforyzmDnia() { 
    //Aforyzm dnia - Funkcja losuje jeden aforyzm dnia przy każdym wywołaniu. 
    $Aforyzm[] = "\"Nie ten jest mądry, kto wiele spraw umie, lecz kto złe od dobrego rozeznać rozumie.\" - Mikołaj Rej"; 
    $Aforyzm[] = "\"Szlachetny człowiek wymaga od siebie, prostak od innych.\" - Nikos Kazantzakis"; 
    $Aforyzm[] = "\"Wołają: kto pierwszy, ten lepszy - a powinno być odwrotnie.\" - Tadeusz Kotarbiński"; 
    $Aforyzm[] = "\"Miłujący niebezpieczeństwo od niego ginie.\" – Mądrość Syracha 3,26"; 
    $Aforyzm[] = "\"Bądź skory do słuchania, a odpowiadaj po namyśle.\" – Mądrość Syracha 5,11"; 
    $Aforyzm[] = "\"Nigdy nie powtarzaj słów zasłyszanych, a nic na tym nie stracisz.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Niesłuszny gniew nie może być usprawiedliwiony, przebranie miary w gniewie jest jego upadkiem.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Nie zazdrość chwały grzesznikowi, nie wiesz bowiem, jaka będzie jego zguba.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Póki żyjesz i tchnienie jest w Tobie, nikomu nie dawaj nad sobą władzy.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Przy piciu wina nie bądź zbyt odważny, albowiem ono zgubiło wielu.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Ubogi będzie poważany z powodu swej wiedzy, a bogaty dzięki swej zamożności.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Wychowuj syna swego i używaj do pracy, abyś nie został zaskoczony jego bezczelnością.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Zazdrość i gniew skracają dni, a zmartwienie sprowadza przedwczesną starość.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Bądź skory do słuchania, a odpowiadaj po namyśle.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Koń nieujeżdżony jest narowisty, a syn zostawiony samemu sobie staje się zuchwały.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Kto miłuje swego syna, często używa na niego rózgi, aby na końcu mógł się nim cieszyć.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Masz dzieci? Wychowuj je, zginaj im karki do młodości.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Nic nie czyń bez zastanowienie, a nie będziesz żałował swego czynu.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Nie bądź odważny w języku, a gnuśny i leniwy w swych czynach.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Nie czyń zła, aby Cię zło nie pochłonęło.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Nie miej upodobanie w życiu wystawnym, abyś się nie uwikłał w jego wydatki.\" – Mądrość Syracha"; 
    $Aforyzm[] = "\"Polaków nie zdobywa się groźbą, ale sercem.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Światu potrzeba dziś więcej wrażliwych serc niż zimnej stali.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Bóg szanuje wolność woli człowieka aż do granic grzechu.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Z drobiazgów życiowych, wykonanych wielkim sercem powstaje wielkość człowieka.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Nie wystarczy urodzić się człowiekiem, trzeba jeszcze być człowiekiem.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Nie ma prawdy bez odwagi wyznawania jej przed ludźmi.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Polska albo będzie trzeźwa, albo jej nie będzie wcale.\" - prymas Stefan Wyszyński"; 
    $Aforyzm[] = "\"Dojrzałość człowieka określa cena, jaką przychodzi mu za nią zapłacić.\" - ?"; 
    $Aforyzm[] = "\"Człowiek uczciwy to ktoś, z kim można grać w szachy przez telefon.\" - ?"; 
    $Aforyzm[] = "\"Jeśli ludzie źle o tobie mówią, żyj tak, aby nikt im nie uwierzył.\" - ?"; 
    $Aforyzm[] = "\"Sprawiedliwość jest ważniejsza od prawa.\" - ?"; 
    $Aforyzm[] = "\"Nie pomaga się ludziom, robiąc za nich to, co sami mają robić.\" - Abraham Lincoln (16 prezydent USA)"; 
    $Aforyzm[] = "\"Każda praca jest możliwa do wykonania jeśli podzielić ją na małe odcinki.\" - Abraham Lincoln (16 prezydent USA)"; 
    $Aforyzm[] = "\"Podstawowym zadaniem rządu powinna być obrona obywateli, nie sterowanie ich życiem.\" - Ronald Regan (40 prezydent USA)"; 
    $Aforyzm[] = "\"Polityka uważana jest za drugi najstarszy zawód świata. Jeśli się zastanowić, okazuje się, że ma sporo wspólnego z pierwszym zawodem.\" - Ronald Regan (40 prezydent USA)"; 
    $Aforyzm[] = "\"Pokolenie, które ignoruje historię nie ma przeszłości - ani przyszłości.\" - Robert A. Heinlein"; 
    $Aforyzm[] = "\"Za wszystkie głupstwa królów płacą ich narody.\" - Horacy"; 
    $Aforyzm[] = "\"Jesteśmy tym, co w swoim życiu powtarzamy.\" - Arystoteles"; 
    $Aforyzm[] = "\"Ten kto ma odwagę sądzić samego siebie, staje się coraz lepszy.\" - Albert Schweitzer"; 
    $Aforyzm[] = "\"Dobroć nudzi, gdy nie mamy jej w sobie.\" - Stefan Kisielewski"; 
    $Aforyzm[] = "\"Powinno się być dobrym jak chleb.\" - Adam Chmielowski"; 
    $Aforyzm[] = "\"Kto wierzy w obecność dobra w drugim człowieku, rozbudza je w nim.\" - Jean-Paul Sartre"; 
    $Aforyzm[] = "\"Nie wystarczy wierzyć, aby być dobrym. Diabeł na pewno nie jest ateistą.\" - Marie von Ebner-Eschenbach"; 
    $Aforyzm[] = "\"Ludzie stają się dobrzy przez ćwiczenie i praktykowanie dobroci; rzadko zdarza się człowiek dobry z natury.\" - Demokryt z Abdery"; 
    $Aforyzm[] = "\"Nie zgadzam się z tobą, ale zawsze bronił będę twego prawa do posiadania własnego zdania.\" - François-Marie Arouet (Voltaire)"; 
    $Aforyzm[] = "\"Ty możesz robić to, czego ja nie potrafię. Ja mogę robić to, co się tobie nie udaje. Wspólnie możemy dla Pana Boga dokonać czegoś zupełnie wspaniałego.\" - Matka Teresa z Kalkuty"; 
    $Aforyzm[] = "\"Wolność jest to prawo czynienia wszystkiego, co nie szkodzi innym.\" - Karol Marks"; 
    $Aforyzm[] = "\"Rób nie to, co najtrudniej, ani to, co najłatwiej, lecz to, co najsłuszniej.\" - Stanisław Brzozowski"; 
    $Aforyzm[] = "\"Odpowiadaj dobrem na zło, a zniszczysz w podłym człowieku zadowolenie ze zła.\" - Lew Tołstoj"; 
    $Aforyzm[] = "\"Nie ma pokoju bez sprawiedliwości, nie ma sprawiedliwości bez przebaczenia.\" - Jan Paweł II"; 
    $Aforyzm[] = "\"Kto wyświadcza dobrodziejstwa, naśladuje Boga; lichwiarzy, kto żąda za nie zapłaty.\" - Seneka Młodszy"; 
    $Aforyzm[] = "\"Spłacaj każdy dług tak, jakby sam Bóg wystawił ci rachunek.\" - Ralph Waldo Emerson"; 
    $Aforyzm[] = "\"Tam gdzie chodzi o to co sprawiedliwe, piękne i dobre, nie powinniśmy troszczyć się o opinie ogółu.\" - Sokrates"; 
    $Aforyzm[] = "\"Dawać to nie znaczy tracić.\" - Antoine Marie Roger de Saint-Exupéry"; 
    $Aforyzm[] = "\"Brudne środki uświniają cel.\" - Tadeusz Kotarbiński"; 
    $Aforyzm[] = "\"Anioł nigdy nie upada. Diabeł upada tak nisko, że już nigdy się nie podniesie. Człowiek upada i powstaje.\" - Fiodor Dostojewski"; 
    $Aforyzm[] = "\"Mądrość bez prostoty jest chytrością i złością.\" - Piotr Skarga"; 
    $Aforyzm[] = "\"Dobro to nie jest wiedza, to jest czyn.\" - Romain Rolland"; 
    $Aforyzm[] = "\"Dla triumfu zła potrzeba jedynie, aby dobrzy ludzie nic nie robili.\" - Edmund Burke"; 
    $Aforyzm[] = "\"Lepsza cnota w błocie niż niecnota w złocie.\" - Mikołaj Rej"; 
    $Aforyzm[] = "\"Ludzie dobrzy trudności się nie lękają, a przy przeciwnościach nie stękają.\" - Paul Valery"; 
    $Aforyzm[] = "\"Człowiek szlachetny nie szafuje obietnicami, lecz czyni więcej, niż przyrzekł.\" - Konfucjusz"; 
    $Aforyzm[] = "\"I dobro powinno być dobrze wyważone! Czasami drzewa łamią się pod ciężarem owoców.\" - Valeriu Butulescu"; 
    $Aforyzm[] = "\"Gdy dasz biedakowi troszkę, Bóg odda ci dużo.\" - przysłowie afrykańskie"; 
    $Aforyzm[] = "\"Bądź bezstronny, a ramię wagi przechyli się na twoją korzyść.\" - Valeriu Butulescu"; 
    $Aforyzm[] = "\"Pokora nie jest słabością, ale wielką potęgą człowieka, dlatego, ze miłość jest potęgą.\" - ks. Jan Twardowski"; 
    $Aforyzm[] = "\"Siła człowieka nie polega na tym, że nigdy nie upada, ale na tym, że potrafi się podnosić.\" - Konfucjusz"; 
    $Aforyzm[] = "\"Grzech ma tylko początek, nigdy końca.\" - Homer"; 
    $Aforyzm[] = "\"Królem jestem ludzi, nie sumienia.\" - Stefan Batory"; 
    $Aforyzm[] = "\"Winnych niech własne potępi sumienie.\" - Juliusz Słowacki"; 
    $Aforyzm[] = "\"Lęk człowieka przed śmiercią jest świadomością grzechu.\" - Lew Tołstoj"; 
    $Aforyzm[] = "\"Tylko zacni ludzie zdolni są do prawdziwej miłości; źli zaczynają od rozpusty i kończą na niej.\" - Józef Ignacy Kraszewski"; 
    $Aforyzm[] = "\"Sumienie można ukryć przed obcymi, ale nie przed sobą, uciec od własnego sumienia jest tym samym, co ucieczka od samego siebie - jedno i drugie zawsze nas dogoni.\" - św. Augustyn"; 
    $Aforyzm[] = "\"Sumienie to tylko cichy głosik, który szepce, że ktoś patrzy.\" - Julian Tuwim"; 
    $Aforyzm[] = "\"Nie znam większego grzechu niż uciskanie słabszych w imieniu Boga.\" - Mahatma Gandhi"; 
    $Aforyzm[] = "\"Sumienie człowieka jest myśleniem Boga.\" - Victor Hugo"; 
    $Aforyzm[] = "\"Właśnie wolna wola mówi nam, że pewnych rzeczy nie wolno.\" - św. Augustyn"; 
    $Aforyzm[] = "\"Sumienie dąży do dobra, wystarczy go posłuchać.\" - Sokrates"; 
    $Aforyzm[] = "\"Pokora i wstyd po uczynionym grzechu daleko są milsze Bogu niż pycha po spełnieniu dobrego uczynku.\" - św. Augustyn"; 
    $Aforyzm[] = "\"Ten, kto popełnia grzech, jest człowiekiem; ten, kto nad tym boleje, jest świętym; ten, kto się tym szczyci, jest szatanem.\" - Margaret Fuller"; 
    $Aforyzm[] = "\"Nawet tam gdzie nie działa prawo, pozostaje jeszcze sumienie.\" - Publiusz Syrus"; 
    $Aforyzm[] = "\"Grzech leży zawsze tylko na drodze od myśli do czynu.\" - Zofia Nałkowska"; 
    $Aforyzm[] = "\"Prawo do błędów nie rozgrzesza.\" - Kazimierz Chyła"; 
    $Aforyzm[] = "\"Gościem tu jesteś i wędrowcem. Ojczyznę masz w niebiosach.\" - św. Jan Chryzostom"; 
    $Aforyzm[] = "\"Człowiek tak jak nie może sam siebie stworzyć, tak nie może sam siebie uszczęśliwić.\" - św. Augustyn"; 
    $Aforyzm[] = "\"To nie nazwisko nadaje znaczenia człowiekowi, ale człowiek nazwisku. \" - Agnieszka Lisak"; 
    $Aforyzm[] = "\"Czasem człowiek musi przejść przez piekło, by zmienić się w anioła.\" - Agnieszka Lisak"; 
    $Aforyzm[] = "\"Cechą wielkich ludzi jest to, że stawiają innym o wiele mniejsze wymagania niż sobie.\" - Marie von Ebner-Eschenbach"; 
    $Aforyzm[] = "\"Trudno jest być sobą, gdy się nie wie kim się jest.\" - Róża"; 
    $Aforyzm[] = "\"Gdy ludzie mogą postępować według własnej woli, zwykle pragną naśladować jedni drugich.\" - prawo Murphy`ego"; 
    $Aforyzm[] = "\"Masz szczęście - jesteś człowiekiem. Róża jest piękna, ale nie wie dlaczego i dla kogo jest piękna.\" - Michel Quoist"; 
    $Aforyzm[] = "\"Jak można kochać Boga, który jest niewidzialny, nie kochając człowieka, który jest obok nas.\" - Jan Paweł II"; 
    $Aforyzm[] = "\"Człowiek wydaje pieniądze, których nie ma, na rzeczy, których nie potrzebuje, by imponować ludziom, których nie lubi.\" - Danny Kaye"; 
    $Aforyzm[] = "\"Człowiek, który zgadza się ze wszystkimi, nie zasługuje na to, by ktokolwiek się z nim zgadzał.\" - Winston Churchill"; 
    $Aforyzm[] = "\"Pieniądz jest dla człowieka dobrym sługą, ale złym panem.\" - Aleksander Dumas (syn)"; 
    $Aforyzm[] = "\"Człowiek nie jest stworzony do klęski. Człowieka można zniszczyć, ale nie pokonać.\" - Ernest Hemingway"; 
    $Aforyzm[] = "\"Człowiek tyle razy umiera, ile razy traci swoich bliskich.\" - przysłowie"; 
    $Aforyzm[] = "\"Człowiek najgłośniej wydziera się w pieluszkach. Potem stopniowo spuszcza z tonu.\" - Horacy Safrin"; 
    $Aforyzm[] = "\"Największe świnie wymagają zazwyczaj od ludzi, aby byli aniołami.\" - Julian Tuwim"; 
    $Aforyzm[] = "\"Być może dla świata jesteś tylko człowiekiem, ale dla niektórych ludzi jesteś całym światem.\" - Gabriel Garcia Marquez"; 
    $Aforyzm[] = "\"Nie bójcie się słabości człowieka ani jego wielkości! Człowiek zawsze jest wielki, także w słabości.\" - Jan Paweł II"; 
    $Aforyzm[] = "\"Kiedy ideologie umierają, człowiek zmartwychwstaje.\" - Fritz Deppert"; 
    $Aforyzm[] = "\"Powiedz mi, kogo kochasz, a powiem ci, kim jesteś.\" - przysłowie"; 
    $Aforyzm[] = "\"Ludzie podobni są do wina: liche z latami się psuje, a dobre staje się coraz lepszym.\" - Cyceron"; 
    $Aforyzm[] = "\"Są dwa rodzaje ludzi: ci, co myślą, i ci, co się bawią.\" - Charles Louis de Montesquieu"; 
    $Aforyzm[] = "\"Siła małych ludzi leży w ich liczbie.\" - Alberto Moravia"; 
    $Aforyzm[] = "\"Rewolucje to nie przyszłość świata. To jego agonia.\" - Andrzej Urbańczyk"; 
    $Aforyzm[] = "\"Relatywizm moralny to grzech kardynalny XX wieku i powód, dla którego w stuleciu tym wydarzyło się tyle przerażających nieszczęść i dokonało zniszczeń.\" - Paul Johnson"; 
    $Aforyzm[] = "\"Ci, którzy nie znają swojej historii, są skazani na jej powtarzanie.\" - Jose Ortegay Gasset"; 
    $Aforyzm[] = "\"Historia uczy, że demokracja bez wartości łatwo przeradza się w jawny lub zakamuflowany totalitaryzm.\" - Jan Paweł II"; 
    $Aforyzm[] = "\"Kto nie zna historii Polski - ten tęskni do `Europy`.\" - Roman Gorzelsk"; 
    $Aforyzm[] = "\"Gdy pieniądze mówią, prawda milczy.\" - przysłowie rosyjskie"; 
    $Aforyzm[] = "\"Prawda jest daleko bardziej potężna niż jakakolwiek broń masowej zagłady.\" - Mahatma Gandhi"; 
    $Aforyzm[] = "\"Nie lękam się tego, co mogą mi zrobić ludzie, kiedy mówię prawdę. Boję się tego, co zrobiłby mi Bóg, gdybym skłamał.\" - św. Jan Bosco"; 
    $Aforyzm[] = "\"Szczerość jest jeszcze trudniejsza od matematyki.\" - Jan Kurczab"; 
    $Aforyzm[] = "\"Nowego kłamstwa słucha się chętniej aniżeli starej prawdy.\" - Antoni Czechow"; 
    $Aforyzm[] = "\"Największym hołdem jaki możemy złożyć prawdzie, jest posiłkować się nią.\" - Ralph Waldo Emerson"; 
    $Aforyzm[] = "\"Przyzwyczajaj swój umysł do wątpienia, a serce do zgodności. Poznawaj ludzi i miej odwagę dla dobra twego bliźniego mówić prawdę.\" - Georg Christoph Lichtenberg"; 
    $Aforyzm[] = "\"W całym życiu szanuj prawdę tak, by twoje słowa były bardziej wiarygodne od przyrzeczeń innych.\" - Sokrates"; 
    $Aforyzm[] = "\"Prawda jest gorzkim lekarstwem. Kto nie łyka go dobrowolnie, temu grozi przymusowe karmienie.\" - Ilona Bodden"; 
    $Aforyzm[] = "\"Kłamstwo, głoszone jako prawda, doprowadza do wściekłości.\" - Mikołaj Gogol"; 
    $Aforyzm[] = "\"Kłamstwo wynika ze zwątpienia w atrakcyjność prawdy.\" - Stefan Kisielewski"; 
    $Aforyzm[] = "\"Prawdą jest to, co wytrzyma próbę doświadczenia.\" - Albert Einstein"; 
    $Aforyzm[] = "\"Czas wszystko na jaw wydobędzie.\" - przysłowie"; 
    $Aforyzm[] = "\"Bóg jest Prawdą. I kto szuka prawdy, ten szuka Boga, choćby o tym nie wiedział. \" - św. Teresa Benedykta od Krzyża (Edyta Stein)"; 
    $Aforyzm[] = "\"Błędy to droga do prawdy.\" - Fiodor Dostojewski"; 
    $Aforyzm[] = "\"Prawda leży tam gdzie powinna, tylko my szukamy jej nie tam gdzie trzeba.\" - Kazimierz Matan"; 
    $Aforyzm[] = "\"Być wolnym to móc nie kłamać.\" - Albert Camus"; 
    $Aforyzm[] = "\"Ludzie od czasu do czasu potykają się o prawdę, ale większość z nich podnosi się i pędzi, jakby nic się nie stało.\" - Winston Churchill"; 
    $Aforyzm[] = "\"Prawda istnieje. Wymyśla się kłamstwo.\" - Georges Braque"; 
    $Aforyzm[] = "\"Sumienie jedno prawdę mówi, a gęba ją pożuje i kłamstwo na świat wypluje.\" - Henryk Sienkiewicz"; 
    $Aforyzm[] = "\"Łgarzowi nikt nie wierzy tylko czasem on sam sobie.\" - Aleksander Fredro"; 
    $Aforyzm[] = "\"Każda rzecz ma dwie strony. Fanatycy widzą tylko jedną.\" - R. Schutzbach"; 
    $Aforyzm[] = "\"Ten, kto kłamie w twoim interesie, będzie kłamał i przeciw tobie.\" - Edward Morgan Forster"; 
    $Aforyzm[] = "\"Półprawda jest całym kłamstwem.\" - Edward Morgan Forster"; 
    $Aforyzm[] = "\"Umiesz mówić prawdę? Naucz się też jej słuchać.\" - Józef Ignacy Kraszewski"; 
    $Aforyzm[] = "\"Prawda jest jak mina; czasami wybucha pod tym, kto ją zakopał.\" - Nicolae Iorga"; 
    $Aforyzm[] = "\"Człowiek, który nie robi błędów, zwykle nie robi niczego.\" - Edward John Phelps"; 
    $Aforyzm[] = "\"Geniusz to wynik 1 procenta natchnienia i 99 procent wypocenia.\" - Thomas Alva Edison"; 
    $Aforyzm[] = "\"Praca tworzy zaporę przeciwko smutkowi.\" - Cyceron"; 
    $Aforyzm[] = "\"Boże, spraw by nam się chciało, tak jak nam się nie chce.\" - A. A. Milne, (Kubuś Puchatek)"; 
    $Aforyzm[] = "\"Lepiej zużywać się, niż rdzewieć.\" - Denis Diderot"; 
    $Aforyzm[] = "\"Potrzeba jest matką wynalazków, ale również babką próżniactwa.\" - Jean-Paul Sartre"; 
    $Aforyzm[] = "\"Szczęście należy sobie wypracować, a nie wymarzyć.\" - Elżbieta Grabosz"; 
    $Aforyzm[] = "\"Pracuj tak, jakby wszystko zależało od ciebie ale ufaj tak, jakby wszystko zależało od Boga.\" - św. Augustyn"; 
    $Aforyzm[] = "\"Człowiek ma w życiu albo wymówki, albo wyniki.\" - Jack Canfield i Mark Victor Hansen"; 
    $Aforyzm[] = "\"Lenistwo porusza się tak wolno, że ubóstwo szybko je dogania.\" - Benjamin Franklin"; 
    $Aforyzm[] = "\"Wystarczy tylko przyzwyczaić się do pracy i już bez niej nie można żyć.\" - Ludwik Pasteur"; 
    $Aforyzm[] = "\"Nie chciejcie ojczyzny, która was nic nie kosztuje.\" - Jan Paweł II"; 
    $Aforyzm[] = "\"Można urodzić się w Niemczech, ale niekiedy przykro przyznać się do tego.\" - Marlena Dietrich"; 
    $Aforyzm[] = "\"Patriotyzm nie polega na nienawiści wobec innych narodów, lecz na miłości do własnego.\" - Peter Rosegger"; 
    $Aforyzm[] = "\"W ojczyźnie ma się przeszłość i przyszłość. W obczyźnie tylko teraźniejszość.\" - Ludwik Hirszfeld"; 
    $Aforyzm[] = "\"Własne pieniądze wydaje się inaczej.\" - Krzysztof Zaręba"; 
    $Aforyzm[] = "\"Tylko dwie rzeczy są nieskończone: wszechświat i ludzka głupota, chociaż co do pierwszego nie mam pewności.\" – Albert Einstein"; 
    $Aforyzm[] = "\"Wszystko powinno być tak proste, jak to możliwe, ale nie prostsze.\" – Albert Einstein"; 
    $Aforyzm[] = "\"Wszystko jest możliwe pod warunkiem, że nie wiesz, o czym mówisz.\" - prawo Murphy`ego"; 
    $Aforyzm[] = "\"Nie ma rzeczy niemożliwych dla kogoś, kto nie musi ich sam robić.\" - prawo Murphy`ego"; 
    $Aforyzm[] = "\"Umiejętność dokonywania trafnych wyborów jest Błogosławieństwem Bożym\" - Jan T. Biernat"; 
    $Aforyzm[] = "\"Wszelka przyjemność jest dobra, ale nie każda jest godna wyboru.\" - Epikur z Samos"; 
    $Aforyzm[] = "\"Długie szaty krępują ciało, a bogactwa duszę.\" - Sokrates (jeden z największych filozofów greckich)"; 
    $Aforyzm[] = "\"Nie warto żyć życiem przez nas niepoznanym.\" - Sokrates (jeden z największych filozofów greckich)"; 
    $Aforyzm[] = "\"Najmądrzejszy jest, który wie czego nie wie.\" - Sokrates (jeden z największych filozofów greckich)"; 
    $Aforyzm[] = "\"Dziesięcioro przykazań jest tylko dlatego tak zwięzłe, jasne i zrozumiałe, że powstało bez pomocy ekspertów i doradców.\" - Charles de Gaulle (francuski polityk i teoretyk wojskowości)"; 
    $Aforyzm[] = "\"Właściwością człowieka jest błądzić, głupiego - w błędzie trwać.\" - Cyceron (najwybitniejszy mówca rzymski, popularyzator filozofii greckiej)"; 
    $Aforyzm[] = "\"Nie wystarczy dużo wiedzieć, żeby być mądrym.\" - Heraklit"; 
    $Aforyzm[] = "\"Milczący nie znaczy mądry. Bywają szuflady zamknięte na klucz, choć są puste.\" - Jean Giono"; 
    $Aforyzm[] = "\"Utopia zawsze kończy się przemocą.\" – Karl Popper (filozof)"; 
    return $Aforyzm[mt_rand(0, count($Aforyzm)-1)]; 
    /* 
      Legenda: 
        mt_rand()                - funkcja generuje liczbę losową z przedziału od 0 do liczby określonej za pomocą funkcji count(zmienna_tablicowa) - 1. 
        count(zmienna_tablicowa) - podaje liczbę określającą ilość elementów z których składa się tablica. 
     */ 
  } 
?> 
<BODY> 
     <CENTER> 
            Aforyzm dnia: <?php  echo tAforyzmDnia(); ?> 
     </CENTER> 
</BODY> 
</HTML> 