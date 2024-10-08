# Funkcionális specifikáció

## 1. Jelenlegi helyzet leírása

Jelenleg az airsoft fegyverek beszerzése töredezett piacon történik, ahol
különböző webáruházak és fizikai üzletek kínálják termékeiket. A vásárlóknak
számos különböző forrást kell böngészniük, hogy megtalálják a megfelelő
terméket, ami időigényes és gyakran nem biztosít elég információt a
döntéshozatalhoz. Az egyes boltok és platformok nem rendelkeznek egységes
rendszerrel a termékek kategorizálására és bemutatására, ami gyakran zavarja a
felhasználói élményt.

A vásárlási folyamat gyakran több lépésből áll, és a vásárlóknak külön
regisztráció szükséges minden platformon. A termékekről nem állnak rendelkezésre
egységes specifikációk, így a felhasználók nem mindig tudják egyszerűen
összehasonlítani a termékeket. A rendszer hiányosságai közé tartozik az is, hogy
nincs életkor-ellenőrzés, így nehéz garantálni, hogy 18 év alattiak ne
vásároljanak airsoft fegyvereket. Továbbá, a vásárlók nem kapnak megfelelő
támogatást a vásárlás után, például a termékek nyomon követése vagy
készletinformációk tekintetében.

Adminisztrátori szempontból az airsoft termékek kezelése bonyolult és
időigényes, mivel nincs központosított rendszer, amely lehetővé tenné a termékek
egyszerű feltöltését, szerkesztését és törlését. Az adatvédelem és a törvényi
előírások betartása nehézségekbe ütközik a különálló platformokon történő
kereskedelem esetén.

## 2. Vágyálomrendszer leírása

Az airsoft marketplace új rendszerének célja egy egységes, modern platform létrehozása, amely átlátható és egyszerű felhasználói élményt biztosít mind a vásárlók, mind az adminisztrátorok számára.
Az új rendszer lehetővé teszi, hogy a felhasználók egy központi felületen keressék és vásárolják meg a kívánt airsoft fegyvereket és kiegészítőket. A platform részletes termékleírásokat, kategóriákat és specifikációkat biztosít, ami segíti a felhasználókat a megfelelő választásban.

Az oldal regisztrációhoz kötött, és csak 18 év feletti személyek számára elérhető. A felhasználók regisztráció után saját fiókot hozhatnak létre, ahol nyomon követhetik korábbi vásárlásaikat és kezelhetik inventory-jukat.
Az egyszerűsített vásárlási folyamat lehetővé teszi, hogy egyetlen fiókkal végezzék el minden tranzakciójukat, és személyre szabott ajánlatokat kapjanak korábbi vásárlásaik alapján.

Adminisztrátori szinten a rendszer biztosítja a termékek és felhasználói fiókok egyszerű kezelését. Az adminisztrátorok hozzáférnek a felhasználók adataihoz, és szabályozhatják a hozzáféréseket. Az új termékek feltöltése, szerkesztése és törlése egyszerű folyamat lesz, és a rendszer figyelemmel kíséri a készleteket is.
Ezenkívül az adminisztrátorok jogosultak új felhasználók hozzáadására vagy szabálysértők eltávolítására. A rendszer automatikusan biztosítja az adatvédelemre és a jogszabályokra vonatkozó előírások betartását.

## 3. Jelenlegi üzleti folyamatok modellje

### 3.1 Felhasználói folyamatok:

- **Több platformon történő vásárlás:** A vásárlók több webáruházat vagy fizikai
  üzletet böngésznek, amelyek különböző termékinformációkat és specifikációkat
  nyújtanak. Ez megnehezíti az áruk összehasonlítását, és a vásárlási élmény
  gyakran hosszadalmas.

- **Regisztrációs folyamat:** Minden egyes áruházhoz külön fiókot kell
  létrehozni, ami többszörös regisztrációs kötelezettséget jelent.

- **Vásárlási és fizetési folyamatok:** A vásárlás több lépésből áll, és nem
  biztosított az egyszerű, integrált fizetési lehetőség. A vásárlási folyamat
  bonyolultsága sokszor visszatartja a potenciális vásárlókat.

- **Életkor-ellenőrzés hiánya:** Nincs központilag szabályozott
  életkor-ellenőrzés, így nehéz megakadályozni, hogy 18 év alatti személyek
  airsoft fegyvert vásároljanak.

