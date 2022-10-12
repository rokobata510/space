# Funkcionális specifikáció
___
## 1. Jelenlegi helyzet leírása
        A 21. században rengeteg weboldal található, amiknek célja az emberek szórakoztatása. Mégis
    csapatunk úgy gondolta, hogy a mai fiataloknak még több ilyen oldalra van szüksége. A humort
    központban tartó oldalunkon a kommunikáció és a vizualitás is egyaránt fontos tényező. Interaktív
    visszajelzési lehetőségek nyújtása segít a felhasználónak a kapcsolatépítésben és 
    további lehetőség arra is, hogy együtt nevessenek a szürke hétköznapokban. Az oldal előnye,
    hogy nem tartalmaz felesleges figyelem elterelő média tartalmat -ellenben a legtöbb oldallal-
    így egyből a lényegre tudunk összpontosítani fölösleges és bonyolult menü sorok nélkül.


## 2. Vágyállomrendszer leírása
       Csapatunk egy olyan program írására határozta el magát, amely egy jól megtervezett,
    bőségesen dokumentált, funkcionális weboldal, egy reszponzív felületen,
    robusztus adatbázissal, különböző biztonsági hibákkal szemben védett, önműködő
    kép letöltéssel, a jövőben különböző szociális médiákra történő integrált
    megosztást támogatva. Az oldalon napi frissítéssel egy kép lesz látható így
    ösztönözve a felhasználót arra, hogy napi rendszerességgel visszatérjen.


## 3. Jelenlegi üzleti folyamatok modellje
        A mai világban mindenhol hirdetésekbe botlunk, amennyiben ingyen szeretnénk
    böngészni az interneten. Ez sok felesleges külső lényegtelen ingerhatással valamint
    információval jár. Célunk, hogy amennyiben csupán pár perces kikapcsolódásra
    lenne szükségünk azt a sok hirdetés és felesleges tájékoztatás befogadása nélkül
    tegye meg az felünkre ellátogató felhasználó. Mivel nem igényel regisztrációt,
    hogy megtekintése bárki az oldalt így még letisztultabb és lényegre törőbb
    az oldal célja, hogy egy adott fotóra bárki kényelmesen, gyorsan
    és megkötések nélkül tudjon reagálni.


## 4. Igényelt üzleti folyamatok modellje

![Untitled Diagram](https://github.com/rokobata510/space/blob/main/pics/Untitled%20Diagram.jpg?raw=true)
  
  
## 5. Követelménylista
| Id | Modul | Név | Leírás |    |
| :---: | --- | --- | --- | --- |
| K1 | Felület | Főoldal | A felhasználó itt tud hozzászólást írni. | |
| K2 | Felület | Főoldal | Itt jelenik meg a napi kép. |                                         |
| K3 | Adatbázis | Adat tárolás | A hozzászólások szövege itt tárolódik a képpel együtt. |       |
| K4 | Kód  | HTML                |  CSS                         |  PHP                          |
|    |     | az oldal vázát adja | az oldal kinézetéért felelős | a funkciók működéséért felel  |


## 6. Használati esetek
    - az oldalra látogatóknak lehetőséget adunk hozzászólásírásra így
        kreativitásuknak semmi sem szabva határt lehetőségük van
        véleményük szabad kifejtésére igényes keretek között
    - a kép megtekintése és vizuális felfogása


## 7. Megfeleltetés, hogyan fedik le a használati eseteket, a követelményeket
    1. A felhasználót az oldal megnyitása után egy letisztult oldallal találják
        szemben magukat mely jobb oldalán egy hozzászólás fal található. Bal
        oldalon pedig az aktuális kép tekinthető meg.
    2. Az üzenő falon lehet olvasni más felhasználók megnyilvánulásait és
        lehetőség van hozzászólás írására is.
    3. A képpel interaktálni nem lehet csupán megtekinteni azt.
    
    
## 8. Képernyőtervek
    Terveink szerint az oldalon látható lesz a kép igényes keretek között és egy
    megnyilvánulások sor ahol a napi képre tudnak a felhasználók reagálni.
   __________
   Végleges kinézet terv:
   
   ![kép](https://user-images.githubusercontent.com/114166697/195412573-3f7f6ba4-c623-4824-829d-97e6ee23b59b.png)
   
   
   __________
   Idéglenes kinézet terv:
   
  ![284927246_873243980751058_2161368785832703537_n](https://github.com/rokobata510/space/blob/main/pics/284927246_873243980751058_2161368785832703537_n.png?raw=true)



## 9. Forgatókönyvek
    - Az oldal megnyitása során egyből a kép és a hozzászólás panel fogadja a felhasználót. 
    - Az oldal jobb oldalán látható hozzászólás panel közé a felhasználó is tud véleményt írni.
      Valamint egy megkülönböztető felhasználó nevet szintén tud magának beírni
      ami alatt később a hozzászólása is olvasható lesz.
    - A felhasználó által látható elemek:
        Szövegdobozok.
            - felhasználónév
            - hozzászólás panel
        Küldés gomb.
            - beküldi a megfogalmazott
                hozzászólást
        Képkeret benne a kép


## 10. Funkció - követelmény megfeleltetése
  | Id | Követelmény | Funkció |
  | :---: | --- | --- |
  | K1 | Felhasználó név láthatósága | Hozzászólások közötti különbségtétel |
  | K2 | Napi új kép | Minden nap új fotó láthatósága |
  | K3 | Hozzászólásírás | Mindenki el tudja olvasni a napi képre írt gondolataid |
  | K4 | Igényes kinézet | A könnyebb átláthatóság és tájékozódás az oldalon |
  | K5 | Gyors | Gyors betöltés és kezelés |
  | K6 | Sokszínű használat | Rengeteg lehetőséget rejt magában az oldal |


## 11 Fogalomszótár
    - WEBOLDAL: jelen helyzetben egy felület melyen kommunikációra
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
