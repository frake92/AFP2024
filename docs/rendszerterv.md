# Rendszerterv
## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:

   * Scrum masters:
      + Erdész Réka

      Feladatuk: Heti meetingek megszervezése.  
      Akadályok feltárása.  
      Következő elvégzendő feladatok átbeszélése.  
      Szerepkiosztás.  
      Útmutatás.

   * Product owner:
      + Batki Roland
      + Takács Márk
      + Farkas Lajos
      + Kakuk Márton

   * Üzleti szereplő:
      + Megrendelő: Dr. Tajti Tibor
     
### 2.2 Projektmunkások és felelőségek:

   * Frontend:
      + Batki Roland
      + Takács Márk
      + Farkas Lajos
      + Kakuk Márton

      Feladatuk: A felhasználók által elérhető felületek létrehozása.  
      A backend által biztosított funkciók igénybevétele.  
      Egységes design megalkotása.
   * Backend:
      + Batki Roland
      + Takács Márk
      + Farkas Lajos
      + Kakuk Márton

      Feladatuk: A frontend kiszolgálása adatokkal és adatok feldolgozásával.  
      Adatbázisok létrehozása.
   * Tesztelés:
      + Batki Roland
      + Takács Márk
      + Farkas Lajos
      + Kakuk Márton

      Feladatuk: Hibák feltárása az üzembe helyezés előtt.
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |       

## 3. Üzleti folyamatok modellje

![uzleti_folyamatok_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/%C3%BCzleti%20folyamatok%20modellje.png)

### 3.1 Üzleti szereplők

+ Admin
+ Felhasználó
+ Látogató

### 3.2 Üzleti folyamatok

| Üzleti szereplő | Üzleti szereplő neve | Feladatkör |
| :-------------: | :------------------: | :--------: |
| ![latogato_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/l%C3%A1togat%C3%B3%20modellje.png) | Látogató | A termékeket nem tudja megnézni, így csak regisztrálni tud. |
| ![felhasznalo_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/felhaszn%C3%A1l%C3%B3%20modellje.png) | Felhasználó | Képes: bejelentkezni, kijelentkezni, termékeket megnézni, termékeket vásárolni, saját raktárát megnézni |
| ![admin_modellje.png](https://github.com/frake92/AFP2024/blob/main/images/admin%20modellje.png) | Admin | Képes: bejelentkezni, kijelentkezni, termékeket megnézni, termékeket vásárolni, saját raktárát megnézni, új termékeket feltölteni, felhasználók adatait módosítani, termékek adatait módosítani, szerepkörök módosítása, felhasználókat kitörölni |

## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | ... | ... |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K4 | ... | ... |

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

### 5.2 Menühierarchiák

## 6. Fizikai környezet

   - Az alkalmazás web platformra készül, ami asztali számítógépről, hordozható készülékekről (laptop, táblagép, okostelefon) egyaránt elérhető megfelelő internet hozzáférés mellett.
   - Semmilyen böngésző kiegészítő használata nem szükséges.

### Fejlesztő eszközök

   + Visual Studio Code
   + XAMPP
   + phpMyAdmin

## 7. Architekturális terv

### Webszerver

Az Apache http szerveren futó alkalmazás szolgálja ki webes felületen keresztül a rendszer felhasználóit.

### Adatbázis rendszer

Az adatok tárolása a MySql adatbázis szerveren történik. 
Az adatbázisban minden mentett adat tárolódik.

### A program elérése, kezelése

A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el, ezen keresztül tudják a felhasználók a rendszert használni.

## 8. Adatbázis terv

## 9. Implementációs terv

## 10. Tesztterv

## 11. Telepítési terv

Fizikai telepítési terv: 

Szoftver telepítési terv: 

## 12. Karbantartási terv