- **Vásárlás utáni nyomon követés:** A felhasználók számára nincs könnyen
  elérhető felület, ahol nyomon követhetnék korábbi vásárlásaikat, vagy
  tájékozódhatnának a termékek készletállapotáról.

### 3.2 Adminisztrátori folyamatok:

- **Több platform kezelése:** Az adminisztrátorok különálló felületeken
  keresztül kezelik a termékeket és a vásárlói adatokat, ami növeli az
  adminisztrációs terhelést és az adateltérések kockázatát.

- **Termékfeltöltés és karbantartás:** A termékek felvitele és módosítása
  bonyolult, és nincs egységesített rendszer a készletek követésére.

- **Szabálysértő felhasználók kezelése:** Az adminisztrátoroknak nincs központi
  eszközük arra, hogy egyszerűen eltávolítsák a szabálysértő felhasználókat vagy
  figyelemmel kísérjék a visszaéléseket.

- **Adatvédelmi kihívások:** Az adatvédelmi előírások betartása nehézségekbe
  ütközik, mivel a rendszerek különállóan működnek, és nincs központi
  felügyeleti eszköz.

## 4. Igényelt üzleti folyamatok modellje

Ez az oldal az airsoft iránt érdeklődők és gyakorlott játékosok számára készült, hogy könnyen és gyorsan megtalálják a szükséges felszerelést és fegyvereket.
Az oldal rendszeresen frissül, hogy a legújabb termékek és fejlesztések mindig elérhetőek legyenek. A folyamatosan frissített kínálat biztosítja, hogy a legmodernebb airsoft fegyverek, kiegészítők és védőfelszerelések mindig naprakészek legyenek.

Minden vásárló könnyedén megtalálhatja a neki megfelelő fegyvereket és kiegészítőket, akár kezdő, akár profi szinten játszik.
A 18 év alatti személyek nem férhetnek hozzá az oldalhoz, ezáltal csak egy szülői profillal lehet vásárolni, hiszen a felhasználói fiók létrehozásakor szigorúan figyeljük, hogy 18 év alatti profilok ne kerülhessenek be a rendszerbe.
Minden újonnan feltöltött termék alapos ellenőrzésen és hitelesítésen megy keresztül, hogy garantáljuk a minőséget és megfeleljenek a jogszabályoknak.

## 5. Követelménylista

| ID  | Modul       | Név                  | Leírás                                                                                                                         |
| --- | ----------- | -------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| C1  | Felület     | Kezdőlap             | A nem bejelentkezett felhasználókat ez az oldal fogja köszönteni. Itt lehetőséget kínál a belépésre, illetve a regisztrációra. |
| C2  | Felület     | Piac                 | A már bejelentkezett felhasználóknak lesz elérhető ez az oldal, ahol kedvükre válogathatnak a termékek közöl.                  |
| C3  | Felület     | Profil               | Itt a regisztrált felhasználok megtekinthetik az eddig vásárolt termékeiket.                                                   |
| C4  | Felület     | Vásárlás             | A felhasználók a piac menüpont alatt tudnak terméket vásárolni.                                                                |
| C5  | Jogosultság | Admin felület        | Admin jogosultsággal rendelkező felhasználók itt tudnak új terméket létrehozni és törölni                                      |
| C6  | Felület     | Bejelentkezés        | A felhasználók itt tudnak bejelentkezni a rendszerbe.                                                                          |
| C7  | Felület     | Regisztráció         | A felhasználók itt tudnak fiókot létrehozni, hogy igénybe tudják venni az oldal szolgáltatásait.                               |
| C8  | Jogosultság | Jogosultsági szintek | - Admin: Termékek létrehozása a piacra, ezek módosítása vagy törlése.\ -Felhasználó: Piac menüben lévő termékek megvásárlása.  |

## 6. Használati esetek

