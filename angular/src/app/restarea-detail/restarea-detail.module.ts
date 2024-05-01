import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';
import { RestareaDetailPageRoutingModule } from './restarea-detail-routing.module';
import { RestareaDetailPage } from './restarea-detail.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RestareaDetailPageRoutingModule
  ],
  declarations: [RestareaDetailPage]
})
export class RestareaDetailPageModule {}
