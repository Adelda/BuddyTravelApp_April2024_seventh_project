import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';
import { RouterModule } from '@angular/router';
import { TabsPage } from './tabs.page';

@NgModule({
  declarations: [
    TabsPage
  ],
  imports: [
    CommonModule,
    IonicModule,
    RouterModule.forChild([
      {
        path: '',
        component: TabsPage,
        children: [
          {
            path: 'home',
            loadChildren: () => import('../home/home.module').then(m => m.HomePageModule)
          },
          {
            path: 'itinerary',
            loadChildren: () => import('../itinerary/itinerary.module').then(m => m.ItineraryPageModule)
          },
          {
            path: 'restarea-detail',
            loadChildren: () => import('../restarea-detail/restarea-detail.module').then(m => m.RestareaDetailPageModule)
          },
          {
            path: 'assistance',
            loadChildren: () => import('../assistance/assistance.module').then(m => m.AssistancePageModule)
          },
          {
            path: '',
            redirectTo: '/tabs/home',
            pathMatch: 'full'
          }
        ]
      }
    ])
  ],
  schemas: [CUSTOM_ELEMENTS_SCHEMA] // Ajoutez cette ligne
})
export class TabsPageModule {}