+ **ADMIN:** Feladatuk a rendszer felügyelete, ellenőrizni tudják a rendszer és a funkciók 
hibamentes üzemelését. Hozzáférnek a felhasználók listájához, módosítani tudja a felhasználók 
adatait. Emellett új felhasználókat adhatnak a rendszerhez, vagy egy már meglévőt is eltávolíthatnak 
belőle, ha az adott fiók valamilyen szabályt sért meg. Az ő dolguk az új termékek feltöltése a 
rendszerbe. Emellett az ő dolguk a kifogyott termékek feltöltése a rendszerbe.
+ **FELHASZNÁLÓ:** A fiók létrehozását követően a felhasználók teljes hozzáférést kapnak az oldal 
alapvető funkcióihoz. Minden felhasználónak saját egyedi készlete, inventory-ja van, ahol a 
megvásárolt termékek kerülnek tárolásra. A felhasználók kizárólag a saját inventory-jukat láthatják. 
Az oldalon elérhető összes terméket megtekinthetik, böngészhetik a részletes adatlapokat, és 
lehetőségük van a termékek megvásárlására is.
+ **MEGTEKINTŐ:** Mivel az oldal használata kizárólag 18 éven felüli felhasználók számára 
engedélyezett a vonatkozó jogszabályok értelmében, a termékek megtekintése csak regisztrált és 
életkor-ellenőrzött felhasználói fiókkal lehetséges.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

+ **K1**,**K2** : A weboldalt úgy készitettük, hogy megnyitásakor a bejelnetkezési oldalt látják, 
mivel egy 18 éven felüli weboldalról beszélünk ezért szeretnénk hogy diszkrétek maradhassunk a 
weboldalunkhoz. igy nem 18 éven aluli gyerekek nem férhetnek hozzá az Airsoft fegyverek 
kinálataihoz. Ezért vagy létre kell hozni egy fiókot, vagy ha már megtörtént a létrehozás, akkor be 
kell jelentkezniük a  weboldalra.

+ **K3** : A bejelentkezett felhasználók hozzáférést kapnak adott termékekre amit eladásra kinálunk. 
többek között saját profil adataikhoz, tulajdonságaikhoz.

+ **K4** : A nem regisztált felhasználóknak készitettünk egy egyszerű regisztrációs panelt, ahol 
néhány adat megadása után regisztrált felhasználók lesznek.

+ **K5** : A Főoldalon láthatóak lesznek az Airsoft fegyverek kinálata. Képre kattintva, átvezeti az 
adott fegyverre, ahol megtalálhatóak lesznek, a fegyver adatai, leirása, ára, illeteve kép a 
fegyverről nagyobb méretben.

+ **K6** : Az Adminok felületén láthatják, az adott Fegyver készlet számát, illetve Admin képes 
feltölteni további fegyvereket a felhasználók számára. Továbbá képes módositani vagy törölni 
felhasználókat.

