CREATE DATABASE HUMAN;
USE HUMAN;

CREATE TABLE CATEGORIECHAMBRE(
    IDCATEGORIECHAMBRE INT NOT NULL AUTO_INCREMENT,
    LIBELE VARCHAR(25) NOT NULL,
    DESCRIPTION TEXT NOT NULL,
    PHOTO TEXT NOT NULL,
    PRIX DECIMAL NOT NULL,
    PRIMARY KEY(IDCATEGORIECHAMBRE)
);
INSERT INTO CATEGORIECHAMBRE VALUES (1, 'SIMPLE', 'EQUIPE DE 1 LIT DOUBLE, 2 LITS SIMPLE, TOILETTE','simple.jpg', 125000);
INSERT INTO CATEGORIECHAMBRE VALUES (2, 'FAMILIALE', 'EQUIPE DE 1 LIT DOUBLE, 2 LITS SIMPLE, TOILETTE, TV ABONNEE CANAL+','familiale.jpg', 150000);
INSERT INTO CATEGORIECHAMBRE VALUES (3, 'VIP', 'EQUIPE DE 1 LIT DOUBLE, 2 LITS SIMPLE, TOILETTE, TV ABONNEE CANAL+, SALON, TABLE A MANGER','vip', 200000);


CREATE TABLE CHAMBRE(
    IDCHAMBRE INT NOT NULL AUTO_INCREMENT,
    IDCATEGORIECHAMBRE INT NOT NULL,
    NUMERO  INT NOT NULL,
    PRIMARY KEY (IDCHAMBRE)
);
ALTER TABLE CHAMBRE ADD CONSTRAINT FK_REFERENCE_1 FOREIGN KEY (IDCATEGORIECHAMBRE)
REFERENCES CATEGORIECHAMBRE (IDCATEGORIECHAMBRE) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO CHAMBRE VALUES (1, 1,1);
INSERT INTO CHAMBRE VALUES (2, 1,2);
INSERT INTO CHAMBRE VALUES (3, 1,3);
INSERT INTO CHAMBRE VALUES (4, 2,4);
INSERT INTO CHAMBRE VALUES (5, 2,5);
INSERT INTO CHAMBRE VALUES (6, 3,6);


CREATE TABLE CATEGORIE(
    IDCATEGORIE INT NOT NULL AUTO_INCREMENT,
    LIBELE VARCHAR(25) NOT NULL,
    PRIMARY KEY(IDCATEGORIE)
);
INSERT INTO CATEGORIE VALUES (1, 'Boisson hygienique');
INSERT INTO CATEGORIE VALUES (2, 'Boisson alcolisee');
INSERT INTO CATEGORIE VALUES (3, 'Entree');
INSERT INTO CATEGORIE VALUES (4, 'Plat');
INSERT INTO CATEGORIE VALUES (5, 'Dessert');

CREATE TABLE MENU(
    IDMENU INT NOT NULL AUTO_INCREMENT,
    IDCATEGORIE INT NOT NULL,
    NOM VARCHAR(100) NOT NULL,
    INGREDIENTS TEXT,
    PHOTOS TEXT,
    PRIX DECIMAL NOT NULL,
    PRIMARY KEY(IDMENU)
);
ALTER TABLE MENU ADD CONSTRAINT FK_REFERENCE_2 FOREIGN KEY (IDCATEGORIE)
REFERENCES CATEGORIE (IDCATEGORIE) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO MENU VALUES (1, 1, 'Coca PM', null,'cocapm.jpg', 2000);
INSERT INTO MENU VALUES (2, 2, 'Jack daniels', null,'jdaniels.jpg', 175000);
INSERT INTO MENU VALUES (3, 5, 'Salade de fruit', 'Banane, papaye, yaourt, cerise, avocat','saladefruit.jpg', 7000);
INSERT INTO MENU VALUES (4, 3, 'Gratin de fruit de mer', 'Crevette, calmars, thon, fromage','varanga.jpg', 13000);
INSERT INTO MENU VALUES (5, 4, 'Varanga', 'Z??bun poivre, thym','varanga.jpg', 13000);



