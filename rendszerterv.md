# Rendszerterv
---
## 1. A rendszer célja
    A rendszer célja, hogy az oldalon minden nap új kép legyen látható
    melyre a felhasználók minden nap tudjanak reagálni.

## 2. Projektterv
    A projekt során egyaránt figyelünk a frontend és a backend igényes kialakítására.
    A feladatokat elosztottuk egymást között, de segítünk a másiknak és a
    végeredményt együtt leellenőrizzük. Fejlesztésre HTML-t, CSS-t és PHP-t használunk és
    folyamatosan dokumentálunk mindent. 

    Frontend:
    - célja: a szép letisztult és felhasználó barát felület létrehozása

    Backend:
    - célja: a háttérbe lévő folyamatok kódjának megírása és hiba mentes működése

    Tesztelés:
    - célja: az apró hibák észrevétele és jelentése a backend/frontend fejlesztők felé
    
## Projektszerepkörök, felelőségek:
    Scrum masters: Takács Róbert
    Product owner: Takács Róbert
    Üzleti szereplő: Takács Róbert
     
## Projektmunkások és felelőségek:
    Frontend: Rokob Attila Adrián
    Backend: Petrovics Tímea
    Tesztelés: Szilágyi Debóra
     
## Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         2 |             2 |                      2 |                2 |                   2 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         3 |             3 |                      3 |                3 |                   3 |
|Program                  |Prototípus elkészítése                  |         4 |             8 |                      9 |                9 |                   9 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                7 |                   7 |
|Program                  |Tesztelés                               |         4 |             2 |                      3 |                3 |                   2 |

### 2.4 Mérföldkövek:
    09.29. elkészült a frontend vázlata
    10.06. befejeztük a dokumentációkat
    10.01. az első működő vázlat elkészülte

## 3. Üzleti folyamatok modellje
    Az emberek gyors és vicces kikapcsolódása a célunk. Gyors,
    mert internet és okos eszköz fejében bárhol és bármikor elérhető. 
    Vicces, mert a napi kép mindenképp humoros témában lesz.
## 4. Követelmények
    Létrehozásához HTML, CSS és PHP-t használunk. A kinézet és az oldal
    vázát a CSS és HTML kódok adják míg a funkciók a PHP kódok segítségével fognak működni.
    Továbbá adatbázist és Bootstrap is alkalmazunk az oldalon.

    A felhasználónak csupán egy webböngészőre van szüksége az oldal megtekintéshez.

### Funkcionális követelmények
| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Komment | Kommentek írása |
| K2 | Kép | Kép láthatósága|
| K3 | Backend | Gyors betöltés, hibamentes működés |

### Nemfunkcionális követelmények
| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Frontend | Letisztult és igényes külső |

### Támogatott eszközök:
    web böngészők pl.: Chrome, Firefox, Opera [...]
    Megtekinthető okos telefonokon; tableteken; laptopokon [...] bármin amin
    fut egy böngésző és van internet elérése.

## 5. Funkcionális terv
    A felhasználók, mint rendszerszereplők az oldalon
    főleg a hozzászólásokra reagálnak.

## 6. Fizikai környezet
    Az oldal bármely böngészőben könnyedén futtatható. Csupán
    internet elérésre és egy okos eszközre van szüksége a felhasználónak
    amely lehet telefon, számítógép vagy tablet is.
### Fejlesztő eszközök:
    - figma
    - trello
    - github
    - visual studio code

## 8. Architekturális terv
    Futtatásához egy okos eszközre melyben fut a böngésző és internetre van szükségünk.

## 9. Adatbázis terv
    Egy adatbázist használunk az oldalon amely a kép és a hozzászólások
    táblát tartalmazza. Az adatok eltárolása végett.

## 10. Implementációs terv
    - Egy PHP alapú
    - mysql segítségével adatokat tároló oldal
    - HTML/CSS vázú

## 11. Tesztterv
### Tesztesetek
 | Tesztterv | Elvárt eredmény | 
 | --- | --- |
 | Komment | Az írt komment és név megjelenik és olvasható | 
 | Kép megjelenés | A kép látható és nem torz |
 | Frontend | A vizuális megjelenés szépen megtekinthető minden eszközön |

### A tesztelési stratégia
    Csapatunk folyamatosan tesztel a fejlesztés során, hogy egy
    apró hiba se hagyja el figyelmünket és tökéletes munkát adjunk
    ki a kezünkből melyre büszkék lehetünk.
## 12. Telepítési terv
    A megtekintése nem igényel telepítést. Böngészőből futtatható.

## 13. Karbantartási terv
    - folyamatos hibajavítás
    - rendszeres képtár bővítés
    - korszerűsített design változtatások
