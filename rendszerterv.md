# Rendszerterv
---
## 1. A rendszer célja
        A rendszer célja, hogy az oldalra ellátogató felhasználóknak lehetőséget
    adjunk egy egységes napi képre való véleményadásra és kommunikációs kapcsolatok
    kialakítására a saját gondolatmenet leírásának opciójával. A képeket
    különféle kutatási és filozófiai mélységgel kerestük meg, hogy a megtekintő i
    számára tökéletes élményt nyújtson. A felület egyszerűségében rejti a szépségét
    és varázsát. Egyszerre tükröz eleganciát és humort. Stílusával görbe tükröt
    mutat saját magának valamint a világnak.
    
    
## 2. Projektterv
        A projekt során egyaránt figyelünk a frontend és a backend igényes felhasználóbarát
    kialakítására. A feladatokat elosztottuk egymást között, de mindenki részt
    vett bizonyos szinten minden fejlesztési szakaszban valamint segítünk a másiknak és a
    végeredményt együtt leellenőrizzük. Fejlesztésre HTML-t, CSS-t és PHP-t használunk a
    kódolásra. A Frontend megtervezésére külső designer program segítségét
    vettük igénybe. A folyamatokat végig folyamatosan dokumentálunk, amely könnyítette
    a csapatmunkát és az együtt való összedolgozást. 

    Frontend:
    - célja: a szép letisztult és felhasználó barát felület létrehozása

    Backend:
    - célja: a háttérbe lévő folyamatok kódjának megírása és hiba mentes működése

    Tesztelés:
    - célja: az apró hibák észrevétele és jelentése a backend/frontend fejlesztők felé
    
    
### 2.1 Projektszerepkörök, felelőségek:
    Scrum masters:
        Takács Róbert
    Product owner:
        Takács Róbert
    Üzleti szereplő:
        Takács Róbert
     
     
### 2.2 Projektmunkások és felelőségek:
    Frontend:
        elsődleges: Petrovics Tímea
        másodlagos: Rokob Attila Adrián
        harmadlagos: Szilágyi Debóra
    Backend:
        elsődleges: Rokob Attila Adrián
        másodlagos: Szilágyi Debóra
        harmadlagos: Petrovics Tímea
    Tesztelés:
        elsődleges: Szilágyi Debóra
        másodlagos: Petrovics Tímea
        harmadlagos: Rokob Attila Adrián
     
     
### 2.3 Ütemterv:
|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   2 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         3 |             3 |                      3 |                3 |                   3 |
|Program                  |Prototípus elkészítése                  |         4 |             8 |                      9 |                9 |                   9 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                7 |                   7 |
|Program                  |Tesztelés                               |         4 |             2 |                      3 |                3 |                   2 |


### 2.4 Mérföldkövek:
    09. 27. megszületett az oldal célja
    09.29. elkészült a frontend vázlata
    10.06. befejeztük a dokumentációkat
    10.01. az első működő vázlat elkészülte
    10.02. elkezdtük a külalak kidolgozását
    10.07. végső tesztelések megkezdése
    10.10. utolsó javítások a dokumentációban 
    10.12. végleges változat elkészülte
    

## 3. Üzleti folyamatok modellje
        Az emberek gyors és vicces kikapcsolódása a célunk. Gyors,
    mert internet és okos eszköz fejében bárhol és bármikor elérhető. 
    Vicces, mert a napi kép mindenképp humoros témában lesz.
    
    
   ### 3.1 Üzleti szereplők
        Az oldal bármely böngészőn keresztül regisztráció nélkül megtekinthető
    és használható. Nem igényel szoftvertelepítést és internet kapcsolatot sem.
    Bár böngészőnek kell, lennie a felhasználó eszközén ez lehet
    egy alapböngésző pl.: Internet Explorer is. az a döntés, hogy
    miben nyitja meg az oldalt a felhasználó az teljesen rá van bízva.


   ### 3.2 Üzleti folyamatok
        Az oldal megnyitása után rögtön elérhetővé válik a hozzászólás
    írás lehetősége valamint a kép is azonnal láthatóvá válik. Nincsenek 
    korlátozások az oldalon véleménynyilvánítás téren (még) és beállítás
    menüre sincs szüksége a felhasználónak így is megkönnyítve az oldal
    kezelését.
    
    
## 4. Követelmények
        Létrejöttéhez csapatunk HTML, CSS és PHP-t használt. A kinézetet és az oldal
    vázát a CSS és HTML kódok adják melyre sok figyelmet szenteltünk
    míg a funkciók működésében a PHP kódok nyújtottak segítséget. Továbbá
    adatbázisban tároljuk a fotókat és kommenteket. Ám a Bootstrap alkalmazását
    sem felejtjük el. Fontos követelményünk volt továbbá, hogy a felhasználónak
    csupán egy webböngészőre legyen szüksége az oldal használatához.


