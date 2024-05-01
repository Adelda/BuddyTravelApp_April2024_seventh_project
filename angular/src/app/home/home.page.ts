import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/services/api.service';
import { tap } from 'rxjs/operators'; // Import de l'opérateur tap

@Component({
  selector: 'app-home',
  templateUrl: './home.page.html',
  styleUrls: ['./home.page.scss'],
})
export class HomePage implements OnInit {
  restAreas: any[] = []; // Déclaration et initialisation de la propriété restAreas

  constructor(private apiService: ApiService) { }

  ngOnInit(): void {
    // Appel à la méthode getAllRestAreas pour récupérer la liste des zones de repos
    this.apiService.getAllRestAreas().pipe(
      tap((data) => {
        // Stockage des données récupérées dans la variable restAreas
        this.restAreas = data['hydra:member'];
      })
    ).subscribe();
  }
}
