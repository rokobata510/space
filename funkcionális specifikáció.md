# Funkcionális specifikáció
___
## 1. Jelenlegi helyzet leírása
    Csapatunk úgy gondolta, hogy a mai fiataloknak több szórakozásra van szüksége. Ehhez
    szeretnénk nekik biztosítnai egy oldalt, ahol szórakozhatnak egymással. Ezért szeretnénk egy humoros
    képes weboldalt létrehozni számukra.

## 2. Vágyállomrendszer leírása
    Jól megtervezett, bőségesen dokumentált, funkcionális weboldal, egy reszponzív felületen,
    robusztus adatbázissal, különböző biztonsági hibákkal szemben védett, automatikus kép letöltéssel, a jövőben
    különböző szociális médiákra történő integrált megosztást támogatva.

## 3. Jelenlegi üzleti folyamatok modellje
    Amennyiben pár perces kikapcsolódásra lenne szüksége az embernek a szürke hétköznapokban
    azt csupán sok reklám és felesleges információ befogadásával teheti meg. Ám oldalunk
    nagy előnye, hogy sem regisztrációt sem reklámokat nem tartalmaz így egy adott fotóra
    bárki kényelmesen, gyorsan és megkötések nélkül tud reagálni.

## 4. Igényelt üzleti folyamatok modellje
    Az emberek gyors és vicces kikapcsolódása a célunk. Gyors,
    mert internet és okos eszköz fejében bárhol és bármikor elérhető. Vicces,
    mert a napi kép mindenképp humoros témában lesz.

## 5. Követelménylista

     - Létrehozásához HTML, CSS és PHP-t használunk. A kinézet és az oldal vázát a CSS és
          HTML kódok adják míg a funkciók a PHP kódok segítségével fognak működni. Továbbá adatbázist és
          Bootstrap  is alkalmazunk az oldalon.
     - A felhasználónak csupán egy webböngészőre van szüksége az oldal megtekintéshez.

## 6. Használati esetek
    A felhasználók az oldalon a minden nap frissülő képekre tudnak reagálni.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket
    A felhasználóknak lehetőségük adódik a napi kép alá kommentelni, amit az adatbázis tárol,
    illetve a naponta frissülő képek igényesen jelennek meg a felhasználóknak a HTML,
    CSS és PHP kódok segítségével. Így a használati eseteket lefedik az oldalra vonatkozó követelmények.

## 8. Képernyőtervek
    Terveink szerint az oldalon látható lesz a vicces kép igényes keretek között és egy
    komment sor ahol az az napi képre tudnak a felhasználók reagálni.

    https://www.figma.com/file/GClqbRRLOF1bgV5I41FAJa/test?node-id=0%3A1

## 9. Forgatókönyvek
    - Az oldal megnyitása során egyből a kép és a komment sor fogadja a felhasználót. 
    - Az oldal jobb oldalán látható kommentsor közé a felhasználó is tud kommentet írni.
      Valamint egy megkülönböztető felhasználó nevet szintén tud magának beírni
      ami alatt később a kommentje is olvasható lesz.

## 10. Funkció - követelmény megfeleltetése
  | Id | Követelmény | Funkció |
  | :---: | --- | --- |
  | K1 | Felhasználó név láthatósága | Kommentek közötti különbségtétel |
  | K2 | Napi új kép | Minden nap új fotó láthatósága |
  | K3 | Komment írás | Mindenki el tudja olvasni a napi képre írt gondolataid |
  | K4 | Igényes kinézet | A könnyebb átláthatóság és tájékozódás az oldalon |

## 11 Fogalomszótár
    - WEBOLDAL:  jelen helyzetben egy felület melyen kommunikációra
                 van lehetőség egy kép kapcsán.
    - HASZNÁLAT: a felhasználó megtekinti a humoros vagy szürreális fotót
                 majd kifejti gondolatait a fotóra adott reakciója alapján.
    - FRONT_END: a programoknak, weboldalaknak az a része, amelyik a
                 felhasználóval közvetlenül kapcsolatban van. Feladata az adatok
                 megjelenése, befogadása a felhasználó felől.
    - BACK_END:  a programoknak, weboldalaknak a hátsó,
                 a felhasználó elől rejtett, a tényleges számításokat végző része.
                 Feladata a front‑end felől érkező adatok feldolgozása,
                 és az eredményeknek a front‑end felé történő visszajuttatása.
