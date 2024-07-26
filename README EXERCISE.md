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

# Roadmap per la gestione della relazione posts e tags (many to many)

-   [x] Creare tabella tags (migration + model + controller + seeder)
-   [] Creare tabella pivot (migration + seeder)
-   [] Istruire Laravel sulla cardinalità / relazione tra posts e tags
-   [] Modificare form di creazione / modifica post
-   [] Rappresentare tags