CREATE TABLE RESERVATION(
    IDRESERVATION INT NOT NULL AUTO_INCREMENT,
    IDCATEGORIECHAMBRE INT NOT NULL,
    EMAIL VARCHAR(50),
    CHAMBRE VARCHAR(3),
    CONTACT VARCHAR(50) NOT NULL,
    ENTREE DATE NOT NULL,
    SORTIE DATE NOT NULL,
    ADULTE INT NOT NULL, 
    ENFANT INT NOT NULL,
    REMARQUE TEXT,
    ETAT INT NOT NULL,
    PRIMARY KEY(IDRESERVATION)
);
ALTER TABLE RESERVATION ADD CONSTRAINT FK_REFERENCE_3 FOREIGN KEY (IDCATEGORIECHAMBRE)
REFERENCES CATEGORIECHAMBRE (IDCATEGORIECHAMBRE) ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO RESERVATION VALUES (1, 1, 'rado@gmail.com',null, '0321415203', '2021-10-31', '2021-11-5', 2, 0, '', 0);
INSERT INTO RESERVATION VALUES (2, 1, 'rakoto@gmail.com',null, '0321247035', '2021-11-15', '2021-11-15', 1, 1, '', 0);
INSERT INTO RESERVATION VALUES (3, 1, 'bozy@gmail.com',null, '0341010247', '2021-12-07', '2021-12-12', 2, 0, '', 0);
INSERT INTO RESERVATION VALUES (4, 1, 'rajao@gmail.com',null, '0331548569', '2022-02-01', '2022-02-12', 2, 0, '', 0);
INSERT INTO RESERVATION VALUES (5, 1, 'ralay@gmail.com',null, '0331057824', '2021-11-06', '2021-11-09', 2, 0, '', 0);


INSERT INTO CATEGORIECHAMBRE VALUES(1, 'CHAMBRE DOUBLE ??CONOMIQUE', 'UN GRAND LIT - TV - TABLE DE NUIT - EAU CHAUDE - WIFI', 'economique.jpg', 65000);
INSERT INTO CATEGORIECHAMBRE VALUES(2, 'CHAMBRE DOUBLE STANDARD', 'UN GRAND LIT - TV - TABLE DE NUIT - EAU CHAUDE - WIFI -  TABLE ET CHAISE', 'vip.jpg', 75000);
INSERT INTO CATEGORIECHAMBRE VALUES(3, 'CHAMBRE DOUBLE SUP??RIEURE', 'UN GRAND LIT KING SIZE - TV - TABLE DE NUIT - EAU CHAUDE - WIFI - BALCON - MINI LIVING', 'simple.jpg', 85000);
INSERT INTO CATEGORIECHAMBRE VALUES(4, 'SUITE FAMILIALE', 'DEUX CHAMBRES SEPAR??ES - UN GRAND LIT KING SIZE - UN GRAND LIT - TV - TABLE DE NUIT - EAU CHAUDE - WIFI  - CUISINE ??QUIP??E - LIVING - SERVICE TRANSFERT GRATUIT', 'familiale.jpg', 150000);


INSERT INTO CATEGORIE VALUES(1, 'Petit d??jeuner');
INSERT INTO CATEGORIE VALUES(2, 'Boisson chaudes');
INSERT INTO CATEGORIE VALUES(3, 'Salades');
INSERT INTO CATEGORIE VALUES(4, 'Entr??es');
INSERT INTO CATEGORIE VALUES(5, 'Volailles');
INSERT INTO CATEGORIE VALUES(6, 'Viande de la terre');
INSERT INTO CATEGORIE VALUES(7, 'Soupe & Snacks');
INSERT INTO CATEGORIE VALUES(8, 'P??tes');
INSERT INTO CATEGORIE VALUES(9, 'Pizzas');
INSERT INTO CATEGORIE VALUES(10, 'Fruits de mer');
INSERT INTO CATEGORIE VALUES(11, 'Plats unique');
INSERT INTO CATEGORIE VALUES(12, 'Desserts');
INSERT INTO CATEGORIE VALUES(13, 'Accompagnements');


