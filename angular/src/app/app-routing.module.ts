import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    loadChildren: () => import('./home/home.module').then(m => m.HomePageModule)
  },
  {
    path: 'itinerary',
    loadChildren: () => import('./itinerary/itinerary.module').then( m => m.ItineraryPageModule)
  },
  {
    path: 'assistance',
    loadChildren: () => import('./assistance/assistance.module').then( m => m.AssistancePageModule)
  },
  {
    path: 'restarea-detail/:id', // Ajout de ':id' pour passer l'identifiant de l'aire de repos
    loadChildren: () => import('./restarea-detail/restarea-detail.module').then( m => m.RestareaDetailPageModule)
  },
  {
    path: '**', // Route wildcard pour gérer les chemins inconnus
    redirectTo: '', // Redirige vers la page d'accueil par défaut en cas de chemin inconnu
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
