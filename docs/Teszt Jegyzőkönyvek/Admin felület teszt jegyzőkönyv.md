# Admin felület teszt jegyzőkönyv

Tesztelést végezte: Takács Márk 
Operációs rendszer: Windows 11 
Böngésző: Brave 
Dátum: 2024. 10. 08. 
Talált hibák száma: 0

## Admin funkciók tesztelése

### Új fegyver feltöltés

+  Az admin részleg automatikusan az "új fegyver hozzáadása" részleghez dobja fel, az adminokat.
+ Itt négy adatot kell megadni egy fegyver hozzáadásához.
+ Fegyver neve: Megadják a fegvyer hivatalos nevét.
+ Ár: Hozzádunk egy árat.
+ Leirás: Admin meg adhatja a a fegyver leirást hosszan, amit eltárolunk longtext-be.
+ kép url: Megadjuk a kép path-ét amivel meg tudjuk jeleniteni a képeket a weboldalon.
+ végezetül egy hozzáadás gomb amivel feltöltjük az adatbázisra az adatokat, és meg jelenitjük a piac oldalon.

### Felhasználók megtekintése

+ Ki listázza az összes felhasználót a weboldalon.
+ Az adminok látják az id-t, felhasználóneveket, email-eket, születési dátumot és rangot.
+ Az admin képes törölni illetve módositani adott felhasználót.
+ Módositáskor képesek vagyunk felhasználónevet, jelszót, emailt és születési dátumot.
+ Törléskor a felhasználó eltűnik a weboldalról és látógató lehet csak.

### Kijelentkezés

+ A "Kijelentkezés" gombra nyomva a admin kijelentkezik és visszakerül a bejelentkező oldalra.