INSERT INTO MENU VALUES (1, 1, 'Petit d??jeuner Sp??cial Human', 'Vary amin\'anana + (saucisse ou kitoza) + Pain + beurre + confiture + boisson chaude + viennoiserie + jus naturel + oeuf','varyanana.jpg', 25000);
INSERT INTO MENU VALUES (2, 1, 'Petit d??jeuner Am??ricain', 'Pain + beurre + confiture + boisson chaude + viennoiserie + jus naturel + oeuf + assiette de fruits','americain.jpg', 20000);
INSERT INTO MENU VALUES (3, 1, 'Petit d??jeuner Continental', 'Pain + beurre + confiture + boisson chaude + viennoiserie + jus naturel','continental.jpg', 15000);
INSERT INTO MENU VALUES (4, 1, 'Petit d??jeuner Simple', 'Boisson chaude + viennoiserie ou Boisson chaude + pain + beurre + confiture','simple.jpg', 10000);

INSERT INTO MENU VALUES (5, 2, 'Expresso', 'Capsule nespresso','expresso.jpg', 5000);
INSERT INTO MENU VALUES (6, 2, 'Caf?? allong??', 'Capsule nespresso','allong??.jpg', 5000);
INSERT INTO MENU VALUES (7, 2, 'Caf?? allong??', 'Produit TAF','taf.jpg', 3000);
INSERT INTO MENU VALUES (8, 2, 'Cappuccino', null,'cappuccino.jpg', 3000);
INSERT INTO MENU VALUES (9, 2, 'English tea', null,'english.jpg', 3000);
INSERT INTO MENU VALUES (10, 2, 'Chococanelle', null,'chococanelle.jpg', 3000);
INSERT INTO MENU VALUES (11, 2, 'Chocolat chaud', null,'chaud.jpeg', 3000);


INSERT INTO MENU VALUES (12, 3, 'Panier du march??', 'Assortiment de l??gume','panier.jpg', 10000);
INSERT INTO MENU VALUES (13, 3, 'Salade Cesar', 'Roquette, poulet grill??, laitue, tomate, oignon, olive','cesar.jpg', 15000);
INSERT INTO MENU VALUES (14, 3, 'Pescatore Salade', 'Pomme de terre, calmar, crevette, poulpe, mayonnaise','pescatore.jpg', 15000);
INSERT INTO MENU VALUES (15, 3, 'Salade Mexicaine', 'Tomate, oignon, ma??s doux, concombre, fromage, mayonnaise','mexicaine.jpg', 13000);
INSERT INTO MENU VALUES (16, 3, 'Crispy Cheese Salade', 'Pistou, tomate, oignon, fromage, laitue','crispy.jpg', 15000);
INSERT INTO MENU VALUES (17, 3, 'Salade de charcuterie', 'Trois jambon, fromage de t??te, poivron, oignon, tomate, concombre','charcuterie.jpg', 13000);


INSERT INTO MENU VALUES (18, 4, 'Vol au vent', null,'vol.jpeg', 15000);
INSERT INTO MENU VALUES (19, 4, 'Cocktail de crevette', null,'crevette.jpg', 13000);
INSERT INTO MENU VALUES (20, 4, 'Terrine de volaille', null,'volaille.jpg', 15000);
INSERT INTO MENU VALUES (21, 4, 'Terrine de foie gras', null,'gras.jpg', 20000);
INSERT INTO MENU VALUES (22, 4, 'Chicken scotch eggs', null,'chicken.jpg', 15000);


INSERT INTO MENU VALUES (23, 5, 'Gigot de poulet (Sauce bisque)', 'Cuisse de poulet, crevette, cr??me, oignon','gigot.jpg', 20000);
INSERT INTO MENU VALUES (24, 5, 'Magret de canard', null,'magret.jpg', 30000);
INSERT INTO MENU VALUES (25, 5, 'Effiloch?? de canard', 'Sauce au vin ou poivre vert','canard.jpg', 27000);
INSERT INTO MENU VALUES (26, 5, 'Demi coquelet', 'Gingembre ou miel','coquelet.jpg', 27000);
INSERT INTO MENU VALUES (27, 5, 'Poulet au champignons de Paris', null,'poulet.jpg', 20000);
INSERT INTO MENU VALUES (28, 5, 'Poulet ?? l\'ancienne', null, 'ancienne.jpg', 20000);

