# Követelmény specifikáció

## Áttekintés

Szeretnénk követni a piac alakulását, a vásárlóu igények változását.
A vendégek véleményét a szolgáltatásainkról.
Ennek a kérdőívnek az a célja hogy a felhasználók regisztráció mentesen név nélkül kitudják tölteni gyorsan és egyszerűen, ezáltal látjuk a hiányosságainkat és tudjuk melyik területen fejlesszük a céget.

## Jelelnlegi állapot

Eddig cak szóban tudták kifejteni a véleményüket ezt sajnos rögzíteni nem 
lehetett ezáltal a vezetés nem kapott tudomást az esetleges hiányosságokról.
A bevételt tanulmányozva feltételezhetjük hogy van hiba csak azt nem tudjuk hogy mi is az a bizonyos hiba.

## Vágyálom rendszer 

Ez a kérdőiv megfelelő emgoldás lenne hogy egy adatbázisban elemntsük név
és regisztráció nélkül a felhasználói véleményeket.
Ezt módosítani csak a felső vezets tudja tanulmányozni viszont a cégen belül bárki.
Ez az alkalmazás mindig naprakészen rendelkezésre fog állni a felhasználók számára, ezt többször is ki lehet tölteni.
A kérdőiv támogat minden böngészőt, mobilbarát mac-en is elérhető és tartalmaz egyéni válaszlehetőségeket.
Sötét mód ki-be kapcsolásának lehetősége.
SSL-tanúsítvány védi az oldalt.

## Funkcionális követelmények

Űrlapkezelés
1. Text mezők
2. Radio gombok (Csak egy válaszlehetőség kiválasztása)
3. Submit típusú gomb, melyel beküldjük az adatokat az űrlapról

Sötét mód
1. Egy toggle típusú gomb amelyet lehet on-off(be-ki) módba kapcsolni

Egy mysql adatbázisba a válaszok lementése, ehhez tartozó esetlegesen beírt név lementése és ezek publikus közzététele az oldalon.


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