## 8. Képernyőtervek
| Kép | Leírás |
| :-----------: | :-----------: |
| ![index.png](https://github.com/frake92/AFP2024/tree/main/images/index.png) |

## 9. Forgatókönyvek

### 9.1 Alap forgatókönyv

A weblap megnyitáskor a **Kezdőlap** fogad minket, ahol a felhasználó be tud
jelenkezni, vagy regisztrálni a weboldalra. Mivel 18 éven felülieknek készült
így itt csak a kezdőlapot tudja megnyitni. Felhasználó választhat, hogy be regisztrál, vagy ha már 
létezik fiókja akkor bejelentkezik. Ha elfelejtette a jelszavát, van rá lehetőség, hogy újat 
állitson be.

Az alábbiakban bemutatom a **megtekintő** státusszal (nem bejelentkezett felhasználó) elérhető 
funkciókat:

+ A **Regisztráció** Gobmra kattintva megjelenik a regisztrációs részleg. A felhasználók pár 
fontosabb adat megadása után példálul: Felhasználó név, Szüldátum, Email adatok felvétele után 
sikeresen regisztálva beléphet a ShadowWeb oldalra.
+ A **Belépés** Gomb nyomás előtt meg kell adnia a már kész regisztrált Felhasználó profilját, hogy 
be tudjon lépni Például: felhasználónév/email, jelszó. Ezek megadása után egy lefut egy validáció 
ami ellenőrzi az adatbázisból, hogy már létezik-e ez a felhasználó, ha igen be engedi. Ha nem 
üzenetet küld hogy sajnos nem létezik.
+ A **Nem bejelentkezett** nem láthatja a főoldalt, csak a Bejelentkezési részleget képes látni.

+ Végezetül a **Elfelejtett jelszó** gomb kattintására az elfelejtett jelszót át tudja állitani a 
felhasználó, hogy zökkenőmentesen tudjon tovább keresni a weboldalunkon.

<!-- Csak a 9.2-őt írtam meg 9.1-et még folytatni kell - Márk -->

### 9.2 Jogosultsági szintek lehetőségei



A következő részben a **felhasználó** jogosultsággal rendelkező felhasználók lehetőségeit mutatom be.

A megtekintő funkciók mellett:

+ **Kijelentkezés:** A felhasználó bármikor kijelentkezhet, visszatérve a **bejelentkező** oldalra.
+ **Saját raktár (inventory):** Minden felhasználónak saját raktára van, ahol a megvásárolt termékek 
tárolódnak. Minden felhasználó csak a saját **inventory**-ját tekintheti meg.
+ **Termékek böngészése:** Minden felhasználó az oldalon található összes terméket látja és a 
termékek minden adatát és leírását elolvashatja.
+ **Termékek vásárlása:** A termék megvásárlása után a termék pár munkanapon belül kiszálításra 
kerül és azonnal bekerül a felhasználó raktárába. A termék csak akkor vásárolható meg, ha az adott 
termékből van raktáron.

Végül az **admin** jogosultsággal rendelkező felhasználók lehetőségei.

Az összes korábban említett funkció használata mellett:

+ **Jogosultságok kezelése:** Az **admin**ok módosíthatják a felhasználók felhasználóneveit, 
jelszóit, jogosultsági szintjeit, és eltávolíthatják őket a rendszerből, ha szabálysértést észlelnek.
+ **Termékek feltöltése:** Új termékeket tölthetnek fel. Ehhez meg kell adni a termék nevét, árá és 
leírását, valamint képet is csatolni kell hozzá. Az elküldött termékek azonnal bekerülnek a 
rendszerbe és minden felhasználó számára azonnal látható lesz.

## 10. Funkció - követelmény megfeleltetése

| Id  | Követelmény | Funkció |
| :-: | ----------- | ------- |
| K1  | Bejelentkezési oldal|Az oldal megnyitásakor a nem bejelentkezett felhasználókat egy bejelentkezési és regisztrációs oldal fogadja. |
| K2 | Felhasználói regisztráció | Felhasználók egy egyszerű regisztrációs folyamat során hozhatják létre a fiókjukat. |
| K3 | Bejelentkezés | A rendszer ellenőrzi, hogy a felhasználó érvényes adatokkal rendelkezik-e, és engedélyezi a belépést. |
| K4 | Piac oldal | Bejelentkezett felhasználók böngészhetik az elérhető termékeket, megtekinthetik azok részletes adatait. |
| K5 | Termék vásárlás | A bejelentkezett felhasználók vásárolhatnak termékeket, amelyek a raktárukba kerülnek. |
| K6 | Admin felület | Az adminok új termékeket adhatnak hozzá, szerkeszthetik és törölhetik a meglévőket. |
| K7 | Jogosultsági szintek | Admin felhasználók kezelhetik a jogosultságokat, felhasználókat módosíthatnak, illetve eltávolíthatnak. |
| K8 | Termék készlet kezelés | Adminok figyelhetik és menedzselhetik a készleteket, és szükség esetén új termékeket tölthetnek fel. |
| K9 | Életkor-ellenőrzés | A regisztráció során biztosított életkor-ellenőrzés megakadályozza, hogy 18 év alatti felhasználók regisztráljanak. |





## 11 Fogalomszótár
* Adminisztrátor: Az a felhasználó, aki teljes jogosultsággal rendelkezik az oldalon, beleértve a termékek kezelését, felhasználók adminisztrálását és jogosultságok kezelését.
* Felhasználó: Olyan személy, aki regisztrált a platformon, és hozzáférést kapott a vásárlás és termékböngészés lehetőségéhez.
* Validáció: A bemeneti adatok ellenőrzésének folyamata, amely során a rendszer biztosítja, hogy az adatok megfelelőek és pontosak legyenek.
* Inventory: A felhasználó által megvásárolt termékek listája, amely a felhasználói fiókhoz tartozik.
* Piac: Az oldal azon része, ahol a felhasználók böngészhetik a különböző airsoft termékeket és kiegészítőket.
* Kezdőlap: A weboldal nyitóoldala, ahol a nem bejelentkezett felhasználók regisztrálhatnak vagy bejelentkezhetnek.
* Jogosultság: Az a szerepkör, amely meghatározza, hogy egy felhasználó milyen funkciókat érhet el az oldalon (pl. admin vagy normál felhasználó).