INSERT INTO MENU VALUES (29, 6, 'Travers de porc aux 5 ??pices', null, 'travers.jpeg', 20000);
INSERT INTO MENU VALUES (30, 6, 'Assiette gourmande', 'Cuisse de poulet, brochette, z??bu, saucisse, c??te', 'gourmande.jpg', 25000);
INSERT INTO MENU VALUES (31, 6, 'Z??bu', 'Steak - Tournedos - M??daillon - Wok de z??bu - Entrec??te grill??e sauce diable', 'medaillon.jpg', 20000);
INSERT INTO MENU VALUES (32, 6, 'C??te de porc', 'Sauce Basquaise - Eminc??e de porc sauce moutarde ?? l\'ancienne - Sauce aux champignons de Paris', 'cote.jpg', 20000);

INSERT INTO MENU VALUES (33, 7, 'Soupe simple', null, 'soupe.jpg', 10000);
INSERT INTO MENU VALUES (34, 7, 'Soupe garnie', null, 'garnie.jpg', 12000);
INSERT INTO MENU VALUES (35, 7, 'Soupe garnie sp??ciale', null, 'speciale.jpg', 15000);
INSERT INTO MENU VALUES (36, 7, 'Soupe sp??ciale Human', null, 'humanspeciale.jpg', 15000);
INSERT INTO MENU VALUES (37, 7, 'Tacos', 'Poulet, viande hach??e, merguez, chipolatas', 'tacos.jpg', 15000);
INSERT INTO MENU VALUES (38, 7, 'Hamburger', 'Double cheese - Beef - Chicken - Fish - Chicken tower', 'burger.jpg', 15000);
INSERT INTO MENU VALUES (39, 7, 'Tortillas', 'Cheese - Beef - Chicken - Fish', 'tortillas.jpg', 15000);
INSERT INTO MENU VALUES (40, 7, 'Box master / Wraps', 'Cheese - Beef - Chicken - Fish', 'wrap.jpg', 15000);
INSERT INTO MENU VALUES (41, 7, 'Nuggets', 'Chicken - Fish', 'nuggets.jpg', 15000);
INSERT INTO MENU VALUES (42, 7, 'Sandwich', 'Croque Monsieur - Croque Madame - Croque choco - Kebab - Chicken - Beef - Thon', 'sandwich.jpg', 15000);


INSERT INTO MENU VALUES (43, 9, 'Pizza Margherita', 'Sauce tomate, fromage, oignon', 'margherita.jpeg', 17000);
INSERT INTO MENU VALUES (44, 9, 'Pizza Provinciale', 'Sauce tomate, poivron, capre, tomate fra??che, chorizo', 'provinciale.jpg', 18000);
INSERT INTO MENU VALUES (45, 9, 'Pizza Mexicaine', 'Sauce tomate, poivron, merguez, viande hach??e, ma??s doux, jambon', 'pizzamexicaine.jpg', 20000);
INSERT INTO MENU VALUES (46, 9, 'Pizza Royale', 'Cr??me ou tomate, jambon, poulet, oignon, crevette', 'royale.jpg', 21000);
INSERT INTO MENU VALUES (47, 9, 'Pizza Reine', 'Cr??me ou tomate, jambon, champignons, oignon, poulet, oeuf', 'reine.jpg', 21000);
INSERT INTO MENU VALUES (48, 9, 'Pizza Hawa??enne', 'Sauce tomate, poulet, ananas, origan, cr??me', 'hawaienne.jpg', 21000);
INSERT INTO MENU VALUES (49, 9, 'Pizza Parisienne', 'Sauce, 3 jambons, champignons de Paris', 'parisienne.jpg', 21000);
INSERT INTO MENU VALUES (50, 9, 'Pizza 4 cheese', 'Sauce cr??me, reblechon, cheddar, roquefort, mozzarella', 'fromage.jpg', 22000);
INSERT INTO MENU VALUES (51, 9, 'Pizza poulet', 'Sauce tomate, poulet grill??, poulet en double panade', 'pizzapoulet.jpeg', 21000);
INSERT INTO MENU VALUES (52, 9, 'Pizza fruit de mer', 'Sauce, crevette, calmar, thon', 'pizzafruit.jpg', 23000);
INSERT INTO MENU VALUES (53, 9, 'Pizza sp??ciale Human', 'Sauce tomate, jambon, crevette, calmar, thon, poulet, cr??me, 4 fromage, poivron, oeuf', 'pizzaspeciale.jpg', 25000);

