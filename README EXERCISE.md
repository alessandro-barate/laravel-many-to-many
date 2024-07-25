Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Technology: questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

-   creare la migration per la tabella technologies
-   creare il model Technology
-   creare la migration per la tabella pivot project_technology
-   aggiungere ai model Technology e Project i metodi per definire la relazione many to many
-   visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti

Bonus 1:
creare il seeder per il model Technology.

Bonus 2:
aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.
Buon lavoro e buon divertimento!

:saluto_vulcaniano:

# Roadmap per la gestione delle categorie e dei tags

-   [] Creare tabella technologies (migration + model)
-   [] Seeder per la tabella types -> array di dati
-   [] Creare relazione tra tabella posts e tabella technologies (migration)
-   [] Valutare tipo di relazione tra le tabelle (restricted, null, noaction)
-   [] Istruire Laravel sulla cardinalità / relazione tra posts e technologies
-   [] Modificare vista (create e update) e controller per creazione/modifica posts
-   [] Modificare vista (show) pe rappresentare le relazioni
-   [] Creare CRUD types
