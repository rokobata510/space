| Teszteset                   | Elvárt eredmény             |
 |-----------------------------|-----------------------------|
 | Program futás               | Sikeres betöltés.           | 
 | Hozzászólás                 | Sikeres hozzászólás feltöltés. | 
 | Username megadás            | Sikeresen megadható.        | 
 | Kép megjelenítés            | Sikeres betöltés/Sikeres napi változás           |
 | Nem megfelelő formátumú szöveg tiltása | Például kép formátumot nem lehet kommentbe helyezni  |
 

  Tesztelő: Rokob Attila

  Tesztelés dátuma: 2022.október.13. 

---

| Tesztszám | Rövid leírás                     | Várt eredmény                                         | Eredmény                              | Megjegyzés                   |
|-----------|----------------------------------|-------------------------------------------------------|---------------------------------------|------------------------------|
| Teszt #01 | Oldal sikeres betöltése.         | Sikeres betöltés.                                     | Sikeres betöltés.                     | Nincs fennakadás.            |
| Teszt #02 | Hozzászólás írása.               | Hozzászólás megjelenik a hozzásólások között.         | A művelet végrehajtódott.             | Nem találtam hibát.          |
| Teszt #03 | Túl hosszú hozzászólás megadása. | Hozzászólás lekorlátozása 300 karakterig.             | A korlátozott mennyiségű szöveg jelenik meg.| Nem jelentkezett hiba. |
| Teszt #04 | Username beállítása.             | Megjelenik az username hozzászólásnál.                | Az username megjelenik.               | Sikeresen lefutott.          | 
| Teszt #05 | Kép sikeres megjelenítése.       | Megjeleníti az aznapi képet.                          | Sikeresen betölt.                     | Sikeresen betölt             |
| Teszt #06 | Kép fájl hozzászólásként.        | Nem szabad engednie ilyen formátumot.                 | Nem engedélyezi.                      | Helyesen működik.            |
| Teszt #07 | Kép változás                     | A kép naponta változik                                | Megváltozott a kép                    | Helyesen működik.            |
| Teszt #08 | Hozzászólás törlés               | A hozzászólások naponta törlődnek                     | Törlődtek a hozzászólások             | Helyesen működik.            |
| Teszt #09 | Adatbázis adat tárolása          | A hozzászólások szövege tárolódik az adatbázisban     | Adat tárolás                          | Helyesen működik.            |
