import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { RestareaDetailPage } from './restarea-detail.page';

const routes: Routes = [
  {
    path: '',
    component: RestareaDetailPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class RestareaDetailPageRoutingModule {}