INSERT INTO MENU VALUES (54, 8, 'Spaghetti bolognaise', null, 'bolognaise.jpg', 20000);
INSERT INTO MENU VALUES (55, 8, 'Tagliatelle carbonara', null, 'carbonoara.jpg', 20000);
INSERT INTO MENU VALUES (56, 8, 'P??tes s??ches', null, 'pate.jpg', 13000);
INSERT INTO MENU VALUES (57, 8, 'Mine-sao sp??ciale Fruits de mer', null, 'minesaofruit.jpg', 17000);
INSERT INTO MENU VALUES (58, 8, 'Mine-sao poulet', null, 'minesaopoulet.jpg', 15000);
INSERT INTO MENU VALUES (60, 8, 'Penne au Fruits de Mer', null, 'penne.jpg', 20000);


INSERT INTO MENU VALUES (61, 10, 'Assiette de Fruit de Mer', null, 'assiette.jpg', 20000);
INSERT INTO MENU VALUES (62, 10, 'Crabe aux sauces piment??es', null, 'crabe.jpeg', 18000);
INSERT INTO MENU VALUES (63, 10, 'Camaron sauce Bisque', null, 'camaron.jpg', 20000);
INSERT INTO MENU VALUES (64, 10, 'Crevette sauce piquantes', null, 'crevettepiquante.jpg', 20000);


INSERT INTO MENU VALUES (65, 11, 'Pa??lla Marisco', 'Poivron, carotte, petit pois, crevette, poulpe, riz pa??lla', 'marisco.jpg', 23000);
INSERT INTO MENU VALUES (66, 11, 'Nasi goreng', 'Riz basmati, l??gume, poulet, crevette, oeuf', 'nasi.jpg', 20000);

INSERT INTO MENU VALUES (67, 12, 'Cr??me caramel au chocolat', null, 'creme.jpg', 10000);
INSERT INTO MENU VALUES (68, 12, 'Mo??lleux au chocolat', null, 'moelleux.jpg', 10000);
INSERT INTO MENU VALUES (69, 12, 'For??t noir', null, 'foret.jpg', 10000);
INSERT INTO MENU VALUES (70, 12, 'Nougat glac?? au fruit de saison', null, 'nougat.jpg', 10000);
INSERT INTO MENU VALUES (71, 12, 'Ananas r??ti au gingembre et coco parfum??', null, 'ananas.jpeg', 10000);
INSERT INTO MENU VALUES (72, 12, 'Coupe exotique des ??les', null, 'coupe.jpg', 10000);
INSERT INTO MENU VALUES (73, 12, 'Cr??pe', null, 'crepe.jpg', 10000);

INSERT INTO MENU VALUES (74, 13, 'Pomme saut??e', null, 'pomme.jpg', 0);
INSERT INTO MENU VALUES (75, 13, 'Riz blanc', null, 'riz.jpg', 0);
INSERT INTO MENU VALUES (76, 13, 'Jardini??re de l??gume', null, 'legume.jpeg', 0);
INSERT INTO MENU VALUES (77, 13, 'Pomme frite', null, 'frite.jpg', 0);
INSERT INTO MENU VALUES (78, 13, 'Banane plantain', null, 'banane.jpg', 0);
INSERT INTO MENU VALUES (79, 13, 'Spaghetti au beurre', null, 'beurre.jpg', 0);
INSERT INTO MENU VALUES (80, 13, 'Riz  basmati', null, 'basmati.jpg', 1000);
INSERT INTO MENU VALUES (81, 13, 'Suppl??ment', null, 'pomme.jpg', 2000);



