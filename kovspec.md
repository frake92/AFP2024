# Áttekintés
-html, javascript
-Webmarketplace fegyverek árulására(airsoft) -leírás, specifikáció, ára, évjárat, raktár mennyiség
-felhasználó - csak vásárolhasson - inventory, felhasználónév, jelszó, email cím, reg. idő, saját teljes név, szül. dátum(validáció)
-admin - csak feltölt, admin név, jelszó, rátekintés az összes fegyverre + felhasználókra rátekintés, jelszó változtatás felhasználónak, 
-bejelentkezés/regisztráció - felh, email, jelszó, jelszó mégegyszer, szül.dátum, teljes név.
-fegyverek listázása.

# 1. Bevezetés

Ez a dokumentum egy olyan webes marketplace rendszer követelményeit írja le, amely airsoft fegyverek árulására szolgál. A rendszernek külön adminisztrációs és vásárlói oldala lesz. Az admin feladata a termékek feltöltése és a felhasználói adatok kezelése, míg a vásárlók csak regisztráció után tudnak termékeket megtekinteni és vásárolni.

# 2. A jelenlegi helyzet leírása

Jelenleg az airsoft fegyverek vásárlása több különálló platformon történik, ahol az adminisztráció és a termékek kezelése nem teljesen egységes. Nincs egy olyan központosított felület, ahol az összes termék részletes specifikációkkal együtt megtalálható, és az adminisztrátorok egyszerűen kezelhetik az adatokat. A regisztráció és vásárlási folyamatok több lépcsősek és gyakran bonyolultak, ami csökkenti a felhasználói élményt.

# 3. Vágyálomrendszer

A cél egy olyan webes marketplace fejlesztése, amely egységes és felhasználóbarát felületet biztosít mind a vásárlók, mind az adminisztrátorok számára. Az alábbiakban a rendszer funkcionális követelményei találhatók.