# Písemná část

## Popis funkce MVC architektury

Architektura MVC (Model, View, Controller) se často používá při vývoji webových aplikací. Tato architektura rozděluje aplikaci do tří základních částí: Modelu, View a Controlleru. Pomocí tohoto oddělení získáváme mnoho výhod, jako je zvýšená modularita, jednodušší testování a údržba kódu. MVC také umožňuje paralelní vývoj různých částí aplikace, protože každá část má jasně definovanou roli a odpovědnost.

Model: Model reprezentuje datovou stránku aplikace. Obsahuje logiku pro práci s daty, jako jsou operace čtení, zápis a aktualizace. To zahrnuje práci s databází, soubory nebo externími službami. Modely jsou obvykle implementovány jako třídy nebo objekty, které reprezentují jednotlivé entity nebo koncepty v aplikaci.

View (Pohled): Pohled zajišťuje vizuální prezentaci dat uživateli. Tato část je zodpovědná za zobrazování informací uživateli v požadovaném formátu. Pohledy obvykle obsahují HTML, CSS a někdy i JavaScript pro interaktivitu. Mohou být dynamicky generovány na základě dat poskytnutých modelem.

Controller: Controller slouží jako prostředník mezi modelem a pohledem. Zpracovává uživatelské vstupy, provádí odpovídající operace na modelu a aktualizuje pohledy v souladu s těmito změnami. Controllery obvykle obsahují metody, které reagují na HTTP požadavky a rozhodují, jaká data budou zobrazena a jaké akce budou vykonány.

## Výhody a nevýhody použití frameworku

### Použití Frameworku:
#### Výhody:
Rychlost vývoje: Frameworky poskytují mnoho hotových funkcí a knihoven, což zrychluje vývoj aplikace.
Modularita a rozšiřitelnost: Frameworky jsou obvykle navrženy tak, aby byly modulární a rozšiřitelné, což usnadňuje integraci dalších funkcí a knihoven.
Dobrá dokumentace a komunita: Většina frameworků má dobrou dokumentaci a živou komunitu vývojářů, což usnadňuje získání podpory a znalostí.
Bezpečnost: Mnoho frameworků obsahuje zabudované funkce pro zabezpečení aplikace, což snižuje riziko bezpečnostních problémů.
Abstrakce komplexity: Frameworky poskytují abstrakce pro mnoho běžných úloh, jako je routování, správa relací nebo validace dat, což usnadňuje vývoj a udržování kódu.

#### Nevýhody:
Naučení se frameworku: Použití frameworku vyžaduje čas na seznámení se s jeho koncepty a konvencemi.
Závislost na frameworku: Použití frameworku může váš kód zavázat k určité architektuře a konvencím, což může omezit flexibilitu a možnosti dalšího vývoje.

### Použití čistého PHP:
#### Výhody:
Flexibilita: Použití čistého PHP umožňuje plnou kontrolu nad kódem a architekturou aplikace.
Minimalizace nadbytečnosti: Použití čistého PHP umožňuje psát pouze ten kód, který je potřeba, což může vést k menší složitosti a snížení nákladů na údržbu.
#### Nevýhody:
Zvýšená složitost: Psaní aplikací v čistém PHP může být časově náročné a může vést k většímu množství kódu, zejména pokud je potřeba implementovat složitější funkce.
Chybějící standardy: Použití čistého PHP může vést k nedostatku standardů a konvencí, což může ztížit spolupráci a údržbu kódu.

