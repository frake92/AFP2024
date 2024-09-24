# Funkcionális specifikáció

## 1. Jelenlegi helyzet leírása

Jelenleg az airsoft fegyverek beszerzése töredezett piacon történik, ahol különböző webáruházak és fizikai üzletek kínálják termékeiket. A vásárlóknak számos különböző forrást kell böngészniük, hogy megtalálják a megfelelő terméket, ami időigényes és gyakran nem biztosít elég információt a döntéshozatalhoz. Az egyes boltok és platformok nem rendelkeznek egységes rendszerrel a termékek kategorizálására és bemutatására, ami gyakran zavarja a felhasználói élményt.

A vásárlási folyamat gyakran több lépésből áll, és a vásárlóknak külön regisztráció szükséges minden platformon. A termékekről nem állnak rendelkezésre egységes specifikációk, így a felhasználók nem mindig tudják egyszerűen összehasonlítani a termékeket. A rendszer hiányosságai közé tartozik az is, hogy nincs életkor-ellenőrzés, így nehéz garantálni, hogy 18 év alattiak ne vásároljanak airsoft fegyvereket. Továbbá, a vásárlók nem kapnak megfelelő támogatást a vásárlás után, például a termékek nyomon követése vagy készletinformációk tekintetében.

Adminisztrátori szempontból az airsoft termékek kezelése bonyolult és időigényes, mivel nincs központosított rendszer, amely lehetővé tenné a termékek egyszerű feltöltését, szerkesztését és törlését. Az adatvédelem és a törvényi előírások betartása nehézségekbe ütközik a különálló platformokon történő kereskedelem esetén.

## 2. Vágyálomrendszer leírása

Az airsoft marketplace új rendszerének célja egy egységes, modern platform létrehozása, amely átlátható és egyszerű felhasználói élményt biztosít mind a vásárlók, mind az adminisztrátorok számára. Az új rendszer lehetővé teszi, hogy a felhasználók egy központi felületen keressék és vásárolják meg a kívánt airsoft fegyvereket és kiegészítőket. A platform részletes termékleírásokat, kategóriákat és specifikációkat biztosít, ami segíti a felhasználókat a megfelelő választásban.

Az oldal regisztrációhoz kötött, és csak 18 év feletti személyek számára elérhető. A felhasználók regisztráció után saját fiókot hozhatnak létre, ahol nyomon követhetik korábbi vásárlásaikat és kezelhetik inventory-jukat. Az egyszerűsített vásárlási folyamat lehetővé teszi, hogy egyetlen fiókkal végezzék el minden tranzakciójukat, és személyre szabott ajánlatokat kapjanak korábbi vásárlásaik alapján.

Adminisztrátori szinten a rendszer biztosítja a termékek és felhasználói fiókok egyszerű kezelését. Az adminisztrátorok hozzáférnek a felhasználók adataihoz, és szabályozhatják a hozzáféréseket. Az új termékek feltöltése, szerkesztése és törlése egyszerű folyamat lesz, és a rendszer figyelemmel kíséri a készleteket is. Ezenkívül az adminisztrátorok jogosultak új felhasználók hozzáadására vagy szabálysértők eltávolítására. A rendszer automatikusan biztosítja az adatvédelemre és a jogszabályokra vonatkozó előírások betartását.

## 3. Jelenlegi üzleti folyamatok modellje

### 3.1 Felhasználói folyamatok:

+ **Több platformon történő vásárlás:** A vásárlók több webáruházat vagy fizikai üzletet böngésznek, amelyek különböző termékinformációkat és specifikációkat nyújtanak. Ez megnehezíti az áruk összehasonlítását, és a vásárlási élmény gyakran hosszadalmas.

+ **Regisztrációs folyamat:** Minden egyes áruházhoz külön fiókot kell létrehozni, ami többszörös regisztrációs kötelezettséget jelent.

+ **Vásárlási és fizetési folyamatok:** A vásárlás több lépésből áll, és nem biztosított az egyszerű, integrált fizetési lehetőség. A vásárlási folyamat bonyolultsága sokszor visszatartja a potenciális vásárlókat.

+ **Életkor-ellenőrzés hiánya:** Nincs központilag szabályozott életkor-ellenőrzés, így nehéz megakadályozni, hogy 18 év alatti személyek airsoft fegyvert vásároljanak.

+ **Vásárlás utáni nyomon követés:** A felhasználók számára nincs könnyen elérhető felület, ahol nyomon követhetnék korábbi vásárlásaikat, vagy tájékozódhatnának a termékek készletállapotáról.

### 3.2 Adminisztrátori folyamatok:

+ **Több platform kezelése:** Az adminisztrátorok különálló felületeken keresztül kezelik a termékeket és a vásárlói adatokat, ami növeli az adminisztrációs terhelést és az adateltérések kockázatát.

+ **Termékfeltöltés és karbantartás:** A termékek felvitele és módosítása bonyolult, és nincs egységesített rendszer a készletek követésére.

+ **Szabálysértő felhasználók kezelése:** Az adminisztrátoroknak nincs központi eszközük arra, hogy egyszerűen eltávolítsák a szabálysértő felhasználókat vagy figyelemmel kísérjék a visszaéléseket.

+ **Adatvédelmi kihívások:** Az adatvédelmi előírások betartása nehézségekbe ütközik, mivel a rendszerek különállóan működnek, és nincs központi felügyeleti eszköz.

## 4. Igényelt üzleti folyamatok modellje

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| C1 | ...| ... | ... |

## 6. Használati esetek

+ **ADMIN:** Feladatuk a rendszer felügyelete, ellenőrizni tudják a rendszer és a funkciók hibamentes üzemelését. Hozzáférnek a felhasználók listájához, módosítani tudja a felhasználók adatait. Emellett új felhasználókat adhatnak a rendszerhez, vagy egy már meglévőt is eltávolíthatnak belőle, ha az adott fiók valamilyen szabályt sért meg. Az ő dolguk az új termékek feltöltése a rendszerbe. Emellett az ő dolguk a kifogyott termékek feltöltése a rendszerbe.
+ **FELHASZNÁLÓ:** A fiók létrehozása után minden alapvető funkcióhoz hozzáfér. Minden felhasználónak saját inventory-ja van ahol a megvásárolt termékek tárolódnak. Minden felhasználó csak a saját inventory-ját tekintheti meg. Az oldalon lévő összes terméket látja, megtekintheti a termékek adatait és meg is vásárolhatja azokat. 
+ **MEGTEKINTŐ:** Mivel az oldalt csak 18 éven felülieknek lehet használni, így felhasználói fiók nélkül nem lehet megtekinteni a termékeket.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K1 | ... | ... |

## 11 Fogalomszótár

