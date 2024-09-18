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

# 4. Jelenlegi üzleti folyamatok modellje

Jelenleg az airsoft fegyverek kereskedelme több webáruház és fizikai bolt kombinációjával zajlik. Az alábbiakban összefoglaljuk a jellemző folyamatokat:

  Felhasználói folyamatok:
        A vásárlók meglátogatják a különböző platformokat, amelyek nem biztosítanak egységes terméklistát vagy kategóriákat.
        A termékek megvásárlása több lépésben történik, ahol minden felhasználónak külön-külön fiókot kell létrehoznia.
        A vásárlás utáni információk (pl. inventory) nem mindig elérhetők egy helyen, így a felhasználók nem tudják egyszerűen nyomon követni, hogy milyen termékeket vásároltak.

  Adminisztrátori folyamatok:
        Az adminisztrátorok különböző platformokon töltik fel a termékeket és kezelik a vásárlói információkat.
        A termékek kezelése és a vásárlói adatok módosítása több lépcsős és időigényes folyamat.

# 5. Igényelt üzleti folyamatok modellje

A vágyott rendszer az alábbiak szerint optimalizálja az üzleti folyamatokat:

  Felhasználói folyamatok:
        A vásárlók egy központosított marketplace felületet használhatnak, ahol minden termék egységesen, részletes specifikációkkal elérhető.
        Regisztráció után a felhasználók bejelentkezhetnek, és a korábbi vásárlásaik alapján nyomon követhetik az inventory-jukat.
        Egyszerűbb vásárlási folyamat, ahol minden vásárló egy fiókot használhat az összes tranzakcióhoz.

  Adminisztrátori folyamatok:
        Az adminisztrátorok egyetlen felületen kezelhetik a termékeket és a felhasználói fiókokat.
        A rendszer lehetővé teszi a termékek egyszerű felvitelét, szerkesztését és törlését, valamint a felhasználói jelszavak módosítását.

# 6. Követelménylista

| Id  | Modul          | Név                   | Leírás                                                                                                                                                           |
| :---: | :--------------: | :---------------------: | :----------------------------------------------------------------------------------------------------------------------------------------------------------------: |
| K1  | Felhasználó    | Regisztráció          | A felhasználók a rendszerbe regisztrálhatnak felhasználónév, email, jelszó, teljes név és születési dátum megadásával. A rendszer validálja a születési dátumot. |
| K2  | Felhasználó    | Bejelentkezés         | A felhasználók bejelentkezhetnek felhasználónév vagy email és jelszó használatával.                                                                              |
| K3  | Felhasználó    | Termékek böngészése   | A felhasználók termékeket böngészhetnek és azok részletes adatait megtekinthetik (név, leírás, specifikációk, ár, évjárat, raktárkészlet).                       |
| K4  | Felhasználó    | Vásárlás              | A regisztrált és bejelentkezett felhasználók termékeket vásárolhatnak.                                                                                           |
| K5  | Felhasználó    | Inventory             | A felhasználók megtekinthetik a korábbi vásárlásaik listáját (inventory), amely tartalmazza a vásárolt termékek adatait.                                         |
| K6  | Adminisztrátor | Termékek kezelése     | Az adminisztrátorok új termékeket tölthetnek fel, meglévőket szerkeszthetnek, vagy törölhetnek.                                                                  |
| K7  | Adminisztrátor | Felhasználók kezelése | Az adminisztrátorok megtekinthetik a felhasználók adatait és szükség esetén megváltoztathatják a jelszavaikat.                                                   |
| K8  | Adminisztrátor | Bejelentkezés         | Az adminisztrátorok bejelentkezhetnek admin felhasználónév és jelszó használatával.                                                                              |

# 7. Fogalomtár

+ **Marketplace:** Olyan online platform, amely lehetővé teszi termékek eladását és vásárlását.
+ **Airsoft:** Olyan fegyvertípusok, amelyek műanyag golyók kilövésére alkalmasak, jellemzően hobbi és szimulációs célokra használják.
+ **Inventory:** A felhasználó által megvásárolt termékek listája a rendszerben.
+ **Adminisztrátor:** Olyan felhasználó, aki jogosult a rendszer termékeinek és felhasználóinak kezelésére.
+ **Specifikáció:** Termékek műszaki vagy fizikai jellemzői, pl. kaliber, anyag, súly, méretek stb.
