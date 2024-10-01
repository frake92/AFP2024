# Követelmény specifikáció

## 1. Áttekintés

Ez a dokumentum egy webalapú airsoft marketplace rendszer követelményeit határozza meg, amely lehetővé teszi airsoft fegyverek és kapcsolódó kiegészítők értékesítését és vásárlását egy központosított platformon. A weboldal célja az airsoft közösség kiszolgálása azáltal, hogy felhasználóbarát, gyors és hatékony módot biztosít a termékek felfedezésére és beszerzésére, miközben hangsúlyt fektet a biztonságra és a törvényi megfelelésre. Az airsoft fegyverek megvásárlása nemcsak a tapasztalt felhasználók, hanem kezdők számára is egyszerű és átlátható lesz, köszönhetően a részletes termékleírásoknak, kategorizált terméklistáknak és az intuitív keresési funkcióknak. A felhasználók különböző termékeket böngészhetnek, például airsoft pisztolyokat, gépfegyvereket, valamint tartozékokat, mint például védőfelszerelések vagy fegyverkiegészítők.

A rendszer egyik kiemelt funkciója a felhasználók életkorának ellenőrzése, mivel csak a 18 éven felüliek regisztrálhatnak és vásárolhatnak airsoft fegyvereket. A vásárlók regisztráció és bejelentkezés után férhetnek hozzá a részletes termékadatokhoz és a vásárlási funkciókhoz, biztosítva a biztonságos és szabályozott kereskedelmi környezetet. Az oldal egyaránt támogatja a magánszemélyek vásárlását, valamint a nagyobb volumenű rendelések feldolgozását is, például airsoft csapatok vagy klubok számára. A weboldalt PHP, MySQL és JavaScript technológiákkal fejlesztjük, hogy modern és gyors felhasználói élményt biztosítsunk.

## 2. A jelenlegi helyzet leírása

Jelenleg az airsoft fegyverek beszerzése Magyarországon töredezett piacon történik, ahol különálló, nem integrált webáruházak és fizikai boltok kínálják termékeiket. Ezek az áruházak nem mindig biztosítanak részletes információkat a termékekről, így a felhasználóknak különböző platformokon kell keresgélniük a megfelelő fegyvert, kiegészítőt vagy tartozékot. Az egyes platformok kezelése nehézkes lehet, mivel az airsoft termékek kategorizálása nem egységes, a vásárlási folyamat bonyolult, és gyakran több regisztráció szükséges, ha valaki több helyen kíván vásárolni.

A jelenlegi piacon a vásárlók számára nem mindig egyértelműek a termékek paraméterei és minőségei, valamint hiányoznak a vásárlás utáni támogatási eszközök, mint például a készletkezelés vagy a vásárlási előzmények áttekinthetősége. A felhasználói élményt gyakran rontja a több lépcsős, időigényes vásárlási folyamat, ami visszatarthatja az érdeklődőket a vásárlástól. A különböző rendszerek közötti kommunikáció és adatmegosztás hiánya szintén problémát jelent, ami adateltéréseket és adminisztrációs nehézségeket eredményezhet.

További kihívás, hogy nincs egységes életkor-ellenőrzési rendszer, amely biztosítaná, hogy a 18 év alatti felhasználók ne vásárolhassanak airsoft fegyvereket. A piacon jelenleg hiányzik az a központi platform, amely egyszerű, mégis hatékony megoldást nyújtana mind az eladók, mind a vásárlók számára, és amely megfelel az adatvédelmi és jogi követelményeknek.

## 3. Vágyálomrendszer

A ShadowWeb marketplace célja egy felhasználóbarát és biztonságos platform létrehozása az airsoft fegyverek és kiegészítők vásárlására Magyarországon. A rendszer egyszerű regisztrációt és bejelentkezést kínál, életkor-ellenőrzéssel a jogszabályok betartása érdekében. A termékek részletes leírásokkal, kategorizált formában érhetők el, megkönnyítve a böngészést és a vásárlást. A vásárlási folyamat gyors és biztonságos, többféle fizetési lehetőséggel. A felhasználók megtekinthetik korábbi vásárlásaikat és kezelhetik fiókadataikat, míg az adminisztrátorok könnyen kezelhetik a termékkészletet és a rendeléseket.

## 4. Jelenlegi üzleti folyamatok modellje