### Funkcionális követelmények
| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Hozzászólás | Hozzászólás írásának lehetősége megszabott karakterszám betartásával |
| K2 | Kép | Kép láthatósága és minőségi kinézete az elvárt keretek között. |
| K3 | Backend | Gyors betöltés, hibamentes működés, szép kódolás |


### Nemfunkcionális követelmények
| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Frontend | Letisztult és igényes külső, amely könnye átlátható mégis illik az oldal egyedi tematikájába. |


### Támogatott eszközök:
    web böngészők pl.: Chrome, Firefox, Opera [...]
    Megtekinthető okos telefonokon; tableteken; laptopokon [...] 
    
    
## 5. Funkcionális terv
### 5.1 Rendszerszereplők
        A rendszer internet hiányában is működtethető importálás
    esemény megtörténte mellett. Jogosultsági körben
    a felhasználók között nem teszünk különbséget, mert
    a rendszer elvégez önmagától mindent (pl. törlés) amit
    az admin felhasználó tudna csinálni.
    
    
### 5.2 Menühierarchiák
        Az oldalunk célja az egyszerűség és a lényegre törés
    volt így nem helyeztünk el menü rendszert rajta. A menü rendszer
    csupán terelné a felhasználó figyelmét ebben az esetben szóval egy fölöslegesnek
    mondható rendszeri eszköz lett volna. A szoftver egy nagyon egyszerű menürendszert tartalmaz.


## 6. Fizikai környezet
  ### Vásárolt softwarekomponensek és külső rendszerek
        Nem igényel vásárolt szoftverkomponenst ugyanis
     webböngésző rendelkezés feltétele melett bárki futtatni tudja.
        
        
  ### Hardver topológia
        Az oldal gépen egy böngészőben könnyedén
     futtatható tökéletesen hiba nélkül.
     
     
  ### Fizikai alrendszerek
        Egy böngésző, amely az elektronikai eszközön fut
     abba lehetséges az oldal futtatása és megtekintése.
    
    
### Fejlesztő eszközök:
    - figma
    - trello
    - github
    - visual studio code


## 8. Architekturális terv 
### Webszerver
        A program importálás esetén nem igényel internet elérést így webszerver
    nélkül is megtekinthető, de későbbi fejlesztési tervek szerint viszont a fotók
    a webszerver segítségével fognak változni.


### Adatbázis rendszer
    Egy adatbázist használunk az oldalon:
       - a kép és a hozzászólások táblát tartalmazza.
  
 ![dasdasdadadsada.png](https://github.com/rokobata510/space/blob/main/pics/dasdasdadadsada.png?raw=true)


### A program elérése, kezelése
        A weblapböngésző feltétele mellett megtekinthető. Internetes
     link segítségével URL-en át(tervezett) ennek hiányába pedig
     localhost-on keresztül látható a főoldal XAMPP
     futtatásának feltétele mellett.


## 9. Adatbázis terv
    Egy adatbázist használunk az oldalon:
        - a kép és a hozzászólások táblát tartalmazza.
        
 ![asdasdasdasd.png](https://github.com/rokobata510/space/blob/main/pics/asdasdasdasd.png?raw=true)


## 10. Implementációs terv
    - Egy PHP alapú oldal, 
    - mysql segítségével adatokat tárol,
    - HTML/CSS vázú,
    - böngészőben megtekinthető,


## 11. Tesztterv
### Tesztesetek
 | Tesztterv | Elvárt eredmény | 
 | --- | --- |
 | Komment | Az írt komment és név megjelenik és olvasható | 
 | Kép megjelenés | A kép látható és nem torz |
 | Frontend | A vizuális megjelenés szépen megtekinthető minden eszközön |
 
    - továbbit lásd: Teszt.md

        A tesztelések célja, hogy a kódba és a vizuális megjelenésbe vétett
    hibákat észleljük és javítását mi hamarabb megkezdjük. A tesztelést minél
    több ember végzi, hogy minél több hiba megtalálásra leljen.


### A tesztelési jegyzőkönyv kitöltésére egy sablon:

    **Tesztelő:** Vezetéknév Keresztnév

    **Tesztelés dátuma:** Év.Hónap.Nap

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------
például. #01 | Kép | A kép látható és napi szinten változik,  | A kép változik | Nem találtam problémát.
... | ... | ... | ... | ...


### A tesztelési stratégia
        Csapatunk folyamatosan tesztel a fejlesztés során, hogy egy
    apró hiba se hagyja el figyelmünket és tökéletes munkát adjunk
    ki a kezünkből melyre büszkék lehetünk.
    
    
## 12. Telepítési terv
        A megtekintése nem igényel sem fizikai sem szoftveres
    telepítést. Okos eszközről könnyedén futtatható
    böngésző segítségével.


## 13. Karbantartási terv
    Fontos napi ellenőrzés:
        - az oldal betölt hibátlanul
        - a kép tökéletesen látható
        - a komment fal működik
    Alkalmanként ellenőrzési terv:
        - kód korszerűsítése
        - rendszeres képtárbővítés
        - korszerűsített designváltoztatások
