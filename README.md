## CRUD
CREATE READ UPDATE DELETE
-index (lista di tutte le risorse)
-create + store (crea una nuova risorsa e la salva nel db)
-edit + update (aggiorna una risorsa nel db)
-show (mostra una singola risorsa)
-delete (cancella una risorsa)
//////////////////////////////////////////////////////////////////
## Relazioni

One-To-One (Relaziona un record di una tabella a un solo record di un'altra tabella e viceversa)
# es: Persona 1 -> CF 1

One-To-Many (Relaziona una a molti, relaziona un record di una tabella a molti record della seconda tabella)
# es: Persona 1 -> Articolo 1
# es: Persona 2 -> Articolo 2
Ma ogni record della seconda tabella può appartenere solo a un record della prima tabella
# es: Articolo 1 -> Persona 1

Many-To-Many (Relazione molti a molti, relaziona più record di una tabella a piu record di un'altra tabella)
# es: Studente 1 -> Corso 1
# es: Studente 1 -> Corso 2
# es: Corso 1 -> Studente 1
# es: Corso 1 -> Studente 2

# Apri il terminale 1 lanscia il comando (add_user_id_column_to_consoles_table)
