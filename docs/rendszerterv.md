# Rendszerterv

## 1. A rendszer célja

Az oldal célja, hogy az airsoft fegyverek iránti igényeket kiszolgáljuk, és
ennek érdekében átfogó szolgáltatást nyújtsunk a felhasználóknak, amely
lehetőséget biztosít különböző jogosultsági szinteken való részvételre. Az oldal
felépítése olyan, hogy a felhasználók eltérő hozzáférési szintekkel
rendelkezhetnek attól függően, milyen tevékenységet szeretnének végezni. Az
oldal látogatói számára, akik még nem regisztráltak, nincs lehetőség a tartalmak
megtekintésére. A vendégek kizárólag a regisztrációt hajthatják végre, valamint
be tudnak lépni, ha már rendelkeznek fiókkal. Amint a felhasználó sikeresen
regisztrál, a rendszer automatikusan vásárlói jogosultságot rendel hozzá. Ez a
jogosultsági szint lehetővé teszi számukra, hogy a Piac menüpontban különböző
airsoft fegyvereket vásároljanak saját használatra. Emellett ezen jogosultsággal
rendelkező felhasználók megtekinthetik, hogy eddig hány termék van a saját
raktárukban, így nyomon tudják követni készletüket és vásárlásaikat. A vásárlói
szint mellett az oldal adminisztrátori jogosultsági szintet is biztosít egyes
felhasználók számára. Az adminisztrátorok számára kibővített funkciók állnak
rendelkezésre, amelyek lehetővé teszik számukra, hogy új fegyvereket adjanak
hozzá a Piac menüponthoz, bővítve ezzel a kínálatot. Az admin jogosultsággal
rendelkező felhasználók továbbá kezelhetik a többi regisztrált felhasználó
hozzáférési szintjeit, vagyis módosíthatják mások jogosultságait, sőt, szükség
esetén akár törölhetik is a felhasználói fiókokat az oldalról. Ez a felépítés
garantálja, hogy az oldal biztonságosan és hatékonyan működjön, lehetőséget adva
a felhasználóknak arra, hogy kényelmesen és szabályozott keretek között
vásároljanak és kezeljék saját készleteiket, míg az adminisztrátorok felügyelik
és bővítik a kínálatot, valamint a felhasználói bázist.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:

- Scrum masters:

  - Erdész Réka

  Feladatuk: Heti meetingek megszervezése.  
   Akadályok feltárása.  
   Következő elvégzendő feladatok átbeszélése.  
   Szerepkiosztás.  
   Útmutatás.

- Product owner:

  - Batki Roland
  - Takács Márk
  - Farkas Lajos
  - Kakuk Márton

- Üzleti szereplő:
  - Megrendelő: Dr. Tajti Tibor

### 2.2 Projektmunkások és felelőségek:

- Frontend:

  - Batki Roland
  - Takács Márk
  - Farkas Lajos
  - Kakuk Márton

  Feladatuk: A felhasználók által elérhető felületek létrehozása.  
   A backend által biztosított funkciók igénybevétele.  
   Egységes design megalkotása.

- Backend:

  - Batki Roland
  - Takács Márk
  - Farkas Lajos
  - Kakuk Márton

  Feladatuk: A frontend kiszolgálása adatokkal és adatok feldolgozásával.  
   Adatbázisok létrehozása.

- Tesztelés:

  - Batki Roland
  - Takács Márk
  - Farkas Lajos
  - Kakuk Márton

  Feladatuk: Hibák feltárása az üzembe helyezés előtt.

### 2.3 Ütemterv:

| Funkció                   | Feladat                    | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
| ------------------------- | -------------------------- | --------- | ------------- | ---------------------- | ---------------- | ----------------- |
| Követelmény specifikáció  | Megírás                    | 1         | 1             | 1                      | 1                | 1                 |
| Funkcionális specifikáció | Megírás                    | 1         | 1             | 1                      | 1                | 1                 |
| Rendszerterv              | Megírás                    | 1         | 1             | 1                      | 1                | 1                 |
| Program                   | Képernyőtervek elkészítése | 2         | 1             | 1                      | 1                | 1                 |
| Program                   | Prototípus elkészítése     | 3         | 8             | 8                      | 8                | 8                 |
| Program                   | Alapfunkciók elkészítése   | 3         | 8             | 8                      | 8                | 8                 |
| Program                   | Tesztelés                  | 4         | 2             | 2                      |

## 3. Üzleti folyamatok modellje

![uzleti_folyamatok_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/%C3%BCzleti%20folyamatok%20modellje.png)

### 3.1 Üzleti szereplők

