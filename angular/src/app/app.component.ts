import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';
import { tap } from 'rxjs/operators'; // Importation de l'opérateur tap

@Component({
  selector: 'app-root', // Sélecteur pour intégrer ce composant dans le HTML
  templateUrl: 'app.component.html', // Chemin vers le fichier HTML du template
  styleUrls: ['app.component.scss'] // Chemin des styles pour ce composant
})
export class AppComponent implements OnInit { // Nom de la classe corrigé pour correspondre au composant racine de l'application
  restAreas: any[] = [];

  constructor(private apiService: ApiService) { }

  ngOnInit(): void {
    // Appel à la méthode getAllRestAreas pour récupérer la liste des zones de repos
    this.apiService.getAllRestAreas().pipe(
      tap(data => {
        // Stockage des données récupérées dans la variable restAreas
        this.restAreas = data['hydra:member'];
      })
    ).subscribe();
  }
}