Jelenleg az airsoft fegyverek kereskedelme több webáruház és fizikai bolt kombinációjával zajlik. Az alábbiakban összefoglaljuk a jellemző folyamatokat:

  Felhasználói folyamatok:
        A vásárlók meglátogatják a különböző platformokat, amelyek nem biztosítanak egységes terméklistát vagy kategóriákat.
        A termékek megvásárlása több lépésben történik, ahol minden felhasználónak külön-külön fiókot kell létrehoznia.
        A vásárlás utáni információk (pl. inventory) nem mindig elérhetők egy helyen, így a felhasználók nem tudják egyszerűen nyomon követni, hogy milyen termékeket vásároltak.
        A vásárlók visszajelzéseket adhatnak a termékekről és a szolgáltatásokról.

  Adminisztrátori folyamatok:
        Az adminisztrátorok különböző platformokon töltik fel a termékeket és kezelik a vásárlói információkat.
        A termékek kezelése és a vásárlói adatok módosítása több lépcsős és időigényes folyamat.
        A vásárlói adatkezelés gyakran több lépésből áll, és figyelembe kell venni az adatvédelmi előírásokat.
        Az adminisztrátorok feldolgozzák a beérkező rendeléseket, koordinálják a szállítást és kezelik a visszatérítéseket vagy cseréket.
        Az adminisztrátorok jelentéseket készítenek az értékesítési adatokról, készletinformációkról és vásárlói visszajelzésekről.


## 5. Igényelt üzleti folyamatok modellje

A vágyott rendszer az alábbiak szerint optimalizálja az üzleti folyamatokat:

  Felhasználói folyamatok:
        A vásárlók egy központosított marketplace felületet használhatnak, ahol minden termék egységesen, részletes specifikációkkal elérhető.
        Regisztráció után a felhasználók bejelentkezhetnek, és a korábbi vásárlásaik alapján nyomon követhetik az inventory-jukat.
        Egyszerűbb vásárlási folyamat, ahol minden vásárló egy fiókot használhat az összes tranzakcióhoz.
        Termékeket adhatnak a kosárhoz, áttekinthetik a kosár tartalmát, és egyszerűen végrehajthatják a vásárlást.
        Személyre szabott ajánlatok és promóciók megjelenítése a vásárlók korábbi vásárlásai és érdeklődési köre alapján.

  Adminisztrátori folyamatok:
        Az adminisztrátorok egyetlen felületen kezelhetik a termékeket és a felhasználói fiókokat.
        A rendszer lehetővé teszi a termékek egyszerű felvitelét, szerkesztését és törlését, valamint a felhasználói jelszavak módosítását.
        Az adminisztrátorok új termékeket adhatnak hozzá a rendszerhez, részletes termékleírásokkal, árakkal és kategóriákkal.
        A készlet szintjének figyelemmel kísérése és frissítése.
        Felhasználói jogosultságok és hozzáférések kezelése.
        Rendelések állapotának kezelése és frissítése.
        Szállítás koordinálása, visszatérítések és cserék kezelése.
        Az adatvédelmi előírások és jogszabályok betartása és kezelése.
        Jogi és szabályozási dokumentációk kezelése.
        Adatok szinkronizálása különböző platformok és rendszerek között.
        Automatizált rendszerek alkalmazása az adateltérések minimalizálása érdekében.

## 6. Követelménylista

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

## 7. Fogalomtár

+ **Marketplace:** A marketplace (piactér) egy online platform vagy felület, ahol különböző eladók és vásárlók találkozhatnak, hogy termékeket vagy szolgáltatásokat cseréljenek. Az eladók saját árukat, termékeiket kínálják fel, míg a vásárlók ezeket böngészhetik, és a platformon keresztül megvásárolhatják.
+ **Airsoft:** Az airsoft fegyver egy olyan eszköz, amely élethűen imitálja a valódi lőfegyverek megjelenését és működését, de nem éles lövedéket használ. Ezek a fegyverek 6 mm-es műanyag golyókat (BB-ket) lőnek ki, általában sűrített levegő, rugó vagy elektromos meghajtás révén.
+ **Inventory:** Az inventory (készlet) a vállalat vagy szervezet által birtokolt áruk, anyagok, alkatrészek vagy termékek összességét jelenti, amelyeket a termelési, elosztási vagy értékesítési folyamat során kezelnek. Az inventory a logisztikai és ellátási lánc menedzsment kulcsfontosságú része.
+ **Adminisztrátor:** Az adminisztrátor olyan személy, aki egy szervezet, intézmény, vagy rendszer működésének napi szintű irányítását, felügyeletét és adminisztratív feladatait végzi. Az adminisztrátorok szerepköre változatos lehet, attól függően, hogy milyen környezetben dolgoznak (pl. irodai, oktatási, informatikai).
+ **Specifikáció:** A specifikáció egy dokumentum vagy leírás, amely részletesen bemutatja egy termék, szolgáltatás vagy rendszer követelményeit, jellemzőit és funkcióit. A specifikáció célja, hogy pontosan meghatározza, mit várnak el egy adott dologtól, és így irányt adjon annak fejlesztéséhez, gyártásához vagy megvalósításához.
+ **Optimalizáció** Az optimalizáció olyan folyamatot jelöl, amelynek célja egy adott rendszer, folyamat vagy probléma legjobb (ideális) megoldásának megtalálása a rendelkezésre álló erőforrások és feltételek mellett. Az optimalizáció során a cél általában a teljesítmény maximalizálása vagy a költségek minimalizálása.
+ **Platform** A platform olyan rendszer, amelyen különböző alkalmazások, szolgáltatások vagy tevékenységek futnak vagy működnek. 