- Admin
- Felhasználó
- Látogató

### 3.2 Üzleti folyamatok

|                                                    Üzleti szereplő                                                    | Üzleti szereplő neve |                                                                                                                    Feladatkör                                                                                                                     |
| :-------------------------------------------------------------------------------------------------------------------: | :------------------: | :-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------: |
|    ![latogato_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/l%C3%A1togat%C3%B3%20modellje.png)    |       Látogató       |                                                                                            A termékeket nem tudja megnézni, így csak regisztrálni tud.                                                                                            |
| ![felhasznalo_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/felhaszn%C3%A1l%C3%B3%20modellje.png) |     Felhasználó      |                                                                      Képes: bejelentkezni, kijelentkezni, termékeket megnézni, termékeket vásárolni, saját raktárát megnézni                                                                      |
|            ![admin_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/admin%20modellje.png)            |        Admin         | Képes: bejelentkezni, kijelentkezni, termékeket megnézni, termékeket vásárolni, saját raktárát megnézni, új termékeket feltölteni, felhasználók adatait módosítani, termékek adatait módosítani, szerepkörök módosítása, felhasználókat kitörölni |

## 4. Követelmények

### Funkcionális követelmények

| ID  | Megnevezés | Leírás |
| --- | ---------- | ------ |
| K1  | ...        | ...    |

### Nemfunkcionális követelmények

| ID  | Megnevezés | Leírás |
| --- | ---------- | ------ |
| K4  | ...        | ...    |

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

## ADMIN

- Feladata a rendszer teljes felügyelete.
- Bármely szerepkörbe beléphet a hibamentes működés ellenőrzésére.
- Korlátlan hozzáféréssel rendelkezik az egész rendszerhez, beleértve a
  felhasználói profilok módosítását (jogosultságok, szerepkörök, felhasználónév,
  jelszó).
- meglévőket törölhet szabályszegés esetén.

## FELHASZNÁLÓ

- Joga van az összes tartalom megtekintésére és a visszajelző rendszer
  használatára.
- Posztolhat bejegyzéseket, értékelheti azokat, és hozzászólásokat írhat.

## LÁTOGATÓ

- Csak a megjelenő bejegyzéseket tekintheti meg.
- Nem interaktálhat a tartalommal, amíg nem regisztrál.

### 5.2 Menühierarchiák

## FŐOLDAL

- Kezdőlap
- Regisztráció
- Belépés

## FŐOLDAL (FELHASZNÁLÓ)

- Raktár
- Piac
- Kijelentkezés

## FŐOLDAL (ADMIN)

- Fegyver hozzáadás
- Felhasználók megtekintése
- Kijelentkezés

## Regisztráció 

- Kezdőlap
- Belépés
- Regisztrációs felület

## Bejelentkezés

- Bejelentkezési felület
- Regisztráció 
- Vissza a főoldalra

## Fegyver hozzáadás (ADMIN)

- Fegyver hozzáadási felület
- Felhasználók megtekintése
- Kijelentkezés

## Felhasználók megtekintése (ADMIN)

- Regisztrált felhasználók 
- Szerkesztés 
- Törlés
- Fegyver hozzáadás
- Kijelentkezés 

## 6. Fizikai környezet

- Az alkalmazás web platformra készül, ami asztali számítógépről, hordozható
  készülékekről (laptop, táblagép, okostelefon) egyaránt elérhető megfelelő
  internet hozzáférés mellett.
- Semmilyen böngésző kiegészítő használata nem szükséges.

### Fejlesztő eszközök

- Visual Studio Code
- XAMPP
- phpMyAdmin

## 7. Architekturális terv

### Webszerver

Az Apache http szerveren futó alkalmazás szolgálja ki webes felületen keresztül
a rendszer felhasználóit.

### Adatbázis rendszer

Az adatok tárolása a MySql adatbázis szerveren történik. Az adatbázisban minden
mentett adat tárolódik.

### A program elérése, kezelése

A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el,
ezen keresztül tudják a felhasználók a rendszert használni.

## 8. Adatbázis terv

 ![Adatbázis.png]
 ![Gunsadatbazis.png]
 ![Usersadatbazis.png]
 ![inventoriesadatbazis.png]

## 9. Implementációs terv

A webszerveren futó php program tartalmazza az üzleti logikát. A felhasználói felület, ami böngészőben megjelenő weboldalak formájában érhető el HTML, CSS, és JavaScript technológiák felhasználásával készülnek. A programok objektum orientált programozási paradigma használatával, MVC modell használata mellett. MySql adatbázis szervert használunk az adatok tárolására.
