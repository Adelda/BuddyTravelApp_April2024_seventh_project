import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';
import { ItineraryPage } from './itinerary.page';
import { TabsPageModule } from '../tabs/tabs.module'; // Assurez-vous d'importer TabsPageModule ici
import { ItineraryPageRoutingModule } from './itinerary-routing.module';

@NgModule({
  imports: [
    CommonModule,
    IonicModule,
    ItineraryPageRoutingModule,
    TabsPageModule // Assurez-vous d'importer TabsPageModule ici
  ],
  declarations: [ItineraryPage]
})
export class ItineraryPageModule {}
