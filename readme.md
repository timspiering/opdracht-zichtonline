##Inleiding

Het idee was om dit project in een iframe te laden en omdat dit een introductie opdracht is heb ik ervoor gekozen om gemakkelijk de post (het nieuwsbericht) te bepalen via de url die dan gelijk zou zijn aan het daadwerkelijke nieuwsbericht waarin dan de iframe wordt geladen.

## Installatie

- Wanneer het project is gecloned als eerste de command "composer install" runnen.
- Maak lokaal een nieuwe database aan.
- Kopieer het bestaande bestand .env.example en benoem deze .env , vul daarna de juiste database gegevens hier in.
- Run de command "php artisan migrate" dit zorgt ervoor dat de tables worden aangemaakt.

Om het project te testen, de route is: opdracht-zichtonline/public/post/{id} (Bijv: opdracht-zichtonline/public/post/5)

##Bestanden

- routes/web.php
- database/migrations/2017_09_11_092240_create_comments_table.php
- app/Http/Controllers/PostController.php
- app/Comment.php
- resources/views/comments.blade.php

##Gebruik

Stel de website is nu.nl en het nieuwsbericht is bijv: https://www.nu.nl/internet/4917086 dan zou de iframe zijn: <iframe src="https://www.nu.nl/post/$id"></iframe>
