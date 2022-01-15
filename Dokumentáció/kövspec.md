# követelmény specifikáció 

## Áttekintés 
Szeretnénk követni a piac alakulását, a vásárlói igények változását.
A vendégek véleményét a szolgáltatásainkról.
Ennek a kérdőívnek az a célja hogy a felhasználók regisztráció mentesen név nélkül tudják kitölteni gyorsan és egyszerűen, ezáltal látjuk a hiányosságainkat és tudjuk melyik területen fejlesszük a céget.

## Jelenlegi állapot.
Eddig csak szóban tudták kifejteni a véleményüket ezt sajnos rögzíteni nem lehetett ezáltal a vezetés nem kapott tudomást az esetleges hiányosságokról.
A bevételt talnulmányozva feltételezhetjük hogy van hiba csak azt nem tudjuk hogy mi is az a bizonyos hiba.

## Álom rendszer.
Ez a kérdőív megfelelő megoldás lenne hogy egy adatbázisban elmentsük név és regisztráció nélkül a felhasználói véleményeket.
Ezt módosítani csak a felső vezetés tudja tanulmányozni viszont a cégen belül bárki.
Ez az alkalmazás mindíg naprakészen rendelkezésre fog állni a felhasználók számára, ezt többször is ki lehet tölteni.
A kérdőív támogat minden böngészőt, mobilbarát mac-en is elérhető és tartalmaz egyéni válaszlehetőséget.
Sötét mód ki-be kapcsolásának lehetősége.
SSL-tanúsítvány védi az oldalt.

## Funkcionális követelmények.
Ürlapkezelés 
1. text mező
2. radio gombok
3. Submit gomb

Egy mysql adatbázisba a válaszok lementése és ezek publikus közzététele az oldalon.
Sötétmód.

## Követelt üzleti folyamat model
Miután beírtuk a böngészőbe hogy: www.bistorantkerdoiv.hu ez a kép fogad:
Figyelem! Ez a kép csak illusztráció, a végső alkalmazás ettől eltérő lehet.

## Követelmények listája
Modul | ID | Név | Verzió | Magyarázat
------------ | ------------- | ------------ | ----------- | -----------
Engedélyszint | K1 | Kérdőív kitöltése | 1.0 | Bárki kitöltheti a kérédőívet.
Módosítás | K2 | Kérdőív módosítása | 1.0 | Kizárólag az admin tudja módosítani a kérdőívet, manuálisan.
Engedélyszint | K3 | Értékelések megnlzése | 1.0 | Bárki megnézheti az értékeléseket.
Módosítás | K4 | Sötétmód ki-be kapcsolása | 1.0 | Bárki ki-be kapcsolhatja a sötétmódot.

## Szójegyzék
1. Text mező: Olyan beviteli mező ahol a felhasználó egyedi választ adhat.
2. Radio gombok: Olyan beviteli mező ahol a felhasználó az előre megadott válaszok közül egyet kiválaszthat.
3. Submit gomb: Adatok beküldése az ürlapról az adatbázisba.
4. Sötétmód: Fekete háttér fehér betűkkel, a felhasználó szemének kímélése érdekében.