-- SELECT CHAMBRE.NUMERO, RESERVATION.* FROM RESERVATION JOIN CATEGORIECHAMBRE ON CATEGORIECHAMBRE.IDCATEGORIECHAMBRE = RESERVATION.IDCATEGORIECHAMBRE JOIN CHAMBRE ON CHAMBRE.IDCATEGORIECHAMBRE = CATEGORIECHAMBRE.IDCATEGORIECHAMBRE WHERE ETAT = 0 AND RESERVATION.IDCATEGORIECHAMBRE=1 AND RESERVATION.ENTREE BETWEEN '2021-11-1' AND '2021-11-6' OR RESERVATION.SORTIE BETWEEN '2021-11-1' AND '2021-11-6'
SELECT RESERVATION.* FROM RESERVATION JOIN CATEGORIECHAMBRE ON CATEGORIECHAMBRE.IDCATEGORIECHAMBRE = RESERVATION.IDCATEGORIECHAMBRE WHERE ETAT = 1 AND RESERVATION.IDCATEGORIECHAMBRE=1 AND RESERVATION.CHAMBRE = 2 AND (('2021-11-13' BETWEEN RESERVATION.ENTREE AND RESERVATION.SORTIE) OR ( '2021-11-15' BETWEEN RESERVATION.ENTREE AND RESERVATION.SORTIE) OR (RESERVATION.ENTREE BETWEEN '2021-11-13' AND '2021-11-15') OR (RESERVATION.SORTIE BETWEEN '2021-11-13' AND '2021-11-15'));

('2021-11-13' between R??servation.entree and r??servation.sortie) or ( '...-15' between r??servation.entree and r??servation.sortie)
Or (r??servation.entree between '...-13' and '...-15') or ( r??servation.sortie between '...-13' and '...-15)


update categoriechambre set descriptions='Nos chambres doubles ??conomique sont de taille g??n??reuse et disposent d\'un grand lit king size confortable, d\'une table de nuit, de grandes fen??tres. Il offre tout le confort d\'un h??tel, ?? un prix abordable. Il comprend un lit confortable, une t??l??vision et une connexion Wi-Fi. Les salles de bain comprennent une douche avec eau chaude' where idcategoriechambre=1;

update categoriechambre set descriptions='Impressionnez vos amis ou votre famille en s??journant dans la chambre double standard, une chambre double ??l??gante et moderne o?? vous b??n??ficiez d\'une salle de bain priv??e spacieuse avec eau chaude et d\'un acc??s ?? tous les conforts de la maison. Avec ses grandes fen??tres, son table de nuit, table et chaise en bois et sa literie luxueuse, c\'est l\'endroit id??al pour une bonne nuit de sommeil.' where idcategoriechambre=2;

update categoriechambre set descriptions='Nos chambres doubles sup??rieures sont spacieuses, luxueuses et ??l??gantes. Elles disposent d\'une salle de bains privative avec eau chaude. Elle a un lit king size avec une table de nuit et un balcon avec vue sur l\'a??roport. Il dispose d\'??quipements tels que des articles de toilette gratuits, une connexion Wi-Fi et un mini salon.' where idcategoriechambre=3;

update categoriechambre set descriptions='La suite familiale est une suite pour famille ou amis de grand confort ?? taille humaine. Cet h??bergement luxueux offre deux chambres ?? coucher et deux lits, l\'un king size et l\'autre queen size, avec salles de bain privatives avec eau chaude, un grand coin salon. Il est ??galement dot?? d\'un syst??me de divertissement ?? domicile avec t??l??vision, Wi-Fi, d\'une cuisine et d\'un coin repas priv??. Profitez d\'un s??jour dans une suite qui incarne le confort, un balcon priv?? avec une vue fabuleuse sur l\'a??roport.' where idcategoriechambre=4;

